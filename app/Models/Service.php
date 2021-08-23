<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'user_id',
        'keywords',
        'duration',
        'instructions',
        'status',
        'category_id',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function upgrades()
    {
        return $this->hasMany(ServiceUpgrade::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function scopeDisabled($query)
    {
        return $query->where('status', 0);
    }

}
