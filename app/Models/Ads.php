<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    use HasFactory;
    
    protected $table = 'ads';
    protected $fillable = [
        'name',
        'owner_id',
        'category_id',
        'url',
        'video',
        'image',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    
    public function owner()
    {
        return $this->belongsTo(User::class,'owner_id');
    }

}
