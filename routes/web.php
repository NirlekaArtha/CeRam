<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use Illuminate\Support\Carbon;

Route::get('/', function () {
    return view('index');
});

Route::get('/posts', function () {
    return view('posts');
});

Route::get('/post-form', function () {
    return view('post-form');
});

Route::get('/post/{slug}', function ($slug) {

    $post = Post::where('slug', $slug)->firstOrFail();
    
    return view('post', ["post" => $post]);
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/sign-up', function () {
    return view('sign-up');
});

Route::get('/recovery', function () {
    return view('recovery');
});

Route::get('/settings', function () {
    return redirect("/settings/account");
});

Route::get('/settings/account', function () {
    return view('settings.account');
});

Route::get('/settings/saved', function () {
    return view('settings.saved');
});

Route::get('/settings/security', function () {
    return view('settings.security');
});

Route::get('/settings/your-stories', function () {
    return view('settings.your-stories');
});


