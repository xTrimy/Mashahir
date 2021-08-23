<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CalenderController extends Controller
{
    public function getTasks(Request $request)
    {
        $calenderTasks = Task::getCalender($request);
        $response[] = $calenderTasks->date;
        $hasToday = null;
        foreach($calenderTasks->days as $value => $tasks)
        {
            if(!$hasToday)
                $hasToday = ( Carbon::parse($tasks[0]->deadline)->isToday() ) ? ['Key'=> $tasks[0]->deadline, 'status'=>true] : null;

            $response[$tasks[0]->deadline] = [
                "tasks" => $tasks,
                "isToday" => $hasToday['status'] ?? false
            ];
        }

        $response['todayKey'] = $hasToday['Key'] ?? null;
        return $response;
    }

}
