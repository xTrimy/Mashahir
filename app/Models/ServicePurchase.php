<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicePurchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'customer_id',
        'price',
        'ticket_id',
        'agreed_at',
        'declined_at',
    ];

    public function service(){
        return $this->belongsTo(Service::class);
    }
    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
    public function customer()
    {
        return $this->belongsTo(User::class,'customer_id');
    }
}
