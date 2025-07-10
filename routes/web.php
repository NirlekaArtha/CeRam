<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use Illuminate\Support\Carbon;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SettingsController;

Route::get('/login', [AuthController::class, 'showLogin'])->name('login.show');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/sign-up', [AuthController::class, 'showSignUp'])->name('sign-up.show');
Route::post('/sign-up', [AuthController::class, 'signUp'])->name('signUp');
Route::get('/recovery', [AuthController::class, 'showRecovery'])->name('recovery.show');
Route::post('/recovery', [AuthController::class, 'recovery'])->name('recovery');


Route::get('/', [IndexController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    
    Route::get('posts/{post:slug}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::delete('posts/{post:slug}', [PostController::class, 'destroy'])->name('posts.destroy');
    Route::resource('posts', PostController::class)->except(['index', 'show', 'edit', 'destroy']);

    Route::get('/settings', function () {return redirect()->route('settings.profile');});

    Route::get('/settings/profile', [SettingsController::class, 'profile'])->name('settings.profile');
    Route::get('/settings/security', [SettingsController::class, 'security'])->name('settings.security');
    Route::get('/settings/saved-stories', [SettingsController::class, 'savedStories'])->name('settings.saved-stories');
    Route::get('/settings/your-stories', [SettingsController::class, 'yourStories'])->name('settings.your-stories');
    
    Route::post('/settings/profile', [AuthController::class, 'updateProfile'])->name('settings.update-profile');
    Route::post('/settings/security', [AuthController::class, 'updateSecurity'])->name('settings.update-security');
    

});

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('posts.show');