<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceUpgrade extends Model
{
    use HasFactory;
    protected $fillable = [
        'service_id',
        'title',
        'price',
        'duration',
    ];

    public function service(){
        return $this->belongsTo(Service::class);
    }
}
