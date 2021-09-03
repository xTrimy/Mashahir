<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\ServicePurchase;
use App\Models\ServicePurchaseRating;
use App\Models\Ticket;
use App\Models\User;
use App\Notifications\ServiceFinishRequest;
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

        $ticketData = Ticket::where('id', $ticket)->with(['messages.user','purchase.service.user'],['purchase.rating'])->first();
        $service = ServicePurchase::where('ticket_id',$ticketData->id)->first();

        return view("pages.messages", [
            'ticket' => $ticketData,
            'nextUser' => User::find((Auth::user()->id == $ticketData->sender_id ) ? $ticketData->sender_id : $ticketData->reciever_id)->first(),
            'messages' => $ticketData->messages,
            'date' => date('Y-m-d H:i:s', time()),
            'service'=>$service
        ]);
    }

    public function finish_service_request(Request $request){
        $request->validate(['_id'=>'required|exists:tickets,id']);
        $ticketData = Ticket::where('id', $request->_id)->with(['purchase.service.user'], ['purchase.customer'])->first();
        if($ticketData->purchase->service->user->id != Auth::user()->id){
            return redirect()->back()->with('error','حدث خطأ أثناء اتمام العملية، برجاء المحاولة مرة أخرى');
        }
        $ticket = Ticket::find($request->_id);
        $ticket->finished_at = date('Y-m-d H:i:s');
        $ticket->save();

        $message = new Message();
        $message->ticket_id = $request->_id;
        $message->user_id = Auth::user()->id;
        $message->message = "أرسل ". Auth::user()->name . " طلب تسليم للخدمة, إذا كان هناك اي تعديلات مطلوبة برجاء إرسال طلب تعديل مع ذكر السبب.";
        $message->auto_message = 1;
        $message->save();
        $user = User::find($ticketData->purchase->customer->id);
        $user->notify(new ServiceFinishRequest($ticketData));
        return redirect()->back()->with('success',"تم إرسال طلب أستلام للعميل");
    }

    public function finish_service(Request $request)
    {
        $request->validate(['_id' => 'required|exists:tickets,id','response'=>'required|numeric']);
        $ticketData = Ticket::where('id', $request->_id)->with(['purchase.service.user'])->first();
        if ($ticketData->purchase->service->user->id == Auth::user()->id) {
            return redirect()->back()->with('error', 'حدث خطأ أثناء اتمام العملية، برجاء المحاولة مرة أخرى');
        }
        $message_response = "";
        if($request->response == 1){
            $service_purchase = ServicePurchase::find($ticketData->purchase->id);
            $service_purchase->finished_at = date('Y-m-d H:i:s');
            $message_response = "تم تسليم الطلب، شكراً لك"; 
            $service_purchase->save();
        } else {
            $ticket = Ticket::find($ticketData->id);
            $ticket->finished_at = null;
            $message_response = "طلب ". Auth::user()->name ." تعديلات على الخدمة";
            $ticket->save();
        }
        $user = User::find($ticketData->purchase->service->user->id);
        $user->notify(new ServiceFinishRequest($ticketData,$request->response));
        $message = new Message();
        $message->ticket_id = $request->_id;
        $message->user_id = Auth::user()->id;
        $message->message = $message_response;
        $message->auto_message = 1;
        $message->save();
        return redirect()->back()->with('success', $message_response);
    }

    public function rate_service(Request $request){
        $request->validate([
            'id'=>'required|exists:tickets,id',
            'rating'=>'required|numeric'
        ]);
        $ticket = Ticket::where('id',$request->id)->with('purchase.service')->first();
        $service_purchase_rating = ServicePurchaseRating::where('service_purchase_id',$ticket->purchase->id)->first();
        if($service_purchase_rating){
            return redirect()->back();
        }
        $service_purchase_rating = new ServicePurchaseRating();
        $service_purchase_rating->rating = $request->rating;
        $service_purchase_rating->service_id = $ticket->purchase->service->id;
        $service_purchase_rating->service_purchase_id = $ticket->purchase->id;
        $service_purchase_rating->save();
        return redirect()->back()->with('success','شكراً لتقييمك للخدمة');
    }
}
