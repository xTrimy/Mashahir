<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportantNotifications extends Model
{
    use HasFactory;
    protected $table = 'important_notifications';
    protected $fillable = [
        'user_id',
        'subject',
        'message',
        'color'
    ];

}
