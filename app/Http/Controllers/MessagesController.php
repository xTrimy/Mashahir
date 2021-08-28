<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessagesController extends Controller
{

    public function index()
    {
        return view('pages.message');
    }


    public function ticket($ticket)
    {
        $ticketData = Ticket::find($ticket)->with('messages.user')->first();

        return view("pages.messages", [
            'ticket' => $ticketData,
            'nextUser' => User::find((Auth::user()->id == $ticketData->sender_id ) ? $ticketData->sender_id : $ticketData->reciever_id)->first(),
            'messages' => $ticketData->messages,
            'date' => date('Y-m-d H:i:s', time())
        ]);
    }

}
