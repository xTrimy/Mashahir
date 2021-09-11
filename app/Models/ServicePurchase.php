<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use stdClass;
use Carbon\Carbon;

class ServicePurchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'customer_id',
        'price',
        'ticket_id',
        'agreed_at',
        'declined_at',
    ];

    public function service(){
        return $this->belongsTo(Service::class);
    }
    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
    public function customer()
    {
        return $this->belongsTo(User::class,'customer_id');
    }
    public function rating()
    {
        return $this->hasOne(ServicePurchaseRating::class);
    }

    public static function getCalender(Request $request, $user_id)
    {
        $date = new stdClass;
        $date->month = (intval($request->month)) ? $request->month : now()->month;
        $date->year = (intval($request->year)) ? $request->year : now()->year;

        $days = self::whereYear('agreed_at', '=', $date->year)
                        ->whereMonth('agreed_at', '=', $date->month)
                        ->whereIn('service_id', Service::UserId($user_id)->get('id'))
                        ->orderBy('agreed_at', 'ASC')
                        ->with('service')
                        ->get()
                        ->groupBy(function($date){
                            return [Carbon::parse($date->agreed_at)->format('d')];
                        });
        $data = new stdClass;
        $data->days = $days;
        $data->date = $date;
        return $data;
    }
}
