<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Mail\VerificationMail;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            
            'firstname' => 'required|string|max:255',  
            'lastname' => 'required|string|max:255',  
            'email' => 'required|string|email|max:255|unique:users',
            'phone_number' => 'nullable|string|min:9|max:255',
            'password' => 'required|string|min:6|confirmed',
            'profile_picture' => 'nullable|image|mimes:jpg,jpeg,png|max:12048',
        ]);
        if ($request->hasFile('profile_picture')) {
            $profilePicturePath = $request->file('profile_picture')->store('profile_pictures', 'public');
        } else {
            $profilePicturePath = 'default/profile.png'; 
        }

        $verificationCode = Str::random(6);


        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_number' => $request->phone_number,
            'profile_picture' => $profilePicturePath,
            'verification_code' => $verificationCode,
            'verification_expires_at' => Carbon::now()->addMinutes(10),
        ]);
 

        Mail::to($user->email)->send(new VerificationMail($user));


        return redirect()->route('verification.form')->withInput();
    }
    //
}
