<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Get;
use Filament\Forms\Set;
use App\Models\Provinsi;
use Filament\Forms\Form;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\CalonSiswa;
use Filament\Tables\Table;
use Filament\Facades\Filament;
use Filament\Resources\Resource;
use Illuminate\Support\Collection;
use Illuminate\Support\HtmlString;
use Filament\Forms\Components\Tabs;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Select;
// use Torgodly\Html2Media\Actions\Html2MediaAction;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Section;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use Filament\Support\Enums\IconPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CalonSiswaResource\Pages;
use Torgodly\Html2Media\Tables\Actions\Html2MediaAction;

class CalonSiswaResource extends Resource
{
    protected static ?string $model = CalonSiswa::class;

    protected static ?string $navigationLabel = 'Formulir Pendaftaran';

    protected static ?string $label = 'Formulir Pendaftaran';

    protected static ?string $navigationGroup = 'Formulir';

    protected static ?int $navigationSort = 1;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Wizard::make([
                    Wizard\Step::make('Data Calon Siswa')
                        // ->description('Review your basket')
                        ->schema([
                            // Section Formulir
                            Section::make('Formulir Pendaftaran')
                                // ->collapsible()
                                ->schema([
                                    // Data Status Pendaftaran Calon Peserta Didik Baru
                                    Forms\Components\Select::make('status_pendaftaran')
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
                                        ->default('Diproses'),
                                    // Data Kelas Pendaftaran Calon Peserta Didik Baru
                                    Forms\Components\Select::make('kelas_id')
                                        ->label('Kelas')
                                        ->relationship('kelas', 'nama')
                                        ->native(false),
                                ])
                                ->hidden(function () {
                                    return Filament::auth()->user()->email !== 'adm@mtsn1pandeglang.sch.id';
                                }) // Jika Email Bukan 'adm@mtsn1pandeglang.sch.id'
                                ->columns(2),

                            Tabs::make('Biodata')
                                ->tabs([
                                    Tabs\Tab::make('Biodata')
                                        ->icon('heroicon-m-bell')
                                        ->iconPosition(IconPosition::After)
                                        ->schema([
                                            // Jalur Pendaftaran
                                            Forms\Components\Select::make('jalur_pendaftaran_id')
                                                ->label('Jalur Pendaftaran')
                                                ->relationship('jalurPendaftaran', 'nama', fn($query) => $query->where('status', 'Aktif')) // Menampilkan data jalurPendaftaran dengan kondisi statusnya aktif saja
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false)
                                                ->live()
                                                ->getOptionLabelFromRecordUsing(fn(Model $record) => "{$record->nama} | {$record->tahunPendaftaran->nama}"),
                                            // Nama Lengkap Calon Peserta Didik Baru
                                            Forms\Components\TextInput::make('nama')
                                                ->label('Nama Lengkap')
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ]),
                                            // NIK Calon Peserta Didik Baru
                                            Forms\Components\TextInput::make('nik')
                                                ->label('Nomor Induk Kependudukan (NIK)')
                                                ->required()
                                                ->unique(ignoreRecord: true)
                                                ->rule(fn($record) => $record === null ? 'unique:calon_siswas,nik' : 'unique:calon_siswas,nik,' . $record->id)
                                                ->dehydrateStateUsing(fn($state) => $state ? $state : null)
                                                ->maxLength(16)
                                                ->minLength(16)
                                                ->validationMessages([
                                                    'max' => 'NIK: Masukkan maksimal 16 Angka.',
                                                    'min' => 'NIK: Masukkan minimal 16 Angka.',
                                                    'unique' => 'NIK: Nomor ini sudah pernah di isi.',
                                                    'required' => 'Form ini wajib diisi.',
                                                ]),
                                            // KK Calon Peserta Didik Baru
                                            Forms\Components\TextInput::make('kk')
                                                ->label('Nomor Kartu Keluarga (KK)')
                                                ->required()
                                                ->maxLength(16)
                                                ->minLength(16)
                                                ->validationMessages([
                                                    'max' => 'KK: Masukkan maksimal 16 Angka.',
                                                    'min' => 'KK: Masukkan minimal 16 Angka.',
                                                    'required' => 'Form ini wajib diisi.',
                                                ]),
                                            // NISN Calon Peserta Didik Baru
                                            Forms\Components\TextInput::make('nisn')
                                                ->label('Nomor Induk Siswa Nasional (NISN)')
                                                ->required()
                                                ->unique(ignoreRecord: true)
                                                ->rule(fn($record) => $record === null ? 'unique:calon_siswas,nisn' : 'unique:calon_siswas,nisn,' . $record->id)
                                                ->dehydrateStateUsing(fn($state) => $state ? $state : null)
                                                // ->disabledOn('edit')
                                                ->maxLength(10)
                                                ->minLength(10)
                                                ->validationMessages([
                                                    'max' => 'NISN: Masukkan maksimal 10 Angka.',
                                                    'min' => 'NISN: Masukkan minimal 10 Angka.',
                                                    'unique' => 'NISN: Nomor ini sudah pernah di isi.',
                                                    'required' => 'Form ini wajib diisi.',
                                                ]),
                                            // Tempat Lahir Calon Peserta Didik Baru
                                            Forms\Components\TextInput::make('tempat_lahir')
                                                ->label('Tempat Lahir')
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ]),
                                            // Tanggal Lahir Calon Peserta Didik Baru
                                            Forms\Components\DatePicker::make('tanggal_lahir')
                                                ->label('Tanggal Lahir')
                                                ->maxDate(now())
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ]),
                                            // Tahun Lulus Calon Peserta Didik Baru
                                            Forms\Components\Select::make('tahun_lulus')
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
                                            Forms\Components\Select::make('jenis_kelamin')
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
                                            Forms\Components\Select::make('golongan_darah')
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
                                            Forms\Components\Select::make('agama')
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
                                            Forms\Components\TextInput::make('anak_ke')
                                                ->label('Anak Ke')
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->numeric(),
                                            // Jumlah Saudara Calon Peserta Didik Baru
                                            Forms\Components\TextInput::make('jumlah_saudara')
                                                ->label('Dari (Jumlah Saudara)')
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->numeric(),
                                            // Tinggal Bersama Calon Peserta Didik Baru
                                            Forms\Components\Select::make('tinggal_bersama')
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
                                            Forms\Components\Select::make('jarak_ke_sekolah')
                                                ->label('Jarak Ke Sekolah')
                                                ->options([
                                                    '0 - 1 Km' => '0 - 1 Km',
                                                    '1 - 5 Km' => '1 - 5 Km',
                                                    '5 - 10 Km' => '5 - 10 Km',
                                                    '10 - 50 Km' => '10 - 50 Km',
                                                    '50 - 100 Km' => '50 - 100 Km',
                                                ])
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false),
                                            // Disabilitas Calon Peserta Didik Baru
                                            Forms\Components\Select::make('disabilitas')
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
                                            Forms\Components\TextInput::make('tinggi_badan')
                                                ->label('Tinggi Badan')
                                                ->postFix('Cm')
                                                ->numeric(),
                                            // Berat Badan Calon Peserta Didik Baru
                                            Forms\Components\TextInput::make('berat_badan')
                                                ->label('Berat Badan')
                                                ->postFix('Kg')
                                                ->numeric(),
                                            // No KIP Calon Peserta Didik Baru
                                            Forms\Components\TextInput::make('no_kip')
                                                ->label('Nomor Kartu Indonesia Pintar')
                                                ->helperText(new HtmlString('<small><i>Abaikan jika tidak memiliki Kartu Indonesia Pintar (KIP).<sup style="color:red">*</sup></i></small>'))
                                                ->unique(ignoreRecord: true)
                                                ->rule(fn($record) => $record === null ? 'unique:calon_siswas,no_kip' : 'unique:calon_siswas,no_kip,' . $record->id)
                                                ->dehydrateStateUsing(fn($state) => $state ? $state : null)
                                                // ->disabledOn('edit')
                                                ->maxLength(6)
                                                ->minLength(6)
                                                ->validationMessages([
                                                    'max' => 'KIP: Masukkan maksimal 6 Karakter.',
                                                    'min' => 'KIP: Masukkan minimal 6 Karakter.',
                                                    'unique' => 'KIP: Nomor ini sudah pernah di isi.',
                                                ]),
                                            Forms\Components\TextInput::make('siswa_telepon')
                                                ->label('Nomor Telepon')
                                                ->tel(),
                                            // Data Sekolah Asal Calon Peserta Didik Baru
                                            Forms\Components\Select::make('sekolah_asal_id')
                                                ->label('Sekolah Asal')
                                                ->relationship('sekolahAsal', 'nama')
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false)
                                                ->searchable()
                                                ->preload()
                                                ->getOptionLabelFromRecordUsing(fn(Model $record) => "{$record->nama} | NPSN: {$record->npsn}")
                                                ->createOptionForm([
                                                    Section::make('Instansi')
                                                        ->collapsible()
                                                        ->schema([
                                                            Forms\Components\TextInput::make('nama')
                                                                ->label('Nama Instansi')
                                                                ->required()
                                                                ->validationMessages([
                                                                    'required' => 'Form ini wajib diisi.',
                                                                ]),
                                                            Forms\Components\TextInput::make('npsn')
                                                                ->label('Nomor Pokok Sekolah Nasional'),
                                                            Forms\Components\TextInput::make('nss')
                                                                ->label('Nomor Statistik Sekolah'),
                                                            Forms\Components\Select::make('jenjang')
                                                                ->label('Jenjang')
                                                                ->options(['PAUD' => 'PAUD', 'TK' => 'TK', 'SD' => 'SD', 'MI' => 'MI', 'SMP' => 'SMP', 'MTS' => 'MTS', 'SMA' => 'SMA', 'SMK' => 'SMK', 'MA' => 'MA']),
                                                            Forms\Components\Select::make('status')
                                                                ->label('Status')
                                                                ->options(['NEGERI' => 'NEGERI', 'SWASTA' => 'SWASTA']),
                                                            Forms\Components\Select::make('akreditasi')
                                                                ->label('Akreditasi')
                                                                ->options(['A' => 'A', 'B' => 'B', 'C' => 'C', 'D' => 'D']),
                                                            Forms\Components\FileUpload::make('logo')
                                                                ->label('Logo')
                                                                ->image()
                                                                ->imageEditor()
                                                                ->imageEditorAspectRatios([
                                                                    null,
                                                                    '1:1' => '1:1',
                                                                ])
                                                                ->fetchFileInformation(false)
                                                                ->directory('assets/instansi-lain')
                                                                ->downloadable()
                                                                ->maxSize(500)
                                                                ->minSize(10)
                                                                ->visibility('private')
                                                                ->required()
                                                                ->validationMessages([
                                                                    'required' => 'Form ini wajib diisi.',
                                                                ])
                                                                ->columnSpanFull(),
                                                        ])
                                                        ->columns([
                                                            'sm' => '100%',
                                                            'md' => 2,
                                                            'lg' => 4,
                                                        ]),

                                                    // Alamat
                                                    Section::make('Alamat')
                                                        ->collapsible()
                                                        ->schema([
                                                            Forms\Components\TextInput::make('alamat')
                                                                ->label('Alamat')
                                                                ->required()
                                                                ->validationMessages([
                                                                    'required' => 'Form ini wajib diisi.',
                                                                ]),
                                                            Forms\Components\Select::make('negara_id')
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
                                                            Forms\Components\Select::make('provinsi_id')
                                                                ->label('Provinsi')
                                                                ->options(fn(Get $get): Collection => Provinsi::query()
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
                                                            Forms\Components\Select::make('kabupaten_id')
                                                                ->label('Kabupaten')
                                                                ->options(fn(Get $get): Collection => Kabupaten::query()
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
                                                            Forms\Components\Select::make('kecamatan_id')
                                                                ->label('Kecamatan')
                                                                ->options(fn(Get $get): Collection => Kecamatan::query()
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
                                                            Forms\Components\Select::make('kelurahan_id')
                                                                ->label('Kelurahan')
                                                                ->options(fn(Get $get): Collection => Kelurahan::query()
                                                                    ->where('kecamatan_id', $get('kecamatan_id'))
                                                                    ->pluck('nama', 'id'))
                                                                ->required()
                                                                ->validationMessages([
                                                                    'required' => 'Form ini wajib diisi.',
                                                                ])
                                                                ->native(false),
                                                        ])
                                                        ->columns([
                                                            'sm' => '100%',
                                                            'md' => 3,
                                                            'lg' => 3,
                                                        ]),

                                                    // Kontak
                                                    Section::make('Kontak')
                                                        ->collapsible()
                                                        ->schema([
                                                            Forms\Components\TextInput::make('website')
                                                                ->label('Website'),
                                                            Forms\Components\TextInput::make('telepon')
                                                                ->label('Telepon')
                                                                ->tel(),
                                                            Forms\Components\TextInput::make('email')
                                                                ->label('Email')
                                                                ->email(),
                                                        ])
                                                        ->columns([
                                                            'sm' => '100%',
                                                            'md' => 3,
                                                            'lg' => 3,
                                                        ]),
                                                ]),
                                            // Data Prestasi Calon Peserta Didik Baru
                                            Forms\Components\Select::make('prestasi_id')
                                                ->label('Prestasi')
                                                ->helperText(new HtmlString('<small><i>Abaikan jika Jalur Pendaftaran yang dipilih bukan Jalur Prestasi.<sup style="color:red">*</sup></i></small>'))
                                                ->relationship('prestasi', 'nama')
                                                // ->multiple() // array tipe data
                                                ->preload()
                                                ->createOptionForm([
                                                    // Prestasi
                                                    Section::make('Prestasi')
                                                        ->collapsible()
                                                        ->schema([
                                                            Section::make('')
                                                                ->schema([
                                                                    Forms\Components\TextInput::make('nama')
                                                                        ->label('Nama Prestasi')
                                                                        ->required()
                                                                        ->validationMessages([
                                                                            'required' => 'Form ini wajib diisi.',
                                                                        ]),
                                                                    Forms\Components\Select::make('jenis')
                                                                        ->label('Jenis Prestasi')
                                                                        ->options([
                                                                            'Hafalan Al-Quran' => 'Hafalan Al-Quran (Minimal 3 Juz)',
                                                                            'Olimpiade/Kejuaraan' => 'Olimpiade/Kejuaraan',
                                                                        ])
                                                                        ->required()
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
                                                                    Forms\Components\Select::make('tingkat')
                                                                        ->label('Tingkat')
                                                                        ->options([
                                                                            'Nasional' => 'Nasional',
                                                                            'Provinsi' => 'Provinsi',
                                                                            'Kabupaten/Kota' => 'Kabupaten/Kota',
                                                                        ])
                                                                        ->required(fn($get) => $get('jenis') === 'Olimpiade/Kejuaraan'),
                                                                    Forms\Components\Select::make('kategori')
                                                                        ->label('Kategori')
                                                                        ->options([
                                                                            'Regu/Kelompok' => 'Regu/Kelompok',
                                                                            'Individu' => 'Individu',
                                                                        ])
                                                                        ->required(fn($get) => $get('jenis') === 'Olimpiade/Kejuaraan'),
                                                                    Forms\Components\Select::make('peringkat')
                                                                        ->label('Peringkat')
                                                                        ->options([
                                                                            '1' => '1',
                                                                            '2' => '2',
                                                                            '3' => '3',
                                                                        ])
                                                                        ->required(fn($get) => $get('jenis') === 'Olimpiade/Kejuaraan'),
                                                                ])
                                                                ->columns([
                                                                    'sm' => '100%',
                                                                    'md' => 3,
                                                                    'lg' => 3,
                                                                ])
                                                                ->visible(fn($get) => $get('jenis') === 'Olimpiade/Kejuaraan'),
                                                        ])
                                                        ->columns([
                                                            'sm' => '100%',
                                                            'md' => 3,
                                                            'lg' => 3,
                                                        ]),
                                                ])
                                                ->getOptionLabelFromRecordUsing(fn(Model $record) => "{$record->nama} | {$record->tingkat} | {$record->kategori} | {$record->peringkat}")
                                                ->native(false),
                                            // Data Peminatan Ekstrakurikuler Calon Peserta Didik Baru
                                            Forms\Components\Select::make('peminatan_ekstrakurikuler')
                                                ->label('Peminatan Ekstrakurikuler')
                                                ->required()
                                                ->options([
                                                    'Pramuka' => 'Pramuka',
                                                    'Paskibra' => 'Paskibra',
                                                    'Kesehatan' => 'Kesehatan',
                                                    'Kerohanian' => 'Kerohanian',
                                                    'Kesenian' => 'Kesenian',
                                                    'Kebersihan' => 'Kebersihan',
                                                    'Olahraga Footsal' => 'Olahraga Footsal',
                                                    'Olahraga Bulu Tangkis' => 'Olahraga Bulu Tangkis',
                                                    'Olahraga Voli' => 'Olahraga Voli',
                                                    'Olahraga Renang' => 'Olahraga Renang',
                                                ])
                                                // ->multiple() // Aktifkan multiple select

                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ]),
                                            // Data Peminatan Pelajaran Calon Peserta Didik Baru
                                            Forms\Components\Select::make('peminatan_pelajaran')
                                                ->label('Peminatan Mata Pelajaran')
                                                ->required()
                                                // ->multiple() // array tipe data

                                                ->options([
                                                    'IPA' => 'IPA',
                                                    'IPS' => 'IPS',
                                                    'Matematika' => 'Matematika',
                                                    'Bahasa Indonesia' => 'Bahasa Indonesia',
                                                    'Bahasa Inggris' => 'Bahasa Inggris',
                                                    'Bahasa Arab' => 'Bahasa Arab',
                                                    'Lainnya' => 'Lainnya',
                                                ])
                                                // ->relationship('mataPelajaran', 'nama')
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
                                            Forms\Components\Select::make('siswa_negara_id')
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
                                            Forms\Components\Select::make('siswa_provinsi_id')
                                                ->label('Provinsi')
                                                ->options(fn(Get $get): Collection => Provinsi::query()
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
                                            Forms\Components\Select::make('siswa_kabupaten_id')
                                                ->label('Kabupaten')
                                                ->options(fn(Get $get): Collection => Kabupaten::query()
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
                                            Forms\Components\Select::make('siswa_kecamatan_id')
                                                ->label('Kecamatan')
                                                ->options(fn(Get $get): Collection => Kecamatan::query()
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
                                            Forms\Components\Select::make('siswa_kelurahan_id')
                                                ->label('Kelurahan')
                                                ->options(fn(Get $get): Collection => Kelurahan::query()
                                                    ->where('kecamatan_id', $get('siswa_kecamatan_id'))
                                                    ->pluck('nama', 'id'))
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false),
                                            Forms\Components\TextInput::make('siswa_alamat')
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
                                            Forms\Components\FileUpload::make('berkas_foto')
                                                ->label('Foto Latar Merah')
                                                ->image()
                                                ->imageEditor()
                                                ->imageEditorAspectRatios([
                                                    null,
                                                    '1:1' => '1:1',
                                                    '3:4' => '3:4',
                                                ])
                                                ->fetchFileInformation(false)
                                                ->directory(fn($get) => 'berkas/foto/' . $get('nisn')) // Dinamis berdasarkan NISN
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
                                            Forms\Components\FileUpload::make('berkas_kk')
                                                ->label('Kartu Keluarga')
                                                ->image()
                                                ->imageEditor()
                                                ->imageEditorAspectRatios([
                                                    null,
                                                    '1:1' => '1:1',
                                                    '3:4' => '3:4',
                                                ])
                                                ->fetchFileInformation(false)
                                                ->directory(fn($get) => 'berkas/kk/' . $get('nisn')) // Dinamis berdasarkan NISN
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
                                            Forms\Components\FileUpload::make('berkas_akta')
                                                ->label('Akta Kelahiran')
                                                ->image()
                                                ->imageEditor()
                                                ->imageEditorAspectRatios([
                                                    null,
                                                    '1:1' => '1:1',
                                                    '3:4' => '3:4',
                                                ])
                                                ->fetchFileInformation(false)
                                                ->directory(fn($get) => 'berkas/akta/' . $get('nisn')) // Dinamis berdasarkan NISN
                                                ->downloadable()
                                                ->openable()
                                                ->maxSize(500)
                                                ->minSize(10)
                                                ->visibility('private')
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ]),
                                            // Berkas KIP Calon Peserta Didik Baru
                                            Forms\Components\FileUpload::make('berkas_kip')
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
                                                ->directory(fn($get) => 'berkas/kip/' . $get('nisn')) // Dinamis berdasarkan NISN
                                                ->downloadable()
                                                ->openable()
                                                ->maxSize(500)
                                                ->minSize(10)
                                                ->visibility('private'),
                                            // Berkas NISN Calon Peserta Didik Baru
                                            Forms\Components\FileUpload::make('berkas_nisn')
                                                ->label('Kartu NISN/Tangkapan Layar NISN (Web)')
                                                ->image()
                                                ->imageEditor()
                                                ->imageEditorAspectRatios([
                                                    null,
                                                    '1:1' => '1:1',
                                                    '3:4' => '3:4',
                                                ])
                                                ->fetchFileInformation(false)
                                                ->directory(fn($get) => 'berkas/nisn/' . $get('nisn')) // Dinamis berdasarkan NISN
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
                                            Forms\Components\FileUpload::make('berkas_skbb')
                                                ->label('Surat Keterangan Berkelakuan Baik')
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->fetchFileInformation(false)
                                                ->directory(fn($get) => 'berkas/skbb/' . $get('nisn')) // Dinamis berdasarkan NISN
                                                ->downloadable()
                                                ->openable()
                                                ->acceptedFileTypes(['application/pdf'])
                                                ->maxSize(500)
                                                ->minSize(10)
                                                ->visibility('private'),
                                            // Berkas Surat Keterangan Aktif Belajar Calon Peserta Didik Baru
                                            Forms\Components\FileUpload::make('berkas_skab')
                                                ->label('Surat Keterangan Aktif Belajar')
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->fetchFileInformation(false)
                                                ->directory(fn($get) => 'berkas/skab/' . $get('nisn')) // Dinamis berdasarkan NISN
                                                ->downloadable()
                                                ->openable()
                                                ->acceptedFileTypes(['application/pdf'])
                                                ->maxSize(500)
                                                ->minSize(10)
                                                ->visibility('private'),
                                            // Berkas Prestasi Belajar Calon Peserta Didik Baru
                                            Forms\Components\FileUpload::make('berkas_prestasi')
                                                ->label('Berkas Prestasi')
                                                ->helperText(new HtmlString('<small><i>Gabungkan semua berkas jika memiliki lebih dari satu prestasi.<br>Abaikan jika Jalur Pendaftaran yang dipilih bukan Jalur Prestasi.<sup style="color:red">*</sup></i></small>'))
                                                ->fetchFileInformation(false)
                                                ->directory(fn($get) => 'berkas/prestasi/' . $get('nisn')) // Dinamis berdasarkan NISN
                                                ->downloadable()
                                                ->openable()
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



                    Wizard\Step::make('Data Orang Tua')
                        // ->description('Review your basket')
                        ->schema([
                            // Tab Ibu
                            Tabs::make('Data Ibu Kandung')
                                ->tabs([
                                    Tabs\Tab::make('Data Ibu')
                                        ->icon('heroicon-m-bell')
                                        ->iconPosition(IconPosition::After)
                                        ->schema([
                                            // Biodata Ibu Calon Peserta Didik Baru
                                            Forms\Components\TextInput::make('ibu_nama')
                                                ->label('Nama Lengkap Ibu Kandung')
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ]),
                                            Forms\Components\TextInput::make('ibu_telepon')
                                                ->label('Nomor Telepon')
                                                ->tel()
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ]),
                                            Forms\Components\TextInput::make('ibu_pekerjaan')
                                                ->label('Pekerjaan'),
                                            Forms\Components\Select::make('ibu_status')
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
                                            Forms\Components\Select::make('ibu_negara_id')
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
                                            Forms\Components\Select::make('ibu_provinsi_id')
                                                ->label('Provinsi')
                                                ->options(fn(Get $get): Collection => Provinsi::query()
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
                                            Forms\Components\Select::make('ibu_kabupaten_id')
                                                ->label('Kabupaten')
                                                ->options(fn(Get $get): Collection => Kabupaten::query()
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
                                            Forms\Components\Select::make('ibu_kecamatan_id')
                                                ->label('Kecamatan')
                                                ->options(fn(Get $get): Collection => Kecamatan::query()
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
                                            Forms\Components\Select::make('ibu_kelurahan_id')
                                                ->label('Kelurahan')
                                                ->options(fn(Get $get): Collection => Kelurahan::query()
                                                    ->where('kecamatan_id', $get('ibu_kecamatan_id'))
                                                    ->pluck('nama', 'id'))
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false),
                                            Forms\Components\TextInput::make('ibu_alamat')
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
                                            Forms\Components\TextInput::make('ayah_nama')
                                                ->label('Nama Lengkap Ayah Kandung')
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ]),
                                            Forms\Components\TextInput::make('ayah_telepon')
                                                ->label('Nomor Telepon')
                                                ->tel()
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ]),
                                            Forms\Components\TextInput::make('ayah_pekerjaan')
                                                ->label('Pekerjaan'),
                                            Forms\Components\Select::make('ayah_status')
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
                                            Forms\Components\Select::make('ayah_negara_id')
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
                                            Forms\Components\Select::make('ayah_provinsi_id')
                                                ->label('Provinsi')
                                                ->options(fn(Get $get): Collection => Provinsi::query()
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
                                            Forms\Components\Select::make('ayah_kabupaten_id')
                                                ->label('Kabupaten')
                                                ->options(fn(Get $get): Collection => Kabupaten::query()
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
                                            Forms\Components\Select::make('ayah_kecamatan_id')
                                                ->label('Kecamatan')
                                                ->options(fn(Get $get): Collection => Kecamatan::query()
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
                                            Forms\Components\Select::make('ayah_kelurahan_id')
                                                ->label('Kelurahan')
                                                ->options(fn(Get $get): Collection => Kelurahan::query()
                                                    ->where('kecamatan_id', $get('ayah_kecamatan_id'))
                                                    ->pluck('nama', 'id'))
                                                ->required()
                                                ->validationMessages([
                                                    'required' => 'Form ini wajib diisi.',
                                                ])
                                                ->native(false),
                                            Forms\Components\TextInput::make('ayah_alamat')
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
                                            Forms\Components\TextInput::make('wali_nama')
                                                ->label('Nama Lengkap Wali'),
                                            Forms\Components\TextInput::make('wali_telepon')
                                                ->label('Nomor Telepon')
                                                ->tel(),
                                            Forms\Components\TextInput::make('wali_pekerjaan')
                                                ->label('Pekerjaan'),
                                            Forms\Components\Select::make('wali_status')
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
                                            Forms\Components\Select::make('wali_negara_id')
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
                                            Forms\Components\Select::make('wali_provinsi_id')
                                                ->label('Provinsi')
                                                ->options(fn(Get $get): Collection => Provinsi::query()
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
                                            Forms\Components\Select::make('wali_kabupaten_id')
                                                ->label('Kabupaten')
                                                ->options(fn(Get $get): Collection => Kabupaten::query()
                                                    ->where('provinsi_id', $get('wali_provinsi_id'))
                                                    ->pluck('nama', 'id'))
                                                ->native(false)
                                                ->preload()
                                                ->live()
                                                ->afterStateUpdated(function (Set $set) {
                                                    $set('wali_kecamatan_id', null);
                                                    $set('wali_kelurahan_id', null);
                                                }),
                                            Forms\Components\Select::make('wali_kecamatan_id')
                                                ->label('Kecamatan')
                                                ->options(fn(Get $get): Collection => Kecamatan::query()
                                                    ->where('kabupaten_id', $get('wali_kabupaten_id'))
                                                    ->pluck('nama', 'id'))
                                                ->native(false)
                                                ->preload()
                                                ->live()
                                                ->afterStateUpdated(function (Set $set) {
                                                    $set('wali_kelurahan_id', null);
                                                }),
                                            Forms\Components\Select::make('wali_kelurahan_id')
                                                ->label('Kelurahan')
                                                ->options(fn(Get $get): Collection => Kelurahan::query()
                                                    ->where('kecamatan_id', $get('wali_kecamatan_id'))
                                                    ->pluck('nama', 'id'))
                                                ->native(false),
                                            Forms\Components\TextInput::make('wali_alamat')
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
                        ]),


                    Wizard\Step::make('Data Tes')
                        ->hidden(function () {
                            return Filament::auth()->user()->email !== 'adm@mtsn1pandeglang.sch.id';
                        }) // Jika Email Bukan 'adm@mtsn1pandeglang.sch.id'
                        // ->description('Review your basket')
                        ->schema([
                            // Section Data Tes
                            Section::make('Data Tes')
                                ->visible(fn($get) => $get('jalur_pendaftaran_id') !== null)
                                ->hidden(function () {
                                    return Filament::auth()->user()->email !== 'adm@mtsn1pandeglang.sch.id';
                                }) // Jika Email Bukan 'adm@mtsn1pandeglang.sch.id'
                                // ->collapsible()
                                ->schema([
                                    // Tab Cetak Kartu Calon Peserta Didik Baru
                                    Tabs::make('Data Kartu Tes')
                                        ->tabs([
                                            Tabs\Tab::make('Data Kartu Tes')
                                                ->icon('heroicon-m-bell')
                                                ->iconPosition(IconPosition::After)
                                                ->schema([
                                                    // Data Kartu Tes
                                                    Forms\Components\TextInput::make('tes_sesi')
                                                        ->label('Sesi Tes'),
                                                    Forms\Components\TextInput::make('tes_ruang')
                                                        ->label('Ruang Tes'),
                                                    Forms\Components\DateTimePicker::make('tes_akademik_mulai')
                                                        ->label('Tanggal Mulai Tes Akademik'),
                                                    Forms\Components\DateTimePicker::make('tes_akademik_selesai')
                                                        ->label('Tanggal Selesai Tes Akademik'),
                                                    Forms\Components\DateTimePicker::make('tes_praktik_mulai')
                                                        ->label('Tanggal Mulai Tes Praktik'),
                                                    Forms\Components\DateTimePicker::make('tes_praktik_selesai')
                                                        ->label('Tanggal Selesai Tes Praktik'),
                                                ]),
                                        ])
                                        ->columns([
                                            'sm' => '100%',
                                            'md' => 2,
                                            'lg' => 2,
                                        ]),

                                    // Tab Nilai Calon Peserta Didik Baru
                                    Tabs::make('Data Nilai Tes')
                                        // ->hidden()
                                        ->tabs([
                                            Tabs\Tab::make('Data Nilai Tes')
                                                ->icon('heroicon-m-bell')
                                                ->iconPosition(IconPosition::After)
                                                ->schema([
                                                    // Data Nilai Tes Akademik IPA Calon Peserta Didik Baru
                                                    Forms\Components\TextInput::make('nilai_ipa')
                                                        ->label('Nilai Tes IPA')
                                                        ->numeric(),
                                                    // Data Nilai Tes Akademik IPS Calon Peserta Didik Baru
                                                    Forms\Components\TextInput::make('nilai_ips')
                                                        ->label('Nilai Tes IPS')
                                                        ->numeric(),
                                                    // Data Nilai Tes Akademik Matematika Calon Peserta Didik Baru
                                                    Forms\Components\TextInput::make('nilai_matematika')
                                                        ->label('Nilai Tes Matematika')
                                                        ->numeric(),
                                                    // Data Nilai Tes Akademik Bahasa Indonesia Calon Peserta Didik Baru
                                                    Forms\Components\TextInput::make('nilai_indonesia')
                                                        ->label('Nilai Tes Bahasa Indonesia')
                                                        ->numeric(),
                                                    // Data Nilai Tes Akademik Bahasa Inggris Calon Peserta Didik Baru
                                                    Forms\Components\TextInput::make('nilai_inggris')
                                                        ->label('Nilai Tes Bahasa Inggris')
                                                        ->numeric(),
                                                    // Data Nilai Tes Akademik Bahasa Arab Calon Peserta Didik Baru
                                                    Forms\Components\TextInput::make('nilai_arab')
                                                        ->label('Nilai Tes Bahasa Arab')
                                                        ->numeric(),
                                                    // Data Bobot Nilai Tes Akademik Calon Peserta Didik Baru
                                                    Forms\Components\TextInput::make('bobot_nilai_akademik')
                                                        ->label('Bobot Nilai Tes Akademik')
                                                        ->numeric(),
                                                    // Data Bobot Nilai Tes Praktik Calon Peserta Didik Baru
                                                    Forms\Components\TextInput::make('bobot_nilai_praktik')
                                                        ->label('Bobot Nilai Tes Praktik')
                                                        ->numeric(),
                                                    // Data Nilai Tes Akademik Calon Peserta Didik Baru
                                                    Forms\Components\TextInput::make('nilai_akademik')
                                                        ->label('Nilai Tes Akademik')
                                                        ->numeric(),
                                                    // Data Nilai Tes Praktik Calon Peserta Didik Baru
                                                    Forms\Components\TextInput::make('nilai_praktik')
                                                        ->label('Nilai Tes Praktik')
                                                        ->numeric(),
                                                ]),
                                        ])
                                        ->columns([
                                            'sm' => '100%',
                                            'md' => 2,
                                            'lg' => 2,
                                        ]),
                                ])
                                ->columns([
                                    'sm' => '100%',
                                    'md' => '100%',
                                    'lg' => 2,
                                ]),
                        ]),
                ])
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            // ->recordTitleAttribute('nama')
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama Lengkap')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nik')
                    ->label('NIK')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kk')
                    ->label('KK')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nisn')
                    ->label('NISN')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tempat_lahir')
                    ->label('Tempat Lahir')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_lahir')
                    ->label('Tanggal Lahir')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tahun_lulus')
                    ->label('Tahun Lulus')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jenis_kelamin')
                    ->label('Jenis Kelamin')
                    ->searchable(),
                Tables\Columns\TextColumn::make('golongan_darah')
                    ->label('Golongan Darah')
                    ->searchable(),
                Tables\Columns\TextColumn::make('agama')
                    ->label('Agama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('anak_ke')
                    ->label('Anak Ke')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_saudara')
                    ->label('Jumlah Saudara')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tinggal_bersama')
                    ->label('Tinggal Bersama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jarak_ke_sekolah')
                    ->label('Jarak Ke Sekolah')
                    ->searchable(),
                Tables\Columns\TextColumn::make('disabilitas')
                    ->label('Disabilitas')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tinggi_badan')
                    ->label('Tinggi Badan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('berat_badan')
                    ->label('Berat Badan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('no_kip')
                    ->label('Nomor KIP')
                    ->searchable(),
                Tables\Columns\TextColumn::make('siswa_telepon')
                    ->label('Telepon')
                    ->searchable(),
                Tables\Columns\TextColumn::make('siswa_alamat')
                    ->label('Alamat')
                    ->wrap()
                    ->words(10)
                    ->tooltip(function (TextColumn $column): ?string {
                        $state = $column->getState();
                        if (strlen($state) <= $column->getCharacterLimit()) {
                            return null;
                        }

                        return $state;
                    })
                    ->searchable(),
                Tables\Columns\TextColumn::make('siswaKelurahan.nama')
                    ->label('Kelurahan')
                    ->sortable(),
                Tables\Columns\TextColumn::make('siswaKecamatan.nama')
                    ->label('Kecamatan')
                    ->sortable(),
                Tables\Columns\TextColumn::make('siswaKabupaten.nama')
                    ->label('Kabupaten')
                    ->sortable(),
                Tables\Columns\TextColumn::make('siswaProvinsi.nama')
                    ->label('Provinsi')
                    ->sortable(),
                Tables\Columns\TextColumn::make('siswaNegara.nama')
                    ->label('Negara')
                    ->sortable(),
                Tables\Columns\TextColumn::make('berkas_foto')
                    ->label('Foto')
                    ->searchable(),
                Tables\Columns\TextColumn::make('berkas_kk')
                    ->label('KK')
                    ->searchable(),
                Tables\Columns\TextColumn::make('berkas_akta')
                    ->label('Akta')
                    ->searchable(),
                Tables\Columns\TextColumn::make('berkas_kip')
                    ->label('KIP')
                    ->searchable(),
                Tables\Columns\TextColumn::make('berkas_nisn')
                    ->label('NISN')
                    ->searchable(),
                Tables\Columns\TextColumn::make('berkas_skbb')
                    ->label('SKBB')
                    ->searchable(),
                Tables\Columns\TextColumn::make('berkas_skab')
                    ->label('SKAB')
                    ->searchable(),
                // Tables\Columns\TextColumn::make('berkas_prestasi')
                //     ->label('Bukti Prestasi')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('berkas_prestasi')
                //     ->label('Bukti Prestasi')
                //     ->searchable()
                //     ->getStateUsing(function ($record) {
                //         // Decode JSON menjadi array
                //         $berkasPrestasi = json_decode($record->berkas_prestasi, true);

                //         // Pastikan nilai tidak kosong atau null
                //         if (!is_array($berkasPrestasi) || empty($berkasPrestasi)) {
                //             return 'Tidak ada bukti prestasi';
                //         }

                //         // Gabungkan nilai array menjadi string yang dipisahkan koma
                //         return implode(', ', $berkasPrestasi);
                //     }),
                Tables\Columns\TextColumn::make('ibu_nama')
                    ->label('Nama Ibu')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ibu_telepon')
                    ->label('Telepon Ibu')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ibu_pekerjaan')
                    ->label('Pekerjaan Ibu')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ibu_status')
                    ->label('Status Ibu')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ibu_alamat')
                    ->label('Alamat Ibu')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ibuNegara.nama')
                    ->label('Negara')
                    ->sortable(),
                Tables\Columns\TextColumn::make('ibuProvinsi.nama')
                    ->label('Provinsi')
                    ->sortable(),
                Tables\Columns\TextColumn::make('ibuKabupaten.nama')
                    ->label('Kabupaten')
                    ->sortable(),
                Tables\Columns\TextColumn::make('ibuKecamatan.nama')
                    ->label('Kecamatan')
                    ->sortable(),
                Tables\Columns\TextColumn::make('ibuKelurahan.nama')
                    ->label('Kelurahan')
                    ->sortable(),
                Tables\Columns\TextColumn::make('ayah_nama')
                    ->label('Nama Ayah')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ayah_telepon')
                    ->label('Telepon Ayah')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ayah_pekerjaan')
                    ->label('Pekerjaan Ayah')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ayah_status')
                    ->label('Status Ayah')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ayah_alamat')
                    ->label('Alamat Ayah')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ayahNegara.nama')
                    ->label('Negara')
                    ->sortable(),
                Tables\Columns\TextColumn::make('ayahProvinsi.nama')
                    ->label('Provinsi')
                    ->sortable(),
                Tables\Columns\TextColumn::make('ayahKabupaten.nama')
                    ->label('Kabupaten')
                    ->sortable(),
                Tables\Columns\TextColumn::make('ayahKecamatan.nama')
                    ->label('Kecamatan')
                    ->sortable(),
                Tables\Columns\TextColumn::make('ayahKelurahan.nama')
                    ->label('Kelurahan')
                    ->sortable(),
                Tables\Columns\TextColumn::make('wali_nama')
                    ->label('Nama Wali')
                    ->searchable(),
                Tables\Columns\TextColumn::make('wali_telepon')
                    ->label('Telepon Wali')
                    ->searchable(),
                Tables\Columns\TextColumn::make('wali_pekerjaan')
                    ->label('Pekerjaan Wali')
                    ->searchable(),
                Tables\Columns\TextColumn::make('wali_status')
                    ->label('Status Wali')
                    ->searchable(),
                Tables\Columns\TextColumn::make('wali_alamat')
                    ->label('Alamat Wali')
                    ->searchable(),
                Tables\Columns\TextColumn::make('waliNegara.nama')
                    ->label('Negara')
                    ->sortable(),
                Tables\Columns\TextColumn::make('waliProvinsi.nama')
                    ->label('Provinsi')
                    ->sortable(),
                Tables\Columns\TextColumn::make('waliKabupaten.nama')
                    ->label('Kabupaten')
                    ->sortable(),
                Tables\Columns\TextColumn::make('waliKecamatan.nama')
                    ->label('Kecamatan')
                    ->sortable(),
                Tables\Columns\TextColumn::make('waliKelurahan.nama')
                    ->label('Kelurahan')
                    ->sortable(),
                Tables\Columns\TextColumn::make('sekolahAsal.nama')
                    ->label('Sekolah Asal')
                    ->sortable(),
                Tables\Columns\TextColumn::make('jalurPendaftaran.nama')
                    ->label('Jalur Pendaftaran')
                    ->sortable(),
                Tables\Columns\TextColumn::make('prestasi.nama')
                    ->label('Nama Prestasi')
                    ->sortable(),
                // Tables\Columns\TextColumn::make('peminatan_ekstrakurikuler')
                //     ->label('Peminatan Ekstrakurikuler')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('peminatan_pelajaran')
                //     ->label('Peminatan Pelajaran')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('peminatan_ekstrakurikuler')
                //     ->label('Peminatan Ekstrakurikuler')
                //     ->searchable()
                //     ->getStateUsing(function ($record) {
                //         // Decode JSON menjadi array
                //         $peminatanEkstrakurikuler = json_decode($record->peminatan_ekstrakurikuler, true);

                //         // Pastikan nilai tidak kosong atau null
                //         if (!is_array($peminatanEkstrakurikuler) || empty($peminatanEkstrakurikuler)) {
                //             return 'Tidak ada peminatan';
                //         }

                //         // Gabungkan nilai array menjadi string, dipisahkan koma
                //         return implode(', ', $peminatanEkstrakurikuler);
                //     }),
                // Tables\Columns\TextColumn::make('peminatan_pelajaran')
                //     ->label('Peminatan Pelajaran')
                //     ->searchable()
                //     ->getStateUsing(function ($record) {
                //         // Decode JSON menjadi array
                //         $peminatanPelajaran = json_decode($record->peminatan_pelajaran, true);

                //         // Pastikan nilai tidak kosong atau null
                //         if (!is_array($peminatanPelajaran) || empty($peminatanPelajaran)) {
                //             return 'Tidak ada peminatan';
                //         }

                //         // Gabungkan nilai array menjadi string, dipisahkan koma
                //         return implode(', ', $peminatanPelajaran);
                //     }),

                Tables\Columns\TextColumn::make('nilai_ipa')
                    ->label('Nilai IPA')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nilai_ips')
                    ->label('Nilai IPS')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nilai_matematika')
                    ->label('Nilai Matematika')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nilai_indonesia')
                    ->label('Nilai Bahasa Indonesia')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nilai_inggris')
                    ->label('Nilai Bahasa Inggris')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nilai_arab')
                    ->label('Nilai Bahasa Arab')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bobot_nilai_akademik')
                    ->label('Bobot Nilai Akademik')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bobot_nilai_praktik')
                    ->label('Bobot Nilai Praktik')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nilai_akademik')
                    ->label('Nilai Akademik')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nilai_praktik')
                    ->label('Nilai Praktik')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status_pendaftaran')
                    ->label('Status Pendaftaran')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kelas.nama')
                    ->label('Kelas')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tes_sesi')
                    ->label('Sesi Tes')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tes_ruang')
                    ->label('Ruang Tes')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tes_akademik_mulai')
                    ->label('Mulai Tes Akademik')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tes_akademik_selesai')
                    ->label('Selesai Tes Akademik')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tes_praktik_mulai')
                    ->label('Mulai Tes Praktik')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tes_praktik_selesai')
                    ->label('Selesai Tes Praktik')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Diubah')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->label('Dihapus')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])

            ->filters([
                Tables\Filters\TrashedFilter::make()
                    ->visible(Auth::user()->email === 'adm@mtsn1pandeglang.sch.id'),
                SelectFilter::make('status_pendaftaran')
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
                    ->visible(Auth::user()->email === 'adm@mtsn1pandeglang.sch.id')
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                    Tables\Actions\ForceDeleteAction::make(),
                    Tables\Actions\RestoreAction::make(),

                    // Action Print
                    Html2MediaAction::make('formulir')
                        ->label('Cetak Formulir')
                        ->icon('heroicon-o-rectangle-stack')
                        ->scale(2)
                        ->print() // Enable print option
                        ->preview() // Enable preview option
                        ->filename('formulir.pdf') // Custom file name
                        ->savePdf() // Enable save as PDF option
                        ->requiresConfirmation() // Show confirmation modal
                        // ->pagebreak('section', ['css', 'legacy'])
                        ->orientation('portrait') // Portrait orientation
                        ->format('a4', 'mm') // A4 format with mm units
                        ->enableLinks() // Enable links in PDF
                        ->margin([10, 20, 10, 20]) // Set custom margins
                        ->content(fn($record) => view('formulir', ['record' => $record])), // Set content
                ]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                    Tables\Actions\ExportBulkAction::make()
                        ->exporter(CalonSiswa::class),
                ]),

                BulkAction::make('set_status_pendaftaran')
                    ->label('Set Status Pendaftaran')
                    ->icon('heroicon-o-building-storefront')
                    ->color('success')
                    ->requiresConfirmation()
                    ->form([
                        Select::make('status_pendaftaran')
                            ->label('Status')
                            ->options([
                                'Diproses' => 'Diproses',
                                'Berkas Tidak Lengkap' => 'Berkas Tidak Lengkap',
                                'Diverifikasi' => 'Diverifikasi',
                                'Ditolak' => 'Ditolak',
                                'Diterima' => 'Diterima',
                                'Diterima Di Kelas Reguler' => 'Diterima Di Kelas Reguler',
                                'Diterima Di Kelas Unggulan' => 'Diterima Di Kelas Unggulan',
                            ])
                            ->required(),
                    ])
                    ->action(function (Collection $records, array $data) {
                        $records->each(function ($record) use ($data) {
                            CalonSiswa::where('id', $record->id)->update([
                                'status_pendaftaran' => $data['status_pendaftaran'],
                            ]);
                        });
                    }),

            ])
            ->striped()
            ->filtersLayout(FiltersLayout::AboveContentCollapsible)
            ->paginationPageOptions([10, 25, 50]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCalonSiswas::route('/'),
            'create' => Pages\CreateCalonSiswa::route('/create'),
            'view' => Pages\ViewCalonSiswa::route('/{record}'),
            'edit' => Pages\EditCalonSiswa::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}
