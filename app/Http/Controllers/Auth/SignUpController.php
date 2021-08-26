<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserType;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignUpController extends Controller
{
    public function index(){
        return view('pages.signup');
    }

    public function signup($type){
        $available_types = ['celebrity','digital-marketer','advertising-agency','customer'];
        if(in_array($type,$available_types)){
            $type = UserType::where('slug',$type)->first();
            return view('pages.signup_form', ['type' => $type]);
        }
        return abort(404);
    }
    public function signup_action(Request $request)
    {
        $request->validate(
            [
                // 'type' => "required|exists:user_types,slug",
                'name' => "string|max:255|min:12|required",
                'username' => "string|max:16|min:3|required|regex:/^[a-zA-Z0-9_-]{3,15}$/|unique:users,username",
                'email' => "email|required|unique:users,email",
                'phone' => "max:32|required",
                'password'=> "confirmed|min:8|required",
            ]
        );
        $user_type = UserType::where('slug', $request->type)->first();
        $user = new User;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = bcrypt($request->password);
        $user->user_type_id = $user_type->id;
        $user->save();
        $user->assignRole(str_replace('-',' ',$request->type));
        Auth::login($user);
        event(new Registered($user));
        return redirect()->route('verification.notice');
        
    }

    
}
