<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

// Email verification success confirmation route
Route::get('/email/verification-success', function () {
    return view('auth.verified-email');
})->middleware(['auth'])->name('verification.success');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('index');
    })->name('dashboard');
});
