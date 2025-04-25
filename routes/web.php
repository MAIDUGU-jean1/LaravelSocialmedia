<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\VerificationController;
use Symfony\Component\HttpKernel\Profiler\Profile;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\CommentController;

Route::get('/', function () {
    return view ('welcome');
});
Route::get('/forgot-password', function () {
    return view('auth.passwords.forgot');
})->name('password.request');

Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login');

//Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/verify', [VerificationController::class, 'showVerificationForm'])->name('verification.form');
Route::post('/verify', [VerificationController::class, 'verify'])->name('verification.verify');

Route::post('/resend-verification', [VerificationController::class, 'resendCode'])->name('verification.resend');

Route::get('/verify', [VerificationController::class, 'showVerificationForm'])->name('verification.form');
Route::post('/verify', [VerificationController::class, 'verify'])->name('verify');
Route::post('/resend-verification', [VerificationController::class, 'resendVerificationCode'])->name('resend.verification');
// Route::get('/index', [ProfileController::class, 'index'])->name('index');

Route::post('/posts/{post}/like', [LikeController::class, 'likePost'])->middleware('auth');

Route::post('/forgot-password', [VerificationController::class, 'sendPasswordResetLink'])->name('password.email');
Route::middleware(['auth'])->group(function () {
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
    Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::post('/posts/{post}/comment', [CommentController::class, 'store'])->name('comments.store');

});
