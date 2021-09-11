<?php

namespace App\Http\Middleware;

use App\Models\AgencyCelebrity;
use App\Models\Ticket;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class hasTicket
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $ticket = Ticket::find($request->ticket);

        if(!$ticket){
            abort(404);
        }

        if(DB::select('SELECT id FROM tickets WHERE id = ? AND (sender_id = ? OR reciever_id = ?)', [$request->ticket, Auth::user()->id, Auth::user()->id]) || AgencyCelebrity::where(["agency_id"=> $request->user()->id, "celebrity_id"=>$ticket->reciever_id])->first() || $request->user()->hasPermissionTo('view all messages'))
        {
            return $next($request);
        }

        if($roles[0] == "api"){
            return response()->json(["error"=>"غير مسموح لك بدخول هذه المحادثة"], 403);
        }

        abort(403);
    }
}
