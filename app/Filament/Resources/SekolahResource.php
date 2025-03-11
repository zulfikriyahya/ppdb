<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Sekolah;
use Filament\Forms\Get;
use Filament\Forms\Set;
use App\Models\Provinsi;
use Filament\Forms\Form;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Collection;
use Illuminate\Support\HtmlString;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\SekolahResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SekolahResource\RelationManagers;

class SekolahResource extends Resource
{
    protected static ?string $model = Sekolah::class;

    protected static ?string $navigationLabel = 'Instansi';

    protected static ?string $label = 'Instansi';

    protected static ?string $navigationGroup = 'Referensi';

    protected static ?int $navigationSort = 1;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
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
                        Forms\Components\FileUpload::make('logo')
                            ->label('Logo')
                            ->image()
                            ->imageEditor()
                            ->imageEditorAspectRatios([
                                null,
                                '1:1' => '1:1',
                            ])
                            ->fetchFileInformation(false)
                            ->directory('assets/instansi')
                            ->downloadable()
                            ->maxSize(500)
                            ->minSize(10)
                            ->visibility('private')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        Forms\Components\Select::make('pimpinan_id')
                            ->label('Kepala Instansi')
                            ->relationship('pimpinan', 'nama')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->createOptionForm([
                                // Biodata
                                Section::make('Biodata')
                                    ->collapsible()
                                    ->schema([
                                        // Nama Lengkap
                                        Forms\Components\TextInput::make('nama')
                                            ->label('Nama Lengkap')
                                            ->required()
                                            ->validationMessages([
                                                'required' => 'Form ini wajib diisi.',
                                            ]),
                                        // Nomor Indul Pegawai (NIP)
                                        Forms\Components\TextInput::make('nip')
                                            ->label('Nomor Induk Pegawai')
                                            ->prefix('NIP'),
                                        // Tahun Pendaftaran
                                        Forms\Components\Select::make('tahun_pendaftaran_id')
                                            ->label('Tahun Pendaftaran')
                                            ->relationship('tahunPendaftaran', 'nama')
                                            ->required()
                                            ->validationMessages([
                                                'required' => 'Form ini wajib diisi.',
                                            ])
                                            ->createOptionForm([
                                                Forms\Components\Section::make('Tahun Pendaftaran')
                                                    ->collapsible()
                                                    ->description('Data Tahun Pendaftaran.')
                                                    ->schema([
                                                        Forms\Components\TextInput::make('nama')
                                                            ->label('Tahun Pendaftaran')
                                                            ->required()
                                                            ->validationMessages([
                                                                'required' => 'Form ini wajib diisi.',
                                                            ])
                                                            ->placeholder('Contoh: 2025/2026'),

                                                        Forms\Components\TextInput::make('kuantitas')
                                                            ->label('Kuota Maksimal Registrasi Akun')
                                                            ->required()
                                                            ->validationMessages([
                                                                'required' => 'Form ini wajib diisi.',
                                                            ])
                                                            ->helperText(new HtmlString('<small><i>Kuota maksimal pendaftar yang dapat membuat akun pendaftaran.<sup style="color:red">*</sup></i></small>'))
                                                            ->numeric()
                                                            ->postfix('Akun'),
                                                        Forms\Components\Select::make('status')
                                                            ->label('Status')
                                                            ->required()
                                                            ->validationMessages([
                                                                'required' => 'Form ini wajib diisi.',
                                                            ])
                                                            ->options([
                                                                'Aktif' => 'Aktif',
                                                                'Nonaktif' => 'Nonaktif',
                                                            ])
                                                            ->default('Aktif')
                                                            ->native(false),
                                                    ])
                                                    ->columns([
                                                        'sm' => '100%',
                                                        'md' => 3,
                                                        'lg' => 3,
                                                        'xl' => 3,
                                                        '2xl' => 3,
                                                    ]),

                                                Forms\Components\Section::make('PPDB')
                                                    ->collapsible()
                                                    ->description('Tanggal Pelaksanaan PPDB')
                                                    ->schema([
                                                        Forms\Components\DatePicker::make('tanggal_ppdb_mulai')
                                                            ->label('Tanggal Mulai PPDB')
                                                            ->required()
                                                            ->validationMessages([
                                                                'required' => 'Form ini wajib diisi.',
                                                            ]),
                                                        Forms\Components\DatePicker::make('tanggal_ppdb_selesai')
                                                            ->label('Tanggal Selesai PPDB')
                                                            ->required()
                                                            ->validationMessages([
                                                                'required' => 'Form ini wajib diisi.',
                                                            ]),
                                                    ])
                                                    ->columns([
                                                        'sm' => '100%',
                                                        'md' => 2,
                                                        'lg' => 2,
                                                        'xl' => 2,
                                                        '2xl' => 2,
                                                    ]),

                                                Forms\Components\Section::make('Pendaftaran Jalur Prestasi')
                                                    ->collapsible()
                                                    ->description('Tanggal pendaftaran untuk jalur prestasi.')
                                                    ->schema([
                                                        Forms\Components\DateTimePicker::make('tanggal_pendaftaran_jalur_prestasi_mulai')
                                                            ->label('Tanggal Mulai Pendaftaran Jalur Prestasi')
                                                            ->required()
                                                            ->validationMessages([
                                                                'required' => 'Form ini wajib diisi.',
                                                            ]),
                                                        Forms\Components\DateTimePicker::make('tanggal_pendaftaran_jalur_prestasi_selesai')
                                                            ->label('Tanggal Selesai Pendaftaran Jalur Prestasi')
                                                            ->required()
                                                            ->validationMessages([
                                                                'required' => 'Form ini wajib diisi.',
                                                            ]),
                                                    ])
                                                    ->columns([
                                                        'sm' => '100%',
                                                        'md' => 2,
                                                        'lg' => 2,
                                                        'xl' => 2,
                                                        '2xl' => 2,
                                                    ]),

                                                Forms\Components\Section::make('Pengumuman Jalur Prestasi')
                                                    ->collapsible()
                                                    ->description('Tanggal pengumuman untuk jalur prestasi.')
                                                    ->schema([
                                                        Forms\Components\DateTimePicker::make('tanggal_pengumuman_jalur_prestasi_mulai')
                                                            ->label('Tanggal Mulai Pengumuman Jalur Prestasi')
                                                            ->required()
                                                            ->validationMessages([
                                                                'required' => 'Form ini wajib diisi.',
                                                            ]),
                                                        Forms\Components\DateTimePicker::make('tanggal_pengumuman_jalur_prestasi_selesai')
                                                            ->label('Tanggal Selesai Pengumuman Jalur Prestasi')
                                                            ->required()
                                                            ->validationMessages([
                                                                'required' => 'Form ini wajib diisi.',
                                                            ]),
                                                    ])
                                                    ->columns([
                                                        'sm' => '100%',
                                                        'md' => 2,
                                                        'lg' => 2,
                                                        'xl' => 2,
                                                        '2xl' => 2,
                                                    ]),

                                                Forms\Components\Section::make('Pendaftaran Jalur Reguler')
                                                    ->collapsible()
                                                    ->description('Tanggal pendaftaran untuk jalur reguler.')
                                                    ->schema([
                                                        Forms\Components\DateTimePicker::make('tanggal_pendaftaran_jalur_reguler_mulai')
                                                            ->label('Tanggal Mulai Pendaftaran Jalur Reguler')
                                                            ->required()
                                                            ->validationMessages([
                                                                'required' => 'Form ini wajib diisi.',
                                                            ]),
                                                        Forms\Components\DateTimePicker::make('tanggal_pendaftaran_jalur_reguler_selesai')
                                                            ->label('Tanggal Selesai Pendaftaran Jalur Reguler')
                                                            ->required()
                                                            ->validationMessages([
                                                                'required' => 'Form ini wajib diisi.',
                                                            ]),
                                                    ])
                                                    ->columns([
                                                        'sm' => '100%',
                                                        'md' => 2,
                                                        'lg' => 2,
                                                        'xl' => 2,
                                                        '2xl' => 2,
                                                    ]),

                                                Forms\Components\Section::make('Penerbitan Kartu Tes')
                                                    ->collapsible()
                                                    ->description('Tanggal penerbitan kartu tes untuk jalur prestasi dan jalur reguler.')
                                                    ->schema([
                                                        Forms\Components\DateTimePicker::make('tanggal_penerbitan_kartu_tes_mulai')
                                                            ->label('Tanggal Mulai Penerbitan Kartu Tes')
                                                            ->required()
                                                            ->validationMessages([
                                                                'required' => 'Form ini wajib diisi.',
                                                            ]),
                                                        Forms\Components\DateTimePicker::make('tanggal_penerbitan_kartu_tes_selesai')
                                                            ->label('Tanggal Selesai Penerbitan Kartu Tes')
                                                            ->required()
                                                            ->validationMessages([
                                                                'required' => 'Form ini wajib diisi.',
                                                            ]),
                                                    ])
                                                    ->columns([
                                                        'sm' => '100%',
                                                        'md' => 2,
                                                        'lg' => 2,
                                                        'xl' => 2,
                                                        '2xl' => 2,
                                                    ]),

                                                Forms\Components\Section::make('Tes Akademik')
                                                    ->collapsible()
                                                    ->description('Tanggal tes akademik untuk jalur prestasi dan jalur reguler.')
                                                    ->schema([
                                                        Forms\Components\DateTimePicker::make('tanggal_tes_akademik_mulai')
                                                            ->label('Tanggal Mulai Tes Akademik')
                                                            ->required()
                                                            ->validationMessages([
                                                                'required' => 'Form ini wajib diisi.',
                                                            ]),
                                                        Forms\Components\DateTimePicker::make('tanggal_tes_akademik_selesai')
                                                            ->label('Tanggal Selesai Tes Akademik')
                                                            ->required()
                                                            ->validationMessages([
                                                                'required' => 'Form ini wajib diisi.',
                                                            ]),
                                                    ])
                                                    ->columns([
                                                        'sm' => '100%',
                                                        'md' => 2,
                                                        'lg' => 2,
                                                        'xl' => 2,
                                                        '2xl' => 2,
                                                    ]),

                                                Forms\Components\Section::make('Tes Praktik')
                                                    ->collapsible()
                                                    ->description('Tanggal tes praktik untuk jalur prestasi dan jalur reguler.')
                                                    ->schema([
                                                        Forms\Components\DateTimePicker::make('tanggal_tes_praktik_mulai')
                                                            ->label('Tanggal Mulai Tes Praktik')
                                                            ->required()
                                                            ->validationMessages([
                                                                'required' => 'Form ini wajib diisi.',
                                                            ]),
                                                        Forms\Components\DateTimePicker::make('tanggal_tes_praktik_selesai')
                                                            ->label('Tanggal Selesai Tes Praktik')
                                                            ->required()
                                                            ->validationMessages([
                                                                'required' => 'Form ini wajib diisi.',
                                                            ]),
                                                    ])
                                                    ->columns([
                                                        'sm' => '100%',
                                                        'md' => 2,
                                                        'lg' => 2,
                                                        'xl' => 2,
                                                        '2xl' => 2,
                                                    ]),

                                                Forms\Components\Section::make('Pengumuman Jalur Reguler')
                                                    ->collapsible()
                                                    ->description('Tanggal pengumuman untuk jalur reguler.')
                                                    ->schema([
                                                        Forms\Components\DateTimePicker::make('tanggal_pengumuman_jalur_reguler_mulai')
                                                            ->label('Tanggal Mulai Pengumuman Jalur Reguler')
                                                            ->required()
                                                            ->validationMessages([
                                                                'required' => 'Form ini wajib diisi.',
                                                            ]),
                                                        Forms\Components\DateTimePicker::make('tanggal_pengumuman_jalur_reguler_selesai')
                                                            ->label('Tanggal Selesai Pengumuman Jalur Reguler')
                                                            ->required()
                                                            ->validationMessages([
                                                                'required' => 'Form ini wajib diisi.',
                                                            ]),
                                                    ])
                                                    ->columns([
                                                        'sm' => '100%',
                                                        'md' => 2,
                                                        'lg' => 2,
                                                        'xl' => 2,
                                                        '2xl' => 2,
                                                    ]),

                                                Forms\Components\Section::make('Registrasi Berkas')
                                                    ->collapsible()
                                                    ->description('Tanggal registrasi berkas untuk jalur prestasi dan jalur reguler.')
                                                    ->schema([
                                                        Forms\Components\DateTimePicker::make('tanggal_registrasi_berkas_mulai')
                                                            ->label('Tanggal Mulai Registrasi Berkas')
                                                            ->required()
                                                            ->validationMessages([
                                                                'required' => 'Form ini wajib diisi.',
                                                            ]),
                                                        Forms\Components\DateTimePicker::make('tanggal_registrasi_berkas_selesai')
                                                            ->label('Tanggal Selesai Registrasi Berkas')
                                                            ->required()
                                                            ->validationMessages([
                                                                'required' => 'Form ini wajib diisi.',
                                                            ]),
                                                    ])
                                                    ->columns([
                                                        'sm' => '100%',
                                                        'md' => 2,
                                                        'lg' => 2,
                                                        'xl' => 2,
                                                        '2xl' => 2,
                                                    ]),
                                            ]),
                                        // Status
                                        Forms\Components\Select::make('status')
                                            ->label('Status')
                                            ->options(['Aktif' => 'Aktif', 'Nonaktif' => 'Nonaktif',])
                                            ->required()
                                            ->validationMessages([
                                                'required' => 'Form ini wajib diisi.',
                                            ]),
                                    ])
                                    ->columns([
                                        'sm' => '100%',
                                        'md' => 2,
                                        'lg' => 4,
                                    ]),

                                // Berkas
                                Section::make('Berkas')
                                    ->collapsed()
                                    ->schema([
                                        // Foto
                                        Forms\Components\FileUpload::make('berkas_foto')
                                            ->label('Foto')
                                            ->image()
                                            ->imageEditor()
                                            ->imageEditorAspectRatios([
                                                null,
                                                '1:1' => '1:1',
                                                '3:4' => '3:4',
                                            ])
                                            ->fetchFileInformation(false)
                                            ->directory('assets/pimpinan')
                                            ->downloadable()
                                            ->maxSize(500)
                                            ->minSize(10)
                                            ->visibility('private')
                                            ->required()
                                            ->validationMessages([
                                                'required' => 'Form ini wajib diisi.',
                                            ]),
                                        // Tanda Tangan Elektronik
                                        Forms\Components\FileUpload::make('berkas_tte')
                                            ->label('Tanda Tangan Elektronik')
                                            ->image()
                                            ->imageEditor()
                                            ->imageEditorAspectRatios([
                                                null,
                                                '1:1' => '1:1',
                                            ])
                                            ->fetchFileInformation(false)
                                            ->directory('assets/pimpinan')
                                            ->downloadable()
                                            ->maxSize(500)
                                            ->minSize(10)
                                            ->visibility('private')
                                            ->required()
                                            ->validationMessages([
                                                'required' => 'Form ini wajib diisi.',
                                            ]),
                                        // Surat Tugas/Surat Keputusan
                                        Forms\Components\FileUpload::make('berkas_sk')
                                            ->label('Surat Tugas/Surat Keputusan')
                                            ->fetchFileInformation(false)
                                            ->directory('assets/pimpinan')
                                            ->downloadable()
                                            ->maxSize(500)
                                            ->minSize(10)
                                            ->visibility('private')
                                            ->openable()
                                            ->acceptedFileTypes(['application/pdf'])
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
                            ]),
                        Forms\Components\Select::make('akreditasi')
                            ->label('Akreditasi')
                            ->options(['A' => 'A', 'B' => 'B', 'C' => 'C', 'D' => 'D']),
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
                        Forms\Components\TextArea::make('alamat')
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
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            // ->recordTitleAttribute('nama')
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama Instansi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('npsn')
                    ->label('Nomor Pokok Sekolah Nasional')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nss')
                    ->label('Nomor Statistik Sekolah')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('logo')
                    ->label('Logo'),
                Tables\Columns\TextColumn::make('pimpinan.nama')
                    ->label('Kepala Instansi')
                    ->sortable(),
                Tables\Columns\TextColumn::make('akreditasi')
                    ->label('Akreditasi')
                    ->badge()
                    ->searchable(),
                Tables\Columns\TextColumn::make('alamat')
                    ->label('Alamat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('negara.nama')
                    ->label('Negara')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('provinsi.nama')
                    ->label('Provinsi')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kabupaten.nama')
                    ->label('Kabupaten')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kecamatan.nama')
                    ->label('Kecamatan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kelurahan.nama')
                    ->label('Kelurahan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('website')
                    ->label('Website')
                    ->searchable(),
                Tables\Columns\TextColumn::make('telepon')
                    ->label('Telepon')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),
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
            'index' => Pages\ListSekolahs::route('/'),
            'create' => Pages\CreateSekolah::route('/create'),
            'view' => Pages\ViewSekolah::route('/{record}'),
            'edit' => Pages\EditSekolah::route('/{record}/edit'),
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
