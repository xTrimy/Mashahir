<?php

namespace App\Http\Controllers;

use App\Models\AgencyCelebrity;
use App\Models\User;
use App\Notifications\AgencyRequestReceived;
use App\Notifications\AgencyRequestSent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgencyController extends Controller
{
    public function search(){
        $agencies = User::role('advertising agency')->get();
        return view('pages.agencies',['agencies'=>$agencies]);
    }

    public function agency_request($id){
        $agency = User::find($id);
        Auth::user()->notify(new AgencyRequestSent($agency));
        $agency->notify(new AgencyRequestReceived(Auth::user()));
        $request = new AgencyCelebrity();
        $request->agency_id = $agency->id;
        $request->celebrity_id = Auth::user()->id;
        $request->save();
        return redirect()->back();
    }
}
