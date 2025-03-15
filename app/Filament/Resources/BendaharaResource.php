<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BendaharaResource\Pages;
use App\Models\Bendahara;
use Carbon\Carbon;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\HtmlString;

class BendaharaResource extends Resource
{
    protected static ?string $model = Bendahara::class;

    protected static ?string $navigationLabel = 'Bendahara';

    protected static ?string $label = 'Bendahara';

    protected static ?string $navigationGroup = 'Administrasi';

    protected static ?int $navigationSort = 4;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
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
                            ->validationMessages([
                                'min' => 'NIP: Minimal 18 Karakter.',
                                'max' => 'NIP: Maksimal 18 Karakter.',
                            ])
                            ->maxLength(18)
                            ->minLength(18)
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
                                                'min' => 'Tahun Pendaftaran: Minimal 9 Karakter.',
                                                'max' => 'Tahun Pendaftaran: Maksimal 9 Karakter.',
                                            ])
                                            ->maxLength(9)
                                            ->minLength(9)
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
                            ->options(['Aktif' => 'Aktif', 'Nonaktif' => 'Nonaktif'])
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
                            ->directory('assets/bendahara')
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
                            ->directory('assets/bendahara')
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
                            ->directory('assets/bendahara')
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
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            // ->recordTitleAttribute('nama')
            ->columns([
                Tables\Columns\ImageColumn::make('berkas_foto')
                    ->label('Foto')
                    ->circular()
                    ->defaultImageUrl('/img/avatar.png'),
                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama Lengkap')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nip')
                    ->label('NIP')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tahunPendaftaran.nama')
                    ->label('Tahun Pendaftaran')
                    ->searchable(),
                // Tables\Columns\TextColumn::make('periode_awal')
                //     ->label('Periode')
                //     ->date('d F Y')
                //     ->sortable()
                //     ->description(
                //         fn(Anggota $record) => $record->periode_akhir ? 'Hingga: ' . Carbon::parse($record->periode_akhir)->translatedFormat('d F Y') : 'Hingga: (Sekarang)'
                //     ),
                Tables\Columns\ImageColumn::make('berkas_tte')
                    ->label('TTE')
                    ->defaultImageUrl('/img/tte.png'),
                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Aktif' => 'success',
                        'Nonaktif' => 'gray'
                    }),
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
                ]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
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
            'index' => Pages\ListBendaharas::route('/'),
            'create' => Pages\CreateBendahara::route('/create'),
            'view' => Pages\ViewBendahara::route('/{record}'),
            'edit' => Pages\EditBendahara::route('/{record}/edit'),
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
