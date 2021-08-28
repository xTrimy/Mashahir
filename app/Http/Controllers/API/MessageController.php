<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    //

    public function updateMessages(Request $request, $ticket)
    {
        $date = $request->date ?? Ticket::find($ticket)->first()->created_at->todateString();

        return [
            'Messages' => Message::where([
                ['ticket_id', $ticket],
                ['created_at', '>', $date]
            ])->with('user')->get(),
            'date' => date('Y-m-d H:i:s', time())
        ];
    }


    public function store(Request $request, $ticket)
    {
        $validator = Validator::make($request->all, [
            "Message" => "required|min:4"
        ]);

        if(!$validator->fails())
        {
            $message = new Message();

            $message->user_id = Auth::user()->id;
            $message->message = $request->Message;
            $message->ticket_id = $ticket;

            $message->save();

            return $message;
        }

        return response()->json($validator->errors(), 400);

    }
}
