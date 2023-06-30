<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public static function index()
    {
        $posts = Post::latest()->take(5)->get();
        return view('home', ['posts' => $posts]);
    }


}
