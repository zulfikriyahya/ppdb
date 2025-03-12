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
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Model;
use Filament\Support\Enums\IconPosition;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CalonSiswaResource\Pages;

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
                // Section Formulir
                Section::make('Formulir Pendaftaran')
                    ->collapsible()
                    ->schema([
                        // Jalur Pendaftaran
                        Forms\Components\Select::make('jalur_pendaftaran_id')
                            ->label('Jalur Pendaftaran')
                            ->relationship('jalurPendaftaran', 'nama')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->native(false)
                            ->columnSpanFull(),
                        // Data Status Pendaftaran Calon Peserta Didik Baru
                        Forms\Components\TextInput::make('status_pendaftaran')
                            ->label('Status Pendaftaran')
                            ->hidden(function () {
                                $user = Filament::auth()->user();

                                return $user->email !== 'adm@mtsn1pandeglang.sch.id';
                            }), // Jika Email Bukan 'adm@mtsn1pandeglang.sch.id'
                        // Data Kelas Pendaftaran Calon Peserta Didik Baru
                        Forms\Components\Select::make('kelas_id')
                            ->label('Kelas')
                            ->relationship('kelas', 'nama')
                            ->native(false)
                            ->hidden(function () {
                                $user = Filament::auth()->user();

                                return $user->email !== 'adm@mtsn1pandeglang.sch.id';
                            }), // Jika Email Bukan 'adm@mtsn1pandeglang.sch.id',
                    ])
                    ->columns(2),

                // Section Siswa
                Section::make('Data Siswa')
                    ->collapsible()
                    ->schema([
                        // Tab Calon Siswa
                        Tabs::make('Data Siswa')
                            ->tabs([
                                Tabs\Tab::make('Data Siswa')
                                    ->icon('heroicon-m-bell')
                                    ->iconPosition(IconPosition::After)
                                    ->schema([
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
                                            ->unique()
                                            ->maxLength(16)
                                            ->minLength(16)
                                            ->validationMessages([
                                                'max' => 'NIK : Masukkan maksimal 16 Angka.',
                                                'min' => 'NIK : Masukkan minimal 16 Angka.',
                                                'unique' => 'NIK : Nomor ini sudah pernah di isi.',
                                                'required' => 'Form ini wajib diisi.',
                                            ]),
                                        // NISN Calon Peserta Didik Baru
                                        Forms\Components\TextInput::make('nisn')
                                            ->label('Nomor Induk Siswa Nasional (NISN)')
                                            ->required()
                                            ->unique()
                                            ->maxLength(10)
                                            ->minLength(10)
                                            ->validationMessages([
                                                'max' => 'NISN : Masukkan maksimal 10 Angka.',
                                                'min' => 'NISN : Masukkan minimal 10 Angka.',
                                                'unique' => 'NISN : Nomor ini sudah pernah di isi.',
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
                                            ->label('Jumlah Saudara Kandung')
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
                                            ->unique()
                                            ->maxLength(6)
                                            ->minLength(6)
                                            ->validationMessages([
                                                'max' => 'KIP : Masukkan maksimal 6 Karakter.',
                                                'min' => 'KIP : Masukkan minimal 6 Karakter.',
                                                'unique' => 'KIP : Nomor ini sudah pernah di isi.',
                                                'required' => 'Form ini wajib diisi.',
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
                                            ->native(false),
                                        // Data Prestasi Calon Peserta Didik Baru
                                        Forms\Components\Select::make('prestasi_id')
                                            ->label('Prestasi')
                                            ->relationship('prestasi', 'nama')
                                            // ->multiple()
                                            ->preload()
                                            ->getOptionLabelFromRecordUsing(fn(Model $record) => "{$record->nama} | {$record->tingkat} | {$record->kategori} | {$record->peringkat}")
                                            ->native(false),

                                        // Select::make('author_id')
                                        //     ->relationship(
                                        //         name: 'author',
                                        //         modifyQueryUsing: fn(Builder $query) => $query->orderBy('first_name')->orderBy('last_name'),
                                        //     )
                                        //     ->getOptionLabelFromRecordUsing(fn(Model $record) => "{$record->first_name} {$record->last_name}")
                                        //     ->searchable(['first_name', 'last_name']),

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
                                            // ->multiple()
                                            // ->relationships('eksrakurikuler', 'nama')
                                            ->validationMessages([
                                                'required' => 'Form ini wajib diisi.',
                                            ]),
                                        // Data Peminatan Pelajaran Calon Peserta Didik Baru
                                        Forms\Components\Select::make('peminatan_pelajaran')
                                            ->label('Peminatan Mata Pelajaran')
                                            ->required()
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

                                Tabs\Tab::make('Alamat')
                                    ->icon('heroicon-m-bell')
                                    ->iconPosition(IconPosition::After)
                                    ->schema([
                                        // Alamat Calon Peserta Didik Baru
                                        Forms\Components\TextArea::make('siswa_alamat')
                                            ->label('Alamat')
                                            ->required()
                                            ->validationMessages([
                                                'required' => 'Form ini wajib diisi.',
                                            ]),
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
                                    ]),
                            ])
                            ->columns([
                                'sm' => '100%',
                                'md' => 2,
                                'lg' => 2,
                            ]),

                        // Tab Berkas Calon Peserta Didik Baru
                        Tabs::make('Data Berkas')
                            ->tabs([
                                Tabs\Tab::make('Data Berkas')
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
                                            ->directory('assets/berkas')
                                            ->downloadable()
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
                                            ->directory('assets/berkas')
                                            ->downloadable()
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
                                            ->directory('assets/berkas')
                                            ->downloadable()
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
                                            ->image()
                                            ->imageEditor()
                                            ->imageEditorAspectRatios([
                                                null,
                                                '1:1' => '1:1',
                                                '3:4' => '3:4',
                                            ])
                                            ->fetchFileInformation(false)
                                            ->directory('assets/berkas')
                                            ->downloadable()
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
                                            ->directory('assets/berkas')
                                            ->downloadable()
                                            ->maxSize(500)
                                            ->minSize(10)
                                            ->visibility('private'),
                                        // Berkas Surat Keterangan Berkelakuan Baik Calon Peserta Didik Baru
                                        Forms\Components\FileUpload::make('berkas_skbb')
                                            ->label('Surat Keterangan Berkelakuan Baik')
                                            ->image()
                                            ->imageEditor()
                                            ->imageEditorAspectRatios([
                                                null,
                                                '1:1' => '1:1',
                                                '3:4' => '3:4',
                                            ])
                                            ->fetchFileInformation(false)
                                            ->directory('assets/berkas')
                                            ->downloadable()
                                            ->maxSize(500)
                                            ->minSize(10)
                                            ->visibility('private')
                                            ->required()
                                            ->validationMessages([
                                                'required' => 'Form ini wajib diisi.',
                                            ]),
                                        // Berkas Surat Keterangan Aktif Belajar Calon Peserta Didik Baru
                                        Forms\Components\FileUpload::make('berkas_skab')
                                            ->label('Surat Keterangan Aktif Belajar')
                                            ->image()
                                            ->imageEditor()
                                            ->imageEditorAspectRatios([
                                                null,
                                                '1:1' => '1:1',
                                                '3:4' => '3:4',
                                            ])
                                            ->fetchFileInformation(false)
                                            ->directory('assets/berkas')
                                            ->downloadable()
                                            ->maxSize(500)
                                            ->minSize(10)
                                            ->visibility('private')
                                            ->required()
                                            ->validationMessages([
                                                'required' => 'Form ini wajib diisi.',
                                            ]),
                                        // Berkas Prestasi Belajar Calon Peserta Didik Baru
                                        Forms\Components\FileUpload::make('berkas_prestasi')
                                            ->label('Berkas Prestasi Siswa')
                                            ->image()
                                            ->imageEditor()
                                            ->imageEditorAspectRatios([
                                                null,
                                                '1:1' => '1:1',
                                                '3:4' => '3:4',
                                            ])
                                            ->fetchFileInformation(false)
                                            ->directory('assets/berkas')
                                            ->downloadable()
                                            ->maxSize(500)
                                            ->minSize(10)
                                            ->visibility('private'),
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

                // Section Orang Tua
                Section::make('Data Orang Tua')
                    ->collapsible()
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
                                        Forms\Components\TextArea::make('ibu_alamat')
                                            ->label('Alamat')
                                            ->required()
                                            ->validationMessages([
                                                'required' => 'Form ini wajib diisi.',
                                            ]),
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
                                    ]),
                            ])
                            ->columns([
                                'sm' => '100%',
                                'md' => 2,
                                'lg' => 2,
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
                                        Forms\Components\TextArea::make('ayah_alamat')
                                            ->label('Alamat')
                                            ->required()
                                            ->validationMessages([
                                                'required' => 'Form ini wajib diisi.',
                                            ]),
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
                                    ]),
                            ])
                            ->columns([
                                'sm' => '100%',
                                'md' => 2,
                                'lg' => 2,
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
                                        Forms\Components\TextArea::make('wali_alamat')
                                            ->label('Alamat'),
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
                        'lg' => 3,
                    ]),

                // Section Data Tes
                Section::make('Data Tes')
                    ->hidden(function () {
                        $user = Filament::auth()->user();

                        return $user->email !== 'adm@mtsn1pandeglang.sch.id';
                    }) // Jika Email Bukan 'adm@mtsn1pandeglang.sch.id'
                    ->collapsible()
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
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            // ->recordTitleAttribute('nama')
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nik')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nisn')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tempat_lahir')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_lahir')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tahun_lulus')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jenis_kelamin')
                    ->searchable(),
                Tables\Columns\TextColumn::make('golongan_darah')
                    ->searchable(),
                Tables\Columns\TextColumn::make('agama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('anak_ke')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_saudara')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tinggal_bersama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jarak_ke_sekolah')
                    ->searchable(),
                Tables\Columns\TextColumn::make('disabilitas')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tinggi_badan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('berat_badan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('no_kip')
                    ->searchable(),
                Tables\Columns\TextColumn::make('siswa_telepon')
                    ->searchable(),
                Tables\Columns\TextColumn::make('siswa_alamat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('siswaNegara.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('siswaProvinsi.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('siswaKabupaten.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('siswaKecamatan.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('siswaKelurahan.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('berkas_foto')
                    ->searchable(),
                Tables\Columns\TextColumn::make('berkas_kk')
                    ->searchable(),
                Tables\Columns\TextColumn::make('berkas_akta')
                    ->searchable(),
                Tables\Columns\TextColumn::make('berkas_kip')
                    ->searchable(),
                Tables\Columns\TextColumn::make('berkas_nisn')
                    ->searchable(),
                Tables\Columns\TextColumn::make('berkas_skbb')
                    ->searchable(),
                Tables\Columns\TextColumn::make('berkas_skab')
                    ->searchable(),
                Tables\Columns\TextColumn::make('berkas_prestasi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ibu_nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ibu_telepon')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ibu_pekerjaan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ibu_status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ibu_alamat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ibuNegara.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ibuProvinsi.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ibuKabupaten.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ibuKecamatan.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ibuKelurahan.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ayah_nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ayah_telepon')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ayah_pekerjaan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ayah_status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ayah_alamat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ayahNegara.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ayahProvinsi.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ayahKabupaten.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ayahKecamatan.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ayahKelurahan.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('wali_nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('wali_telepon')
                    ->searchable(),
                Tables\Columns\TextColumn::make('wali_pekerjaan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('wali_status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('wali_alamat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('waliNegara.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('waliProvinsi.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('waliKabupaten.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('waliKecamatan.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('waliKelurahan.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sekolahAsal.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jalurPendaftaran.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('prestasi.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('peminatan_ekstrakurikuler')
                    ->searchable(),
                Tables\Columns\TextColumn::make('peminatan_pelajaran')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nilai_ipa')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nilai_ips')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nilai_matematika')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nilai_indonesia')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nilai_inggris')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nilai_arab')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bobot_nilai_akademik')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bobot_nilai_praktik')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nilai_akademik')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nilai_praktik')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status_pendaftaran')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kelas.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tes_sesi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tes_ruang')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tes_akademik_mulai')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tes_akademik_selesai')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tes_praktik_mulai')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tes_praktik_selesai')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                    Tables\Actions\ForceDeleteAction::make(),
                    Tables\Actions\RestoreAction::make(),
                ]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ]);
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
