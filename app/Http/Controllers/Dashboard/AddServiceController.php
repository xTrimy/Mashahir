<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceUpgrade;
use App\Notifications\NewService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddServiceController extends Controller
{
    public function index(){
        return view('dashboard.services.add');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name'=>"required|min:12|max:64",
            'category'=>"required|exists:categories,id",
            'description'=>"required|min:50|max:500",
            'keywords'=>"nullable",
            'duration'=>"required|numeric",
            'instructions'=>"required|min:30|max:500",
            "upgrade" => "nullable|array|max:5",
            "upgrade_duration" => "nullable|array|max:5",
            "upgrade_price" => "nullable|array|max:5",
            "upgrade.*" => "required|string|min:6|max:255",
            "upgrade_duration.*" => "required|numeric",
            "upgrade_price.*" => "required|numeric",
            "status" => "required",
        ]);
        $service = new Service();
        $service->name = $request->name;
        $service->description = $request->description;
        $service->category_id = $request->category;
        $service->keywords = $request->keywords;
        $service->instructions = $request->instructions;
        $service->duration = $request->duration;
        $service->user_id = Auth::user()->id;


        $request->status = ($request->status == 0 || $request->status == 1)
                            ? $request->status
                            : 1;

        $service->status = $request->status;
        $service->save();


        Auth::user()->notify(new NewService($service));

        /**
         * Bug Here if there is no upgrades fix it
         * @Tag Mohammad Ashraf
         * @author Mohammad Salah
         */
        foreach($request->upgrade as $i=>$upgrade_title){
            $upgrade = new ServiceUpgrade();
            $upgrade->service_id = $service->id;
            $upgrade->title = $upgrade_title;
            $upgrade->price = intval($request->upgrade_price[$i]);
            $upgrade->duration = intval($request->upgrade_duration[$i]);
            $upgrade->save();
        }
        return redirect()->route('service');
    }
}
