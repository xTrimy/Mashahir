<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ServiceController extends Controller
{
    public function index($id){
        $service = Service::find($id)->with(['user','category', 'upgrades'])->first();
        if(!$service){
            return abort(404);
        }
        $time_ago = new Carbon($service->updated_at);
        return view('pages.service',['service'=>$service,"time_ago"=>$time_ago]);
    }

    public function dashboard_review(){
        $services = Service::where('user_id',Auth::user()->id)->with('category')->get();
        return view('dashboard.services.review',['services'=>$services]);
    }
}
