<?php

namespace App\Filament\Resources;

use Carbon\Carbon;
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
use Filament\Support\Colors\Color;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\HtmlString;
use Filament\Forms\Components\Tabs;
use Filament\Tables\Grouping\Group;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Section;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Support\Enums\IconPosition;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Actions\ExportAction;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\Wizard\Step;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Filters\TrashedFilter;
use App\Filament\Exports\CalonSiswaExporter;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Forms\Components\Actions\Action;
use Filament\Forms\Components\DateTimePicker;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\ExportBulkAction;
use Filament\Tables\Actions\RestoreBulkAction;
use Filament\Tables\Actions\ForceDeleteBulkAction;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CalonSiswaResource\Pages;
use Torgodly\Html2Media\Tables\Actions\Html2MediaAction;

class CalonSiswaResource extends Resource
{
    protected static ?string $model = CalonSiswa::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Formulir Pendaftaran';

    protected static ?string $label = 'Formulir Pendaftaran';

    protected static ?string $slug = 'formulir';

    // protected static ?string $navigationGroup = 'Formulir';

    protected static ?int $navigationSort = 1;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-identification';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Wizard::make()
                    ->schema([
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
                                    ->hidden(function () {
                                        return Filament::auth()->user()->username !== 'administrator';
                                    })
                                    ->columns(2),

                                Tabs::make('Biodata')
                                    ->tabs([
                                        Tabs\Tab::make('Biodata')
                                            ->icon('heroicon-m-bell')
                                            ->iconPosition(IconPosition::After)
                                            ->schema([
                                                // Jalur Pendaftaran
                                                Select::make('jalur_pendaftaran_id')
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
                                                TextInput::make('nama')
                                                    ->label('Nama Lengkap')
                                                    ->required()
                                                    ->dehydrated()
                                                    ->default(fn() => Auth::user()->name)
                                                    ->validationMessages([
                                                        'required' => 'Form ini wajib diisi.',
                                                    ]),
                                                // NIK Calon Peserta Didik Baru
                                                TextInput::make('nik')
                                                    ->label('Nomor Induk Kependudukan (NIK)')
                                                    ->required()
                                                    ->unique(ignoreRecord: true)
                                                    ->rule(fn($record) => $record === null ? 'unique:calon_siswas,nik' : 'unique:calon_siswas,nik,' . $record->id)
                                                    ->dehydrateStateUsing(fn($state) => $state ? $state : null)
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
                                                    ->dehydrated()
                                                    ->default(fn() => Auth::user()->username)
                                                    ->unique(ignoreRecord: true)
                                                    ->rule(fn($record) => $record === null ? 'unique:calon_siswas,nisn' : 'unique:calon_siswas,nisn,' . $record->id)
                                                    ->dehydrateStateUsing(fn($state) => $state ? $state : null)
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
                                                    ->rule(fn($record) => $record === null ? 'unique:calon_siswas,no_kip' : 'unique:calon_siswas,no_kip,' . $record->id)
                                                    ->dehydrateStateUsing(fn($state) => $state ? $state : null)
                                                    ->maxLength(6)
                                                    ->minLength(6)
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
                                                    ->rule(fn($record) => $record === null ? 'unique:calon_siswas,no_kks' : 'unique:calon_siswas,no_kks,' . $record->id)
                                                    ->dehydrateStateUsing(fn($state) => $state ? $state : null)
                                                    ->maxLength(6)
                                                    ->minLength(6)
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
                                                    ->rule(fn($record) => $record === null ? 'unique:calon_siswas,no_pkh' : 'unique:calon_siswas,no_pkh,' . $record->id)
                                                    ->dehydrateStateUsing(fn($state) => $state ? $state : null)
                                                    ->maxLength(6)
                                                    ->minLength(6)
                                                    ->validationMessages([
                                                        'max' => 'PKH: Masukkan maksimal 6 Karakter.',
                                                        'min' => 'PKH: Masukkan minimal 6 Karakter.',
                                                        'unique' => 'PKH: Nomor ini sudah pernah di isi.',
                                                    ]),
                                                TextInput::make('siswa_telepon')
                                                    ->label('Nomor Telepon')
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
                                                    ->getOptionLabelFromRecordUsing(fn(Model $record) => "{$record->nama} | NPSN: {$record->npsn}")
                                                    ->createOptionForm([
                                                        Section::make('Instansi')
                                                            ->collapsible()
                                                            ->schema([
                                                                TextInput::make('nama')
                                                                    ->label('Nama Instansi')
                                                                    ->required()
                                                                    ->validationMessages([
                                                                        'required' => 'Form ini wajib diisi.',
                                                                    ]),
                                                                TextInput::make('npsn')
                                                                    ->required()
                                                                    ->validationMessages([
                                                                        'required' => 'Form ini wajib diisi.',
                                                                    ])
                                                                    ->label('Nomor Pokok Sekolah Nasional'),
                                                                TextInput::make('nss')
                                                                    ->required()
                                                                    ->validationMessages([
                                                                        'required' => 'Form ini wajib diisi.',
                                                                    ])
                                                                    ->label('Nomor Statistik Sekolah'),
                                                                Select::make('jenjang')
                                                                    ->required()
                                                                    ->validationMessages([
                                                                        'required' => 'Form ini wajib diisi.',
                                                                    ])
                                                                    ->label('Jenjang')
                                                                    // ->options(['PAUD' => 'PAUD', 'TK' => 'TK', 'SD' => 'SD', 'MI' => 'MI', 'SMP' => 'SMP', 'MTS' => 'MTS', 'SMA' => 'SMA', 'SMK' => 'SMK', 'MA' => 'MA']),
                                                                    ->options(['SD' => 'SD', 'MI' => 'MI']),
                                                                Select::make('status')
                                                                    ->required()
                                                                    ->validationMessages([
                                                                        'required' => 'Form ini wajib diisi.',
                                                                    ])
                                                                    ->label('Status')
                                                                    ->options(['NEGERI' => 'NEGERI', 'SWASTA' => 'SWASTA']),
                                                                Select::make('akreditasi')
                                                                    ->label('Akreditasi')
                                                                    ->required()
                                                                    ->validationMessages([
                                                                        'required' => 'Form ini wajib diisi.',
                                                                    ])
                                                                    ->options(['A' => 'A', 'B' => 'B', 'C' => 'C', 'D' => 'D']),
                                                                FileUpload::make('logo')
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
                                                                'md' => 3,
                                                                'lg' => 3,
                                                            ]),

                                                        // Alamat
                                                        Section::make('Alamat')
                                                            ->collapsible()
                                                            ->schema([
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
                                                                Select::make('kabupaten_id')
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
                                                                Select::make('kecamatan_id')
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
                                                                Select::make('kelurahan_id')
                                                                    ->label('Kelurahan')
                                                                    ->options(fn(Get $get): Collection => Kelurahan::query()
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

                                                        // Kontak
                                                        Section::make('Kontak')
                                                            ->collapsible()
                                                            ->schema([
                                                                TextInput::make('website')
                                                                    ->required()
                                                                    ->validationMessages([
                                                                        'required' => 'Form ini wajib diisi.',
                                                                    ])
                                                                    ->label('Website'),
                                                                TextInput::make('telepon')
                                                                    ->required()
                                                                    ->validationMessages([
                                                                        'required' => 'Form ini wajib diisi.',
                                                                    ])
                                                                    ->label('Telepon')
                                                                    ->tel(),
                                                                TextInput::make('email')
                                                                    ->required()
                                                                    ->validationMessages([
                                                                        'required' => 'Form ini wajib diisi.',
                                                                    ])
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
                                                Select::make('prestasi_id')
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
                                                                            ->required(fn($get) => $get('jenis') === 'Olimpiade/Kejuaraan'),
                                                                        Select::make('kategori')
                                                                            ->label('Kategori')
                                                                            ->native(false)
                                                                            ->options([
                                                                                'Regu/Kelompok' => 'Regu/Kelompok',
                                                                                'Individu' => 'Individu',
                                                                            ])
                                                                            ->required(fn($get) => $get('jenis') === 'Olimpiade/Kejuaraan'),
                                                                        Select::make('peringkat')
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
                                                    ->getOptionLabelFromRecordUsing(fn(Model $record) => "{$record->jenis} | {$record->nama} | {$record->tingkat} | {$record->kategori} | {$record->peringkat}")
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
                                                Select::make('siswa_kabupaten_id')
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
                                                Select::make('siswa_kecamatan_id')
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
                                                Select::make('siswa_kelurahan_id')
                                                    ->label('Kelurahan')
                                                    ->options(fn(Get $get): Collection => Kelurahan::query()
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
                                                FileUpload::make('berkas_kip')
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
                                                // Berkas KKS Calon Peserta Didik Baru
                                                FileUpload::make('berkas_kks')
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
                                                    ->directory(fn($get) => 'berkas/kks/' . $get('nisn')) // Dinamis berdasarkan NISN
                                                    ->downloadable()
                                                    ->openable()
                                                    ->maxSize(500)
                                                    ->minSize(10)
                                                    ->visibility('private'),
                                                // Berkas PKH Calon Peserta Didik Baru
                                                FileUpload::make('berkas_pkh')
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
                                                    ->directory(fn($get) => 'berkas/pkh/' . $get('nisn')) // Dinamis berdasarkan NISN
                                                    ->downloadable()
                                                    ->openable()
                                                    ->maxSize(500)
                                                    ->minSize(10)
                                                    ->visibility('private'),
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
                                                FileUpload::make('berkas_skbb')
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
                                                FileUpload::make('berkas_skab')
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
                                                FileUpload::make('berkas_prestasi')
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
                                                Select::make('ibu_kabupaten_id')
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
                                                Select::make('ibu_kecamatan_id')
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
                                                Select::make('ibu_kelurahan_id')
                                                    ->label('Kelurahan')
                                                    ->options(fn(Get $get): Collection => Kelurahan::query()
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
                                                Select::make('ayah_kabupaten_id')
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
                                                Select::make('ayah_kecamatan_id')
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
                                                Select::make('ayah_kelurahan_id')
                                                    ->label('Kelurahan')
                                                    ->options(fn(Get $get): Collection => Kelurahan::query()
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
                                                Select::make('wali_kabupaten_id')
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
                                                Select::make('wali_kecamatan_id')
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
                                                Select::make('wali_kelurahan_id')
                                                    ->label('Kelurahan')
                                                    ->options(fn(Get $get): Collection => Kelurahan::query()
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

                        Step::make('Data Tes')
                            ->hidden(function () {
                                return Filament::auth()->user()->username !== 'administrator';
                            })
                            ->schema([
                                // Section Data Tes
                                Section::make('Data Tes')
                                    ->visible(fn($get) => $get('jalur_pendaftaran_id') !== null)
                                    ->hidden(function () {
                                        return Filament::auth()->user()->username !== 'administrator';
                                    })
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
                                                        TextInput::make('tes_sesi')
                                                            ->label('Sesi Tes'),
                                                        TextInput::make('tes_ruang')
                                                            ->label('Ruang Tes'),
                                                        DateTimePicker::make('tes_akademik')
                                                            ->label('Tanggal Tes Akademik'),
                                                        DateTimePicker::make('tes_praktik')
                                                            ->label('Tanggal Tes Praktik'),
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
                                                        TextInput::make('nilai_ipa')
                                                            ->label('Nilai Tes IPA')
                                                            ->numeric(),
                                                        // Data Nilai Tes Akademik IPS Calon Peserta Didik Baru
                                                        TextInput::make('nilai_ips')
                                                            ->label('Nilai Tes IPS')
                                                            ->numeric(),
                                                        // Data Nilai Tes Akademik Matematika Calon Peserta Didik Baru
                                                        TextInput::make('nilai_matematika')
                                                            ->label('Nilai Tes Matematika')
                                                            ->numeric(),
                                                        // Data Nilai Tes Akademik Bahasa Indonesia Calon Peserta Didik Baru
                                                        TextInput::make('nilai_indonesia')
                                                            ->label('Nilai Tes Bahasa Indonesia')
                                                            ->numeric(),
                                                        // Data Nilai Tes Akademik Bahasa Inggris Calon Peserta Didik Baru
                                                        TextInput::make('nilai_inggris')
                                                            ->label('Nilai Tes Bahasa Inggris')
                                                            ->numeric(),
                                                        // Data Nilai Tes Akademik Bahasa Arab Calon Peserta Didik Baru
                                                        TextInput::make('nilai_arab')
                                                            ->label('Nilai Tes Bahasa Arab')
                                                            ->numeric(),
                                                        // Data Bobot Nilai Tes Akademik Calon Peserta Didik Baru
                                                        TextInput::make('bobot_nilai_akademik')
                                                            ->label('Bobot Nilai Tes Akademik')
                                                            ->numeric(),
                                                        // Data Bobot Nilai Tes Praktik Calon Peserta Didik Baru
                                                        TextInput::make('bobot_nilai_praktik')
                                                            ->label('Bobot Nilai Tes Praktik')
                                                            ->numeric(),
                                                        // Data Nilai Tes Akademik Calon Peserta Didik Baru
                                                        TextInput::make('nilai_akademik')
                                                            ->label('Nilai Tes Akademik')
                                                            ->numeric(),
                                                        // Data Nilai Tes Praktik Calon Peserta Didik Baru
                                                        TextInput::make('nilai_praktik')
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
                            ])
                            ->columnSpanFull(),

                    ])
                    ->columnSpanFull()
                    ->submitAction(
                        Action::make('close')
                            ->label('Tutup')
                            ->url(CalonSiswaResource::getUrl('index')) // Redirect langsung ke URL
                            ->color('danger')
                            ->button()
                            ->outlined()
                    ),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->groups([
                Group::make('jalurPendaftaran.nama')
                    ->label('Jalur Pendaftaran'),
                Group::make('status_pendaftaran')
                    ->label('Status Pendaftaran'),
                // Group::make('kelas.nama')
                //     ->label('Kelas'),
            ])
            ->columns([
                ImageColumn::make('berkas_foto')
                    ->label('Foto')
                    ->circular()
                    ->searchable(),

                TextColumn::make('jalurPendaftaran.nama')
                    ->label('Jalur Pendaftaran')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'Reguler' => 'success',
                        'Prestasi' => 'primary',
                        'Afirmasi' => 'warning',
                        'Zonasi' => 'danger',
                        'Mutasi' => 'info',
                    })
                    ->icon(fn(string $state): string => match ($state) {
                        'Reguler' => 'heroicon-o-sparkles',
                        'Prestasi' => 'heroicon-o-trophy',
                        'Afirmasi' => 'heroicon-o-gift',
                        'Zonasi' => 'heroicon-o-map',
                        'Mutasi' => 'heroicon-o-arrows-right-left',
                    })
                    ->sortable(),

                TextColumn::make('status_pendaftaran')
                    ->label('Status Pendaftaran')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'Diproses' => 'warning',
                        'Diverifikasi' => 'success',
                        'Berkas Tidak Lengkap' => 'warning',
                        'Ditolak' => 'danger',
                        'Diterima' => 'success',
                        'Diterima Di Kelas Reguler' => 'success',
                        'Diterima Di Kelas Unggulan' => 'primary',
                    })
                    ->icon(fn(string $state): string => match ($state) {
                        'Diproses' => 'heroicon-o-arrow-path',
                        'Diverifikasi' => 'heroicon-o-clipboard-document-check',
                        'Berkas Tidak Lengkap' => 'heroicon-o-document-minus',
                        'Ditolak' => 'heroicon-o-no-symbol',
                        'Diterima' => 'heroicon-o-check-circle',
                        'Diterima Di Kelas Reguler' => 'heroicon-o-shield-check',
                        'Diterima Di Kelas Unggulan' => 'heroicon-o-shield-check',
                    })
                    ->sortable(),

                TextColumn::make('kelas.nama')
                    ->label('Diterima Di Kelas')
                    ->badge()
                    ->icon('heroicon-o-building-storefront')
                    ->visible(function () {
                        $tahunPendaftaran = DB::table('tahun_pendaftarans')
                            ->where('status', 'Aktif')
                            ->first();

                        if (! $tahunPendaftaran || empty($tahunPendaftaran->tanggal_registrasi_berkas_selesai)) {
                            // Jika data tidak ada atau tanggal kosong, kembalikan false
                            return false;
                        }

                        $currentDate = Carbon::now();
                        $berkasDate = Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_registrasi_berkas_selesai));

                        if ($currentDate->gte($berkasDate) || Auth::user()->username === 'administrator') {
                            return true;
                        }

                        return false;
                    })
                    ->sortable(),

                TextColumn::make('nama')
                    ->label('Nama Lengkap')
                    ->searchable(),

                TextColumn::make('jenis_kelamin')
                    ->label('Jenis Kelamin')
                    ->searchable(),

                TextColumn::make('nik')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('NIK')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('kk')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('KK')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('nisn')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('NISN')
                    ->searchable(),
                TextColumn::make('sekolahAsal.nama')
                    ->label('Sekolah Asal')
                    ->sortable(),
                TextColumn::make('tempat_lahir')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Tempat Lahir')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('tanggal_lahir')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Tanggal Lahir')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->date('d F Y H:i:s')
                    ->sortable(),
                TextColumn::make('tahun_lulus')
                    ->label('Tahun Lulus')
                    ->sortable(),
                TextColumn::make('golongan_darah')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Golongan Darah')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('agama')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Agama')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('anak_ke')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Anak Ke')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->numeric()
                    ->sortable(),
                TextColumn::make('jumlah_saudara')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Jumlah Saudara')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->numeric()
                    ->sortable(),
                TextColumn::make('tinggal_bersama')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Tinggal Bersama')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('jarak_ke_sekolah')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Jarak Ke Sekolah')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('disabilitas')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Disabilitas')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('tinggi_badan')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Tinggi Badan')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->numeric()
                    ->sortable(),
                TextColumn::make('berat_badan')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Berat Badan')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->numeric()
                    ->sortable(),
                TextColumn::make('no_kip')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Nomor KIP')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('no_kks')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Nomor KKS')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('no_pkh')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Nomor PKH')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('siswa_telepon')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Telepon')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('siswa_alamat')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Alamat')
                    ->toggleable(isToggledHiddenByDefault: true)
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
                TextColumn::make('siswaKelurahan.nama')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Kelurahan')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),
                TextColumn::make('siswaKecamatan.nama')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Kecamatan')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),
                TextColumn::make('siswaKabupaten.nama')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Kabupaten')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),
                TextColumn::make('siswaProvinsi.nama')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Provinsi')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),
                TextColumn::make('siswaNegara.nama')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Negara')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),

                // Jadwal Tes
                TextColumn::make('tes_sesi')
                    ->label('Sesi Tes')
                    ->sortable()
                    ->visible(Auth::user()->username === 'administrator')
                    ->searchable(),

                TextColumn::make('tes_ruang')
                    ->label('Ruang Tes')
                    ->sortable()
                    ->visible(Auth::user()->username === 'administrator')
                    ->searchable(),

                TextColumn::make('tes_akademik')
                    ->label('Tes Akademik')
                    ->date('d F Y H:i:s')
                    ->visible(Auth::user()->username === 'administrator')
                    ->sortable(),

                TextColumn::make('tes_praktik')
                    ->label('Tes Praktik')
                    ->date('d F Y H:i:s')
                    ->visible(Auth::user()->username === 'administrator')
                    ->sortable(),

                // Lainnya
                TextColumn::make('prestasi.nama')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Nama Prestasi')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),
                TextColumn::make('ekstrakurikuler.nama')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Peminatan Ekstrakurikuler')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('mataPelajaran.nama')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Peminatan Pelajaran')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),

                // Berkas
                // ImageColumn::make('berkas_kk')
                //     ->visible(Auth::user()->username === 'administrator')
                //     ->label('KK')
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->searchable(),
                // ImageColumn::make('berkas_akta')
                //     ->visible(Auth::user()->username === 'administrator')
                //     ->label('Akta')
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->searchable(),
                // ImageColumn::make('berkas_kip')
                //     ->visible(Auth::user()->username === 'administrator')
                //     ->label('KIP')
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->searchable(),
                // ImageColumn::make('berkas_nisn')
                //     ->visible(Auth::user()->username === 'administrator')
                //     ->label('NISN')
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->searchable(),
                // TextColumn::make('berkas_skbb')
                //     ->visible(Auth::user()->username === 'administrator')
                //     ->label('SKBB')
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->searchable(),
                // TextColumn::make('berkas_skab')
                //     ->visible(Auth::user()->username === 'administrator')
                //     ->label('SKAB')
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->searchable(),
                // TextColumn::make('berkas_prestasi')
                //     ->visible(Auth::user()->username === 'administrator')
                //     ->label('Bukti Prestasi')
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->searchable(),

                // Ibu
                // TextColumn::make('ibu_nama')
                //     ->visible(Auth::user()->username === 'administrator')
                //     ->label('Nama Ibu')
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->searchable(),
                // TextColumn::make('ibu_telepon')
                //     ->visible(Auth::user()->username === 'administrator')
                //     ->label('Telepon Ibu')
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->searchable(),
                // TextColumn::make('ibu_pekerjaan')
                //     ->visible(Auth::user()->username === 'administrator')
                //     ->label('Pekerjaan Ibu')
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->searchable(),
                // TextColumn::make('ibu_status')
                //     ->visible(Auth::user()->username === 'administrator')
                //     ->label('Status Ibu')
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->searchable(),
                // TextColumn::make('ibu_alamat')
                //     ->visible(Auth::user()->username === 'administrator')
                //     ->label('Alamat Ibu')
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->wrap()
                //     ->words(10)
                //     ->tooltip(function (TextColumn $column): ?string {
                //         $state = $column->getState();
                //         if (strlen($state) <= $column->getCharacterLimit()) {
                //             return null;
                //         }

                //         return $state;
                //     })
                //     ->searchable(),
                // TextColumn::make('ibuKelurahan.nama')
                //     ->visible(Auth::user()->username === 'administrator')
                //     ->label('Kelurahan')
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->sortable(),
                // TextColumn::make('ibuKecamatan.nama')
                //     ->visible(Auth::user()->username === 'administrator')
                //     ->label('Kecamatan')
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->sortable(),
                // TextColumn::make('ibuKabupaten.nama')
                //     ->visible(Auth::user()->username === 'administrator')
                //     ->label('Kabupaten')
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->sortable(),
                // TextColumn::make('ibuProvinsi.nama')
                //     ->visible(Auth::user()->username === 'administrator')
                //     ->label('Provinsi')
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->sortable(),
                // TextColumn::make('ibuNegara.nama')
                //     ->visible(Auth::user()->username === 'administrator')
                //     ->label('Negara')
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->sortable(),

                // Ayah
                // TextColumn::make('ayah_nama')
                //     ->visible(Auth::user()->username === 'administrator')
                //     ->label('Nama Ayah')
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->searchable(),
                // TextColumn::make('ayah_telepon')
                //     ->visible(Auth::user()->username === 'administrator')
                //     ->label('Telepon Ayah')
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->searchable(),
                // TextColumn::make('ayah_pekerjaan')
                //     ->visible(Auth::user()->username === 'administrator')
                //     ->label('Pekerjaan Ayah')
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->searchable(),
                // TextColumn::make('ayah_status')
                //     ->visible(Auth::user()->username === 'administrator')
                //     ->label('Status Ayah')
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->searchable(),
                // TextColumn::make('ayah_alamat')
                //     ->visible(Auth::user()->username === 'administrator')
                //     ->label('Alamat Ayah')
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->wrap()
                //     ->words(10)
                //     ->tooltip(function (TextColumn $column): ?string {
                //         $state = $column->getState();
                //         if (strlen($state) <= $column->getCharacterLimit()) {
                //             return null;
                //         }

                //         return $state;
                //     })
                //     ->searchable(),
                // TextColumn::make('ayahKelurahan.nama')
                //     ->visible(Auth::user()->username === 'administrator')
                //     ->label('Kelurahan')
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->sortable(),
                // TextColumn::make('ayahKecamatan.nama')
                //     ->visible(Auth::user()->username === 'administrator')
                //     ->label('Kecamatan')
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->sortable(),
                // TextColumn::make('ayahKabupaten.nama')
                //     ->visible(Auth::user()->username === 'administrator')
                //     ->label('Kabupaten')
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->sortable(),
                // TextColumn::make('ayahProvinsi.nama')
                //     ->visible(Auth::user()->username === 'administrator')
                //     ->label('Provinsi')
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->sortable(),
                // TextColumn::make('ayahNegara.nama')
                //     ->visible(Auth::user()->username === 'administrator')
                //     ->label('Negara')
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->sortable(),

                // Wali
                // TextColumn::make('wali_nama')
                //     ->visible(Auth::user()->username === 'administrator')
                //     ->label('Nama Wali')
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->searchable(),
                // TextColumn::make('wali_telepon')
                //     ->visible(Auth::user()->username === 'administrator')
                //     ->label('Telepon Wali')
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->searchable(),
                // TextColumn::make('wali_pekerjaan')
                //     ->visible(Auth::user()->username === 'administrator')
                //     ->label('Pekerjaan Wali')
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->searchable(),

                // TextColumn::make('wali_status')
                //     ->visible(Auth::user()->username === 'administrator')
                //     ->label('Status Wali')
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->searchable(),
                // TextColumn::make('wali_alamat')
                //     ->visible(Auth::user()->username === 'administrator')
                //     ->label('Alamat Wali')
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->wrap()
                //     ->words(10)
                //     ->tooltip(function (TextColumn $column): ?string {
                //         $state = $column->getState();
                //         if (strlen($state) <= $column->getCharacterLimit()) {
                //             return null;
                //         }

                //         return $state;
                //     })
                //     ->searchable(),
                // TextColumn::make('waliKelurahan.nama')
                //     ->visible(Auth::user()->username === 'administrator')
                //     ->label('Kelurahan')
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->sortable(),
                // TextColumn::make('waliKecamatan.nama')
                //     ->visible(Auth::user()->username === 'administrator')
                //     ->label('Kecamatan')
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->sortable(),
                // TextColumn::make('waliKabupaten.nama')
                //     ->visible(Auth::user()->username === 'administrator')
                //     ->label('Kabupaten')
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->sortable(),
                // TextColumn::make('waliProvinsi.nama')
                //     ->visible(Auth::user()->username === 'administrator')
                //     ->label('Provinsi')
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->sortable(),
                // TextColumn::make('waliNegara.nama')
                //     ->visible(Auth::user()->username === 'administrator')
                //     ->label('Negara')
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->sortable(),

                // Nilai Tes
                // TextColumn::make('nilai_ipa')
                //     ->visible(Auth::user()->username === 'administrator')
                //     ->label('Nilai IPA')
                //     ->numeric()
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->sortable(),
                // TextColumn::make('nilai_ips')
                //     ->visible(Auth::user()->username === 'administrator')
                //     ->label('Nilai IPS')
                //     ->numeric()
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->sortable(),
                // TextColumn::make('nilai_matematika')
                //     ->visible(Auth::user()->username === 'administrator')
                //     ->label('Nilai Matematika')
                //     ->numeric()
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->sortable(),
                // TextColumn::make('nilai_indonesia')
                //     ->visible(Auth::user()->username === 'administrator')
                //     ->label('Nilai Bahasa Indonesia')
                //     ->numeric()
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->sortable(),
                // TextColumn::make('nilai_inggris')
                //     ->visible(Auth::user()->username === 'administrator')
                //     ->label('Nilai Bahasa Inggris')
                //     ->numeric()
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->sortable(),
                // TextColumn::make('nilai_arab')
                //     ->visible(Auth::user()->username === 'administrator')
                //     ->label('Nilai Bahasa Arab')
                //     ->numeric()
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->sortable(),
                // TextColumn::make('bobot_nilai_akademik')
                //     ->visible(Auth::user()->username === 'administrator')
                //     ->label('Bobot Nilai Akademik')
                //     ->numeric()
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->sortable(),
                // TextColumn::make('bobot_nilai_praktik')
                //     ->visible(Auth::user()->username === 'administrator')
                //     ->label('Bobot Nilai Praktik')
                //     ->numeric()
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->sortable(),
                // TextColumn::make('nilai_akademik')
                //     ->visible(Auth::user()->username === 'administrator')
                //     ->label('Nilai Akademik')
                //     ->numeric()
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->sortable(),
                // TextColumn::make('nilai_praktik')
                //     ->visible(Auth::user()->username === 'administrator')
                //     ->label('Nilai Praktik')
                //     ->numeric()
                //     ->toggleable(isToggledHiddenByDefault: true)
                //     ->sortable(),

                // Timestamp
                // TextColumn::make('created_at')
                //     ->label('Dibuat')
                //     ->date('d F Y H:i:s')
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true),
                // TextColumn::make('updated_at')
                //     ->label('Diubah')
                //     ->date('d F Y H:i:s')
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true),
                // TextColumn::make('deleted_at')
                //     ->label('Dihapus')
                //     ->date('d F Y H:i:s')
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true),
            ])

            ->filters([
                TrashedFilter::make()
                    ->visible(Auth::user()->username === 'administrator'),
                SelectFilter::make('jalur_pendaftaran')
                    ->label('Jalur Pendaftaran')
                    ->relationship('jalurPendaftaran', 'nama', fn($query) => $query->where('status', 'Aktif')) // Menampilkan data jalurPendaftaran dengan kondisi statusnya aktif saja
                    ->visible(Auth::user()->username === 'administrator'),
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
                    ->visible(Auth::user()->username === 'administrator'),
                SelectFilter::make('kelas')
                    ->label('Kelas')
                    ->relationship('kelas', 'nama')
                    ->visible(Auth::user()->username === 'administrator'),
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    // Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make()
                        ->visible(fn(): string => CalonSiswa::count() > 0 && Auth::user()->username === 'administrator'),
                    Tables\Actions\DeleteAction::make(),
                    // ->visible(fn(): string => CalonSiswa::count() > 0 && Auth::user()->username === 'administrator'),
                    Tables\Actions\ForceDeleteAction::make(),
                    // ->visible(fn(): string => CalonSiswa::count() > 0 && Auth::user()->username === 'administrator'),
                    Tables\Actions\RestoreAction::make(),
                    // ->visible(fn(): string => CalonSiswa::count() > 0 && Auth::user()->username === 'administrator'),

                    // Export
                    // ExportAction::make('Ekspor')
                    //     ->label('Ekspor')
                    //     ->icon('heroicon-m-cloud-arrow-down')
                    //     ->color('success')
                    //     ->exporter(CalonSiswaExporter::class)
                    //     ->chunkSize(250)
                    //     ->visible(fn(): string => CalonSiswa::count() > 0 && Auth::user()->username === 'administrator'),

                    // Formulir
                    Html2MediaAction::make('cetak_formulir')
                        ->label('Formulir')
                        ->outlined()
                        ->color(Color::Gray)
                        ->icon('heroicon-o-printer')
                        ->scale(2)
                        ->print() // Enable print option
                        // ->preview() // Enable preview option
                        ->filename('formulir.pdf') // Custom file name
                        ->savePdf() // Enable save as PDF option
                        ->requiresConfirmation() // Show confirmation modal
                        // ->pagebreak('section', ['css', 'legacy'])
                        ->orientation('portrait') // Portrait orientation
                        ->format('a4', 'mm') // A4 format with mm units
                        ->enableLinks() // Enable links in PDF
                        ->margin([10, 20, 10, 20]) // Set custom margins
                        ->content(fn($record) => view('formulir', ['record' => $record])) // Set Content
                        ->visible(fn(): string => CalonSiswa::count() > 0 && Auth::user()->username === 'administrator'),

                    // Kartu Tes
                    Html2MediaAction::make('cetak_kartu_tes')
                        ->label('Kartu Tes')
                        ->outlined()
                        ->icon('heroicon-o-printer')
                        ->scale(2)
                        ->print() // Enable print option
                        // ->preview() // Enable preview option
                        ->filename('Kartu Tes.pdf') // Custom file name
                        ->savePdf() // Enable save as PDF option
                        ->requiresConfirmation() // Show confirmation modal
                        // ->pagebreak('section', ['css', 'legacy'])
                        ->orientation('portrait') // Portrait orientation
                        ->format('a4', 'mm') // A4 format with mm units
                        ->enableLinks() // Enable links in PDF
                        ->margin([10, 20, 10, 20]) // Set custom margins
                        ->content(fn($record) => view('kartu-tes', ['record' => $record])) // Set content
                        ->visible(fn(): string => CalonSiswa::count() > 0 && Auth::user()->username === 'administrator'),
                    // ->visible(function () {
                    //     $tahunPendaftaran = DB::table('tahun_pendaftarans')
                    //         ->where('status', 'Aktif')
                    //         ->first();

                    //     // Pastikan $tahunPendaftaran valid
                    //     if (!$tahunPendaftaran || empty($tahunPendaftaran->tanggal_penerbitan_kartu_tes_mulai) || empty($tahunPendaftaran->tanggal_penerbitan_kartu_tes_selesai)) {
                    //         return false;
                    //     }

                    //     try {
                    //         $startDate = Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_penerbitan_kartu_tes_mulai));
                    //         $endDate = Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_penerbitan_kartu_tes_selesai));
                    //     } catch (\Exception $e) {
                    //         return false; // Kembalikan false jika terjadi error format
                    //     }

                    //     $currentDate = Carbon::now();

                    //     if ($currentDate->lt($startDate) || $currentDate->gt($endDate)) {
                    //         return false;
                    //     }

                    //     return true;
                    // }),

                    // SKL/Hasil
                    Html2MediaAction::make('cetak_skl')
                        ->outlined()
                        ->label('Hasil')
                        ->color(Color::Cyan)
                        ->icon('heroicon-o-printer')
                        ->scale(2)
                        ->print() // Enable print option
                        // ->preview() // Enable preview option
                        ->filename('Surat Keterangan Kelulusan.pdf') // Custom file name
                        ->savePdf() // Enable save as PDF option
                        ->requiresConfirmation() // Show confirmation modal
                        // ->pagebreak('section', ['css', 'legacy'])
                        ->orientation('portrait') // Portrait orientation
                        ->format('a4', 'mm') // A4 format with mm units
                        ->enableLinks() // Enable links in PDF
                        ->margin([10, 20, 10, 20]) // Set custom margins
                        ->content(fn($record) => view('skl', ['record' => $record])) // Set content
                        ->visible(fn(): string => CalonSiswa::count() > 0 && Auth::user()->username === 'administrator'),
                    // ->hidden(function () {
                    //     $tahunPendaftaran = DB::table('tahun_pendaftarans')
                    //         ->where('status', 'Aktif')
                    //         ->first();

                    //     $sekarang = Carbon::now();

                    //     $mulaiPengumumanPrestasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_mulai)
                    //         ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_mulai))
                    //         : null;

                    //     $akhirPengumumanPrestasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_selesai)
                    //         ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_selesai))
                    //         : null;

                    //     $mulaiPengumumanReguler = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_reguler_mulai)
                    //         ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_reguler_mulai))
                    //         : null;

                    //     $akhirPengumumanReguler = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_reguler_selesai)
                    //         ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_reguler_selesai))
                    //         : null;

                    //     $mulaiPengumumanAfirmasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_afirmasi_mulai)
                    //         ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_afirmasi_mulai))
                    //         : null;

                    //     $akhirPengumumanAfirmasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_afirmasi_selesai)
                    //         ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_afirmasi_selesai))
                    //         : null;

                    //     $mulaiPengumumanZonasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_zonasi_mulai)
                    //         ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_zonasi_mulai))
                    //         : null;

                    //     $akhirPengumumanZonasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_zonasi_selesai)
                    //         ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_zonasi_selesai))
                    //         : null;

                    //     $mulaiPengumumanMutasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_mutasi_mulai)
                    //         ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_mutasi_mulai))
                    //         : null;

                    //     $akhirPengumumanMutasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_mutasi_selesai)
                    //         ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_mutasi_selesai))
                    //         : null;

                    //     $periodePengumuman = [
                    //         [$mulaiPengumumanPrestasi, $akhirPengumumanPrestasi],
                    //         [$mulaiPengumumanReguler, $akhirPengumumanReguler],
                    //         [$mulaiPengumumanAfirmasi, $akhirPengumumanAfirmasi],
                    //         [$mulaiPengumumanZonasi, $akhirPengumumanZonasi],
                    //         [$mulaiPengumumanMutasi, $akhirPengumumanMutasi],
                    //     ];

                    //     foreach ($periodePengumuman as [$mulai, $selesai]) {
                    //         if ($sekarang >= $mulai && $sekarang <= $selesai) {
                    //             return false;
                    //         }
                    //     }

                    //     return true;
                    // }),

                    // Pakta Integritas dan Tata Tertib
                    Html2MediaAction::make('cetak_pakta_integritas')
                        ->label('Pakta Integritas')
                        ->outlined()
                        ->color(Color::Cyan)
                        ->icon('heroicon-o-printer')
                        ->scale(2)
                        ->print() // Enable print option
                        // ->preview() // Enable preview option
                        ->filename('Pakta Integritas.pdf') // Custom file name
                        ->savePdf() // Enable save as PDF option
                        ->requiresConfirmation() // Show confirmation modal
                        // ->pagebreak('section', ['css', 'legacy'])
                        ->orientation('portrait') // Portrait orientation
                        ->format('a4', 'mm') // A4 format with mm units
                        ->enableLinks() // Enable links in PDF
                        ->margin([10, 20, 10, 20]) // Set custom margins
                        ->content(fn($record) => view('pakta-integritas', ['record' => $record])) // Set content
                        ->visible(fn(): string => CalonSiswa::count() > 0 && Auth::user()->username === 'administrator'),
                    // ->hidden(function () {
                    //     $tahunPendaftaran = DB::table('tahun_pendaftarans')
                    //         ->where('status', 'Aktif')
                    //         ->first();
                    //     $sekarang = Carbon::now();

                    //     $calonSiswa = CalonSiswa::where('nisn', Auth::user()->username)->first();
                    //     $status = $calonSiswa->status_pendaftaran === 'Diterima Di Kelas Unggulan' ||
                    //         $calonSiswa->status_pendaftaran === 'Diterima Di Kelas Reguler';

                    //     $mulaiPengumumanPrestasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_mulai)
                    //         ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_mulai))
                    //         : null;

                    //     $akhirPengumumanPrestasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_selesai)
                    //         ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_prestasi_selesai))
                    //         : null;

                    //     $mulaiPengumumanReguler = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_reguler_mulai)
                    //         ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_reguler_mulai))
                    //         : null;

                    //     $akhirPengumumanReguler = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_reguler_selesai)
                    //         ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_reguler_selesai))
                    //         : null;

                    //     $mulaiPengumumanAfirmasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_afirmasi_mulai)
                    //         ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_afirmasi_mulai))
                    //         : null;

                    //     $akhirPengumumanAfirmasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_afirmasi_selesai)
                    //         ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_afirmasi_selesai))
                    //         : null;

                    //     $mulaiPengumumanZonasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_zonasi_mulai)
                    //         ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_zonasi_mulai))
                    //         : null;

                    //     $akhirPengumumanZonasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_zonasi_selesai)
                    //         ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_zonasi_selesai))
                    //         : null;

                    //     $mulaiPengumumanMutasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_mutasi_mulai)
                    //         ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_mutasi_mulai))
                    //         : null;

                    //     $akhirPengumumanMutasi = ! empty($tahunPendaftaran->tanggal_pengumuman_jalur_mutasi_selesai)
                    //         ? Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_pengumuman_jalur_mutasi_selesai))
                    //         : null;

                    //     $periodePengumuman = [
                    //         [$mulaiPengumumanPrestasi, $akhirPengumumanPrestasi],
                    //         [$mulaiPengumumanReguler, $akhirPengumumanReguler],
                    //         [$mulaiPengumumanAfirmasi, $akhirPengumumanAfirmasi],
                    //         [$mulaiPengumumanZonasi, $akhirPengumumanZonasi],
                    //         [$mulaiPengumumanMutasi, $akhirPengumumanMutasi],
                    //     ];

                    //     foreach ($periodePengumuman as [$mulai, $selesai]) {
                    //         if ($sekarang >= $mulai && $sekarang <= $selesai && $status) {
                    //             return false;
                    //         }
                    //     }

                    //     return true;
                    // }),
                ]),
            ], ActionsPosition::BeforeColumns)

            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                    ExportBulkAction::make()
                        ->label('Ekspor')
                        ->icon('heroicon-m-cloud-arrow-down')
                        ->color('success')
                        ->exporter(CalonSiswaExporter::class)
                        ->chunkSize(250),

                    BulkAction::make('set_jalur_pendaftaran')
                        ->label('Set Jalur Pendaftaran')
                        ->icon('heroicon-o-sparkles')
                        ->color('primary')
                        ->requiresConfirmation()
                        ->form([
                            Select::make('jalur_pendaftaran')
                                ->label('Jalur Pendaftaran')
                                ->relationship('jalurPendaftaran', 'nama', fn($query) => $query->where('status', 'Aktif'))
                                ->required(),
                        ])
                        ->action(function (Collection $records, array $data) {
                            $records->each(function ($record) use ($data) {
                                CalonSiswa::where('id', $record->id)->update([
                                    'jalur_pendaftaran_id' => $data['jalur_pendaftaran'],
                                ]);
                            });
                        }),

                    BulkAction::make('set_status_pendaftaran')
                        ->label('Set Status Pendaftaran')
                        ->icon('heroicon-o-check-circle')
                        ->color('primary')
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

                    BulkAction::make('set_kelas')
                        ->label('Set Kelas')
                        ->icon('heroicon-o-building-storefront')
                        ->color('primary')
                        ->requiresConfirmation()
                        ->form([
                            Select::make('kelas_id')
                                ->label('Kelas')
                                ->relationship('kelas', 'nama')
                                ->required(),
                        ])
                        ->action(function (Collection $records, array $data) {
                            $records->each(function ($record) use ($data) {
                                CalonSiswa::where('id', $record->id)->update([
                                    'kelas_id' => $data['kelas_id'],
                                ]);
                            });
                        }),
                ])
                    ->visible(Auth::user()->username === 'administrator'),
            ])
            ->striped()
            ->filtersLayout(FiltersLayout::AboveContentCollapsible)
            ->paginationPageOptions([10, 25, 50]);
    }

    public static function getPages(): array
    {
        if (Auth::user() && Auth::user()->username !== 'administrator') {
            return [];
        }

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
