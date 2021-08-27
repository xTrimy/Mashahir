<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        return redirect()->back();
    }
}
