<?php

namespace App\Http\Controllers;

use App\Models\profilemiddleware;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{


    public function index($username)
    {

        $profile = User::select('id','name','username','image')->where('username', '=', $username)->first();

        return view('pages.profile', $profile);
    }

}
