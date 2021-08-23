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
        $response[] = Task::getCalender($request)->date;
        foreach(Task::getCalender($request)->days as $value => $tasks)
        {
            $response[$tasks[0]->deadline] = [
                "tasks" => $tasks,
                "isToday" => Carbon::parse($tasks[0]->deadline)->isToday()
            ];
        }
        
        return $response;
    }

}
