<?php

namespace App\Notifications;

use App\Models\Service;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewServicePurchase extends Notification implements ShouldQueue
{
    use Queueable;
    protected $service_purchase;
    protected $customer;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($service_purchase,$customer)
    {
        $this->service_purchase = $service_purchase;
        $this->customer = $customer;
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
        $service = Service::find($this->service_purchase->service_id);

        return [
            'message' => 'طلب منك "' . $this->customer->name . "\" خدمة \"". $service->name ."\"",
            'href' => null,
            'image' => asset($this->customer->image ?? "avatars/images/default.png")
        ];
    }
}
