<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Ticket;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    //

    public function updateMessages(Request $request, $ticket)
    {
        $date = $request->date ?? Ticket::where('id',$ticket)->first()->created_at->todateString();
        $date = Carbon::createFromFormat('Y-m-d H:i:s',$date);

        return [
            'Messages' => Message::where([
                ['ticket_id', $ticket],
                ['created_at', '>', $date],
                ['user_id', '!=', Auth::user()->id],
            ])->with('user')->get(),
            'date' => date('Y-m-d H:i:s', time())
        ];
    }


    public function store(Request $request, $ticket)
    {
        $validator = Validator::make($request->all(), [
            "message" => "required|min:4"
        ]);
        if(!$validator->fails())
        {
            $currentTicket = Ticket::where('id', $ticket)->first();

            $sender = ($currentTicket->reciever_id !== $request->user()->id && $currentTicket->sender_id ) ? $currentTicket->reciever_id : $request->user()->id;

            $message = new Message();

            $message->user_id = $sender;
            $message->message = $request->message;
            $message->ticket_id = $ticket;

            $message->save();

            return $message;
        }

        return response()->json($validator->errors(), 400);

    }
}
