<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class HomeController extends Controller
{



    public function index()
    {
        $celebrities = User::whereHas("roles", function ($query){
            $query->where("name", 'celebrity');
        })->limit(4)->get();
        $digital_marketers = User::whereHas("roles", function ($query){
            $query->where("name", 'digital marketer');
        })->limit(4)->get();

        return view('pages.home',['celebrities'=>$celebrities, 'digital_marketers'=> $digital_marketers]);

    }


}
