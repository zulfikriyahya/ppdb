<?php

use App\Filament\Pages\Auth\ForgotPasswordCustom;
use App\Filament\Pages\Auth\ResetPasswordOtp;
use App\Filament\Pages\Auth\VerifikasiOtp;
use Illuminate\Support\Facades\Route;

// Semua route auth custom — accessible tanpa login,
// diproteksi via session check di masing-masing Page::mount()
Route::middleware('web')->group(function () {
    Route::get('/verifikasi-otp', VerifikasiOtp::class)
        ->name('otp.verifikasi');

    Route::get('/lupa-password', ForgotPasswordCustom::class)
        ->name('otp.forgot-password');

    Route::get('/reset-password', ResetPasswordOtp::class)
        ->name('otp.reset-password');
});
