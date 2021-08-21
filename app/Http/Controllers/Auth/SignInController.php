<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignInController extends Controller
{
    public function index(){
        return view('pages.signin');
    }
    public function signin(Request $request){
        $username = $request->username;
        $password = $request->password;

        if (filter_var($username, FILTER_VALIDATE_EMAIL)) {
            Auth::attempt(['email' => $username, 'password' => $password]);
        } else {
            Auth::attempt(['username' => $username, 'password' => $password]);
        }
        if (Auth::check()) {
            return redirect()->route('home');
        }

        return redirect()->back()->withErrors([
            'credentials' => 'عذراً، برجاء التحقق من البيانات'
        ]);

    }
}
