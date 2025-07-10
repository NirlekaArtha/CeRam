<?php

namespace App\Http\Controllers;

use App\Models\Post;

class IndexController extends Controller
{
    public function index ()
    {
        $popularPost = Post::orderBy('votes', 'desc')->first();
        $latestPosts = Post::latest()->take(12)->get();
        $recomendationPosts = Post::inRandomOrder()->take(12)->get(); 
        return view('index', [
            'popularPost' => $popularPost,
            'latestPosts' => $latestPosts,
            'recomendationPosts' => $recomendationPosts,
        ]);
    }
}
