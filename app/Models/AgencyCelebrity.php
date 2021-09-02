<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgencyCelebrity extends Model
{
    use HasFactory;
    protected $table = 'agency_celebrity';
    protected $fillable = [
        'agency_id',
        'celebrity_id',
        'status'
    ];

    public function agent()
    {
        return $this->belongsTo(User::class, 'agency_id');
    }

    public function celebrity()
    {
        return $this->belongsTo(User::class, 'celebrity_id');
    }

    public static function scopeAgency($query, $user_id)
    {
        return $query->where('agency_id', $user_id);
    }
}
