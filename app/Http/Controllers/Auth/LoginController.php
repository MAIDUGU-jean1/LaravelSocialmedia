<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm(){
        return view('auth.login');
    }

    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',

        'password' => 'required',
    ]);

  
    $user = User::where('email', $request->email)->first();

    if (!$user) {
        return back()->with('error', 'Invalid credentials.');
    }

    if (!$user->is_verified) {
        return back()->with('error', 'Your account is not verified. Please check your email.');
    }

    if (Auth::attempt($request->only('email', 'password'))) {
        return redirect()->route('index')->with('success', 'Welcome back!');
    }

    return back()->with('error', 'Invalid email or password.');
}

    //
}
