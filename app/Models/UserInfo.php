<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $fillable = [
        'user_id',
        'location',
        'description',
        'viewers',
        'vat',
        'maroof_url'
    ];

    use HasFactory;
}
