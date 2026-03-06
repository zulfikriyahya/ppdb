<?php

use App\Filament\Pages\Auth\ForgotPasswordCustom;
use App\Filament\Pages\Auth\NewPassword;
use App\Filament\Pages\Auth\ResetPasswordOtp;
use App\Filament\Pages\Auth\VerifikasiOtp;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

Route::get('/selamat-datang', [LandingController::class, 'index'])->name('landing');

Route::middleware('web')->group(function () {
    Route::get('/verifikasi-otp', VerifikasiOtp::class)->name('otp.verifikasi');
    Route::get('/lupa-password', ForgotPasswordCustom::class)->name('otp.forgot-password');
    Route::get('/reset-password', ResetPasswordOtp::class)->name('otp.reset-password');
    Route::get('/new-password', NewPassword::class)->name('otp.new-password');
});
