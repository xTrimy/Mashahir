<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ServicePurchase;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CalenderController extends Controller
{
    public function getTasks(Request $request, $username = NULL)
    {
        $userId = $username ? User::where('username', $username)->first()->id : $request->user()->id;

        $calenderTasks = ServicePurchase::getCalender($request, $userId);
        $response[] = $calenderTasks->date;
        foreach($calenderTasks->days as $value => $tasks)
        {
            $response[date("Y-m-d",strtotime($tasks[0]->agreed_at))] = [
                "tasks" => $tasks,
            ];
        }

        $response['today'] = Carbon::now()->isoFormat('YYYY-MM-DD');

        return $response;
    }

}
