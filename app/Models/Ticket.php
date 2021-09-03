<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;


    public function sender()
    {
        return $this->belongsTo(User::class,'sender_id');
    }
    public function reciever()
    {
        return $this->belongsTo(User::class, 'reciever_id');
    }
    public function messages()
    {
        return $this->hasMany(Message::class);
    }
    public function purchase(){
        return $this->hasOne(ServicePurchase::class);
    }
}
