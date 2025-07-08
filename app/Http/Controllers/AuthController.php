<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Password;

class AuthController extends Controller
{

    // Views
    public function showLogin(Request $request)
    {
        return view('login');
    }

    public function showSignUp(Request $request)
    {
        return view('sign-up');
    }

    public function showRecovery(Request $request)
    {
        return view('recovery');
    }



    // Actions
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'usernameOrEmail' => 'required|string',
            'password' => 'required|string',
        ]);

        $login = $credentials['usernameOrEmail'];
        $fieldType = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if (Auth::attempt([$fieldType => $login, 'password' => $credentials['password']])) {
            // Authentication passed...
            $request->session()->regenerate();
            return redirect()->intended('/')->with('success', 'You are now logged in!');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'You have been logged out successfully.');
    }

    public function signUp(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
        
        $user = User::create($validated);

        return redirect()->route('login.show')->with('success', 'Registration successful! You are now logged in.');
    }

    public function recovery(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
        ]);

        // Todo: Implement password reset logic
        // send password reset link to the user's email
        // PasswordReset::sendResetLink($validated['email']);

        return back()->with('success', 'If your email is registered, you will receive a password reset link shortly.');
    }

}
