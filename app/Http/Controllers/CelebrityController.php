<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class CelebrityController extends Controller
{


    public function index(Request $request)
    {
        $types = [0=>['en'=>'celebrity', 'ar'=>"مشهور"], 1=>['en'=>'digital marketer', 'ar'=>"مسوق الكتروني"]];
        $categories = Category::all();

        $category = $request->category ?? $categories->pluck('id')->all();
        $keywords = $request->keywords ?? [];
        if($request->has('keywords')){
            $keywords = explode(',',$request->keywords);
        }
        $selectedTypes = $request->type ?? ['celebrity', 'digital marketer'];
        $celebrities = User::whereHas("roles", function ($query) use ($selectedTypes) {
            $query->whereIn("name", $selectedTypes);
        })->ServicesCategory($category)->ServiceKeyword($keywords)->ValidPermit()->get();

        
        return view('pages.celebrities', [
            'celebrities' => $celebrities,
            'categories' => $categories,
            'types' => $types,
            'selected_types'=> $selectedTypes,
            'selected_categories' => $category,
            'keywords' => implode(',', $keywords)
        ]);
    }
}
