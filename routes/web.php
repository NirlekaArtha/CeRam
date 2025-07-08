<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use Illuminate\Support\Carbon;

use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLogin'])->name('login.show');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/sign-up', [AuthController::class, 'showSignUp'])->name('sign-up.show');
Route::post('/sign-up', [AuthController::class, 'signUp'])->name('signUp');
Route::get('/recovery', [AuthController::class, 'showRecovery'])->name('recovery.show');
Route::post('/recovery', [AuthController::class, 'recovery'])->name('recovery');


Route::get('/', function () {
    return view('index');
});

Route::get('/posts', function () {
    return view('posts');
});

Route::get('/post/{slug}', function ($slug) {

    $post = Post::where('slug', $slug)->firstOrFail();
    
    return view('post', ["post" => $post]);
});


Route::middleware('auth')->group(function () {
    
    Route::get('/post-form', function () {
    return view('post-form');
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

});