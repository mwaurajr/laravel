<?php

namespace App\Http\Controllers;
use App\Http\Controllers\HomeController;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Request $request)
    {
        $category = $request->input('category');

        $query = Post::latest();

        if ($category) {
            $query->where('category_id', $category);
        }

        $posts = $query->get();

        return view('home.index', compact('posts'));
    }

}
