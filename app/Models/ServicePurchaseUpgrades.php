<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicePurchaseUpgrades extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_upgrade_id',
        'service_purchase_id',
        'price',
    ];

    public function service_upgrade()
    {
        return $this->belongsTo(ServiceUpgrade::class);
    }
    
    public function service_purchase()
    {
        return $this->belongsTo(ServicePurchase::class);
    }
}
