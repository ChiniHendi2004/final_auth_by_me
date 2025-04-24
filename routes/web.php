<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\TenantAuthController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/login', [TenantAuthController::class, 'showLoginForm'])->name('login');
Route::get('/email', [TenantAuthController::class, 'emailForm'])->name('emailForm');
Route::get('/resetpw', [TenantAuthController::class, 'resetpwForm'])->name('resetpwForm');
Route::post('/login', [TenantAuthController::class, 'login'])->name('login.post');
Route::get('/dashboard', [TenantAuthController::class, 'dashboard'])->name('dashboard');
Route::post('/logout', [TenantAuthController::class, 'logout'])->name('logout');

Route::get('/register', [TenantAuthController::class, 'showRegisterForm'])->name('tenant.registerForm');
Route::post('/register', [TenantAuthController::class, 'register'])->name('tenant.register');



// Password Reset Routes
Route::get('/forgot-password', [TenantAuthController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('/forgot-password', [TenantAuthController::class, 'sendResetPasswordEmail'])->name('password.email');
Route::get('/reset-password/{token}', [TenantAuthController::class, 'showResetPasswordForm'])->name('password.reset');
Route::post('/reset-password', [TenantAuthController::class, 'resetPassword'])->name('password.store');
