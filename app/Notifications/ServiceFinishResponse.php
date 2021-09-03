<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ServiceFinishResponse extends Notification implements ShouldQueue
{
    use Queueable;
    protected $ticket;
    protected $response;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($ticket,$response)
    {
        $this->ticket = $ticket;
        $this->response = $response;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

   
    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        if($this->response == 1)
        return [
            'message' => "مبروك, تم أستلام الخدمة \"" . $this->ticket->subject . "\"",
            'href' => '/messages/' . $this->ticket['id'],
            'image' => $this->ticket->purchase->customer->image
        ];
        else
        return [
            'message' => "طلب \"" . $this->ticket->purchase->customer->name . "\" تعديلات على الطلب \"". $this->ticket->subject ."\"",
            'href' => '/messages/' . $this->ticket['id'],
            'image' => $this->ticket->purchase->customer->image
        ];
    }
}
