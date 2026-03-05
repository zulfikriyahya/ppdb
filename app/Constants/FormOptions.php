<?php

namespace App\Constants;

class FormOptions
{
    public const JENIS_KELAMIN = [
        'Pria' => 'Laki-laki',
        'Wanita' => 'Perempuan',
    ];

    public const GOLONGAN_DARAH = [
        'A-' => 'A-',
        'A+' => 'A+',
        'B-' => 'B-',
        'B+' => 'B+',
        'AB-' => 'AB-',
        'AB+' => 'AB+',
        'O-' => 'O-',
        'O+' => 'O+',
    ];

    public const AGAMA = [
        'Islam' => 'Islam',
        'Kristen Katholik' => 'Kristen Katholik',
        'Kristen Protestan' => 'Kristen Protestan',
        'Hindu' => 'Hindu',
        'Buddha' => 'Buddha',
        'Konghucu' => 'Konghucu',
    ];

    public const TINGGAL_BERSAMA = [
        'Orang Tua' => 'Orang Tua',
        'Saudara' => 'Saudara',
        'Panti Asuhan' => 'Panti Asuhan',
        'Kost' => 'Kost',
        'Lainnya' => 'Lainnya',
    ];

    public const JARAK_KE_SEKOLAH = [
        '0 - 1 Km' => '0 - 1 Km',
        '1 - 5 Km' => '1 - 5 Km',
        '5 - 10 Km' => '5 - 10 Km',
        '10 - 15 Km' => '10 - 15 Km',
        '15 - 20 Km' => '15 - 20 Km',
        '20 - 25 Km' => '20 - 25 Km',
        '25 - 30 Km' => '25 - 30 Km',
    ];

    public const DISABILITAS = [
        'Non Disabilitas' => 'Non Disabilitas',
        'Fisik' => 'Fisik',
        'Penglihatan' => 'Penglihatan',
        'Pendengaran' => 'Pendengaran',
        'Kognitif' => 'Kognitif',
        'Mental' => 'Mental',
        'Lainnya' => 'Lainnya',
    ];

    public const PEKERJAAN = [
        'Tidak Bekerja' => 'Tidak Bekerja',
        'ASN' => 'ASN',
        'TNI/POLRI' => 'TNI/POLRI',
        'Karyawan Swasta' => 'Karyawan Swasta',
        'Pegawai Honorer' => 'Pegawai Honorer',
        'Wirausaha' => 'Wirausaha',
        'Wiraswasta' => 'Wiraswasta',
        'Buruh' => 'Buruh',
    ];

    public const PENGHASILAN = [
        'Kurang dari Rp. 500.000' => 'Kurang dari Rp. 500.000',
        'Rp. 500.000 - Rp. 1.000.000' => 'Rp. 500.000 - Rp. 1.000.000',
        'Rp. 1.000.001 - Rp. 2.000.000' => 'Rp. 1.000.001 - Rp. 2.000.000',
        'Rp. 2.000.001 - Rp. 3.000.000' => 'Rp. 2.000.001 - Rp. 3.000.000',
        'Rp. 3.000.001 - Rp. 4.000.000' => 'Rp. 3.000.001 - Rp. 4.000.000',
        'Rp. 4.000.001 - Rp. 5.000.000' => 'Rp. 4.000.001 - Rp. 5.000.000',
        'Lebih dari Rp. 5.000.000' => 'Lebih dari Rp. 5.000.000',
    ];

    public const PENDIDIKAN = [
        'Tidak Sekolah' => 'Tidak Sekolah',
        'SD/MI Sederajat' => 'SD/MI Sederajat',
        'SMP/MTS Sederajat' => 'SMP/MTS Sederajat',
        'SMA/SMK/MA Sederajat' => 'SMA/SMK/MA Sederajat',
        'D1' => 'D1',
        'D2' => 'D2',
        'D3' => 'D3',
        'D4' => 'D4',
        'S1' => 'S1',
        'S2' => 'S2',
        'S3' => 'S3',
    ];

    public const STATUS_HIDUP = [
        'Hidup' => 'Hidup',
        'Meninggal' => 'Meninggal',
    ];

    public const KEPEMILIKAN_RUMAH = [
        'Rumah Pribadi' => 'Rumah Pribadi',
        'Kontrakan' => 'Kontrakan',
        'Rumah Dinas' => 'Rumah Dinas',
        'Menumpang Saudara' => 'Menumpang Saudara',
    ];

    public const AKREDITASI = [
        'A' => 'A (Sangat Baik)',
        'B' => 'B (Baik)',
        'C' => 'C (Cukup)',
        'D' => 'D (Kurang)',
    ];

    public const STATUS_SEKOLAH = [
        'NEGERI' => 'NEGERI',
        'SWASTA' => 'SWASTA',
    ];

    public const STATUS_PENDAFTARAN_SUPER_ADMIN = [
        'Diproses' => 'Diproses',
        'Tidak Diterima' => 'Tidak Diterima',
        'Diterima' => 'Diterima',
        'Diterima Di Kelas Reguler' => 'Diterima Di Kelas Reguler',
        'Diterima Di Kelas Unggulan' => 'Diterima Di Kelas Unggulan',
    ];

    public const STATUS_PENDAFTARAN_REGULAR = [
        'Diproses' => 'Diproses',
    ];

    public const STATUS_FORMULIR = [
        'Diproses' => 'Diproses',
        'Berkas Tidak Lengkap' => 'Berkas Tidak Lengkap',
        'Disetujui' => 'Disetujui',
        'Ditolak' => 'Ditolak',
    ];

    // Helper untuk tahun lulus
    public static function tahunLulusOptions(): array
    {
        $tahun = range(date('Y'), date('Y') - 2);

        return array_combine($tahun, $tahun);
    }

    // Helper untuk jenjang sekolah berdasarkan jenjang instansi
    public static function jenjangSekolahAsal(?string $jenjangInstansi): array
    {
        return match ($jenjangInstansi) {
            'TK' => ['PAUD' => 'PAUD'],
            'SD', 'MI' => ['TK' => 'TK'],
            'SMP', 'MTS' => ['SD' => 'SD', 'MI' => 'MI'],
            'SMA', 'SMK', 'MA' => ['SMP' => 'SMP', 'MTS' => 'MTS'],
            default => [
                'PAUD' => 'PAUD',
                'TK' => 'TK',
                'SD' => 'SD',
                'MI' => 'MI',
                'SMP' => 'SMP',
                'MTS' => 'MTS',
                'SMA' => 'SMA',
                'SMK' => 'SMK',
                'MA' => 'MA',
            ],
        };
    }
}
