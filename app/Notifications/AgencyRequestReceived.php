<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AgencyRequestReceived extends Notification implements ShouldQueue
{
    use Queueable;

    protected $celebrity;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($celebrity)
    {
        $this->celebrity = $celebrity;
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
        return [
            'message' => 'طلب منك "' . $this->celebrity->name . "\"  توكيل الحساب الخاص بهم من قبلك.\n يرجى الرد بالقبول أو الرفض.",
            'href' => '/profile/' . $this->celebrity->username,
            'image' => asset($this->celebrity->image ?? "avatars/images/default.png")
        ];
    }
}
