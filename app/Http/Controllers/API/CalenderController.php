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
        foreach($calenderTasks->days as $value => $tasks)
        {
            $response[$tasks[0]->deadline] = [
                "tasks" => $tasks,
            ];
        }

        $response['today'] = Carbon::now()->isoFormat('YYYY-MM-DD');

        dd($response);

        return $response;
    }

}
