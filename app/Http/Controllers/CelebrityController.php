<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class CelebrityController extends Controller
{


    public function index(Request $request)
    {
        $category = [];
        $keywords = [];

        if($request->query('category')) $category = explode(',', $request->query('category'));
        if($request->query('keywords')) $keywords = explode(',', $request->query('keywords'));



        $celebrities = User::role('celebrity')->ServicesCategory($category)->ServiceKeyword($keywords)->get();

        $categories = Category::all();

        return view('pages.celebrities', [
            'celebrities' => $celebrities,
            'categories' => $categories,
            'selected_categories' => $category,
            'keywords' => implode(',', $keywords)
        ]);
    }
}
