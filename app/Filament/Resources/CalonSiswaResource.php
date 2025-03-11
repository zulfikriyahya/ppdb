<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\CalonSiswa;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CalonSiswaResource\Pages;
use App\Filament\Resources\CalonSiswaResource\RelationManagers;

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
                            ]),
                        // Nama Lengkap Calon Siswa 
                        Forms\Components\TextInput::make('nama')
                            ->label('Nama Lengkap')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        // NIK Calon Siswa
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
                        // NISN Calon Siswa
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
                        // Tempat Lahir Calon Siswa
                        Forms\Components\TextInput::make('tempat_lahir')
                            ->label('Tempat Lahir')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        // Tanggal Lahir Calon Siswa
                        Forms\Components\DatePicker::make('tanggal_lahir')
                            ->label('Tanggal Lahir')
                            ->maxDate(now())
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        // Tahun Lulus Calon Siswa
                        Forms\Components\Select::make('tahun_lulus')
                            ->label('Tahun Lulus')
                            ->options(function () {
                                $tahun = range(date('Y'), date('Y') - 2);
                                return array_combine($tahun, $tahun);
                            })
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        // Jenis Kelamin Calon Siswa
                        Forms\Components\Select::make('jenis_kelamin')
                            ->label('Jenis Kelamin')
                            ->options([
                                'Pria' => 'Laki-laki',
                                'Wanita' => 'Perempuan',
                            ])
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        // Golongan Darah Calon Siswa
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
                            ]),
                        // Agama Calon Siswa
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
                            ]),
                        // Anak Ke Calon Siswa
                        Forms\Components\TextInput::make('anak_ke')
                            ->label('Anak Ke')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->numeric(),
                        // Jumlah Saudara Calon Siswa
                        Forms\Components\TextInput::make('jumlah_saudara')
                            ->label('Jumlah Saudara Kandung')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->numeric(),
                        // Tinggal Bersama Calon Siswa
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
                            ]),
                        // Jarak Ke Sekolah Calon Siswa
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
                            ]),
                        // Disabilitas Calon Siswa
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
                            ]),
                        // Tinggi Badan Calon Siswa
                        Forms\Components\TextInput::make('tinggi_badan')
                            ->label('Tinggi Badan')
                            ->postFix('Cm')
                            ->numeric(),
                        // Berat Badan Calon Siswa
                        Forms\Components\TextInput::make('berat_badan')
                            ->label('Berat Badan')
                            ->postFix('Kg')
                            ->numeric(),
                        // No KIP Calon Siswa
                        Forms\Components\TextInput::make('no_kip')
                            ->label('Nomor Kartu Indonesia Pintar')
                            ->numeric(),
                        Forms\Components\TextInput::make('siswa_telepon')
                            ->label('Nomor Telepon')
                            ->tel(),
                        // Alamat Calon Siswa
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
                            ]),
                        Forms\Components\Select::make('siswa_provinsi_id')
                            ->label('Provinsi')
                            ->relationship('siswaProvinsi', 'nama')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        Forms\Components\Select::make('siswa_kabupaten_id')
                            ->label('Kabupaten')
                            ->relationship('siswaKabupaten', 'nama')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        Forms\Components\Select::make('siswa_kecamatan_id')
                            ->label('Kecamatan')
                            ->relationship('siswaKecamatan', 'nama')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        Forms\Components\Select::make('siswa_kelurahan_id')
                            ->label('Kelurahan')
                            ->relationship('siswaKelurahan', 'nama')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),



                        // Berkas Foto Calon Siswa
                        Forms\Components\FileUpload::make('berkas_foto')
                            ->label('Foto Latar Merah')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        // Berkas KK Calon Siswa
                        Forms\Components\FileUpload::make('berkas_kk')
                            ->label('Kartu Keluarga')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        // Berkas Akta Calon Siswa
                        Forms\Components\FileUpload::make('berkas_akta')
                            ->label('Akta Kelahiran')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        // Berkas KIP Calon Siswa
                        Forms\Components\FileUpload::make('berkas_kip')
                            ->label('Kartu Indonesia Pintar'),
                        // Berkas NISN Calon Siswa
                        Forms\Components\FileUpload::make('berkas_nisn')
                            ->label('Kartu NISN/Tangkapan Layar NISN(Web)'),
                        // Berkas Surat Keterangan Berkelakuan Baik Calon Siswa
                        Forms\Components\FileUpload::make('berkas_skbb')
                            ->label('Surat Keterangan Berkelakuan Baik')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        // Berkas Surat Keterangan Aktif Belajar Calon Siswa
                        Forms\Components\FileUpload::make('berkas_skab')
                            ->label('Surat Keterangan Aktif Belajar')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        // Berkas Prestasi Belajar Calon Siswa
                        Forms\Components\FileUpload::make('berkas_prestasi')
                            ->label('Berkas Prestasi Siswa'),



                        // Biodata Ibu Calon Siswa
                        Forms\Components\TextInput::make('ibu_nama')
                            ->label('Nama Lengkap Ibu Kandung')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        Forms\Components\TextInput::make('ibu_telepon')
                            ->label('Nomor Telepon')
                            ->tel(),
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
                            ]),
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
                            ]),
                        Forms\Components\Select::make('ibu_provinsi_id')
                            ->label('Provinsi')
                            ->relationship('ibuProvinsi', 'nama')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        Forms\Components\Select::make('ibu_kabupaten_id')
                            ->label('Kabupaten')
                            ->relationship('ibuKabupaten', 'nama')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        Forms\Components\Select::make('ibu_kecamatan_id')
                            ->label('Kecamatan')
                            ->relationship('ibuKecamatan', 'nama')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        Forms\Components\Select::make('ibu_kelurahan_id')
                            ->label('Kelurahan')
                            ->relationship('ibuKelurahan', 'nama')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        // Biodata Ayah Calon Siswa
                        Forms\Components\TextInput::make('ayah_nama')
                            ->label('Nama Lengkap Ayah Kanung')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        Forms\Components\TextInput::make('ayah_telepon')
                            ->label('Nomor Telepon')
                            ->tel(),
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
                            ]),
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
                            ]),
                        Forms\Components\Select::make('ayah_provinsi_id')
                            ->label('Provinsi')
                            ->relationship('ayahProvinsi', 'nama')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        Forms\Components\Select::make('ayah_kabupaten_id')
                            ->label('Kabupaten')
                            ->relationship('ayahKabupaten', 'nama')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        Forms\Components\Select::make('ayah_kecamatan_id')
                            ->label('Kecamatan')
                            ->relationship('ayahKecamatan', 'nama')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        Forms\Components\Select::make('ayah_kelurahan_id')
                            ->label('Kelurahan')
                            ->relationship('ayahKelurahan', 'nama')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),




                        // Biodata Wali Calon Siswa
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
                            ->default('Hidup'),
                        Forms\Components\TextArea::make('wali_alamat')
                            ->label('Alamat'),
                        Forms\Components\Select::make('wali_negara_id')
                            ->label('Negara')
                            ->relationship('waliNegara', 'nama'),
                        Forms\Components\Select::make('wali_provinsi_id')
                            ->label('Provinsi')
                            ->relationship('waliProvinsi', 'nama'),
                        Forms\Components\Select::make('wali_kabupaten_id')
                            ->label('Kabupaten/Kota')
                            ->relationship('waliKabupaten', 'nama'),
                        Forms\Components\Select::make('wali_kecamatan_id')
                            ->label('Kecamatan')
                            ->relationship('waliKecamatan', 'nama'),
                        Forms\Components\Select::make('wali_kelurahan_id')
                            ->label('Kelurahan/Desa')
                            ->relationship('waliKelurahan', 'nama'),




                        // Data Sekolah Asal Calon Siswa
                        Forms\Components\Select::make('sekolah_asal_id')
                            ->label('Sekolah Asal')
                            ->relationship('sekolahAsal', 'nama')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        // Data Prestasi Calon Siswa
                        Forms\Components\Select::make('prestasi_id')
                            ->label('Prestasi')
                            ->relationship('prestasi', 'nama'),
                        // Data Peminatan Ekstrakurikuler Calon Siswa
                        Forms\Components\TextInput::make('peminatan_ekstrakurikuler')
                            ->label('Peminatan Ekstrakurikuler')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        // Data Peminatan Pelajaran Calon Siswa
                        Forms\Components\TextInput::make('peminatan_pelajaran')
                            ->label('Peminata Mata Pelajaran')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        // Data Nilai Tes Akademik IPA Calon Siswa
                        Forms\Components\TextInput::make('nilai_ipa')
                            ->label('Nilai Tes IPA')
                            ->numeric(),
                        // Data Nilai Tes Akademik IPS Calon Siswa
                        Forms\Components\TextInput::make('nilai_ips')
                            ->label('Nilai Tes IPS')
                            ->numeric(),
                        // Data Nilai Tes Akademik Matematika Calon Siswa
                        Forms\Components\TextInput::make('nilai_matematika')
                            ->label('Nilai Tes Matematika')
                            ->numeric(),
                        // Data Nilai Tes Akademik Bahasa Indonesia Calon Siswa
                        Forms\Components\TextInput::make('nilai_indonesia')
                            ->label('Nilai Tes Bahasa Indonesia')
                            ->numeric(),
                        // Data Nilai Tes Akademik Bahasa Inggris Calon Siswa
                        Forms\Components\TextInput::make('nilai_inggris')
                            ->label('Nilai Tes Bahasa Inggris')
                            ->numeric(),
                        // Data Nilai Tes Akademik Bahasa Arab Calon Siswa
                        Forms\Components\TextInput::make('nilai_arab')
                            ->label('Nilai Tes Bahasa Arab')
                            ->numeric(),
                        // Data Bobot Nilai Tes Akademik Calon Siswa
                        Forms\Components\TextInput::make('bobot_nilai_akademik')
                            ->label('Bobot Nilai Tes Akademik')
                            ->numeric(),
                        // Data Bobot Nilai Tes Praktik Calon Siswa
                        Forms\Components\TextInput::make('bobot_nilai_praktik')
                            ->label('Bobot Nilai Tes Praktik')
                            ->numeric(),
                        // Data Nilai Tes Akademik Calon Siswa
                        Forms\Components\TextInput::make('nilai_akademik')
                            ->label('Nilai Tes Akademik')
                            ->numeric(),
                        // Data Nilai Tes Praktik Calon Siswa
                        Forms\Components\TextInput::make('nilai_praktik')
                            ->label('Nilai Tes Praktik')
                            ->numeric(),
                        // Data Status Pendaftaran Calon Siswa
                        Forms\Components\TextInput::make('status_pendaftaran')
                            ->label('Status Pendaftaran'),
                        // Data Kelas Pendaftaran Calon Siswa
                        Forms\Components\Select::make('kelas_id')
                            ->label('Kelas')
                            ->relationship('kelas', 'nama'),
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
                    ])
                    ->columns([
                        'sm' => '100%',
                        'md' => 3,
                        'lg' => 3,
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
                ])
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
