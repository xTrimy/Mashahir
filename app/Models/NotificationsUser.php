<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class NotificationsUser extends Model
{
    use HasFactory;

    protected $table = "notifications_user";

    protected $fillable = [
        'user_id',
        'notification_id',
        'read_at',
    ];


    public function notification()
    {
        return $this->belongsTo(ImportantNotifications::class);
    }

    public function scopeUser($query, $id)
    {
        return $query->where("user_id", $id);
    }

}
