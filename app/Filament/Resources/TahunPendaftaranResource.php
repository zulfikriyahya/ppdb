<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TahunPendaftaranResource\Pages;
use App\Models\TahunPendaftaran;
use Carbon\Carbon;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\HtmlString;

class TahunPendaftaranResource extends Resource
{
    protected static ?string $model = TahunPendaftaran::class;

    protected static ?string $navigationLabel = 'Tahun Pendaftaran';

    protected static ?string $label = 'Tahun Pendaftaran';

    protected static ?string $navigationGroup = 'Referensi';

    protected static ?int $navigationSort = 3;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
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
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            // ->recordTitleAttribute('nama')
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->label('Tahun Pendaftaran')
                    ->searchable(),

                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Aktif' => 'success',
                        'Nonaktif' => 'gray'
                    }),

                Tables\Columns\TextColumn::make('kuantitas')
                    ->label('Kuota')
                    ->numeric()
                    ->suffix(' Pendaftar')
                    ->badge()
                    ->toggleable(isToggledHiddenByDefault: true),

                // PPDB
                Tables\Columns\TextColumn::make('tanggal_ppdb_mulai')
                    ->label('Pendaftaran Jalur Prestasi')
                    ->date('d F Y')
                    ->description(
                        fn (TahunPendaftaran $record) => $record->tanggal_ppdb_selesai ? 'Hingga: '.Carbon::parse($record->tanggal_ppdb_selesai)->translatedFormat('d F Y') : 'Hingga: (Sekarang)'
                    ),

                // Pendaftaran Jalur Prestasi
                Tables\Columns\TextColumn::make('tanggal_pendaftaran_jalur_prestasi_mulai')
                    ->label('Pendaftaran Jalur Prestasi')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn (TahunPendaftaran $record) => $record->tanggal_pendaftaran_jalur_prestasi_selesai ? 'Hingga: '.Carbon::parse($record->tanggal_pendaftaran_jalur_prestasi_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                // Pengumuman Jalur Prestasi
                Tables\Columns\TextColumn::make('tanggal_pengumuman_jalur_prestasi_mulai')
                    ->label('Pengumuman Jalur Prestasi')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn (TahunPendaftaran $record) => $record->tanggal_pengumuman_jalur_prestasi_selesai ? 'Hingga: '.Carbon::parse($record->tanggal_pengumuman_jalur_prestasi_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                // Pendaftaran Jalur Reguler
                Tables\Columns\TextColumn::make('tanggal_pendaftaran_jalur_reguler_mulai')
                    ->label('Pendaftaran Jalur Reguler')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn (TahunPendaftaran $record) => $record->tanggal_pendaftaran_jalur_reguler_selesai ? 'Hingga: '.Carbon::parse($record->tanggal_pendaftaran_jalur_reguler_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                // Penerbitan Kartu Tes
                Tables\Columns\TextColumn::make('tanggal_penerbitan_kartu_tes_mulai')
                    ->label('Penerbitan Kartu Tes')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn (TahunPendaftaran $record) => $record->tanggal_penerbitan_kartu_tes_selesai ? 'Hingga: '.Carbon::parse($record->tanggal_penerbitan_kartu_tes_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                // Tes Akademik
                Tables\Columns\TextColumn::make('tanggal_tes_akademik_mulai')
                    ->label('Tes Akademik')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn (TahunPendaftaran $record) => $record->tanggal_tes_akademik_selesai ? 'Hingga: '.Carbon::parse($record->tanggal_tes_akademik_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                // Tes Praktik
                Tables\Columns\TextColumn::make('tanggal_tes_praktik_mulai')
                    ->label('Tes Praktik')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn (TahunPendaftaran $record) => $record->tanggal_tes_praktik_selesai ? 'Hingga: '.Carbon::parse($record->tanggal_tes_praktik_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                // Pengumuman Jalur Reguler
                Tables\Columns\TextColumn::make('tanggal_pengumuman_jalur_reguler_mulai')
                    ->label('Pengumuman Jalur Reguler')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn (TahunPendaftaran $record) => $record->tanggal_pengumuman_jalur_reguler_selesai ? 'Hingga: '.Carbon::parse($record->tanggal_pengumuman_jalur_reguler_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                // Registrasi Berkas
                Tables\Columns\TextColumn::make('tanggal_registrasi_berkas_mulai')
                    ->label('Registrasi Berkas')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn (TahunPendaftaran $record) => $record->tanggal_registrasi_berkas_selesai ? 'Hingga: '.Carbon::parse($record->tanggal_registrasi_berkas_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                // Timestamp
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d F Y H:i:s')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Diubah')
                    ->dateTime('d F Y H:i:s')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->label('Dihapus')
                    ->dateTime('d F Y H:i:s')
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
            'index' => Pages\ListTahunPendaftarans::route('/'),
            'create' => Pages\CreateTahunPendaftaran::route('/create'),
            'view' => Pages\ViewTahunPendaftaran::route('/{record}'),
            'edit' => Pages\EditTahunPendaftaran::route('/{record}/edit'),
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
