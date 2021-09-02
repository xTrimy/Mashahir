<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServicePurchase;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Notifications\PurchaseAgreed;
use App\Notifications\PurchaseDeclined;

class RequestController extends Controller
{
    public function index(){
        $user = Auth::user();
        $services=null;
        if($user->hasPermissionTo('view all tasks'))
            $services = ServicePurchase::with('ticket.sender')->with('service')->get();
        else
            $services = ServicePurchase::whereHas('service',function($query) use ($user){
                $query->where('user_id',$user->id);
            })->with('ticket.sender')->get();

        return view('dashboard.requests',['requests'=>$services]);
    }

    public function celebrityIndex(Request $request, $username)
    {
        $services = ServicePurchase::whereIn('service_id', Service::where('user_id', User::where('username', $username)->first()->id)->get(['id']) )->with(['ticket.sender', 'service'])->get();
        return view('dashboard.requests',['requests'=>$services]);
    }

    public function accept($id){
        $request = ServicePurchase::where('id', $id)->with('customer')->first();
        if(!$request){
            return abort(404);
        }
        $request->agreed_at = date('Y-m-d H:i:s');
        $request->save();
        $request->customer->notify(new PurchaseDeclined($request->ticket));
        return redirect()->back()->with('success','تم الموافقة على الطلب');
    }

    public function decline($id)
    {
        $request = ServicePurchase::where('id',$id)->with('customer')->with('ticket')->first();
        if (!$request) {
            return abort(404);
        }
        $request->declined_at = date('Y-m-d H:i:s');
        $request->save();
        $request->customer->notify(new PurchaseAgreed($request->ticket));
        return redirect()->back()->with('success', 'تم رفض الطلب');
    }
}
