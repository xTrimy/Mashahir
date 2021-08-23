<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
}
