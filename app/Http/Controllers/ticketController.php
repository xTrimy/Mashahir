<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\ServicePurchase;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ticketController extends Controller
{


    public function index($username)
    {

        return view('pages.message', [
            'celebrity' => User::where('username', $username)->first()
        ]);
    }

    public function store(Request $request, $username)
    {
        $request->validate([
            "subject" => 'required|min:8|max:255',
            'message' => 'required|min:4'
        ]);

        $ticket = new Ticket();
        $ticket->subject = $request->subject;
        $ticket->sender_id = Auth::user()->id;
        $ticket->reciever_id = User::where('username', $username)->first()->id;
        $ticket->save();

        $message = new Message();
        $message->ticket_id = $ticket->id;
        $message->user_id = Auth::user()->id;
        $message->message = $request->message;
        $message->save();

        return redirect("/messages/". $ticket->id);
    }

    public function read($ticket)
    {

        $ticketData = Ticket::where('id', $ticket)->with('messages.user')->first();
        $service = ServicePurchase::where('ticket_id',$ticketData->id)->first();

        return view("pages.messages", [
            'ticket' => $ticketData,
            'nextUser' => User::find((Auth::user()->id == $ticketData->sender_id ) ? $ticketData->sender_id : $ticketData->reciever_id)->first(),
            'messages' => $ticketData->messages,
            'date' => date('Y-m-d H:i:s', time()),
            'service'=>$service
        ]);
    }



}
