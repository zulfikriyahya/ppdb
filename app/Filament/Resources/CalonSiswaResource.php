<?php

namespace App\Filament\Resources;

use App\Constants\FormOptions;
use App\Filament\Exports\CalonSiswaExporter;
use App\Filament\Resources\CalonSiswaResource\Pages;
use App\Models\CalonSiswa;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Provinsi;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Wizard\Step;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\ExportBulkAction;
use Filament\Tables\Actions\ForceDeleteBulkAction;
use Filament\Tables\Actions\RestoreBulkAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class CalonSiswaResource extends Resource
{
    protected static ?string $model = CalonSiswa::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Formulir Pendaftaran';

    protected static ?string $navigationGroup = 'Pendaftaran';

    protected static ?string $slug = 'formulir';

    protected static ?int $navigationSort = 1;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-identification';

    public static function getNavigationBadge(): ?string
    {
        return (string) CalonSiswa::count();
    }

    /**
     * Nonaktifkan skip antar step wizard.
     * User wajib menyelesaikan setiap step secara berurutan.
     * Ini memastikan semua field required terisi sebelum submit.
     */
    public static function canSkipWizardSteps(): bool
    {
        return false;
    }

    // -----------------------------------------------------------------------
    // Helpers
    // -----------------------------------------------------------------------

    private static function isCalonSiswa(): bool
    {
        return Auth::user()->hasRole('calon_siswa');
    }

    private static function isAdminOrAbove(): bool
    {
        return Auth::user()->hasAnyRole(['super_admin', 'admin', 'verifikator', 'panitia']);
    }

    private static function isSuperAdmin(): bool
    {
        return Auth::user()->hasRole('super_admin');
    }

    // -----------------------------------------------------------------------
    // Opsi reusable
    // -----------------------------------------------------------------------

    private static function opsiPekerjaan(): array
    {
        return [
            'Tidak Bekerja' => 'Tidak Bekerja',
            'ASN' => 'ASN',
            'TNI/POLRI' => 'TNI/POLRI',
            'Karyawan Swasta' => 'Karyawan Swasta',
            'Wirausaha' => 'Wirausaha',
            'Petani' => 'Petani',
            'Nelayan' => 'Nelayan',
            'Buruh' => 'Buruh',
            'Lainnya' => 'Lainnya',
        ];
    }

    private static function opsiPenghasilan(): array
    {
        return [
            'Kurang dari Rp. 500.000' => 'Kurang dari Rp. 500.000',
            'Rp. 500.000 - Rp. 1.000.000' => 'Rp. 500.000 - Rp. 1.000.000',
            'Rp. 1.000.000 - Rp. 2.000.000' => 'Rp. 1.000.000 - Rp. 2.000.000',
            'Rp. 2.000.000 - Rp. 3.000.000' => 'Rp. 2.000.000 - Rp. 3.000.000',
            'Rp. 3.000.000 - Rp. 5.000.000' => 'Rp. 3.000.000 - Rp. 5.000.000',
            'Lebih dari Rp. 5.000.000' => 'Lebih dari Rp. 5.000.000',
        ];
    }

    private static function opsiPendidikan(): array
    {
        return [
            'Tidak Sekolah' => 'Tidak Sekolah',
            'SD/MI Sederajat' => 'SD/MI Sederajat',
            'SMP/MTs Sederajat' => 'SMP/MTs Sederajat',
            'SMA/MA/SMK' => 'SMA/MA/SMK',
            'D1/D2/D3' => 'D1/D2/D3',
            'S1' => 'S1',
            'S2' => 'S2',
            'S3' => 'S3',
        ];
    }

    private static function opsiStatus(): array
    {
        return ['Hidup' => 'Hidup', 'Meninggal' => 'Meninggal'];
    }


    private static function opsiStatusPendaftaran(): array
    {
        $base = [
            'Diproses' => 'Diproses',
        ];

        $admin = [
            'Tidak Diterima'             => 'Tidak Diterima',
            'Diterima'                   => 'Diterima',
            'Diterima Di Kelas Reguler'  => 'Diterima Di Kelas Reguler',
            'Diterima Di Kelas Unggulan' => 'Diterima Di Kelas Unggulan',
        ];

        return self::isSuperAdmin() ? array_merge($base, $admin) : $base;
    }

    // -----------------------------------------------------------------------
    // Wilayah — reusable field group
    // -----------------------------------------------------------------------

    /**
     * Generate 5 field Select wilayah (Negara → Provinsi → Kabupaten → Kecamatan → Kelurahan)
     * dengan cascade reset otomatis.
     *
     * @param  string  $prefix  e.g. 'siswa', 'ibu', 'ayah', 'wali'
     */
    private static function wilayahFields(string $prefix, bool $required = true): array
    {
        $neg = "{$prefix}_negara_id";
        $pro = "{$prefix}_provinsi_id";
        $kab = "{$prefix}_kabupaten_id";
        $kec = "{$prefix}_kecamatan_id";
        $kel = "{$prefix}_kelurahan_id";

        return [
            Select::make($neg)
                ->label('Negara')
                ->relationship("{$prefix}Negara", 'nama')
                ->required($required)
                ->native(false)
                ->preload()
                ->live()
                ->afterStateUpdated(fn(Set $set) => $set($pro, null)),

            Select::make($pro)
                ->label('Provinsi')
                ->searchable()
                ->required($required)
                ->live()
                ->getSearchResultsUsing(
                    fn(string $search, Get $get) => Provinsi::query()
                        ->where('negara_id', $get($neg))
                        ->where('nama', 'like', "%{$search}%")
                        ->limit(50)->pluck('nama', 'id')->toArray()
                )
                ->getOptionLabelUsing(fn($v): ?string => Provinsi::find($v)?->nama)
                ->afterStateUpdated(fn(Set $set) => $set($kab, null)),

            Select::make($kab)
                ->label('Kabupaten / Kota')
                ->searchable()
                ->required($required)
                ->live()
                ->getSearchResultsUsing(
                    fn(string $search, Get $get) => Kabupaten::query()
                        ->where('provinsi_id', $get($pro))
                        ->where('nama', 'like', "%{$search}%")
                        ->limit(50)->pluck('nama', 'id')->toArray()
                )
                ->getOptionLabelUsing(fn($v): ?string => Kabupaten::find($v)?->nama)
                ->afterStateUpdated(fn(Set $set) => $set($kec, null)),

            Select::make($kec)
                ->label('Kecamatan')
                ->searchable()
                ->required($required)
                ->live()
                ->getSearchResultsUsing(
                    fn(string $search, Get $get) => Kecamatan::query()
                        ->where('kabupaten_id', $get($kab))
                        ->where('nama', 'like', "%{$search}%")
                        ->limit(50)->pluck('nama', 'id')->toArray()
                )
                ->getOptionLabelUsing(fn($v): ?string => Kecamatan::find($v)?->nama)
                ->afterStateUpdated(fn(Set $set) => $set($kel, null)),

            Select::make($kel)
                ->label('Kelurahan / Desa')
                ->searchable()
                ->required($required)
                ->getSearchResultsUsing(
                    fn(string $search, Get $get) => Kelurahan::query()
                        ->where('kecamatan_id', $get($kec))
                        ->where('nama', 'like', "%{$search}%")
                        ->limit(50)->pluck('nama', 'id')->toArray()
                )
                ->getOptionLabelUsing(fn($v): ?string => Kelurahan::find($v)?->nama),
        ];
    }

    // -----------------------------------------------------------------------
    // Form
    // -----------------------------------------------------------------------

    public static function form(Form $form): Form
    {
        $isCalonSiswa = self::isCalonSiswa();

        return $form->schema([
            Wizard::make([

                // ============================================================
                // STEP 1 — Data Calon Siswa
                // ============================================================
                Step::make('Data Calon Siswa')
                    ->icon('heroicon-o-user')
                    ->schema([

                        // --- Section admin-only: status & kelas ---
                        Section::make('Status Pendaftaran')
                            ->visible(! $isCalonSiswa)
                            ->columns(2)
                            ->schema([
                                Select::make('status_pendaftaran')
                                    ->label('Status Pendaftaran')
                                    ->options(fn() => self::opsiStatusPendaftaran())
                                    ->default('Diproses')
                                    ->required()
                                    ->native(false)
                                    ->live(),

                                Select::make('status_formulir')
                                    ->label('Status Formulir')
                                    ->options([
                                        'Diproses' => 'Diproses',
                                        'Disetujui' => 'Disetujui',
                                        'Ditolak' => 'Ditolak',
                                    ])
                                    ->default('Diproses')
                                    ->required()
                                    ->native(false),

                                Select::make('kelas_id')
                                    ->label('Kelas')
                                    ->relationship('kelas', 'nama')
                                    ->native(false)
                                    ->searchable()
                                    ->preload()
                                    ->visible(fn(Get $get) => in_array($get('status_pendaftaran'), [
                                        'Diterima Di Kelas Reguler',
                                        'Diterima Di Kelas Unggulan',
                                    ]))
                                    ->required(fn(Get $get) => in_array($get('status_pendaftaran'), [
                                        'Diterima Di Kelas Reguler',
                                        'Diterima Di Kelas Unggulan',
                                    ])),
                            ]),

                        // --- Section: Biodata ---
                        Section::make('Biodata Calon Siswa')
                            ->icon('heroicon-m-identification')
                            ->columns(['sm' => 1, 'md' => 3])
                            ->schema([
                                Select::make('jalur_pendaftaran_id')
                                    ->label('Jalur Pendaftaran')
                                    ->relationship(
                                        'jalurPendaftaran',
                                        'nama',
                                        fn(Builder $q) => $q->where('status', 'Aktif')
                                    )
                                    ->required()
                                    ->native(false)
                                    ->live()
                                    ->getOptionLabelFromRecordUsing(
                                        fn(Model $r) => "{$r->nama} | {$r->tahunPendaftaran->nama}"
                                    ),

                                TextInput::make('nama')
                                    ->label('Nama Lengkap')
                                    ->required()
                                    ->maxLength(50)
                                    ->readOnly()
                                    ->default(fn() => Auth::user()->name),

                                TextInput::make('nisn')
                                    ->label('NISN')
                                    ->required()
                                    ->numeric()
                                    ->minLength(10)
                                    ->maxLength(10)
                                    ->readOnly()
                                    ->default(fn() => Auth::user()->username)
                                    ->unique(table: 'calon_siswas', column: 'nisn', ignoreRecord: true),

                                TextInput::make('nik')
                                    ->label('NIK')
                                    ->required()
                                    ->numeric()
                                    ->minLength(16)
                                    ->maxLength(16)
                                    ->unique(table: 'calon_siswas', column: 'nik', ignoreRecord: true),

                                TextInput::make('kk')
                                    ->label('Nomor Kartu Keluarga')
                                    ->required()
                                    ->numeric()
                                    ->minLength(16)
                                    ->maxLength(16),

                                TextInput::make('tempat_lahir')
                                    ->label('Tempat Lahir')
                                    ->required()
                                    ->maxLength(50),

                                DatePicker::make('tanggal_lahir')
                                    ->label('Tanggal Lahir')
                                    ->required()
                                    ->maxDate(now()->subYears(9))
                                    ->displayFormat('d/m/Y'),

                                Select::make('tahun_lulus')
                                    ->label('Tahun Lulus SD/MI')
                                    ->options(fn() => array_combine(
                                        range(date('Y'), date('Y') - 2),
                                        range(date('Y'), date('Y') - 2)
                                    ))
                                    ->required()
                                    ->native(false),

                                Select::make('jenis_kelamin')
                                    ->label('Jenis Kelamin')
                                    ->options(['Pria' => 'Laki-laki', 'Wanita' => 'Perempuan'])
                                    ->required()
                                    ->native(false),

                                Select::make('golongan_darah')
                                    ->label('Golongan Darah')
                                    ->options(['A+' => 'A+', 'A-' => 'A-', 'B+' => 'B+', 'B-' => 'B-', 'AB+' => 'AB+', 'AB-' => 'AB-', 'O+' => 'O+', 'O-' => 'O-'])
                                    ->required()
                                    ->native(false),

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
                                    ->native(false),

                                TextInput::make('anak_ke')->label('Anak Ke')->required()->numeric()->minValue(1),
                                TextInput::make('jumlah_saudara')->label('Dari (Jumlah Anak)')->required()->numeric()->minValue(1),

                                Select::make('tinggal_bersama')
                                    ->label('Tinggal Bersama')
                                    ->options(['Orang Tua' => 'Orang Tua', 'Saudara' => 'Saudara', 'Panti Asuhan' => 'Panti Asuhan', 'Kost' => 'Kost', 'Lainnya' => 'Lainnya'])
                                    ->required()->native(false),

                                Select::make('jarak_ke_sekolah')
                                    ->label('Jarak ke Sekolah')
                                    ->options(['0 - 1 Km' => '0 - 1 Km', '1 - 5 Km' => '1 - 5 Km', '5 - 10 Km' => '5 - 10 Km', '10 - 15 Km' => '10 - 15 Km', '15 - 20 Km' => '15 - 20 Km', '20 - 25 Km' => '20 - 25 Km', '25 - 30 Km' => '25 - 30 Km'])
                                    ->required()->native(false),

                                Select::make('disabilitas')
                                    ->label('Disabilitas')
                                    ->options(['Non Disabilitas' => 'Non Disabilitas', 'Fisik' => 'Fisik', 'Penglihatan' => 'Penglihatan', 'Pendengaran' => 'Pendengaran', 'Kognitif' => 'Kognitif', 'Mental' => 'Mental', 'Lainnya' => 'Lainnya'])
                                    ->required()->native(false),

                                TextInput::make('tinggi_badan')->label('Tinggi Badan')->numeric()->minValue(100)->maxValue(250)->suffix('cm'),
                                TextInput::make('berat_badan')->label('Berat Badan')->numeric()->minValue(20)->maxValue(200)->suffix('kg'),
                                TextInput::make('siswa_telepon')->label('Nomor Telepon (WhatsApp)')->tel()->maxLength(20),

                                Select::make('sekolah_asal_id')
                                    ->label('Sekolah Asal')
                                    ->relationship('sekolahAsal', 'nama')
                                    ->required()->native(false)->searchable()->preload()
                                    ->getOptionLabelFromRecordUsing(fn(Model $r) => "{$r->nama} | NPSN: {$r->npsn}"),

                                Select::make('ekstrakurikuler_id')
                                    ->label('Pilihan Ekstrakurikuler')
                                    ->relationship('ekstrakurikuler', 'nama')
                                    ->native(false)->searchable()->preload(),

                                Select::make('mata_pelajaran_id')
                                    ->label('Mata Pelajaran Favorit')
                                    ->relationship('mataPelajaran', 'nama')
                                    ->native(false)->searchable()->preload(),

                                Toggle::make('penerima_kip')
                                    ->label('Penerima KIP / KKS / PKH?')
                                    ->live()->columnSpanFull(),

                                TextInput::make('no_kip')->label('Nomor KIP')
                                    ->visible(fn(Get $get) => (bool) $get('penerima_kip'))
                                    ->required(fn(Get $get) => (bool) $get('penerima_kip'))
                                    ->maxLength(30)->live()
                                    ->unique(table: 'calon_siswas', column: 'no_kip', ignoreRecord: true),

                                TextInput::make('no_kks')->label('Nomor KKS')
                                    ->visible(fn(Get $get) => (bool) $get('penerima_kip'))
                                    ->maxLength(30)->live()
                                    ->unique(table: 'calon_siswas', column: 'no_kks', ignoreRecord: true),

                                TextInput::make('no_pkh')->label('Nomor PKH')
                                    ->visible(fn(Get $get) => (bool) $get('penerima_kip'))
                                    ->maxLength(30)->live()
                                    ->unique(table: 'calon_siswas', column: 'no_pkh', ignoreRecord: true),
                            ]),

                        // --- Section: Alamat ---
                        Section::make('Alamat Domisili')
                            ->icon('heroicon-m-map-pin')
                            ->columns(['sm' => 1, 'md' => 3])
                            ->schema([
                                ...self::wilayahFields('siswa'),
                                TextInput::make('siswa_alamat')
                                    ->label('Jalan / Kampung / Dusun')
                                    ->required()
                                    ->maxLength(255)
                                    ->placeholder('Kp. Kebon Cau RT 001 RW 005')
                                    ->columnSpanFull(),
                            ]),

                        // --- Section: Berkas ---
                        Section::make('Upload Berkas')
                            ->icon('heroicon-m-paper-clip')
                            ->columns(['sm' => 1, 'md' => 2])
                            ->schema([
                                FileUpload::make('berkas_foto')
                                    ->label('Foto Formal (Latar Merah)')
                                    ->image()->required()
                                    ->directory(fn() => 'berkas/foto/' . Auth::user()->username)
                                    ->maxSize(1024)->minSize(10)
                                    ->helperText('JPG/PNG. 10 KB – 1 MB.'),

                                FileUpload::make('berkas_kk')
                                    ->label('Kartu Keluarga (KK)')
                                    ->image()->required()
                                    ->directory(fn() => 'berkas/kk/' . Auth::user()->username)
                                    ->maxSize(1024)->minSize(10)
                                    ->helperText('JPG/PNG. 10 KB – 1 MB.'),

                                FileUpload::make('berkas_akta')
                                    ->label('Akta Kelahiran')
                                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'application/pdf'])
                                    ->required()
                                    ->directory(fn() => 'berkas/akta/' . Auth::user()->username)
                                    ->maxSize(1024)->minSize(10)
                                    ->helperText('JPG/PNG/PDF. 10 KB – 1 MB.'),

                                FileUpload::make('berkas_skbb')
                                    ->label('SKBB')
                                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'application/pdf'])
                                    ->required()
                                    ->directory(fn() => 'berkas/skbb/' . Auth::user()->username)
                                    ->maxSize(1024)->minSize(10)
                                    ->helperText('JPG/PNG/PDF. 10 KB – 1 MB.'),

                                FileUpload::make('berkas_skab')
                                    ->label('SKAB')
                                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'application/pdf'])
                                    ->required()
                                    ->directory(fn() => 'berkas/skab/' . Auth::user()->username)
                                    ->maxSize(1024)->minSize(10)
                                    ->helperText('JPG/PNG/PDF. 10 KB – 1 MB.'),

                                FileUpload::make('berkas_nisn')
                                    ->label('Kartu NISN')
                                    ->image()
                                    ->directory(fn() => 'berkas/nisn/' . Auth::user()->username)
                                    ->maxSize(1024)->minSize(10)
                                    ->helperText('Opsional. JPG/PNG. 10 KB – 1 MB.'),

                                FileUpload::make('berkas_kip')
                                    ->label('Kartu KIP')
                                    ->image()
                                    ->visible(fn(Get $get) => (bool) $get('penerima_kip'))
                                    ->required(fn(Get $get) => (bool) $get('penerima_kip') && $get('no_kip'))
                                    ->directory(fn() => 'berkas/kip/' . Auth::user()->username)
                                    ->maxSize(1024)->minSize(10),

                                FileUpload::make('berkas_kks')
                                    ->label('Kartu KKS')
                                    ->image()
                                    ->visible(fn(Get $get) => (bool) $get('penerima_kip') && $get('no_kks'))
                                    ->directory(fn() => 'berkas/kks/' . Auth::user()->username)
                                    ->maxSize(1024)->minSize(10),

                                FileUpload::make('berkas_pkh')
                                    ->label('Kartu PKH')
                                    ->image()
                                    ->visible(fn(Get $get) => (bool) $get('penerima_kip') && $get('no_pkh'))
                                    ->directory(fn() => 'berkas/pkh/' . Auth::user()->username)
                                    ->maxSize(1024)->minSize(10),
                            ]),
                    ]),

                // ============================================================
                // STEP 2 — Data Orang Tua / Wali
                // ============================================================
                Step::make('Data Orang Tua')
                    ->icon('heroicon-o-user-group')
                    ->schema([

                        // --- IBU ---
                        Section::make('Data Ibu Kandung')
                            ->icon('heroicon-m-user')
                            ->collapsible()
                            ->columns(['sm' => 1, 'md' => 3])
                            ->schema([
                                TextInput::make('ibu_nama')->label('Nama Ibu')->required()->maxLength(50),
                                TextInput::make('ibu_nik')->label('NIK Ibu')->required()->numeric()->minLength(16)->maxLength(16),
                                TextInput::make('ibu_telepon')->label('Nomor Telepon')->tel()->required()->maxLength(20),
                                Select::make('ibu_pekerjaan')->label('Pekerjaan')->options(fn() => self::opsiPekerjaan())->required()->native(false),
                                Select::make('ibu_penghasilan')->label('Penghasilan')->options(fn() => self::opsiPenghasilan())->required()->native(false),
                                Select::make('ibu_pendidikan')->label('Pendidikan Terakhir')->options(fn() => self::opsiPendidikan())->required()->native(false),
                                Select::make('ibu_status')->label('Status')->options(fn() => self::opsiStatus())->required()->native(false)->live(),
                                TextInput::make('ibu_alamat')->label('Jalan / Kampung / Dusun')->maxLength(255),
                                ...self::wilayahFields('ibu'),
                            ]),

                        // --- AYAH ---
                        Section::make('Data Ayah Kandung')
                            ->icon('heroicon-m-user')
                            ->collapsible()
                            ->columns(['sm' => 1, 'md' => 3])
                            ->schema([
                                TextInput::make('ayah_nama')->label('Nama Ayah')->required()->maxLength(50),
                                TextInput::make('ayah_nik')->label('NIK Ayah')->required()->numeric()->minLength(16)->maxLength(16),
                                TextInput::make('ayah_telepon')->label('Nomor Telepon')->tel()->required()->maxLength(20),
                                Select::make('ayah_pekerjaan')->label('Pekerjaan')->options(fn() => self::opsiPekerjaan())->required()->native(false),
                                Select::make('ayah_penghasilan')->label('Penghasilan')->options(fn() => self::opsiPenghasilan())->required()->native(false),
                                Select::make('ayah_pendidikan')->label('Pendidikan Terakhir')->options(fn() => self::opsiPendidikan())->required()->native(false),
                                Select::make('ayah_status')->label('Status')->options(fn() => self::opsiStatus())->required()->native(false)->live(),
                                Select::make('kepemilikan_rumah')
                                    ->label('Status Kepemilikan Rumah')
                                    ->options(['Rumah Pribadi' => 'Rumah Pribadi', 'Kontrakan' => 'Kontrakan', 'Rumah Dinas' => 'Rumah Dinas', 'Menumpang Saudara' => 'Menumpang Saudara'])
                                    ->required()->native(false),
                                TextInput::make('ayah_alamat')->label('Jalan / Kampung / Dusun')->maxLength(255),
                                ...self::wilayahFields('ayah'),
                            ]),

                        // --- WALI (opsional) ---
                        Section::make('Data Wali (Opsional)')
                            ->icon('heroicon-m-user')
                            ->collapsible()
                            ->collapsed()
                            ->columns(['sm' => 1, 'md' => 3])
                            ->schema([
                                TextInput::make('wali_nama')->label('Nama Wali')->maxLength(50),
                                TextInput::make('wali_nik')->label('NIK Wali')->numeric()->minLength(16)->maxLength(16),
                                TextInput::make('wali_telepon')->label('Nomor Telepon')->tel()->maxLength(20),
                                Select::make('wali_pekerjaan')->label('Pekerjaan')->options(fn() => self::opsiPekerjaan())->native(false),
                                Select::make('wali_penghasilan')->label('Penghasilan')->options(fn() => self::opsiPenghasilan())->native(false),
                                Select::make('wali_pendidikan')->label('Pendidikan Terakhir')->options(fn() => self::opsiPendidikan())->native(false),
                                Select::make('wali_status')->label('Status')->options(fn() => self::opsiStatus())->native(false),
                                TextInput::make('wali_alamat')->label('Jalan / Kampung / Dusun')->maxLength(255),
                                ...self::wilayahFields('wali', required: false),
                            ]),
                    ]),

                // ============================================================
                // STEP 3 — Data Tes (admin/panitia only)
                // ============================================================
                Step::make('Data Tes')
                    ->icon('heroicon-o-clipboard-document-check')
                    ->hidden(fn() => $isCalonSiswa)
                    ->schema([
                        Section::make('Jadwal Tes')
                            ->columns(2)
                            ->schema([
                                TextInput::make('tes_sesi')
                                    ->label('Sesi Tes')
                                    ->maxLength(20),

                                TextInput::make('tes_ruang')
                                    ->label('Ruang Tes')
                                    ->maxLength(20),

                                DateTimePicker::make('tes_akademik')
                                    ->label('Waktu Tes Akademik')
                                    ->seconds(false)
                                    ->displayFormat('d/m/Y H:i'),

                                DateTimePicker::make('tes_praktik')
                                    ->label('Waktu Tes Praktik')
                                    ->seconds(false)
                                    ->displayFormat('d/m/Y H:i'),
                            ]),

                        Section::make('Nilai Tes')
                            ->columns(2)
                            ->schema([
                                TextInput::make('bobot_nilai_akademik')
                                    ->label('Bobot Nilai Akademik (%)')
                                    ->numeric()
                                    ->minValue(0)
                                    ->maxValue(100)
                                    ->suffix('%'),

                                TextInput::make('bobot_nilai_praktik')
                                    ->label('Bobot Nilai Praktik (%)')
                                    ->numeric()
                                    ->minValue(0)
                                    ->maxValue(100)
                                    ->suffix('%'),

                                TextInput::make('nilai_akademik')
                                    ->label('Nilai Tes Akademik')
                                    ->numeric()
                                    ->minValue(0)
                                    ->maxValue(100),

                                TextInput::make('nilai_praktik')
                                    ->label('Nilai Tes Praktik')
                                    ->numeric()
                                    ->minValue(0)
                                    ->maxValue(100),
                            ]),
                    ]),

            ])->columnSpanFull(),
        ]);
    }

    // -----------------------------------------------------------------------
    // Table
    // -----------------------------------------------------------------------

    public static function table(Table $table): Table
    {
        $isCalonSiswa = self::isCalonSiswa();
        $isSuperAdmin = self::isSuperAdmin();

        return $table
            ->query(
                $isCalonSiswa
                    ? CalonSiswa::query()->where('user_id', Auth::id())
                    : CalonSiswa::query()
            )
            ->defaultSort('created_at', 'desc')
            ->columns([
                ImageColumn::make('berkas_foto')
                    ->label('Foto')
                    ->circular()
                    ->defaultImageUrl(fn() => 'https://ui-avatars.com/api/?name=CS&color=7F9CF5&background=EBF4FF'),

                TextColumn::make('nomor_pendaftaran')
                    ->label('No. Daftar')
                    ->searchable()
                    ->copyable()
                    ->visible(! $isCalonSiswa),

                TextColumn::make('jalurPendaftaran.nama')
                    ->label('Jalur')
                    ->badge()
                    ->colors([
                        'primary' => 'Prestasi',
                        'success' => 'Reguler',
                        'warning' => 'Afirmasi',
                        'info' => 'Zonasi',
                        'danger' => 'Mutasi',
                    ]),

                TextColumn::make('nama')
                    ->label('Nama Lengkap')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('nisn')
                    ->label('NISN')
                    ->searchable()
                    ->copyable(),

                TextColumn::make('sekolahAsal.nama')
                    ->label('Sekolah Asal')
                    ->searchable()
                    ->visible(! $isCalonSiswa)
                    ->limit(30)
                    ->tooltip(fn(TextColumn $col): ?string => strlen($col->getState()) > 30 ? $col->getState() : null),
                TextColumn::make('status_formulir')
                    ->label('Status Formulir')
                    ->badge()
                    ->color(fn($state) => match ($state) {
                        'Diproses'             => 'warning',
                        'Berkas Tidak Lengkap' => 'danger',
                        'Disetujui'            => 'success',
                        'Ditolak'              => 'danger',
                        default                => 'gray',
                    }),
                TextColumn::make('status_pendaftaran')
                    ->label('Status Pendaftaran')
                    ->badge()
                    ->color(fn($state) => match ($state) {
                        'Diproses'                   => 'gray',
                        'Diterima',
                        'Diterima Di Kelas Reguler',
                        'Diterima Di Kelas Unggulan' => 'success',
                        'Tidak Diterima'             => 'danger',
                        default                      => 'gray',
                    })
                    ->visible(fn() => ! $isCalonSiswa || $isSuperAdmin),
                TextColumn::make('kelas.nama')
                    ->label('Kelas')
                    ->badge()
                    ->visible(! $isCalonSiswa),

                TextColumn::make('created_at')
                    ->label('Tgl. Daftar')
                    ->date('d/m/Y')
                    ->sortable()
                    ->visible(! $isCalonSiswa),
            ])
            ->filters([
                TrashedFilter::make()
                    ->visible($isSuperAdmin),

                SelectFilter::make('jalur_pendaftaran_id')
                    ->label('Jalur Pendaftaran')
                    ->options(
                        fn() => \App\Models\JalurPendaftaran::where('status', 'Aktif')
                            ->pluck('nama', 'id')
                            ->toArray()
                    )
                    ->visible(! $isCalonSiswa),

                SelectFilter::make('status_formulir')
                    ->label('Status Formulir')
                    ->options(FormOptions::STATUS_FORMULIR)
                    ->visible(! $isCalonSiswa),

                SelectFilter::make('status_pendaftaran')
                    ->label('Status Pendaftaran')
                    ->options(FormOptions::STATUS_PENDAFTARAN_SUPER_ADMIN)
                    ->visible(! $isCalonSiswa),
                SelectFilter::make('kelas_id')
                    ->label('Kelas')
                    ->options(
                        fn() => \App\Models\Kelas::pluck('nama', 'id')->toArray()
                    )
                    ->visible(! $isCalonSiswa),
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),

                    Tables\Actions\EditAction::make()
                        ->visible(fn() => ! $isCalonSiswa),

                    Tables\Actions\DeleteAction::make()
                        ->visible(fn($record) => $isSuperAdmin && ! $record->trashed()),

                    Tables\Actions\RestoreAction::make()
                        ->visible(fn($record) => $isSuperAdmin && $record->trashed()),

                    Tables\Actions\ForceDeleteAction::make()
                        ->visible(fn($record) => $isSuperAdmin && $record->trashed()),
                    Tables\Actions\Action::make('kirim_notifikasi')
                        ->label('Kirim Notifikasi')
                        ->icon('heroicon-o-chat-bubble-left-ellipsis')
                        ->color('info')
                        ->requiresConfirmation()
                        ->modalHeading('Kirim Notifikasi WhatsApp')
                        ->modalDescription(fn($record) => "Kirim ulang notifikasi status pendaftaran ke {$record->nama}?")
                        ->modalSubmitActionLabel('Kirim Sekarang')
                        ->visible(fn() => auth()->user()->hasAnyRole(['super_admin', 'admin', 'verifikator', 'panitia']))
                        ->action(function ($record) {
                            $telepon = $record->user?->telepon;

                            if (! $telepon) {
                                \Filament\Notifications\Notification::make()
                                    ->title('Gagal')
                                    ->body('Calon siswa ini tidak memiliki nomor WhatsApp.')
                                    ->danger()
                                    ->send();
                                return;
                            }

                            $pesan = "📢 *Informasi Status Pendaftaran*\n\n"
                                . "Halo, *{$record->nama}*!\n"
                                . "Berikut status pendaftaran kamu saat ini:\n\n"
                                . "📋 No. Pendaftaran : *{$record->nomor_pendaftaran}*\n"
                                . "📄 Status Formulir : *{$record->status_formulir}*\n"
                                . "📌 Status Pendaftaran : *{$record->status_pendaftaran}*\n\n"
                                . "Silakan login ke sistem PPDB untuk informasi lebih lanjut.\n"
                                . '_MTsN 1 Pandeglang_';

                            app(\App\Services\WhatsAppService::class)->send(
                                phone: $telepon,
                                message: $pesan,
                                minDelay: 1,
                                maxDelay: 10,
                            );

                            \Filament\Notifications\Notification::make()
                                ->title('Notifikasi dijadwalkan')
                                ->body("Pesan akan dikirim ke {$record->nama} dalam beberapa detik.")
                                ->success()
                                ->send();
                        }),
                ]),
            ], ActionsPosition::BeforeColumns)
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make()
                        ->visible($isSuperAdmin),

                    ForceDeleteBulkAction::make()
                        ->visible($isSuperAdmin),

                    RestoreBulkAction::make()
                        ->visible($isSuperAdmin),

                    ExportBulkAction::make()
                        ->exporter(CalonSiswaExporter::class)
                        ->visible(! $isCalonSiswa),


                    BulkAction::make('set_jalur_pendaftaran')
                        ->label('Set Jalur Pendaftaran')
                        ->icon('heroicon-o-sparkles')
                        ->color('primary')
                        ->requiresConfirmation()
                        ->visible($isSuperAdmin)
                        ->form([
                            Select::make('jalur_pendaftaran_id')
                                ->label('Jalur Pendaftaran')
                                // Ganti relationship() → options() karena tidak ada model context di BulkAction
                                ->options(
                                    \App\Models\JalurPendaftaran::where('status', 'Aktif')
                                        ->pluck('nama', 'id')
                                        ->toArray()
                                )
                                ->native(false)
                                ->required(),
                        ])
                        ->action(
                            fn(Collection $records, array $data) => $records->each(
                                fn($r) => CalonSiswa::where('id', $r->id)
                                    ->update(['jalur_pendaftaran_id' => $data['jalur_pendaftaran_id']])
                            )
                        ),

                    BulkAction::make('set_status_pendaftaran')
                        ->label('Set Status Pendaftaran')
                        ->icon('heroicon-o-arrow-path')
                        ->color('warning')
                        ->requiresConfirmation()
                        ->visible($isSuperAdmin)
                        ->form([
                            Select::make('status_pendaftaran')
                                ->label('Status')
                                ->options(fn() => self::opsiStatusPendaftaran())
                                ->native(false)
                                ->required(),

                            // Kelas muncul kondisional — pakai live() + visible()
                            Select::make('kelas_id')
                                ->label('Kelas')
                                ->options(
                                    \App\Models\Kelas::pluck('nama', 'id')->toArray()
                                )
                                ->native(false)
                                ->live()
                                ->visible(fn(Get $get) => in_array($get('status_pendaftaran'), [
                                    'Diterima Di Kelas Reguler',
                                    'Diterima Di Kelas Unggulan',
                                ]))
                                ->required(fn(Get $get) => in_array($get('status_pendaftaran'), [
                                    'Diterima Di Kelas Reguler',
                                    'Diterima Di Kelas Unggulan',
                                ])),
                        ])
                        ->action(
                            fn(Collection $records, array $data) => $records->each(function ($r) use ($data) {
                                $update = ['status_pendaftaran' => $data['status_pendaftaran']];

                                if (! empty($data['kelas_id'])) {
                                    $update['kelas_id'] = $data['kelas_id'];
                                }

                                CalonSiswa::where('id', $r->id)->update($update);
                            })
                        ),
                    Tables\Actions\BulkAction::make('kirim_notifikasi_massal')
                        ->label('Kirim Notifikasi')
                        ->icon('heroicon-o-chat-bubble-left-ellipsis')
                        ->color('info')
                        ->requiresConfirmation()
                        ->modalHeading('Kirim Notifikasi Massal')
                        ->modalDescription('Notifikasi status pendaftaran akan dikirim ke semua peserta yang dipilih.')
                        ->modalSubmitActionLabel('Kirim Sekarang')
                        ->deselectRecordsAfterCompletion()
                        ->visible(fn() => auth()->user()->hasAnyRole(['super_admin', 'admin', 'verifikator', 'panitia']))
                        ->action(function (\Illuminate\Support\Collection $records) {
                            $wa = app(\App\Services\WhatsAppService::class);

                            $berhasil = 0;
                            $gagal    = 0;

                            foreach ($records as $record) {
                                $telepon = $record->user?->telepon;

                                if (! $telepon) {
                                    $gagal++;
                                    continue;
                                }

                                $pesan = "📢 *Informasi Status Pendaftaran*\n\n"
                                    . "Halo, *{$record->nama}*!\n"
                                    . "Berikut status pendaftaran kamu saat ini:\n\n"
                                    . "📋 No. Pendaftaran : *{$record->nomor_pendaftaran}*\n"
                                    . "📄 Status Formulir : *{$record->status_formulir}*\n"
                                    . "📌 Status Pendaftaran : *{$record->status_pendaftaran}*\n\n"
                                    . "Silakan login ke sistem PPDB untuk informasi lebih lanjut.\n"
                                    . '_MTsN 1 Pandeglang_';

                                // Delay lebih besar untuk bulk — spread pengiriman
                                $wa->send(
                                    phone: $telepon,
                                    message: $pesan,
                                    minDelay: 10,
                                    maxDelay: 120,
                                );

                                $berhasil++;
                            }

                            \Filament\Notifications\Notification::make()
                                ->title("Notifikasi dijadwalkan: {$berhasil} berhasil, {$gagal} dilewati")
                                ->body($gagal > 0 ? "{$gagal} peserta tidak memiliki nomor WhatsApp." : null)
                                ->success()
                                ->send();
                        }),
                ]),
            ])
            ->striped()
            ->poll('60s');
    }

    // -----------------------------------------------------------------------
    // Pages
    // -----------------------------------------------------------------------

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCalonSiswas::route('/'),
            'create' => Pages\CreateCalonSiswa::route('/create'),
            'view' => Pages\ViewCalonSiswa::route('/{record}'),
            'edit' => Pages\EditCalonSiswa::route('/{record}/edit'),
        ];
    }

    // -----------------------------------------------------------------------
    // Eloquent query — pastikan soft delete scope benar
    // -----------------------------------------------------------------------

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([SoftDeletingScope::class]);
    }
}
