<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Ads;
use App\Models\Category;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdController extends Controller
{
    public function review(){
        $ads = Ads::where('owner_id',Auth::user()->id)->with('category')->get();
        return view('dashboard.ads.review',['ads'=>$ads]);
    }
    public function add(){
        $categories = Category::all();
        $ad = null;
        return view('dashboard.ads.add',['categories'=>$categories,'ad'=>null]);
    }
    public function store(Request $request){
        $request->validate([
            'name'=>"required|string",
            'date'=>"required|date",
            'description'=>"nullable",
            'media'=> "required|mimes:avi,asf,mp4,wmv,wmx,wvx,png,jfif,gif,jpgv,jpgv,jpeg,3gp,mpeg,qt,uvu,mp4s,mp4a",
            "url"=>"nullable",
            "category" => "required|exists:categories,id",
        ]);
        $ad = new Ads();
        $ad->name = $request->name;
        $ad->owner_id = Auth::user()->id;
        $ad->date_completed = $request->date;
        $ad->category_id = $request->category;
        $file = $request->file('media');
        $time = time();
        $file_name = $time . '.' . $file->getClientOriginalExtension();
        $file_path =$file_name;
        $mime = $file->getMimeType();
        if ( $mime == "video/x-flv" || $mime == "video/mp4" || $mime == "application/x-mpegURL" || $mime == "video/MP2T" || $mime == "video/3gpp" || $mime == "video/quicktime" || $mime == "video/x-msvideo" || $mime == "video/x-ms-wmv") {
            Storage::disk('public_uploads')->put($file_path, $file->getContent());
            $ad->video =  "uploads/".$file_path;
        }else if($mime == "image/gif"|| $mime == "image/jpg"|| $mime == "image/jpeg" || $mime == "image/png" || $mime == "image/webp" || $mime == "image/jfif" ){
            Storage::disk('public_uploads')->put($file_path, $file->getContent());
            $ad->image =  "uploads/".$file_path;
        }else{
            return redirect()->back()->withErrors('صيغة الملف غير مسموحة، برجاء اختيار ملف آخر او تغيير صيغة الملف');
        }
        $ad->save();
        return redirect()->back()->with('success','تم أضافة الأعلان');
    }
}
