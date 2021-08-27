<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AgencyRequestSent extends Notification implements ShouldQueue
{
    use Queueable;

    private $agency;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    
    public function __construct(User $agency)
    {
        $this->agency = $agency;
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
            'message' => 'تم إرسال طلب توكيل لـ "' . $this->agency->name . "\"\n يرجى انتظار الموافقة.",
            'href' => '/profile/'.$this->agency->username,
            'image' => asset($this->agency->image ?? "avatars/images/default.png")
        ];
    }
}
