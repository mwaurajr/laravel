<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($category = null)
    {
        // Retrieve the latest five posts from the Post model
        $query = Post::latest()->take(5);

        if ($category) {
            // Filter posts by category if the category parameter is provided
            $query->where('category_id', $category);
        }

        $posts = $query->get();

        // Pass the retrieved posts to a view for display
        return view('home', compact('posts'));
    }
}
