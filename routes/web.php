<?php

use App\Filament\Pages\Auth\ForgotPasswordCustom;
use App\Filament\Pages\Auth\NewPassword;
use App\Filament\Pages\Auth\ResetPasswordOtp;
use App\Filament\Pages\Auth\VerifikasiOtp;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormulirController;

Route::get('/', [LandingController::class, 'index'])->name('landing');

Route::middleware(['auth'])->group(function () {
    Route::get('/formulir/{calonSiswa}/cetak',  [FormulirController::class, 'cetak'])->name('formulir.cetak');
    Route::get('/kartu-tes/{calonSiswa}/cetak', [FormulirController::class, 'cetakKartuTes'])->name('kartu-tes.cetak');
    Route::get('/skl/{calonSiswa}/cetak',       [FormulirController::class, 'cetakSkl'])->name('skl.cetak');
});

Route::middleware('web')->group(function () {
    Route::get('/verifikasi-otp', VerifikasiOtp::class)->name('otp.verifikasi');
    Route::get('/lupa-password', ForgotPasswordCustom::class)->name('otp.forgot-password');
    Route::get('/reset-password', ResetPasswordOtp::class)->name('otp.reset-password');
    Route::get('/new-password', NewPassword::class)->name('otp.new-password');
});
