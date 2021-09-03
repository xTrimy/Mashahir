<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NotificationController extends Controller
{
    public function updateNotification(Request $request)
    {
        $date = $request->date ?? DB::table('notifications')->where('notifiable_id',Auth::user()->id)->orderBy('created_at','ASC')->first()->created_at;
        $notifications = DB::table('notifications')->where([['notifiable_id', Auth::user()->id],['created_at','>',$date],['read_at',null]])
        ->orderBy('created_at', 'DESC')
        ->get();
        return ['notifications'=> $notifications->each(function ($notifications) {
                $notifications->created_diff = Carbon::parse($notifications->created_at)->diffForHumans();
                return $notifications;
            })
        ,'date'=>$date];
    }
}
