<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServicePurchase;
use App\Models\ServicePurchaseUpgrades;
use App\Models\ServiceUpgrade;
use App\Models\User;
use App\Notifications\NewServicePurchase;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function index($id){
        $service = Service::where('id',$id)->with(['user','category', 'upgrades'])->first();
        if(!$service){
            return abort(404);
        }
        $time_ago = new Carbon($service->updated_at);
        return view('pages.service',['service'=>$service,"time_ago"=>$time_ago]);
    }

    public function dashboard_review(){
        $services = Service::where('user_id',Auth::user()->id)->with('category')->first();
        return view('dashboard.services.review',['services'=>$services]);
    }

    public function purchase(Request $request){
        $request->validate([
            'service_id' => "required|exists:services,id",
            'upgrade'=>"required|array",
            'upgrade.*'=>"exists:service_upgrades,id",
            'quantity'=>"required|numeric|min:1|max:10",
        ]);
        $service = Service::where('id',$request->service_id)->with('user')->first();
        $total_price = 0;
        foreach($request->upgrade as $upgrade){
            $service_upgrade = ServiceUpgrade::where([['id',$upgrade],['service_id',$service->id]])->first();
            if(!$service_upgrade){
                return redirect()->back()->with('error','حدث خطأ اثناء اتممام العملية، برجاء المحاولة مرة أخرى');
            }
            $total_price += $service_upgrade->price;
        }
        $total_price *= $request->quantity;

        $service_purchase = new ServicePurchase();
        $service_purchase->customer_id = Auth::user()->id;
        $service_purchase->service_id = $service->id;
        $service_purchase->price = $total_price;
        $service_purchase->quantity = $service->quantity;
        $service_purchase->save();
        foreach ($request->upgrade as $upgrade) {
            $service_upgrade = ServiceUpgrade::find($upgrade);
            $service_upgrade_purchase = new ServicePurchaseUpgrades();
            $service_upgrade_purchase->service_upgrade_id = $upgrade;
            $service_upgrade_purchase->service_purchase_id = $service_purchase->id;
            $service_upgrade_purchase->price = $service_upgrade->price;
            $service_upgrade_purchase->save();
        }
        User::find($service->user->id)->notify(new NewServicePurchase($service_purchase,Auth::user()));
        return redirect()->back()->with('success','تم شراء الخدمة، يمكنك إكمال التواصل مع '. $service->user->name);
    }
}
