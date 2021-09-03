<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceImage;
use App\Models\ServiceUpgrade;
use App\Models\User;
use App\Notifications\NewService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AddServiceController extends Controller
{
    public function index(){
        return view('dashboard.services.add');
    }
    public function edit_as_agency($username,$id){
        return $this->edit($id);
    }
    public function edit($id)
    {
        $service = Service::where('id',$id)->first('id');
        return view('dashboard.services.add',['service'=>$service]);
    }

    public function store(Request $request)
    {
        $user = ($request->username) ? User::where('username', $request->username)->first()->id : Auth::user()->id;

        $request->validate([
            'service_id'=>"nullable|exists:services,id",
            'name'=>"required|min:12|max:64",
            'category'=>"required|exists:categories,id",
            'description'=>"required|min:50|max:500",
            'keywords'=>"required",
            'duration'=>"required|numeric",
            'instructions'=>"required|min:30|max:500",
            "upgrade" => "nullable|array|max:5",
            "upgrade_duration" => "nullable|array|max:5",
            "upgrade_price" => "nullable|array|max:5",
            "upgrade.*" => "required|string|min:6|max:255",
            "upgrade_duration.*" => "required|numeric",
            "upgrade_price.*" => "required|numeric",
            "status" => "required",
            "images" => "nullable|array|max:5",
            'images.*'=> "required|mimes:png,jpg,jpeg"
        ]);
        $service = new Service();
        if($request->has('service_id')){
            $service = Service::find($request->service_id)->where('user_id',$user)->first();
            if(!$service){
                return abort(403);
            }
        }
        $service->name = $request->name;
        $service->description = $request->description;
        $service->category_id = $request->category;
        $service->keywords = $request->keywords;
        $service->instructions = $request->instructions;
        $service->duration = $request->duration;
        $service->user_id = $user;

        $request->status = ($request->status == 0 || $request->status == 1)
                            ? $request->status
                            : 1;

        $service->status = $request->status;
        if (!$request->hasFile('images') && !$request->has('service_id')) {
            return redirect()->back()->with('error','يجب ان تحتوي الخدمة على الأقل صورة واحدة')->withInput();
        }else{
            $service_image_count = count(ServiceImage::where('service_id',$service->id)->get());
            if($service_image_count >= 5){
                return redirect()->back()->with('error', 'لا يسمح بأن تحتوي الخدمة على أكثر من خمسة صور')->withInput();
            }
            $service->save();
            foreach ($request->file('images') as $i => $uploaded_image) {
                $image = new ServiceImage();
                $file = $uploaded_image;
                $time = time();
                $file_name = $time . $i . '.' . $file->getClientOriginalExtension();
                $file_path = $file_name;
                Storage::disk('public_uploads')->put($file_path, $file->getContent());
                $image->image = "uploads/" . $file_path;
                $image->service_id = $service->id;
                $image->save();
            }
        }
        $service->save();
        
        if($request->has('upgrade')){
            if($request->has('service_id')){
                ServiceUpgrade::where('service_id',$service->id)->delete();
            }else{
                Auth::user()->notify(new NewService($service));
            }
            foreach($request->upgrade as $i=>$upgrade_title){
                $upgrade = new ServiceUpgrade();
                $upgrade->service_id = $service->id;
                $upgrade->title = $upgrade_title;
                $upgrade->price = intval($request->upgrade_price[$i]);
                $upgrade->duration = intval($request->upgrade_duration[$i]);
                $upgrade->save();
            }
        }

        


        return redirect()->route('service',$service->id);
    }
}
