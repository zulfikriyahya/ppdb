<?php

namespace App\Helpers;

use App\Models\Ketua;
use App\Models\Sekolah;
use App\Models\Pimpinan;
use App\Models\Sekretaris;
use App\Models\TahunPendaftaran;

/**
 * Menyimpan data PDF yang sering diquery ke dalam container binding
 * sehingga per-request hanya query 1x, tidak peduli berapa kali view di-render.
 *
 * Dipakai di formulir.blade.php, kartu-tes.blade.php, skl.blade.php,
 * dan partial pdf-header.blade.php.
 */
class PdfDataHelper
{
    public static function instansi(): ?Sekolah
    {
        return once(fn() => Sekolah::first());
    }

    public static function tahunAktif(): ?TahunPendaftaran
    {
        return once(fn() => TahunPendaftaran::where('status', 'Aktif')->first());
    }

    public static function sekretarisAktif(): ?Sekretaris
    {
        return once(function () {
            $tahun = static::tahunAktif();
            return Sekretaris::where('tahun_pendaftaran_id', optional($tahun)->id)
                ->where('status', 'Aktif')
                ->first();
        });
    }

    public static function ketuaAktif(): ?Ketua
    {
        return once(function () {
            $tahun = static::tahunAktif();
            return Ketua::where('tahun_pendaftaran_id', optional($tahun)->id)
                ->where('status', 'Aktif')
                ->first();
        });
    }

    public static function pimpinanAktif(): ?Pimpinan
    {
        return once(function () {
            $tahun = static::tahunAktif();
            return Pimpinan::where('tahun_pendaftaran_id', optional($tahun)->id)
                ->where('status', 'Aktif')
                ->first();
        });
    }
}
