<?php

namespace App\Filament\Resources;

use Carbon\Carbon;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\TahunPelajaran;
use Filament\Resources\Resource;
use Illuminate\Support\HtmlString;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TahunPelajaranResource\Pages;
use App\Filament\Resources\TahunPelajaranResource\RelationManagers;

class TahunPelajaranResource extends Resource
{
    protected static ?string $model = TahunPelajaran::class;

    protected static ?string $navigationLabel = 'Tahun Pendaftaran';

    protected static ?string $label = 'Tahun Pendaftaran';

    protected static ?string $navigationGroup = 'Referensi';

    protected static ?int $navigationSort = 2;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Tahun Pendaftaran')
                    ->collapsed()
                    ->description('Data Tahun Pendaftaran.')
                    ->schema([
                        Forms\Components\TextInput::make('nama')
                            ->label('Tahun Pendaftaran')
                            ->required()
                            ->placeholder('Contoh: 2025/2026'),

                        Forms\Components\TextInput::make('kuantitas')
                            ->label('Kuota Maksimal Pendaftar')
                            ->required()
                            ->helperText(new HtmlString('<small><i>Kuota maksimal pendaftar yang dapat membuat akun pendaftaran.<sup style="color:red">*</sup></i></small>'))
                            ->numeric()
                            ->postfix('Pendaftar'),
                        Forms\Components\Select::make('status')
                            ->label('Status')
                            ->required()
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

                Forms\Components\Section::make('Pendaftaran Jalur Prestasi')
                    ->collapsed()
                    ->description('Tanggal pendaftaran untuk jalur prestasi.')
                    ->schema([
                        Forms\Components\DateTimePicker::make('tanggal_pendaftaran_jalur_prestasi_mulai')
                            ->label('Tanggal Mulai Pendaftaran Jalur Prestasi')
                            ->required(),
                        Forms\Components\DateTimePicker::make('tanggal_pendaftaran_jalur_prestasi_selesai')
                            ->label('Tanggal Selesai Pendaftaran Jalur Prestasi')
                            ->required(),
                    ])
                    ->columns([
                        'sm' => '50%',
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),

                Forms\Components\Section::make('Pengumuman Jalur Prestasi')
                    ->collapsed()
                    ->description('Tanggal pengumuman untuk jalur prestasi.')
                    ->schema([
                        Forms\Components\DateTimePicker::make('tanggal_pengumuman_jalur_prestasi_mulai')
                            ->label('Tanggal Mulai Pengumuman Jalur Prestasi')
                            ->required(),
                        Forms\Components\DateTimePicker::make('tanggal_pengumuman_jalur_prestasi_selesai')
                            ->label('Tanggal Selesai Pengumuman Jalur Prestasi')
                            ->required(),
                    ])
                    ->columns([
                        'sm' => '50%',
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),

                Forms\Components\Section::make('Pendaftaran Jalur Reguler')
                    ->collapsed()
                    ->description('Tanggal pendaftaran untuk jalur reguler.')
                    ->schema([
                        Forms\Components\DateTimePicker::make('tanggal_pendaftaran_jalur_reguler_mulai')
                            ->label('Tanggal Mulai Pendaftaran Jalur Reguler')
                            ->required(),
                        Forms\Components\DateTimePicker::make('tanggal_pendaftaran_jalur_reguler_selesai')
                            ->label('Tanggal Selesai Pendaftaran Jalur Reguler')
                            ->required(),
                    ])
                    ->columns([
                        'sm' => '50%',
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),

                Forms\Components\Section::make('Penerbitan Kartu Tes')
                    ->collapsed()
                    ->description('Tanggal penerbitan kartu tes untuk jalur prestasi dan jalur reguler.')
                    ->schema([
                        Forms\Components\DateTimePicker::make('tanggal_penerbitan_kartu_tes_mulai')
                            ->label('Tanggal Mulai Penerbitan Kartu Tes')
                            ->required(),
                        Forms\Components\DateTimePicker::make('tanggal_penerbitan_kartu_tes_selesai')
                            ->label('Tanggal Selesai Penerbitan Kartu Tes')
                            ->required(),
                    ])
                    ->columns([
                        'sm' => '100%',
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),

                Forms\Components\Section::make('Tes Akademik')
                    ->collapsed()
                    ->description('Tanggal tes akademik untuk jalur prestasi dan jalur reguler.')
                    ->schema([
                        Forms\Components\DateTimePicker::make('tanggal_tes_akademik_mulai')
                            ->label('Tanggal Mulai Tes Akademik')
                            ->required(),
                        Forms\Components\DateTimePicker::make('tanggal_tes_akademik_selesai')
                            ->label('Tanggal Selesai Tes Akademik')
                            ->required(),
                    ])
                    ->columns([
                        'sm' => '100%',
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),

                Forms\Components\Section::make('Tes Praktik')
                    ->collapsed()
                    ->description('Tanggal tes praktik untuk jalur prestasi dan jalur reguler.')
                    ->schema([
                        Forms\Components\DateTimePicker::make('tanggal_tes_praktik_mulai')
                            ->label('Tanggal Mulai Tes Praktik')
                            ->required(),
                        Forms\Components\DateTimePicker::make('tanggal_tes_praktik_selesai')
                            ->label('Tanggal Selesai Tes Praktik')
                            ->required(),
                    ])
                    ->columns([
                        'sm' => '100%',
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),

                Forms\Components\Section::make('Pengumuman Jalur Reguler')
                    ->collapsed()
                    ->description('Tanggal pengumuman untuk jalur reguler.')
                    ->schema([
                        Forms\Components\DateTimePicker::make('tanggal_pengumuman_jalur_reguler_mulai')
                            ->label('Tanggal Mulai Pengumuman Jalur Reguler')
                            ->required(),
                        Forms\Components\DateTimePicker::make('tanggal_pengumuman_jalur_reguler_selesai')
                            ->label('Tanggal Selesai Pengumuman Jalur Reguler')
                            ->required(),
                    ])
                    ->columns([
                        'sm' => '100%',
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),

                Forms\Components\Section::make('Registrasi Berkas')
                    ->collapsed()
                    ->description('Tanggal registrasi berkas untuk jalur prestasi dan jalur reguler.')
                    ->schema([
                        Forms\Components\DateTimePicker::make('tanggal_registrasi_berkas_mulai')
                            ->label('Tanggal Mulai Registrasi Berkas')
                            ->required(),
                        Forms\Components\DateTimePicker::make('tanggal_registrasi_berkas_selesai')
                            ->label('Tanggal Selesai Registrasi Berkas')
                            ->required(),
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
                    ->label('Tahun Pelajaran')
                    ->searchable(),

                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'Aktif' => 'success',
                        'Nonaktif' => 'gray'
                    }),

                Tables\Columns\TextColumn::make('kuantitas')
                    ->label('Kuota')
                    ->numeric()
                    ->description(' Pendaftar')
                    ->toggleable(isToggledHiddenByDefault: true),

                // Pendaftaran Jalur Prestasi
                Tables\Columns\TextColumn::make('tanggal_pendaftaran_jalur_prestasi_mulai')
                    ->label('Pendaftaran')
                    ->dateTime('d F Y H:m:s')
                    ->description(
                        fn(TahunPelajaran $record) => $record->tanggal_pendaftaran_jalur_prestasi_selesai ? 'Hingga: ' . Carbon::parse($record->tanggal_pendaftaran_jalur_prestasi_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    )
                    ->toggleable(isToggledHiddenByDefault: true),

                // Pengumuman Jalur Prestasi
                Tables\Columns\TextColumn::make('tanggal_pengumuman_jalur_prestasi_mulai')
                    ->label('Pengumuman Jalur Prestasi')
                    ->dateTime('d F Y H:m:s')
                    ->description(
                        fn(TahunPelajaran $record) => $record->tanggal_pengumuman_jalur_prestasi_selesai ? 'Hingga: ' . Carbon::parse($record->tanggal_pengumuman_jalur_prestasi_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                // Penerbitan Kartu Tes
                Tables\Columns\TextColumn::make('tanggal_penerbitan_kartu_tes_mulai')
                    ->label('Penerbitan Kartu Tes')
                    ->dateTime('d F Y H:m:s')
                    ->description(
                        fn(TahunPelajaran $record) => $record->tanggal_penerbitan_kartu_tes_selesai ? 'Hingga: ' . Carbon::parse($record->tanggal_penerbitan_kartu_tes_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                // Tes Akademik
                Tables\Columns\TextColumn::make('tanggal_tes_akademik_mulai')
                    ->label('Tes Akademik')
                    ->dateTime('d F Y H:m:s')
                    ->description(
                        fn(TahunPelajaran $record) => $record->tanggal_tes_akademik_selesai ? 'Hingga: ' . Carbon::parse($record->tanggal_tes_akademik_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                // Tes Praktik
                Tables\Columns\TextColumn::make('tanggal_tes_praktik_mulai')
                    ->label('Tes Praktik')
                    ->dateTime('d F Y H:m:s')
                    ->description(
                        fn(TahunPelajaran $record) => $record->tanggal_tes_praktik_selesai ? 'Hingga: ' . Carbon::parse($record->tanggal_tes_praktik_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                // Pengumuman Jalur Reguler
                Tables\Columns\TextColumn::make('tanggal_pengumuman_jalur_reguler_mulai')
                    ->label('Pengumuman Jalur Reguler')
                    ->dateTime('d F Y H:m:s')
                    ->description(
                        fn(TahunPelajaran $record) => $record->tanggal_pengumuman_jalur_reguler_selesai ? 'Hingga: ' . Carbon::parse($record->tanggal_pengumuman_jalur_reguler_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                // Registrasi Berkas
                Tables\Columns\TextColumn::make('tanggal_registrasi_berkas_mulai')
                    ->label('Registrasi Berkas')
                    ->dateTime('d F Y H:m:s')
                    ->description(
                        fn(TahunPelajaran $record) => $record->tanggal_registrasi_berkas_selesai ? 'Hingga: ' . Carbon::parse($record->tanggal_registrasi_berkas_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                // Timestamp
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d F Y H:m:s')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Diubah')
                    ->dateTime('d F Y H:m:s')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->label('Dihapus')
                    ->dateTime('d F Y H:m:s')
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
            'index' => Pages\ListTahunPelajarans::route('/'),
            'create' => Pages\CreateTahunPelajaran::route('/create'),
            'view' => Pages\ViewTahunPelajaran::route('/{record}'),
            'edit' => Pages\EditTahunPelajaran::route('/{record}/edit'),
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
