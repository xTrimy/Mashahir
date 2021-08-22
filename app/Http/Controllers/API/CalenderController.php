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

        $response = [];
        foreach(Task::getCalender($request) as $value => $tasks)
        {
            $response[] = [
                "tasks" => $tasks,
                "day" => $tasks[0]->deadline,
                "isToday" => Carbon::parse($tasks[0]->deadline)->isToday()
            ];
        }

        return $response;
    }

}
