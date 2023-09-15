<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public static function create()
    {
        return view('users.register');
    }
    public static function store(Request $request)
    {
        $formData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);
        $formData['password'] = bcrypt($formData['password']);
        $user = User::create($formData);
        Auth::login($user);
        return redirect('/')->with('message', 'User was created successfully');
    }
    public static function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('message', 'User was logged out successfully');
    }
    public static function showLogin()
    {
        return view('users.login');
    }
    public static function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'User was logged in successfully');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput();

    }

}