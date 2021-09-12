<?php

namespace App\Models;

use App\Jobs\QueuedVerifyEmailJob;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
        'phone',
        'image',
        'user_type_id',
        'cover',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function type()
    {
        return $this->belongsTo(UserType::class);
    }

    public function agency()
    {
        return $this->hasOne(AgencyCelebrity::class, 'celebrity_id');
    }

    public function celebrities()
    {
        return $this->hasMany(AgencyCelebrity::class, 'agency_id');
    }

    public function ImportantNotifications()
    {
        return $this->hasMany(NotificationsUser::class);
    }

    public function user_info()
    {
        return $this->hasOne(UserInfo::class);
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function scopeServicesCategory($query, $cat)
    {
        if(empty($cat)) return $query;
        return $query->whereExists(function($query) use($cat){
            $query->select(DB::raw(1))
                    ->from('services')
                    ->whereIn('services.category_id', $cat)
                    ->whereColumn('services.user_id','users.id');
        });
    }

    public function scopeServiceKeyword($query, $keywords)
    {
        if(empty($keywords)) return $query;
        return $query->whereExists(function($query) use($keywords){

            foreach($keywords as $word){
                $query->select(DB::raw(1))
                    ->from('services')
                    ->orWhere('keywords', 'LIKE', '%'. $word . '%')
                    ->whereColumn('services.user_id','users.id');
            }

        });
    }

    public function sendEmailVerificationNotification()
    {
        //dispactches the job to the queue passing it this User object
        QueuedVerifyEmailJob::dispatch($this);
    }
}
