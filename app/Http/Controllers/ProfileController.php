<?php

namespace App\Http\Controllers;

use App\Models\profilemiddleware;
use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{


    public function index($username)
    {
        $user = User::find(Auth::user()->id);
        $user_info = UserInfo::where('user_id',$user->id)->first();

        $profile = User::select('id','name','username','image')->where('username', '=', $username)->first();

        return view('pages.profile', $profile , ['user_info' => $user_info]);
    }

    public function editProfile() {
        $user = User::find(Auth::user()->id);
        $user_info = UserInfo::where('user_id',$user->id)->first();

        // if(!user_info) {

        // }

        return view('dashboard.edit-profile',['user_info' => $user_info]);
    }

    public function saveChanges(Request $input) {

        $input->validate(
            [
                'name' => "string|max:255|min:12|required",
                'username' => "string|max:16|min:3|required|regex:/^[a-zA-Z0-9_-]{3,15}$/|unique:users,username,".Auth::user()->id.",id",
                'location' => "string|max:255|min:3|required",
                'description' => "string|max:255|min:12|required",
                'viewers' => "string|max:255|min:2|required",
                'maroof_url' => "string|max:255|min:12|required",
            ]
        );

        $user = User::find(Auth::user()->id);
        $user_info = UserInfo::where('user_id',$user->id)->first();

        if (!$user_info) {
            $user_info = new UserInfo();
            $user_info->user_id = $user->id;
        }

        $user->name = $input["name"];
        $user->username = $input["username"];
        $user->save();

        $user_info->location = $input["location"];
        $user_info->description = $input["description"];
        $user_info->viewers = $input["viewers"];
        $user_info->maroof_url = $input["maroof_url"];
        $user_info->save();

        return redirect()->route('edit-profile');
    }

}
