<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $latestPosts = Post::latest()->take(3)->get();
        return view('home', compact('latestPosts'));
    }
}
