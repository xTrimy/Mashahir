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

    public function scopeUser($query, $user_id)
    {
        return $query->where('user_id', $user_id);
    }

    public function scopeUserId($query, $user_id)
    {
        return $query->where('user_id', $user_id);
    }


    public function scopeCategory($query, $categories = [])
    {
        return $query->whereIn('category_id', $categories);
    }

    public function scopeDisabled($query)
    {
        return $query->where('status', 0);
    }

    public function purchases(){
        return $this->hasMany(ServicePurchase::class);
    }
    public function ratings()
    {
        return $this->hasMany(ServicePurchaseRating::class);
    }
    public function images(){
        return $this->hasMany(ServiceImage::class);
    }
}
