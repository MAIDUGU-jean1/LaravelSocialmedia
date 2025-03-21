<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerificationMail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;
class VerificationController extends Controller
{

    public function sendPasswordResetLink(Request $request)
{
  
    $request->validate([
        'email' => 'required|email|exists:users,email',
    ]);


    $status = Password::sendResetLink($request->only('email'));

    return $status === Password::RESET_LINK_SENT
        ? back()->with('success', 'A password reset link has been sent to your email.')
        : back()->with('error', 'Unable to send password reset link.');
}

    
     public function showVerificationForm()
     {
        
         return view('auth.verify');
     }


     public function verify(Request $request)
{

    $request->validate([
        //'email' => 'required|email',
        'verification_code' => 'required|string',
    ]);

    // dd($request);
    $user = User::where('email', $request->email)->first();

    if (!$user) {
        return back()->with('error', 'User not found.');
    }


    if ($user->verification_expires_at < now()) {
        return back()->with('error', 'Verification code has expired. Please request a new one.');
    }


    if ($user->verification_code !== $request->verification_code) {
        return back()->with('error', 'Invalid verification code.');
    }

  
    $user->is_verified = true;
    $user->verification_code = null;
    $user->verification_expires_at = null;
    $user->save();

    return redirect()->route('login')->with('success', 'Email verified successfully. You can now log in.');
}


public function resendVerificationCode(Request $request)
{
   // $request->validate(['email' => 'required|email']);


    $user = User::where('email', $request->email)->first();

    if (!$user) {
        return back()->with('error', 'User not found.');
    }

    
    $newCode = Str::random(6);
    $user->verification_code = $newCode;
    $user->verification_expires_at = now()->addMinutes(10);
    $user->save();

    Mail::to($user->email)->send(new VerificationMail($user));

    return back()->with('success', 'A new verification code has been sent to your email.');
}
    //
}
