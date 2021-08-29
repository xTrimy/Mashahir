<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class CelebrityController extends Controller
{


    public function index(Request $request)
    {
        $cat = [];

        if($request->query('cat')) $cat = explode(',', $request->query('cat'));

        $celebrities = User::role('celebrity')->ServicesCategory($cat)->get();

        $categories = Category::all();

        return view('pages.celebrities', [
            'celebrities' => $celebrities,
            'categories' => $categories,
            'selected_categories' => $cat
        ]);
    }
}
