<?php

namespace App\Filament\Resources\CalonSiswaResource\Pages;

use App\Filament\Resources\CalonSiswaResource;
use App\Models\CalonSiswa;
use App\Models\JalurPendaftaran;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Provinsi;
use App\Models\Sekolah;
use Carbon\Carbon;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Pages\ViewRecord;
use Filament\Support\Enums\IconPosition;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\HtmlString;
use Torgodly\Html2Media\Actions\Html2MediaAction;

class ViewCalonSiswa extends ViewRecord
{
    protected static string $resource = CalonSiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Formulir
            Html2MediaAction::make('cetak_formulir')
                ->label('Formulir')
                ->outlined()
                ->icon('heroicon-o-printer')
                ->filename(fn ($record) => 'Formulir_'.$record->nama.'_'.$record->nisn.'.pdf')
                ->savePdf()
                ->orientation('portrait')
                ->format('a4', 'mm')
                ->enableLinks()
                ->margin([10, 10, 10, 10])
                ->content(fn ($record) => view('formulir', ['record' => $record]))
                ->visible(function () {
                    $calonSiswa = CalonSiswa::where('nisn', Auth::user()->username)->first();
                    if (! $calonSiswa) {
                        return false;
                    }

                    return ! in_array($calonSiswa->status_pendaftaran, ['Diproses', 'Ditolak', 'Berkas Tidak Lengkap']);
                }),

            // Kartu Tes
            Html2MediaAction::make('cetak_kartu_tes')
                ->label('Kartu Tes')
                ->outlined()
                ->icon('heroicon-o-printer')
                ->filename(fn ($record) => 'Kartu Tes_'.$record->nama.'_'.$record->nisn.'.pdf')
                ->savePdf()
                ->orientation('portrait')
                ->format('a4', 'mm')
                ->enableLinks()
                ->margin([10, 10, 10, 10])
                ->content(fn ($record) => view('kartu-tes', ['record' => $record]))
                ->visible(function () {
                    $calonSiswa = CalonSiswa::where('nisn', Auth::user()->username)->first();

                    if (! $calonSiswa || in_array($calonSiswa->status_pendaftaran, ['Diproses', 'Ditolak', 'Berkas Tidak Lengkap', 'Diterima Di Kelas Reguler', 'Diterima Di Kelas Unggulan'])) {
                        return false;
                    }

                    $tahunPendaftaran = DB::table('tahun_pendaftarans')
                        ->where('status', 'Aktif')
                        ->first();

                    if (! $tahunPendaftaran || ! $tahunPendaftaran->tanggal_penerbitan_kartu_tes_mulai || ! $tahunPendaftaran->tanggal_penerbitan_kartu_tes_selesai) {
                        return false;
                    }

                    return Carbon::now()->between(
                        Carbon::parse($tahunPendaftaran->tanggal_penerbitan_kartu_tes_mulai),
                        Carbon::parse($tahunPendaftaran->tanggal_penerbitan_kartu_tes_selesai)
                    );
                }),

            // SKL/Hasil
            Html2MediaAction::make('cetak_skl')
                ->label('Hasil')
                ->outlined()
                ->icon('heroicon-o-printer')
                ->filename(fn ($record) => 'Hasil_'.$record->nama.'_'.$record->nisn.'.pdf')
                ->savePdf()
                ->orientation('portrait')
                ->format('a4', 'mm')
                ->enableLinks()
                ->margin([10, 10, 10, 10])
                ->content(fn ($record) => view('skl', ['record' => $record]))
                ->visible(function () {
                    $calonSiswa = CalonSiswa::where('nisn', Auth::user()->username)->first();
                    if (! $calonSiswa || in_array($calonSiswa->status_pendaftaran, ['Diproses', 'Diverifikasi', 'Berkas Tidak Lengkap'])) {
                        return false;
                    }
                    $tahunPendaftaran = DB::table('tahun_pendaftarans')->where('status', 'Aktif')->first();
                    if (! $tahunPendaftaran) {
                        return false;
                    }
                    $periodePengumuman = collect([
                        ['tanggal_pengumuman_jalur_prestasi_mulai', 'tanggal_pengumuman_jalur_prestasi_selesai'],
                        ['tanggal_pengumuman_jalur_reguler_mulai', 'tanggal_pengumuman_jalur_reguler_selesai'],
                        ['tanggal_pengumuman_jalur_afirmasi_mulai', 'tanggal_pengumuman_jalur_afirmasi_selesai'],
                        ['tanggal_pengumuman_jalur_zonasi_mulai', 'tanggal_pengumuman_jalur_zonasi_selesai'],
                        ['tanggal_pengumuman_jalur_mutasi_mulai', 'tanggal_pengumuman_jalur_mutasi_selesai'],
                    ])->map(fn ($dates) => [
                        optional($tahunPendaftaran)->{$dates[0]} ? Carbon::parse($tahunPendaftaran->{$dates[0]}) : null,
                        optional($tahunPendaftaran)->{$dates[1]} ? Carbon::parse($tahunPendaftaran->{$dates[1]}) : null,
                    ]);

                    return $periodePengumuman->contains(fn ($range) => now()->between(...$range));
                }),

        ];
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Wizard::make([
                    Step::make('Data Calon Siswa')
                        ->schema([
                            // Section Formulir
                            Section::make('Formulir Pendaftaran')
                                // ->collapsible()
                                ->schema([
                                    // Data Status Pendaftaran Calon Peserta Didik Baru
                                    Select::make('status_pendaftaran')
                                        ->label('Status Pendaftaran')
                                        ->options([
                                            'Diproses' => 'Diproses',
                                            'Berkas Tidak Lengkap' => 'Berkas Tidak Lengkap',
                                            'Diverifikasi' => 'Diverifikasi',
                                            'Ditolak' => 'Ditolak',
                                            'Diterima' => 'Diterima',
                                            'Diterima Di Kelas Reguler' => 'Diterima Di Kelas Reguler',
                                            'Diterima Di Kelas Unggulan' => 'Diterima Di Kelas Unggulan',
                                        ])
                                        ->native(false)
                                        ->live()
                                        ->default('Diproses'),
                                    // Data Kelas Pendaftaran Calon Peserta Didik Baru
                                    Select::make('kelas_id')
                                        ->label('Kelas')
                                        ->relationship('kelas', 'nama')
                                        ->native(false),
                                ])
                                ->visible(Auth::user()->roles->first()->name !== 'peserta')
                                ->columns([
                                    'sm' => '100%',
                                    'md' => 2,
                                    'lg' => 2,
                                    'xl' => 2,
                                    '2xl' => 2,
                                ]),

                            Tabs::make('Biodata')
                                ->tabs([
                                    Tabs\Tab::make('Biodata')
                                        ->icon('heroicon-m-bell')
                                        ->iconPosition(IconPosition::After)
                                        ->schema([
                                            // Jalur Pendaftaran
                                            Select::make('jalur_pendaftaran_id')
                                                ->label('Jalur Pendaftaran')
                                                ->relationship('jalurPendaftaran', 'nama', fn ($query) => $query->where('status', 'Aktif')) // Menampilkan data jalurPendaftaran dengan kondisi statusnya aktif saja
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false)
                                                ->live()
                                                ->getOptionLabelFromRecordUsing(fn (Model $record) => "{$record->nama} | {$record->tahunPendaftaran->nama}"),
                                            // Nama Lengkap Calon Peserta Didik Baru
                                            TextInput::make('nama')
                                                ->label('Nama Lengkap')
                                                ->required()
                                                ->disabledOn('create')
                                                ->dehydrated()
                                                ->default(fn () => Auth::user()->name)
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ]),
                                            // NIK Calon Peserta Didik Baru
                                            TextInput::make('nik')
                                                ->label('Nomor Induk Kependudukan (NIK)')
                                                ->required()
                                                ->unique(ignoreRecord: true)
                                                ->rule(fn ($record) => $record === null ? 'unique:calon_siswas,nik' : 'unique:calon_siswas,nik,'.$record->id)
                                                ->dehydrateStateUsing(fn ($state) => $state ? $state : null)
                                                ->numeric()
                                                ->maxLength(16)
                                                ->minLength(16)
                                                ->validationMessages([
                                                    'max_digits' => 'NIK: Masukkan maksimal 16 Angka.',
                                                    'min_digits' => 'NIK: Masukkan minimal 16 Angka.',
                                                    'unique' => 'NIK: Nomor ini sudah pernah di isi.',
                                                    'required' => 'Form ini wajib diisi.',
                                                ]),
                                            // KK Calon Peserta Didik Baru
                                            TextInput::make('kk')
                                                ->label('Nomor Kartu Keluarga (KK)')
                                                ->required()
                                                ->maxLength(16)
                                                ->numeric()
                                                ->minLength(16)
                                                ->validationMessages([
                                                    'max_digits' => 'NIK: Masukkan maksimal 16 Angka.',
                                                    'min_digits' => 'NIK: Masukkan minimal 16 Angka.',
                                                    'required' => 'Form ini wajib diisi.',
                                                ]),
                                            // NISN Calon Peserta Didik Baru
                                            TextInput::make('nisn')
                                                ->label('Nomor Induk Siswa Nasional (NISN)')
                                                ->required()
                                                ->disabledOn('create')
                                                ->dehydrated()
                                                ->default(fn () => Auth::user()->username)
                                                ->unique(ignoreRecord: true)
                                                ->rule(fn ($record) => $record === null ? 'unique:calon_siswas,nisn' : 'unique:calon_siswas,nisn,'.$record->id)
                                                ->dehydrateStateUsing(fn ($state) => $state ? $state : null)
                                                ->numeric()
                                                ->maxLength(10)
                                                ->minLength(10)
                                                ->validationMessages([
                                                    'max_digits' => 'NISN: Masukkan maksimal 10 Angka.',
                                                    'min_digits' => 'NISN: Masukkan minimal 10 Angka.',
                                                    'unique' => 'NISN: Nomor ini sudah pernah di isi.',
                                                    'required' => 'Form ini wajib diisi.',
                                                ]),
                                            // Tempat Lahir Calon Peserta Didik Baru
                                            TextInput::make('tempat_lahir')
                                                ->label('Tempat Lahir')
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ]),
                                            // Tanggal Lahir Calon Peserta Didik Baru
                                            DatePicker::make('tanggal_lahir')
                                                ->label('Tanggal Lahir')
                                                ->maxDate(now())
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ]),
                                            // Tahun Lulus Calon Peserta Didik Baru
                                            Select::make('tahun_lulus')
                                                ->label('Tahun Lulus')
                                                ->options(function () {
                                                    $tahun = range(date('Y'), date('Y') - 2);

                                                    return array_combine($tahun, $tahun);
                                                })
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false),
                                            // Jenis Kelamin Calon Peserta Didik Baru
                                            Select::make('jenis_kelamin')
                                                ->label('Jenis Kelamin')
                                                ->options([
                                                    'Pria' => 'Laki-laki',
                                                    'Wanita' => 'Perempuan',
                                                ])
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false),
                                            // Golongan Darah Calon Peserta Didik Baru
                                            Select::make('golongan_darah')
                                                ->label('Golongan Darah')
                                                ->options([
                                                    'A-' => 'A-',
                                                    'A+' => 'A+',
                                                    'B-' => 'B-',
                                                    'B+' => 'B+',
                                                    'AB-' => 'AB-',
                                                    'AB+' => 'AB+',
                                                    'O-' => 'O-',
                                                    'O+' => 'O+',
                                                ])
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false),
                                            // Agama Calon Peserta Didik Baru
                                            Select::make('agama')
                                                ->label('Agama')
                                                ->options([
                                                    'Islam' => 'Islam',
                                                    'Kristen Katholik' => 'Kristen Katholik',
                                                    'Kristen Protestan' => 'Kristen Protestan',
                                                    'Hindu' => 'Hindu',
                                                    'Buddha' => 'Buddha',
                                                    'Konghucu' => 'Konghucu',
                                                ])
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false),
                                            // Anak Ke Calon Peserta Didik Baru
                                            TextInput::make('anak_ke')
                                                ->label('Anak Ke')
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->numeric(),
                                            // Jumlah Saudara Calon Peserta Didik Baru
                                            TextInput::make('jumlah_saudara')
                                                ->label('Dari (Jumlah Anak)')
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->numeric(),
                                            // Tinggal Bersama Calon Peserta Didik Baru
                                            Select::make('tinggal_bersama')
                                                ->label('Tinggal Bersama')
                                                ->options([
                                                    'Orang Tua' => 'Orang Tua',
                                                    'Saudara' => 'Saudara',
                                                    'Panti Asuhan' => 'Panti Asuhan',
                                                    'Kost' => 'Kost',
                                                    'Lainnya' => 'Lainnya',
                                                ])
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false),
                                            // Jarak Ke Sekolah Calon Peserta Didik Baru
                                            Select::make('jarak_ke_sekolah')
                                                ->label('Jarak Ke Sekolah')
                                                ->options([
                                                    '0 - 1 Km' => '0 - 1 Km',
                                                    '1 - 5 Km' => '1 - 5 Km',
                                                    '5 - 10 Km' => '5 - 10 Km',
                                                    '10 - 15 Km' => '10 - 15 Km',
                                                    '15 - 20 Km' => '15 - 20 Km',
                                                    '20 - 25 Km' => '20 - 25 Km',
                                                    '25 - 30 Km' => '25 - 30 Km',
                                                ])
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false),
                                            // Disabilitas Calon Peserta Didik Baru
                                            Select::make('disabilitas')
                                                ->label('Disabilitas')
                                                ->options([
                                                    'Non Disabilitas' => 'Non Disabilitas',
                                                    'Fisik' => 'Fisik',
                                                    'Penglihatan' => 'Penglihatan',
                                                    'Pendengaran' => 'Pendengaran',
                                                    'Kognitif' => 'Kognitif',
                                                    'Mental' => 'Mental',
                                                    'Lainnya' => 'Lainnya',
                                                ])
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false),
                                            // Tinggi Badan Calon Peserta Didik Baru
                                            TextInput::make('tinggi_badan')
                                                ->label('Tinggi Badan')
                                                ->postFix('Cm')
                                                ->numeric(),
                                            // Berat Badan Calon Peserta Didik Baru
                                            TextInput::make('berat_badan')
                                                ->label('Berat Badan')
                                                ->postFix('Kg')
                                                ->numeric(),
                                            // No KIP Calon Peserta Didik Baru
                                            TextInput::make('no_kip')
                                                ->label('Nomor Kartu Indonesia Pintar')
                                                ->helperText(new HtmlString('<small><i>Abaikan jika tidak memiliki Kartu Indonesia Pintar (KIP).<sup style="color:red">*</sup></i></small>'))
                                                ->unique(ignoreRecord: true)
                                                ->rule(fn ($record) => $record === null ? 'unique:calon_siswas,no_kip' : 'unique:calon_siswas,no_kip,'.$record->id)
                                                ->dehydrateStateUsing(fn ($state) => $state ? $state : null)
                                                ->maxLength(6)
                                                ->minLength(6)
                                                ->live()
                                                ->validationMessages([
                                                    'max' => 'KIP: Masukkan maksimal 6 Karakter.',
                                                    'min' => 'KIP: Masukkan minimal 6 Karakter.',
                                                    'unique' => 'KIP: Nomor ini sudah pernah di isi.',
                                                ]),
                                            // No KIP Calon Peserta Didik Baru
                                            TextInput::make('no_kks')
                                                ->label('Nomor Kartu Keluarga Sejahtera')
                                                ->helperText(new HtmlString('<small><i>Abaikan jika tidak memiliki Kartu Keluarga Sejahtera (KKS).<sup style="color:red">*</sup></i></small>'))
                                                ->unique(ignoreRecord: true)
                                                ->rule(fn ($record) => $record === null ? 'unique:calon_siswas,no_kks' : 'unique:calon_siswas,no_kks,'.$record->id)
                                                ->dehydrateStateUsing(fn ($state) => $state ? $state : null)
                                                ->maxLength(6)
                                                ->minLength(6)
                                                ->live()
                                                ->validationMessages([
                                                    'max' => 'KKS: Masukkan maksimal 6 Karakter.',
                                                    'min' => 'KKS: Masukkan minimal 6 Karakter.',
                                                    'unique' => 'KKS: Nomor ini sudah pernah di isi.',
                                                ]),
                                            // No KIP Calon Peserta Didik Baru
                                            TextInput::make('no_pkh')
                                                ->label('Nomor Kartu Program Keluarga Harapan')
                                                ->helperText(new HtmlString('<small><i>Abaikan jika tidak memiliki Kartu Program Keluarga Harapan (PKH).<sup style="color:red">*</sup></i></small>'))
                                                ->unique(ignoreRecord: true)
                                                ->rule(fn ($record) => $record === null ? 'unique:calon_siswas,no_pkh' : 'unique:calon_siswas,no_pkh,'.$record->id)
                                                ->dehydrateStateUsing(fn ($state) => $state ? $state : null)
                                                ->maxLength(6)
                                                ->minLength(6)
                                                ->live()
                                                ->validationMessages([
                                                    'max' => 'PKH: Masukkan maksimal 6 Karakter.',
                                                    'min' => 'PKH: Masukkan minimal 6 Karakter.',
                                                    'unique' => 'PKH: Nomor ini sudah pernah di isi.',
                                                ]),
                                            TextInput::make('siswa_telepon')
                                                ->label('Nomor Telepon')
                                                ->numeric()
                                                ->tel(),
                                            // Data Sekolah Asal Calon Peserta Didik Baru
                                            Select::make('sekolah_asal_id')
                                                ->label('Sekolah Asal')
                                                ->relationship('sekolahAsal', 'nama')
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false)
                                                ->searchable()
                                                ->preload()
                                                ->getOptionLabelFromRecordUsing(fn (Model $record) => "{$record->nama} | NPSN: {$record->npsn}")
                                                ->createOptionForm([
                                                    Wizard::make([
                                                        Step::make('Data Instansi')
                                                            ->schema([
                                                                // Section::make('Instansi')
                                                                //     ->schema([
                                                                TextInput::make('nama')
                                                                    ->label('Nama Instansi')
                                                                    ->prefixIcon('heroicon-o-building-library')
                                                                    ->required()
                                                                    ->validationMessages([
                                                                        'required' => 'Form ini wajib diisi.',
                                                                    ])
                                                                    ->columnSpanFull(),
                                                                Select::make('jenjang')
                                                                    ->label('Jenjang')
                                                                    ->native(false)
                                                                    ->required()
                                                                    ->live()
                                                                    ->validationMessages([
                                                                        'required' => 'Form ini wajib diisi.',
                                                                    ])
                                                                    ->options(function () {
                                                                        $sekolah = Sekolah::first(); // Ambil satu instance model Sekolah
                                                                        $jenjang = optional($sekolah)->jenjang; // Menghindari error jika null

                                                                        return match ($jenjang) {
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
                                                                    }),
                                                                TextInput::make('npsn')
                                                                    ->label('NPSN')
                                                                    ->numeric()
                                                                    ->minLength(8)
                                                                    ->maxLength(8)
                                                                    ->required()
                                                                    ->validationMessages([
                                                                        'min_digits' => 'NPSN harus terdiri dari minimal 8 digit.',
                                                                        'max_digits' => 'NPSN tidak boleh lebih dari 8 digit.',
                                                                        'required' => 'Form ini wajib diisi.',
                                                                    ]),
                                                                TextInput::make('nss')
                                                                    ->visible(fn ($get) => in_array($get('jenjang'), ['MI', 'MTS', 'MA']))
                                                                    ->label('NSS/NSM')
                                                                    ->required()
                                                                    ->numeric()
                                                                    ->minLength(12)
                                                                    ->maxLength(12)
                                                                    ->validationMessages([
                                                                        'min_digits' => 'Nomor NSS/NSM harus terdiri dari minimal 12 digit.',
                                                                        'max_digits' => 'Nomor NSS/NSM tidak boleh lebih dari 12 digit.',
                                                                        'required' => 'Form ini wajib diisi.',
                                                                    ]),
                                                                Select::make('akreditasi')
                                                                    ->label('Akreditasi')
                                                                    ->native(false)
                                                                    ->required()
                                                                    ->validationMessages([
                                                                        'required' => 'Form ini wajib diisi.',
                                                                    ])
                                                                    ->options(['A' => 'A (Sangat Baik)', 'B' => 'B (Baik)', 'C' => 'C (Cukup)', 'D' => 'D (Kurang)']),

                                                                Select::make('status')
                                                                    ->label('Status')
                                                                    ->native(false)
                                                                    ->required()
                                                                    ->validationMessages([
                                                                        'required' => 'Form ini wajib diisi.',
                                                                    ])
                                                                    ->options(['NEGERI' => 'NEGERI', 'SWASTA' => 'SWASTA']),
                                                                FileUpload::make('logo')
                                                                    ->label('Logo Instansi')
                                                                    ->image()
                                                                    ->imageEditor()
                                                                    ->imageEditorAspectRatios([
                                                                        null,
                                                                        '1:1' => '1:1',
                                                                    ])
                                                                    ->fetchFileInformation(false)
                                                                    ->directory('assets/instansi-lain')
                                                                    ->downloadable()
                                                                    ->openable()
                                                                    ->maxSize(500)
                                                                    ->minSize(10)
                                                                    ->visibility('private')
                                                                    ->required()
                                                                    ->validationMessages([
                                                                        'required' => 'Form ini wajib diisi.',
                                                                    ]),
                                                            ])
                                                            ->columns([
                                                                'sm' => '100%',
                                                                'md' => 3,
                                                                'lg' => 3,
                                                            ]),
                                                        // ]),
                                                        Step::make('Data Alamat')
                                                            ->schema([
                                                                // Section::make('Alamat')
                                                                //     ->schema([
                                                                Select::make('negara_id')
                                                                    ->label('Negara')
                                                                    ->relationship('negara', 'nama')
                                                                    ->required()
                                                                    ->validationMessages([
                                                                        'required' => 'Form ini wajib diisi.',
                                                                    ])
                                                                    ->native(false)
                                                                    ->preload()
                                                                    ->live()
                                                                    ->afterStateUpdated(function (Set $set) {
                                                                        $set('provinsi_id', null);
                                                                        $set('kabupaten_id', null);
                                                                        $set('kecamatan_id', null);
                                                                        $set('kelurahan_id', null);
                                                                    }),
                                                                Select::make('provinsi_id')
                                                                    ->label('Provinsi')
                                                                    ->options(fn (Get $get): Collection => Provinsi::query()
                                                                        ->where('negara_id', $get('negara_id'))
                                                                        ->pluck('nama', 'id'))
                                                                    ->required()
                                                                    ->validationMessages([
                                                                        'required' => 'Form ini wajib diisi.',
                                                                    ])
                                                                    ->native(false)
                                                                    ->preload()
                                                                    ->live()
                                                                    ->afterStateUpdated(function (Set $set) {
                                                                        $set('kabupaten_id', null);
                                                                        $set('kecamatan_id', null);
                                                                        $set('kelurahan_id', null);
                                                                    }),
                                                                Select::make('kabupaten_id')
                                                                    ->label('Kabupaten/Kota')
                                                                    ->options(fn (Get $get): Collection => Kabupaten::query()
                                                                        ->where('provinsi_id', $get('provinsi_id'))
                                                                        ->pluck('nama', 'id'))
                                                                    ->required()
                                                                    ->validationMessages([
                                                                        'required' => 'Form ini wajib diisi.',
                                                                    ])
                                                                    ->native(false)
                                                                    ->preload()
                                                                    ->live()
                                                                    ->afterStateUpdated(function (Set $set) {
                                                                        $set('kecamatan_id', null);
                                                                        $set('kelurahan_id', null);
                                                                    }),
                                                                Select::make('kecamatan_id')
                                                                    ->label('Kecamatan')
                                                                    ->options(fn (Get $get): Collection => Kecamatan::query()
                                                                        ->where('kabupaten_id', $get('kabupaten_id'))
                                                                        ->pluck('nama', 'id'))
                                                                    ->required()
                                                                    ->validationMessages([
                                                                        'required' => 'Form ini wajib diisi.',
                                                                    ])
                                                                    ->native(false)
                                                                    ->preload()
                                                                    ->live()
                                                                    ->afterStateUpdated(function (Set $set) {
                                                                        $set('kelurahan_id', null);
                                                                    }),
                                                                Select::make('kelurahan_id')
                                                                    ->label('Kelurahan/Desa')
                                                                    ->options(fn (Get $get): Collection => Kelurahan::query()
                                                                        ->where('kecamatan_id', $get('kecamatan_id'))
                                                                        ->pluck('nama', 'id'))
                                                                    ->required()
                                                                    ->validationMessages([
                                                                        'required' => 'Form ini wajib diisi.',
                                                                    ])
                                                                    ->native(false),
                                                                TextInput::make('alamat')
                                                                    ->label('Jalan/Kampung/Dusun')
                                                                    ->required()
                                                                    ->placeholder('KP KEBON CAU RT 001 RW 005')
                                                                    ->validationMessages([
                                                                        'required' => 'Form ini wajib diisi.',
                                                                    ]),
                                                            ])
                                                            ->columns([
                                                                'sm' => '100%',
                                                                'md' => 3,
                                                                'lg' => 3,
                                                            ]),
                                                        // ]),
                                                        Step::make('Data Kontak')
                                                            ->schema([
                                                                // Section::make('Kontak')
                                                                //     ->schema([
                                                                TextInput::make('website')
                                                                    ->label('Website')
                                                                    ->url()
                                                                    ->prefixIcon('heroicon-m-globe-alt')
                                                                    // ->required()
                                                                    // ->validationMessages([
                                                                    //     'required' => 'Form ini wajib diisi.',
                                                                    // ])
                                                                    ->placeholder('https://mtsn1pandeglang.sch.id'),
                                                                TextInput::make('telepon')
                                                                    ->label('Telepon')
                                                                    // ->required()
                                                                    // ->validationMessages([
                                                                    //     'required' => 'Form ini wajib diisi.',
                                                                    // ])
                                                                    ->tel()
                                                                    ->placeholder('08**********')
                                                                    ->prefixIcon('heroicon-m-phone'),
                                                                TextInput::make('email')
                                                                    ->label('Email')
                                                                    // ->required()
                                                                    // ->validationMessages([
                                                                    //     'required' => 'Form ini wajib diisi.',
                                                                    // ])
                                                                    ->placeholder('adm@mtsn1pandeglang.sch.id')
                                                                    ->email()
                                                                    ->prefixIcon('heroicon-m-envelope'),
                                                            ])
                                                            ->columns([
                                                                'sm' => '100%',
                                                                'md' => 3,
                                                                'lg' => 3,
                                                            ]),
                                                        // ]),
                                                    ]),
                                                ]),
                                            // Data Prestasi Calon Peserta Didik Baru
                                            Select::make('prestasi_id')
                                                ->visible(fn ($get) => in_array(optional(JalurPendaftaran::find($get('jalur_pendaftaran_id')))->nama, ['Prestasi']))
                                                ->label('Prestasi')
                                                ->helperText(new HtmlString('<small><i>Pilih prestasi yang paling tinggi jika memiliki lebih dari satu prestasi.</i></small>'))
                                                ->relationship('prestasi', 'nama')
                                                ->preload()
                                                ->createOptionForm([
                                                    // Prestasi
                                                    // Section::make('Prestasi')
                                                    //     ->collapsible()
                                                    //     ->schema([
                                                    Section::make('')
                                                        ->schema([
                                                            TextInput::make('nama')
                                                                ->label('Nama Prestasi')
                                                                ->required()
                                                                ->validationMessages([
                                                                    'required' => 'Form ini wajib diisi.',
                                                                ]),
                                                            Select::make('jenis')
                                                                ->label('Jenis Prestasi')
                                                                ->options([
                                                                    'Hafalan Al-Quran' => 'Hafalan Al-Quran (Minimal 3 Juz)',
                                                                    'Olimpiade/Kejuaraan' => 'Olimpiade/Kejuaraan',
                                                                ])
                                                                ->required()
                                                                ->native(false)
                                                                ->validationMessages([
                                                                    'required' => 'Form ini wajib diisi.',
                                                                ])
                                                                ->live(),
                                                        ])
                                                        ->columns([
                                                            'sm' => '100%',
                                                            'md' => 2,
                                                            'lg' => 2,
                                                        ]),

                                                    Section::make('')
                                                        ->schema([
                                                            Select::make('tingkat')
                                                                ->label('Tingkat')
                                                                ->native(false)
                                                                ->options([
                                                                    'Nasional' => 'Nasional',
                                                                    'Provinsi' => 'Provinsi',
                                                                    'Kabupaten/Kota' => 'Kabupaten/Kota',
                                                                ])
                                                                ->required(fn ($get) => $get('jenis') === 'Olimpiade/Kejuaraan'),
                                                            Select::make('kategori')
                                                                ->label('Kategori')
                                                                ->native(false)
                                                                ->options([
                                                                    'Regu/Kelompok' => 'Regu/Kelompok',
                                                                    'Individu' => 'Individu',
                                                                ])
                                                                ->required(fn ($get) => $get('jenis') === 'Olimpiade/Kejuaraan'),
                                                            Select::make('peringkat')
                                                                ->label('Peringkat')
                                                                ->options([
                                                                    '1' => '1',
                                                                    '2' => '2',
                                                                    '3' => '3',
                                                                ])
                                                                ->required(fn ($get) => $get('jenis') === 'Olimpiade/Kejuaraan'),
                                                        ])
                                                        ->columns([
                                                            'sm' => '100%',
                                                            'md' => 3,
                                                            'lg' => 3,
                                                        ])
                                                        ->visible(fn ($get) => $get('jenis') === 'Olimpiade/Kejuaraan'),
                                                ])
                                                ->columns([
                                                    'sm' => '100%',
                                                    'md' => 3,
                                                    'lg' => 3,
                                                    // ]),
                                                ])
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->getOptionLabelFromRecordUsing(fn (Model $record) => "{$record->jenis} | {$record->nama} | {$record->tingkat} | {$record->kategori} | {$record->peringkat}")
                                                ->searchable()
                                                ->native(false),
                                            // Data Peminatan Ekstrakurikuler Calon Peserta Didik Baru
                                            Select::make('ekstrakurikuler_id')
                                                ->label('Peminatan Ekstrakurikuler')
                                                ->required()
                                                ->searchable()
                                                ->preload()
                                                ->native(false)
                                                ->relationship('ekstrakurikuler', 'nama')
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ]),
                                            // Data Peminatan Pelajaran Calon Peserta Didik Baru
                                            Select::make('mata_pelajaran_id')
                                                ->visible(fn ($get) => in_array(optional(JalurPendaftaran::find($get('jalur_pendaftaran_id')))->nama, ['Prestasi']))
                                                ->label('Peminatan Mata Pelajaran')
                                                ->searchable()
                                                ->preload()
                                                ->required()
                                                ->native(false)
                                                ->relationship('mataPelajaran', 'nama')
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ]),
                                        ]),

                                    // Tab Alamat Calon Peserta Didik Baru
                                    Tabs\Tab::make('Alamat')
                                        ->icon('heroicon-m-bell')
                                        ->iconPosition(IconPosition::After)
                                        ->schema([
                                            // Alamat Calon Peserta Didik Baru
                                            Select::make('siswa_negara_id')
                                                ->label('Negara')
                                                ->relationship('siswaNegara', 'nama')
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false)
                                                ->preload()
                                                ->live()
                                                ->afterStateUpdated(function (Set $set) {
                                                    $set('siswa_provinsi_id', null);
                                                    $set('siswa_kabupaten_id', null);
                                                    $set('siswa_kecamatan_id', null);
                                                    $set('siswa_kelurahan_id', null);
                                                }),
                                            Select::make('siswa_provinsi_id')
                                                ->label('Provinsi')
                                                ->options(fn (Get $get): Collection => Provinsi::query()
                                                    ->where('negara_id', $get('siswa_negara_id'))
                                                    ->pluck('nama', 'id'))
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false)
                                                ->preload()
                                                ->live()
                                                ->afterStateUpdated(function (Set $set) {
                                                    $set('siswa_kabupaten_id', null);
                                                    $set('siswa_kecamatan_id', null);
                                                    $set('siswa_kelurahan_id', null);
                                                }),
                                            Select::make('siswa_kabupaten_id')
                                                ->label('Kabupaten')
                                                ->options(fn (Get $get): Collection => Kabupaten::query()
                                                    ->where('provinsi_id', $get('siswa_provinsi_id'))
                                                    ->pluck('nama', 'id'))
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false)
                                                ->preload()
                                                ->live()
                                                ->afterStateUpdated(function (Set $set) {
                                                    $set('siswa_kecamatan_id', null);
                                                    $set('siswa_kelurahan_id', null);
                                                }),
                                            Select::make('siswa_kecamatan_id')
                                                ->label('Kecamatan')
                                                ->options(fn (Get $get): Collection => Kecamatan::query()
                                                    ->where('kabupaten_id', $get('siswa_kabupaten_id'))
                                                    ->pluck('nama', 'id'))
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false)
                                                ->preload()
                                                ->live()
                                                ->afterStateUpdated(function (Set $set) {
                                                    $set('siswa_kelurahan_id', null);
                                                }),
                                            Select::make('siswa_kelurahan_id')
                                                ->label('Kelurahan')
                                                ->options(fn (Get $get): Collection => Kelurahan::query()
                                                    ->where('kecamatan_id', $get('siswa_kecamatan_id'))
                                                    ->pluck('nama', 'id'))
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false),
                                            TextInput::make('siswa_alamat')
                                                ->label('Jalan/Kampung/Dusun')
                                                ->required()
                                                ->placeholder('KP KEBON CAU RT 001 RW 005')
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ]),
                                        ]),

                                    // Tab Berkas Calon Peserta Didik Baru
                                    Tabs\Tab::make('Berkas')
                                        ->icon('heroicon-m-bell')
                                        ->iconPosition(IconPosition::After)
                                        ->schema([
                                            // Berkas Foto Calon Peserta Didik Baru
                                            FileUpload::make('berkas_foto')
                                                ->label('Foto Latar Merah')
                                                ->image()
                                                ->imageEditor()
                                                ->imageEditorAspectRatios([
                                                    null,
                                                    '1:1' => '1:1',
                                                    '3:4' => '3:4',
                                                ])
                                                ->fetchFileInformation(false)
                                                ->directory(fn ($get) => 'berkas/foto/'.$get('nisn')) // Dinamis berdasarkan NISN
                                                ->downloadable()
                                                ->openable()
                                                ->maxSize(500)
                                                ->minSize(10)
                                                ->visibility('private')
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ]),
                                            // Berkas KK Calon Peserta Didik Baru
                                            FileUpload::make('berkas_kk')
                                                ->label('Kartu Keluarga')
                                                ->image()
                                                ->imageEditor()
                                                ->imageEditorAspectRatios([
                                                    null,
                                                    '1:1' => '1:1',
                                                    '3:4' => '3:4',
                                                ])
                                                ->fetchFileInformation(false)
                                                ->directory(fn ($get) => 'berkas/kk/'.$get('nisn')) // Dinamis berdasarkan NISN
                                                ->downloadable()
                                                ->openable()
                                                ->maxSize(500)
                                                ->minSize(10)
                                                ->visibility('private')
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ]),
                                            // Berkas Akta Calon Peserta Didik Baru
                                            FileUpload::make('berkas_akta')
                                                ->label('Akta Kelahiran')
                                                ->image()
                                                ->imageEditor()
                                                ->imageEditorAspectRatios([
                                                    null,
                                                    '1:1' => '1:1',
                                                    '3:4' => '3:4',
                                                ])
                                                ->fetchFileInformation(false)
                                                ->directory(fn ($get) => 'berkas/akta/'.$get('nisn')) // Dinamis berdasarkan NISN
                                                ->downloadable()
                                                ->openable()
                                                ->maxSize(500)
                                                ->minSize(10)
                                                ->visibility('private')
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ]),

                                            // Berkas NISN Calon Peserta Didik Baru
                                            FileUpload::make('berkas_nisn')
                                                ->label('Kartu NISN/Tangkapan Layar NISN (Web)')
                                                ->image()
                                                ->imageEditor()
                                                ->imageEditorAspectRatios([
                                                    null,
                                                    '1:1' => '1:1',
                                                    '3:4' => '3:4',
                                                ])
                                                ->fetchFileInformation(false)
                                                ->directory(fn ($get) => 'berkas/nisn/'.$get('nisn')) // Dinamis berdasarkan NISN
                                                ->downloadable()
                                                ->openable()
                                                ->maxSize(500)
                                                ->minSize(10)
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->visibility('private'),
                                            // Berkas Surat Keterangan Berkelakuan Baik Calon Peserta Didik Baru
                                            FileUpload::make('berkas_skbb')
                                                ->label('Surat Keterangan Berkelakuan Baik')
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->fetchFileInformation(false)
                                                ->directory(fn ($get) => 'berkas/skbb/'.$get('nisn')) // Dinamis berdasarkan NISN
                                                ->downloadable()
                                                ->openable()
                                                ->acceptedFileTypes(['application/pdf'])
                                                ->maxSize(500)
                                                ->minSize(10)
                                                ->visibility('private'),
                                            // Berkas Surat Keterangan Aktif Belajar Calon Peserta Didik Baru
                                            FileUpload::make('berkas_skab')
                                                ->label('Surat Keterangan Aktif Belajar')
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->fetchFileInformation(false)
                                                ->directory(fn ($get) => 'berkas/skab/'.$get('nisn')) // Dinamis berdasarkan NISN
                                                ->downloadable()
                                                ->openable()
                                                ->acceptedFileTypes(['application/pdf'])
                                                ->maxSize(500)
                                                ->minSize(10)
                                                ->visibility('private'),

                                            // Berkas KIP Calon Peserta Didik Baru
                                            FileUpload::make('berkas_kip')
                                                ->required(fn ($get) => $get('no_kip') !== null)
                                                ->visible(fn ($get) => $get('no_kip') !== null)
                                                ->label('Kartu Indonesia Pintar')
                                                ->helperText(new HtmlString('<small><i>Abaikan jika tidak memiliki Kartu Indonesia Pintar (KIP).<sup style="color:red">*</sup></i></small>'))
                                                ->image()
                                                ->imageEditor()
                                                ->imageEditorAspectRatios([
                                                    null,
                                                    '1:1' => '1:1',
                                                    '3:4' => '3:4',
                                                ])
                                                ->fetchFileInformation(false)
                                                ->directory(fn ($get) => 'berkas/kip/'.$get('nisn')) // Dinamis berdasarkan NISN
                                                ->downloadable()
                                                ->openable()
                                                ->maxSize(500)
                                                ->minSize(10)
                                                ->visibility('private'),
                                            // Berkas KKS Calon Peserta Didik Baru
                                            FileUpload::make('berkas_kks')
                                                ->required(fn ($get) => $get('no_kks') !== null)
                                                ->visible(fn ($get) => $get('no_kks') !== null)
                                                ->label('Kartu Keluarga Sejahtera')
                                                ->helperText(new HtmlString('<small><i>Abaikan jika tidak memiliki Kartu Keluarga Sejahtera (KKS).<sup style="color:red">*</sup></i></small>'))
                                                ->image()
                                                ->imageEditor()
                                                ->imageEditorAspectRatios([
                                                    null,
                                                    '1:1' => '1:1',
                                                    '3:4' => '3:4',
                                                ])
                                                ->fetchFileInformation(false)
                                                ->directory(fn ($get) => 'berkas/kks/'.$get('nisn')) // Dinamis berdasarkan NISN
                                                ->downloadable()
                                                ->openable()
                                                ->maxSize(500)
                                                ->minSize(10)
                                                ->visibility('private'),
                                            // Berkas PKH Calon Peserta Didik Baru
                                            FileUpload::make('berkas_pkh')
                                                ->required(fn ($get) => $get('no_pkh') !== null)
                                                ->visible(fn ($get) => $get('no_pkh') !== null)
                                                ->label('Kartu Program Keluarga Harapan')
                                                ->helperText(new HtmlString('<small><i>Abaikan jika tidak memiliki Kartu Program Keluarga Harapan (PKH).<sup style="color:red">*</sup></i></small>'))
                                                ->image()
                                                ->imageEditor()
                                                ->imageEditorAspectRatios([
                                                    null,
                                                    '1:1' => '1:1',
                                                    '3:4' => '3:4',
                                                ])
                                                ->fetchFileInformation(false)
                                                ->directory(fn ($get) => 'berkas/pkh/'.$get('nisn')) // Dinamis berdasarkan NISN
                                                ->downloadable()
                                                ->openable()
                                                ->maxSize(500)
                                                ->minSize(10)
                                                ->visibility('private'),
                                            // Berkas Prestasi Belajar Calon Peserta Didik Baru
                                            FileUpload::make('berkas_prestasi')
                                                ->required(fn ($get) => in_array(optional(JalurPendaftaran::find($get('jalur_pendaftaran_id')))->nama, ['Prestasi']))
                                                ->visible(fn ($get) => in_array(optional(JalurPendaftaran::find($get('jalur_pendaftaran_id')))->nama, ['Prestasi']))
                                                ->label('Berkas Prestasi')
                                                ->helperText(new HtmlString('<small><i>Gabungkan semua berkas jika memiliki lebih dari satu prestasi.</i></small>'))
                                                ->fetchFileInformation(false)
                                                ->directory(fn ($get) => 'berkas/prestasi/'.$get('nisn')) // Dinamis berdasarkan NISN
                                                ->downloadable()
                                                ->openable()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->acceptedFileTypes(['application/pdf'])
                                                ->maxSize(500)
                                                ->minSize(10)
                                                ->visibility('private'),
                                        ]),

                                ])
                                ->columns([
                                    'sm' => '100%',
                                    'md' => 3,
                                    'lg' => 3,
                                ]),
                        ]),

                    Step::make('Data Orang Tua')
                        ->schema([
                            // Tab Ibu
                            Tabs::make('Data Ibu Kandung')
                                ->tabs([
                                    Tabs\Tab::make('Data Ibu')
                                        ->icon('heroicon-m-bell')
                                        ->iconPosition(IconPosition::After)
                                        ->schema([
                                            // Biodata Ibu Calon Peserta Didik Baru
                                            TextInput::make('ibu_nama')
                                                ->label('Nama Lengkap Ibu Kandung')
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ]),
                                            TextInput::make('ibu_nik')
                                                ->label('NIK Ibu Kandung')
                                                ->required()
                                                ->maxLength(16)
                                                ->minLength(16)
                                                ->numeric()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                    'max_digits' => 'NIK: Masukkan maksimal 16 Angka.',
                                                    'min_digits' => 'NIK: Masukkan minimal 16 Angka.',
                                                ]),

                                            TextInput::make('ibu_telepon')
                                                ->label('Nomor Telepon')
                                                ->numeric()
                                                ->tel()
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ]),
                                            Select::make('ibu_pekerjaan')
                                                ->label('Pekerjaan')
                                                ->options([
                                                    'Tidak Bekerja' => 'Tidak Bekerja',
                                                    'ASN' => 'ASN',
                                                    'TNI/POLRI' => 'TNI/POLRI',
                                                    'Karyawan Swasta' => 'Karyawan Swasta',
                                                    'Pegawai Honorer' => 'Pegawai Honorer',
                                                    'Wirausaha' => 'Wirausaha',
                                                    'Wiraswasta' => 'Wiraswasta',
                                                    'Buruh' => 'Buruh',
                                                ])
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false),

                                            Select::make('ibu_penghasilan')
                                                ->label('Penghasilan Bulanan')
                                                ->options([
                                                    'Kurang dari Rp. 500.000' => 'Kurang dari Rp. 500.000',
                                                    'Rp. 500.000 - Rp. 1.000.000' => 'Rp. 500.000 - Rp. 1.000.000',
                                                    'Rp. 1.000.001 - Rp. 2.000.000' => 'Rp. 1.000.001 - Rp. 2.000.000',
                                                    'Rp. 2.000.001 - Rp. 3.000.000' => 'Rp. 2.000.001 - Rp. 3.000.000',
                                                    'Rp. 3.000.001 - Rp. 4.000.000' => 'Rp. 3.000.001 - Rp. 4.000.000',
                                                    'Rp. 4.000.001 - Rp. 5.000.000' => 'Rp. 4.000.001 - Rp. 5.000.000',
                                                    'Lebih dari Rp. 5.000.000' => 'Lebih dari Rp. 5.000.000',
                                                ])
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false),

                                            Select::make('ibu_pendidikan')
                                                ->label('Pendidikan')
                                                ->options([
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
                                                ])
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false),

                                            Select::make('ibu_status')
                                                ->label('Status')
                                                ->options([
                                                    'Hidup' => 'Hidup',
                                                    'Meninggal' => 'Meninggal',
                                                ])
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false),
                                        ]),

                                    Tabs\Tab::make('Alamat')
                                        ->icon('heroicon-m-bell')
                                        ->iconPosition(IconPosition::After)
                                        ->schema([
                                            Select::make('ibu_negara_id')
                                                ->label('Negara')
                                                ->relationship('ibuNegara', 'nama')
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false)
                                                ->preload()
                                                ->live()
                                                ->afterStateUpdated(function (Set $set) {
                                                    $set('ibu_provinsi_id', null);
                                                    $set('ibu_kabupaten_id', null);
                                                    $set('ibu_kecamatan_id', null);
                                                    $set('ibu_kelurahan_id', null);
                                                }),
                                            Select::make('ibu_provinsi_id')
                                                ->label('Provinsi')
                                                ->options(fn (Get $get): Collection => Provinsi::query()
                                                    ->where('negara_id', $get('ibu_negara_id'))
                                                    ->pluck('nama', 'id'))
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false)
                                                ->preload()
                                                ->live()
                                                ->afterStateUpdated(function (Set $set) {
                                                    $set('ibu_kabupaten_id', null);
                                                    $set('ibu_kecamatan_id', null);
                                                    $set('ibu_kelurahan_id', null);
                                                }),
                                            Select::make('ibu_kabupaten_id')
                                                ->label('Kabupaten')
                                                ->options(fn (Get $get): Collection => Kabupaten::query()
                                                    ->where('provinsi_id', $get('ibu_provinsi_id'))
                                                    ->pluck('nama', 'id'))
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false)
                                                ->preload()
                                                ->live()
                                                ->afterStateUpdated(function (Set $set) {
                                                    $set('ibu_kecamatan_id', null);
                                                    $set('ibu_kelurahan_id', null);
                                                }),
                                            Select::make('ibu_kecamatan_id')
                                                ->label('Kecamatan')
                                                ->options(fn (Get $get): Collection => Kecamatan::query()
                                                    ->where('kabupaten_id', $get('ibu_kabupaten_id'))
                                                    ->pluck('nama', 'id'))
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false)
                                                ->preload()
                                                ->live()
                                                ->afterStateUpdated(function (Set $set) {
                                                    $set('ibu_kelurahan_id', null);
                                                }),
                                            Select::make('ibu_kelurahan_id')
                                                ->label('Kelurahan')
                                                ->options(fn (Get $get): Collection => Kelurahan::query()
                                                    ->where('kecamatan_id', $get('ibu_kecamatan_id'))
                                                    ->pluck('nama', 'id'))
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false),
                                            TextInput::make('ibu_alamat')
                                                ->label('Jalan/Kampung/Dusun')
                                                ->required()
                                                ->placeholder('KP KEBON CAU RT 001 RW 005')
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ]),
                                        ]),
                                ])
                                ->columns([
                                    'sm' => '100%',
                                    'md' => 3,
                                    'lg' => 3,
                                ]),

                            // Tab Ayah
                            Tabs::make('Data Ayah Kandung')
                                ->tabs([
                                    Tabs\Tab::make('Data Ayah')
                                        ->icon('heroicon-m-bell')
                                        ->iconPosition(IconPosition::After)
                                        ->schema([
                                            // Biodata Ayah Calon Peserta Didik Baru
                                            TextInput::make('ayah_nama')
                                                ->label('Nama Lengkap Ayah Kandung')
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ]),
                                            TextInput::make('ayah_nik')
                                                ->label('NIK Ayah Kandung')
                                                ->required()
                                                ->maxLength(16)
                                                ->numeric()
                                                ->minLength(16)
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                    'max_digits' => 'NIK: Masukkan maksimal 16 Angka.',
                                                    'min_digits' => 'NIK: Masukkan minimal 16 Angka.',
                                                ]),
                                            TextInput::make('ayah_telepon')
                                                ->label('Nomor Telepon')
                                                ->numeric()
                                                ->tel()
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ]),
                                            Select::make('ayah_pekerjaan')
                                                ->label('Pekerjaan')
                                                ->options([
                                                    'Tidak Bekerja' => 'Tidak Bekerja',
                                                    'ASN' => 'ASN',
                                                    'TNI/POLRI' => 'TNI/POLRI',
                                                    'Karyawan Swasta' => 'Karyawan Swasta',
                                                    'Pegawai Honorer' => 'Pegawai Honorer',
                                                    'Wirausaha' => 'Wirausaha',
                                                    'Wiraswasta' => 'Wiraswasta',
                                                    'Buruh' => 'Buruh',
                                                ])
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false),

                                            Select::make('ayah_penghasilan')
                                                ->label('Penghasilan Bulanan')
                                                ->options([
                                                    'Kurang dari Rp. 500.000' => 'Kurang dari Rp. 500.000',
                                                    'Rp. 500.000 - Rp. 1.000.000' => 'Rp. 500.000 - Rp. 1.000.000',
                                                    'Rp. 1.000.001 - Rp. 2.000.000' => 'Rp. 1.000.001 - Rp. 2.000.000',
                                                    'Rp. 2.000.001 - Rp. 3.000.000' => 'Rp. 2.000.001 - Rp. 3.000.000',
                                                    'Rp. 3.000.001 - Rp. 4.000.000' => 'Rp. 3.000.001 - Rp. 4.000.000',
                                                    'Rp. 4.000.001 - Rp. 5.000.000' => 'Rp. 4.000.001 - Rp. 5.000.000',
                                                    'Lebih dari Rp. 5.000.000' => 'Lebih dari Rp. 5.000.000',
                                                ])
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false),

                                            Select::make('ayah_pendidikan')
                                                ->label('Pendidikan')
                                                ->options([
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
                                                ])
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false),

                                            Select::make('ayah_status')
                                                ->label('Status')
                                                ->options([
                                                    'Hidup' => 'Hidup',
                                                    'Meninggal' => 'Meninggal',
                                                ])
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false),
                                        ]),

                                    Tabs\Tab::make('Alamat')
                                        ->icon('heroicon-m-bell')
                                        ->iconPosition(IconPosition::After)
                                        ->schema([
                                            Select::make('ayah_negara_id')
                                                ->label('Negara')
                                                ->relationship('ayahNegara', 'nama')
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false)
                                                ->preload()
                                                ->live()
                                                ->afterStateUpdated(function (Set $set) {
                                                    $set('ayah_provinsi_id', null);
                                                    $set('ayah_kabupaten_id', null);
                                                    $set('ayah_kecamatan_id', null);
                                                    $set('ayah_kelurahan_id', null);
                                                }),
                                            Select::make('ayah_provinsi_id')
                                                ->label('Provinsi')
                                                ->options(fn (Get $get): Collection => Provinsi::query()
                                                    ->where('negara_id', $get('ayah_negara_id'))
                                                    ->pluck('nama', 'id'))
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false)
                                                ->preload()
                                                ->live()
                                                ->afterStateUpdated(function (Set $set) {
                                                    $set('ayah_kabupaten_id', null);
                                                    $set('ayah_kecamatan_id', null);
                                                    $set('ayah_kelurahan_id', null);
                                                }),
                                            Select::make('ayah_kabupaten_id')
                                                ->label('Kabupaten')
                                                ->options(fn (Get $get): Collection => Kabupaten::query()
                                                    ->where('provinsi_id', $get('ayah_provinsi_id'))
                                                    ->pluck('nama', 'id'))
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false)
                                                ->preload()
                                                ->live()
                                                ->afterStateUpdated(function (Set $set) {
                                                    $set('ayah_kecamatan_id', null);
                                                    $set('ayah_kelurahan_id', null);
                                                }),
                                            Select::make('ayah_kecamatan_id')
                                                ->label('Kecamatan')
                                                ->options(fn (Get $get): Collection => Kecamatan::query()
                                                    ->where('kabupaten_id', $get('ayah_kabupaten_id'))
                                                    ->pluck('nama', 'id'))
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false)
                                                ->preload()
                                                ->live()
                                                ->afterStateUpdated(function (Set $set) {
                                                    $set('ayah_kelurahan_id', null);
                                                }),
                                            Select::make('ayah_kelurahan_id')
                                                ->label('Kelurahan')
                                                ->options(fn (Get $get): Collection => Kelurahan::query()
                                                    ->where('kecamatan_id', $get('ayah_kecamatan_id'))
                                                    ->pluck('nama', 'id'))
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false),
                                            TextInput::make('ayah_alamat')
                                                ->label('Jalan/Kampung/Dusun')
                                                ->required()
                                                ->placeholder('KP KEBON CAU RT 001 RW 005')
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ]),
                                        ]),
                                ])
                                ->columns([
                                    'sm' => '100%',
                                    'md' => 3,
                                    'lg' => 3,
                                ]),

                            // Tab Wali
                            Tabs::make('Data Wali')
                                ->tabs([
                                    Tabs\Tab::make('Data Wali')
                                        ->icon('heroicon-m-bell')
                                        ->iconPosition(IconPosition::After)
                                        ->schema([
                                            // Biodata Wali Calon Peserta Didik Baru
                                            TextInput::make('wali_nama')
                                                ->label('Nama Lengkap Wali'),
                                            TextInput::make('wali_nik')
                                                ->label('NIK Wali')
                                                ->numeric()
                                                ->maxLength(16)
                                                ->minLength(16)
                                                ->validationMessages([
                                                    'max_digits' => 'NIK: Masukkan maksimal 16 Angka.',
                                                    'min_digits' => 'NIK: Masukkan minimal 16 Angka.',
                                                ]),
                                            TextInput::make('wali_telepon')
                                                ->label('Nomor Telepon')
                                                ->numeric()
                                                ->tel(),
                                            Select::make('wali_pekerjaan')
                                                ->label('Pekerjaan')
                                                ->options([
                                                    'Tidak Bekerja' => 'Tidak Bekerja',
                                                    'ASN' => 'ASN',
                                                    'TNI/POLRI' => 'TNI/POLRI',
                                                    'Karyawan Swasta' => 'Karyawan Swasta',
                                                    'Pegawai Honorer' => 'Pegawai Honorer',
                                                    'Wirausaha' => 'Wirausaha',
                                                    'Wiraswasta' => 'Wiraswasta',
                                                    'Buruh' => 'Buruh',
                                                ])
                                                ->native(false),

                                            Select::make('wali_penghasilan')
                                                ->label('Penghasilan Bulanan')
                                                ->options([
                                                    'Kurang dari Rp. 500.000' => 'Kurang dari Rp. 500.000',
                                                    'Rp. 500.000 - Rp. 1.000.000' => 'Rp. 500.000 - Rp. 1.000.000',
                                                    'Rp. 1.000.001 - Rp. 2.000.000' => 'Rp. 1.000.001 - Rp. 2.000.000',
                                                    'Rp. 2.000.001 - Rp. 3.000.000' => 'Rp. 2.000.001 - Rp. 3.000.000',
                                                    'Rp. 3.000.001 - Rp. 4.000.000' => 'Rp. 3.000.001 - Rp. 4.000.000',
                                                    'Rp. 4.000.001 - Rp. 5.000.000' => 'Rp. 4.000.001 - Rp. 5.000.000',
                                                    'Lebih dari Rp. 5.000.000' => 'Lebih dari Rp. 5.000.000',
                                                ])
                                                ->native(false),

                                            Select::make('wali_pendidikan')
                                                ->label('Pendidikan')
                                                ->options([
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
                                                ])
                                                ->native(false),
                                            Select::make('wali_status')
                                                ->label('Status')
                                                ->options([
                                                    'Hidup' => 'Hidup',
                                                    'Meninggal' => 'Meninggal',
                                                ])
                                                ->native(false),
                                        ]),

                                    Tabs\Tab::make('Alamat')
                                        ->icon('heroicon-m-bell')
                                        ->iconPosition(IconPosition::After)
                                        ->schema([
                                            Select::make('wali_negara_id')
                                                ->label('Negara')
                                                ->relationship('waliNegara', 'nama')
                                                ->native(false)
                                                ->preload()
                                                ->live()
                                                ->afterStateUpdated(function (Set $set) {
                                                    $set('wali_provinsi_id', null);
                                                    $set('wali_kabupaten_id', null);
                                                    $set('wali_kecamatan_id', null);
                                                    $set('wali_kelurahan_id', null);
                                                }),
                                            Select::make('wali_provinsi_id')
                                                ->label('Provinsi')
                                                ->options(fn (Get $get): Collection => Provinsi::query()
                                                    ->where('negara_id', $get('wali_negara_id'))
                                                    ->pluck('nama', 'id'))
                                                ->native(false)
                                                ->preload()
                                                ->live()
                                                ->afterStateUpdated(function (Set $set) {
                                                    $set('wali_kabupaten_id', null);
                                                    $set('wali_kecamatan_id', null);
                                                    $set('wali_kelurahan_id', null);
                                                }),
                                            Select::make('wali_kabupaten_id')
                                                ->label('Kabupaten')
                                                ->options(fn (Get $get): Collection => Kabupaten::query()
                                                    ->where('provinsi_id', $get('wali_provinsi_id'))
                                                    ->pluck('nama', 'id'))
                                                ->native(false)
                                                ->preload()
                                                ->live()
                                                ->afterStateUpdated(function (Set $set) {
                                                    $set('wali_kecamatan_id', null);
                                                    $set('wali_kelurahan_id', null);
                                                }),
                                            Select::make('wali_kecamatan_id')
                                                ->label('Kecamatan')
                                                ->options(fn (Get $get): Collection => Kecamatan::query()
                                                    ->where('kabupaten_id', $get('wali_kabupaten_id'))
                                                    ->pluck('nama', 'id'))
                                                ->native(false)
                                                ->preload()
                                                ->live()
                                                ->afterStateUpdated(function (Set $set) {
                                                    $set('wali_kelurahan_id', null);
                                                }),
                                            Select::make('wali_kelurahan_id')
                                                ->label('Kelurahan')
                                                ->options(fn (Get $get): Collection => Kelurahan::query()
                                                    ->where('kecamatan_id', $get('wali_kecamatan_id'))
                                                    ->pluck('nama', 'id'))
                                                ->native(false),
                                            TextInput::make('wali_alamat')
                                                ->label('Jalan/Kampung/Dusun')
                                                // ->required()
                                                ->placeholder('KP KEBON CAU RT 001 RW 005'),
                                            // ->validationMessages([
                                            //     'required' => 'Form ini wajib diisi.',
                                            // ]),
                                        ]),
                                ])
                                ->columns([
                                    'sm' => '100%',
                                    'md' => 3,
                                    'lg' => 3,
                                ]),
                            // Section Kepemilikan Rumah
                            Section::make('Kepemilikan Rumah')
                                ->icon('heroicon-m-bell')
                                ->iconPosition(IconPosition::After)
                                ->schema([
                                    // Status Kepemilikan Rumah
                                    Select::make('kepemilikan_rumah')
                                        ->label('Status Kepemilikan Rumah')
                                        ->options([
                                            'Rumah Pribadi' => 'Rumah Pribadi',
                                            'Kontrakan' => 'Kontrakan',
                                            'Rumah Dinas' => 'Rumah Dinas',
                                            'Menumpang Saudara' => 'Menumpang Saudara',
                                        ])
                                        ->required()
                                        ->validationMessages([
                                            'required' => 'Form ini wajib diisi.',
                                        ])
                                        ->native(false),
                                ]),
                        ]),
                ])
                    ->columnSpanFull(),
            ]);
    }
}
