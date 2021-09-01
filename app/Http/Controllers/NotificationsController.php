<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ImportantNotifications;
use App\Models\NotificationsUser;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class NotificationsController extends Controller
{

    public function index()
    {

        $notifications = NotificationsUser::user(Auth::user()->id)->orderByRaw('created_at DESC')->with('notification')->get();

        return view('dashboard.notifications', ['notifications'=>$notifications]);
    }


    public function create()
    {
        return view("dashboard.send-notification");
    }

    public function store(Request $request)
    {
        $request->validate([
            'everyCelebrity' => 'required|integer|between:0,1',
            'subject' => 'required|min:4|max:255',
            'message' => 'required|min:4',
            'color' => 'required|in:red,blue,green,yellow'
        ]);


        $notification = new ImportantNotifications();
        $notification->subject = $request->subject;
        $notification->user_id = Auth::user()->id;
        $notification->message = $request->message;
        $notification->color = $request->color;
        $notification->save();

        $celebrities = Role::findByName("celebrity")->users;
        foreach($celebrities as $celebrity)
        {
            $reciever = new NotificationsUser(["user_id"=>$celebrity->id, "notification_id"=>$notification->id]);
            $reciever->save();
        }

        return redirect("/dashboard/notifications");
    }


}
