<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use stdClass;
use Carbon\Carbon;

class Task extends Model
{
    use HasFactory;



    public static function getCalender(Request $request)
    {
        $date = new stdClass;
        $date->month = (intval($request->month)) ? $request->month : now()->month;
        $date->year = (intval($request->year)) ? $request->year : now()->year;
        
        $days = self::whereYear('deadline', '=', $date->year)
                        ->whereMonth('deadline', '=', $date->month)
                        ->orderBy('deadline', 'ASC')
                        ->select('id', 'title', 'deadline')
                        ->get()
                        ->groupBy(function($date){
                            return [Carbon::parse($date->deadline)->format('d')];
                        });
        $data = new stdClass;
        $data->days = $days;
        $data->date = $date;
        return $data;
    }
}
