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
}
