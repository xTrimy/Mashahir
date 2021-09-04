<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\AgencyCelebrity;
use App\Models\Service;
use App\Models\ServicePurchase;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();

        if($user->hasPermissionTo('manage all celebrities')){
            $celebrities = User::role('celebrity')->paginate(5);
            $tasks = ServicePurchase::with(['customer', 'service.user'])->whereNotNull("agreed_at")->paginate(5);
        }
        elseif($user->hasPermissionTo('manage celebrities')){
            $celebrities = [];
            $agencyCelebrities = AgencyCelebrity::Agency($user->id)->with('celebrity')->get();
            foreach($agencyCelebrities as $key => $celebrity)
            {
                if($key == 5) break;
                $celebrities[] = $celebrity->celebrity;
            }

            $tasks = [];
        }

        return view('dashboard.main', [
            'showCelebrities' => true,
            'celebrities' => $celebrities ?? null,
            'tasks' => $tasks ?? null,
        ]);
    }

    public function celebrityIndex(Request $request,$username)
    {
        $tasks = ServicePurchase::whereNotNull('agreed_at')->whereIn('service_id', Service::where('user_id', User::where('username', $username)->first()->id)->get(['id']) )->with(['customer', 'service.user'])
                ->paginate(5);
        $user = User::where('username', $username)->first();

        return view('dashboard.main',[
            'showCelebrities' => false,
            'celebrities' => null,
            'tasks' => $tasks,
            'profile'=> $user
        ]);
    }
}
