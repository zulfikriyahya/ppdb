<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return handleRedirect();
});
// Route::get('/register', function () {
//     return handleRedirect();
// })->name('filament.auth.login');

function handleRedirect() {
    $tahunPendaftaran = DB::table('tahun_pendaftarans')
        ->where('status', 'Aktif')
        ->first();

    if (!$tahunPendaftaran) {
        return redirect()->route('filament.auth.login');
    }

    $startDate = Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_ppdb_mulai));
    $endDate = Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_ppdb_selesai));
    $currentDate = Carbon::now();

    if ($currentDate->lt($startDate) || $currentDate->gt($endDate)) {
        return redirect()->route('filament.auth.login');
    }

    return redirect()->route('filament.auth.register');
}


