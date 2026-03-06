<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use App\Models\JalurPendaftaran;
use App\Models\TahunPendaftaran;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class LandingController extends Controller
{
    public function index(): View
    {
        $tahun = Cache::remember(
            'landing:tahun_aktif',
            300,
            fn() =>
            TahunPendaftaran::where('status', 'Aktif')->first()
        );

        $jalurs = Cache::remember(
            'landing:jalur_aktif',
            300,
            fn() =>
            JalurPendaftaran::where('status', 'Aktif')
                ->with('tahunPendaftaran')
                ->when($tahun, fn($q) => $q->where('tahun_pendaftaran_id', $tahun->id))
                ->withCount(['calonSiswas as terisi'])
                ->get()
        );

        $informasis = Cache::remember(
            'landing:informasi',
            120,
            fn() =>
            Informasi::where('status', 'Publish')
                ->when($tahun, fn($q) => $q->where('tahun_pendaftaran_id', $tahun->id))
                ->latest('tanggal')
                ->limit(3)
                ->get()
        );

        return view('landing', compact('tahun', 'jalurs', 'informasis'));
    }
}
