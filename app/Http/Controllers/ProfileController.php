<?php

namespace App\Http\Controllers;

use App\Models\SocialLink;
use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{


    public function index($username)
    {
        $profile = User::select('id','name','username','image','cover','country')->with('country_info','user_info','social_links')->where('username', '=', $username)->first();
        return view('pages.profile', ["profile"=>$profile]);
    }

    public function services($username)
    {
        $profile = User::select('id','name','username','image','cover','country')->with('country_info','services', 'user_info','social_links')->where('username', '=', $username)->first();

        return view('pages.profile-services', ["profile"=>$profile]);
    }

    public function agent($username)
    {
        $profile = User::select('id','name','username','image','cover','country')->with('country_info','user_info', 'agency.agent','social_links')->where('username', '=', $username)->first();

        return view('pages.profile-agent',["profile"=>$profile]);
    }

    public function celebrities($username)
    {
        $profile = User::select('id','name','username','image','cover','country')->with('country_info','user_info', 'celebrities.celebrity','social_links')->where('username', '=', $username)->first();

        return view('pages.profile-celebrities', ["profile"=>$profile]);
    }

    public function ads($username)
    {
        $profile = User::select('id','name','username','image','cover','country')->with('country_info','user_info','social_links')->where('username', '=', $username)->first();

        return view('pages.profile-ads', ["profile"=>$profile]);
    }

    public function editProfile() {
        $user = User::where('id', Auth::user()->id)->with('user_info')->with('country_info','social_links')->first();

        return view('dashboard.edit-profile',['profile' => $user]);
    }

    public function editCelebrityProfile(Request $request, $username)
    {
        $user = User::where('username', $username)->with('user_info')->with('country_info','social_links')->first();

        return view('dashboard.edit-profile',['profile'=>$user]);
    }

    public function saveChanges(Request $input) {

        $input->validate(
            [
                'name' => "string|max:255|min:12|required",
                'username' => "string|max:16|min:3|required|regex:/^[a-zA-Z0-9_-]{3,15}$/|unique:users,username,".Auth::user()->id,
                'location' => "string|max:255|min:3|required",
                'description' => "string|max:255|min:12|required",
                'viewers' => "string|max:255|min:2|required",
                'maroof_url' => "string|max:255|min:12|required",
                'platform'=>'array|nullable',
                'platform.*'=>"string|nullable",
                'social_link'=>'array|nullable',
                'social_link.*'=>'string|nullable'
            ]
        );


        $user = User::find(Auth::user()->id);
        $user_info = UserInfo::where('user_id',$user->id)->first();

        if (!$user_info) {
            $user_info = new UserInfo();
            $user_info->user_id = $user->id;
        }

        if($input->file()) {
            $fileName = time().'_'.$input->file('vat')->getClientOriginalName();
            $input->file('vat')->move(public_path('uploads'), $fileName);

            $user_info->vat = $fileName;
        }

        $user->name = $input["name"];
        $user->username = $input["username"];
        $user->save();

        $user_info->location = $input["location"];
        $user_info->description = $input["description"];
        $user_info->viewers = $input["viewers"];
        $user_info->maroof_url = $input["maroof_url"];
        $user_info->save();

        if($input->has('platform')){
            $social_links = SocialLink::where('user_id',$user->id)->get();
            foreach($social_links as $link){
                $link->delete();
            }

            foreach($input->platform as $i => $platform){
                if ($input->social_link[$i] == "") {
                    continue;
                }
                $social_link = new SocialLink();
                $social_link->platform = $platform;
                $social_link->link = $input->social_link[$i];
                $social_link->user_id = $user->id;
                $social_link->save();
            }
        }
        return redirect()->route('dashboard.edit-profile');
    }

    public function change_cover(Request $request){
        $request->validate(['cover'=>'mimes:png,jpg']);
        $file = $request->file('cover');
        $time = time();
        $file_name = $time . '.' . $file->getClientOriginalExtension();
        $file_path = $file_name;
        Storage::disk('public_uploads')->put($file_path, $file->getContent());
        $user = User::find(Auth::user()->id);
        $user->cover = "uploads/" . $file_path;
        $user->save();
        return redirect()->back();
    }
    public function saveCelebirtyChanges(Request $input, $username) {

        $user = User::where('username', $username)->with('user_info')->first();

        $input->validate(
            [
                'name' => "string|max:255|min:12|required",
                'username' => "string|max:16|min:3|required|regex:/^[a-zA-Z0-9_-]{3,15}$/|unique:users,username,".$user->id,
                'location' => "string|max:255|min:3|required",
                'description' => "string|max:255|min:12|required",
                'viewers' => "string|max:255|min:2|required",
                'maroof_url' => "string|max:255|min:12|required",
                'platform' => 'array|nullable',
                'platform.*' => "string|nullable",
                'social_link' => 'array|nullable',
                'social_link.*' => 'string|nullable'
            ]
        );


        $user_info = UserInfo::where('user_id',$user->id)->first();

        if (!$user_info) {
            $user_info = new UserInfo();
            $user_info->user_id = $user->id;
        }

        if($input->file()) {
            $fileName = time().'_'.$input->file('vat')->getClientOriginalName();
            $input->file('vat')->move(public_path('uploads'), $fileName);

            $user_info->vat = $fileName;
        }

        $user->name = $input["name"];
        $user->username = $input["username"];
        $user->save();

        $user_info->location = $input["location"];
        $user_info->description = $input["description"];
        $user_info->viewers = $input["viewers"];
        $user_info->maroof_url = $input["maroof_url"];
        $user_info->save();

        if ($input->has('platform')) {
            $social_links = SocialLink::where('user_id', $user->id)->get();
            foreach ($social_links as $link) {
                $link->delete();
            }

            foreach ($input->platform as $i => $platform) {
                if($input->social_link[$i] == ""){
                    continue;
                }
                $social_link = new SocialLink();
                $social_link->platform = $platform;
                $social_link->link = $input->social_link[$i];
                $social_link->user_id = $user->id;
                $social_link->save();
            }
        }
        return redirect()->route('profile', ['username'=> $username]);
    }


}
