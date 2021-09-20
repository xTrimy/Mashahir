<?php

namespace App\Http\Controllers;

use App\Models\ProfessionPermit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfessionPermitController extends Controller
{

    public function store(Request $request){
        $request->validate(
            ['file'=> "required|file|max:5120"]
        );
        if ($request->hasFile('file')) {
            $fileName = time() . '_' . $request->file('file')->getClientOriginalName();
            $request->file('file')->move(public_path('permits'), $fileName);
            $permit = new ProfessionPermit();
            $permit->file = "/permits/".$fileName;
            $permit->user_id = Auth::user()->id;
            $permit->save();
        }
        return redirect()->back()->with('success','تم إرسال التصريح للمراجعة، شكراً لك');
    }
    public function index(){
        $profession_permit = ProfessionPermit::where([['user_id',Auth::user()->id],["expiration_date","!=",null]])->latest()->first();
        return view('dashboard.profession-permit-upload',['profession_permit'=> $profession_permit]);
    }
}
