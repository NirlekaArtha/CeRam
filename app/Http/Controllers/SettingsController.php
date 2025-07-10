<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SettingsController extends Controller
{
    public function profile ()
    {
        $profile = Auth::user();
        return view('settings.account', ['profile' => $profile]);
    }   

    public function security ()
    {
        return view('settings.security');
    }

    public function savedStories ()
    {
        $savedStories = Auth::user()->savedPosts();
        return view('settings.saved', ['savedStories' => $savedStories]);
    }

    public function yourStories ()
    {
        $yourStories = Auth::user()->posts();
        return view('settings.saved', ['yourStories' => $yourStories]);
    }
}