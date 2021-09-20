<?php

namespace App\Models;

use App\Jobs\QueuedVerifyEmailJob;
use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
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
        'country',
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
    public function social_links(){
        return $this->hasMany(SocialLink::class);
    }
    public function country_info()
    {
        return $this->belongsTo(Country::class,'country','country_code');
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

    public function profession_permits(){
        return $this->hasMany(ProfessionPermit::class);
    }

    public function scopeValidPermit($query){

            $now = Carbon::now();
            $date = Carbon::parse($now)->toDateString();
            return $query->whereHas('profession_permits',function($query) use ($date){
                return $query->whereDate('expiration_date', '>=', $date);
            })->orWhereHas('roles',function($query){
                $query->where("name", "!=", "celebrity");
            });
    }

    public function scopeIsValidPermit($query){
        $now = Carbon::now();
        $date = Carbon::parse($now)->toDateString();
        $profession_permit = ProfessionPermit::where([['user_id', Auth::user()->id], ["expiration_date", ">=", $date]])->latest()->first();
        if($profession_permit){
            return true;
        }else{
            return false;
        }
    }
}
