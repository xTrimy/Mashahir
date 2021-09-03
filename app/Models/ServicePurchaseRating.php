<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicePurchaseRating extends Model
{
    use HasFactory;
    protected $fillable = [
        'rating',
        'comment',
        'service_purchase_id',
        'service_id',
    ];

    public function purchase(){
        return $this->belongsTo(ServicePurchase::class);
    }
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
