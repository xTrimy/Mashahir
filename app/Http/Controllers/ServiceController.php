<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServicePurchase;
use App\Models\ServicePurchaseUpgrades;
use App\Models\ServiceUpgrade;
use App\Models\Ticket;
use App\Models\User;
use App\Notifications\NewServicePurchase;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function index($id){
        $service = Service::where('id',$id)->with(['user','category', 'upgrades','ratings','images'])->first();
        
        if(!$service){
            return abort(404);
        }
        $tickets = Ticket::where([['sender_id',Auth::user()->id],['reciever_id',$service->user->id],['task_started',null]])->get();
        $time_ago = new Carbon($service->updated_at);
        if(count($service->ratings) > 0)
        $rating = number_format(count($service->ratings->where('rating',1))/count($service->ratings)*5,1,'.','');
        else
        $rating = 0;
        return view('pages.service',['service'=>$service,"time_ago"=>$time_ago,'tickets'=> $tickets,'rating'=>$rating]);
    }

    public function dashboard_review(){
        $services = Service::where('user_id',Auth::user()->id)->with(['category','images'])->get();
        return view('dashboard.services.review',['services'=>$services]);
    }

    public function purchase(Request $request){
        $request->validate([
            'service_id' => "required|exists:services,id",
            'upgrade'=>"required|array",
            'upgrade.*'=>"exists:service_upgrades,id",
            'quantity'=>"required|numeric|min:1|max:10",
            'ticket' => "required|numeric|exists:tickets,id",
        ]);

        $service = Service::where('id',$request->service_id)->with('user')->first();
        $ticket = Ticket::where([['id',$request->ticket],['sender_id',Auth::user()->id],['reciever_id',$service->user->id]])->first();

        if(!$ticket){
            return redirect()->back()->with('error', 'حدث خطأ اثناء اتمام العملية، برجاء المحاولة مرة أخرى');
        }
        $total_price = 0;
        foreach($request->upgrade as $upgrade){
            $service_upgrade = ServiceUpgrade::where([['id',$upgrade],['service_id',$service->id]])->first();
            if(!$service_upgrade){
                return redirect()->back()->with('error','حدث خطأ اثناء اتمام العملية، برجاء المحاولة مرة أخرى');
            }
            $total_price += $service_upgrade->price;
        }
        $total_price += $service->price;
        $total_price *= $request->quantity;

        $service_purchase = new ServicePurchase();
        $service_purchase->customer_id = Auth::user()->id;
        $service_purchase->service_id = $service->id;
        $service_purchase->price = $total_price;
        $service_purchase->quantity = $request->quantity;
        $service_purchase->ticket_id = $request->ticket;
        $service_purchase->save();
        foreach ($request->upgrade as $upgrade) {
            $service_upgrade = ServiceUpgrade::find($upgrade);
            $service_upgrade_purchase = new ServicePurchaseUpgrades();
            $service_upgrade_purchase->service_upgrade_id = $upgrade;
            $service_upgrade_purchase->service_purchase_id = $service_purchase->id;
            $service_upgrade_purchase->price = $service_upgrade->price;
            $service_upgrade_purchase->save();
        }
        $ticket->task_started = date('Y-m-d H:i:s');
        $ticket->save();
        User::find($service->user->id)->notify(new NewServicePurchase($service_purchase,Auth::user()));
        return redirect()->route('ticket',$ticket->id)->with('success','تم شراء الخدمة، يمكنك إكمال التواصل مع '. $service->user->name);
    }
}
