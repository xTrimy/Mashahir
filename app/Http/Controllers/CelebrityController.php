<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class CelebrityController extends Controller
{


    public function index(Request $request)
    {
        $types = [0=>['en'=>'celebrity', 'ar'=>"مشهور"], 1=>['en'=>'advertising agency', 'ar'=>"مسوق الكتروني"]];


        $category = [];
        $selectedTypes = ['celebrity', 'advertising agency'];
        $keywords = [];

        if($request->query('category')) $category = explode(',', $request->query('category'));
        if($request->query('keyword')) $keywords = explode(',', $request->query('keyword'));
        if($request->query('type')) $selectedTypes = explode(',', $request->query('type'));



        $celebrities = User::whereHas("roles", function($query) use($selectedTypes){
             $query->whereIn("name", $selectedTypes);
            })->ServicesCategory($category)->ServiceKeyword($keywords)->get();

        $categories = Category::all();

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
