<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TahunPendaftaranResource\Pages\CreateTahunPendaftaran;
use App\Filament\Resources\TahunPendaftaranResource\Pages\EditTahunPendaftaran;
use App\Filament\Resources\TahunPendaftaranResource\Pages\ListTahunPendaftarans;
use App\Filament\Resources\TahunPendaftaranResource\Pages\ViewTahunPendaftaran;
use App\Models\TahunPendaftaran;
use Carbon\Carbon;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ForceDeleteAction;
use Filament\Tables\Actions\ForceDeleteBulkAction;
use Filament\Tables\Actions\RestoreAction;
use Filament\Tables\Actions\RestoreBulkAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\TrashedFilter;
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
                Section::make('Tahun Pendaftaran')
                    ->collapsible()
                    ->description('Data Tahun Pendaftaran.')
                    ->schema([
                        TextInput::make('nama')
                            ->label('Tahun Pendaftaran')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->maxLength(9)
                            ->minLength(9)
                            ->placeholder('Contoh: 2025/2026'),

                        TextInput::make('kuantitas')
                            ->label('Kuota Maksimal Registrasi Akun')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->helperText(new HtmlString('<small><i>Kuota maksimal pendaftar yang dapat membuat akun pendaftaran.<sup style="color:red">*</sup></i></small>'))
                            ->numeric()
                            ->postfix('Akun'),
                        Select::make('status')
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

                Section::make('PPDB')
                    ->collapsible()
                    ->description('Tanggal Pelaksanaan PPDB.')
                    ->schema([
                        DatePicker::make('tanggal_ppdb_mulai')
                            ->label('Tanggal Mulai PPDB')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        DatePicker::make('tanggal_ppdb_selesai')
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

                Section::make('Pendaftaran Jalur Prestasi')
                    ->collapsible()
                    ->description('Tanggal pendaftaran untuk jalur prestasi.')
                    ->schema([
                        DateTimePicker::make('tanggal_pendaftaran_jalur_prestasi_mulai')
                            ->label('Tanggal Mulai Pendaftaran Jalur Prestasi')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        DateTimePicker::make('tanggal_pendaftaran_jalur_prestasi_selesai')
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

                Section::make('Pengumuman Jalur Prestasi')
                    ->collapsible()
                    ->description('Tanggal pengumuman untuk jalur prestasi.')
                    ->schema([
                        DateTimePicker::make('tanggal_pengumuman_jalur_prestasi_mulai')
                            ->label('Tanggal Mulai Pengumuman Jalur Prestasi')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        DateTimePicker::make('tanggal_pengumuman_jalur_prestasi_selesai')
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

                Section::make('Pendaftaran Jalur Reguler')
                    ->collapsible()
                    ->description('Tanggal pendaftaran untuk jalur reguler.')
                    ->schema([
                        DateTimePicker::make('tanggal_pendaftaran_jalur_reguler_mulai')
                            ->label('Tanggal Mulai Pendaftaran Jalur Reguler')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        DateTimePicker::make('tanggal_pendaftaran_jalur_reguler_selesai')
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

                Section::make('Penerbitan Kartu Tes')
                    ->collapsible()
                    ->description('Tanggal penerbitan kartu tes untuk jalur prestasi dan jalur reguler.')
                    ->schema([
                        DateTimePicker::make('tanggal_penerbitan_kartu_tes_mulai')
                            ->label('Tanggal Mulai Penerbitan Kartu Tes')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        DateTimePicker::make('tanggal_penerbitan_kartu_tes_selesai')
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

                Section::make('Tes Akademik')
                    ->collapsible()
                    ->description('Tanggal tes akademik untuk jalur prestasi dan jalur reguler.')
                    ->schema([
                        DateTimePicker::make('tanggal_tes_akademik_mulai')
                            ->label('Tanggal Mulai Tes Akademik')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        DateTimePicker::make('tanggal_tes_akademik_selesai')
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

                Section::make('Tes Praktik')
                    ->collapsible()
                    ->description('Tanggal tes praktik untuk jalur prestasi dan jalur reguler.')
                    ->schema([
                        DateTimePicker::make('tanggal_tes_praktik_mulai')
                            ->label('Tanggal Mulai Tes Praktik')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        DateTimePicker::make('tanggal_tes_praktik_selesai')
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

                Section::make('Pengumuman Jalur Reguler')
                    ->collapsible()
                    ->description('Tanggal pengumuman untuk jalur reguler.')
                    ->schema([
                        DateTimePicker::make('tanggal_pengumuman_jalur_reguler_mulai')
                            ->label('Tanggal Mulai Pengumuman Jalur Reguler')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        DateTimePicker::make('tanggal_pengumuman_jalur_reguler_selesai')
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

                Section::make('Registrasi Berkas')
                    ->collapsible()
                    ->description('Tanggal registrasi berkas untuk jalur prestasi dan jalur reguler.')
                    ->schema([
                        DateTimePicker::make('tanggal_registrasi_berkas_mulai')
                            ->label('Tanggal Mulai Registrasi Berkas')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        DateTimePicker::make('tanggal_registrasi_berkas_selesai')
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
                TextColumn::make('nama')
                    ->label('Tahun Pendaftaran')
                    ->searchable(),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Aktif' => 'success',
                        'Nonaktif' => 'gray'
                    }),

                TextColumn::make('kuantitas')
                    ->label('Kuota')
                    ->numeric()
                    ->suffix(' Pendaftar')
                    ->badge()
                    ->toggleable(isToggledHiddenByDefault: true),

                // PPDB
                TextColumn::make('tanggal_ppdb_mulai')
                    ->label('Pendaftaran Jalur Prestasi')
                    ->date('d F Y')
                    ->description(
                        fn (TahunPendaftaran $record) => $record->tanggal_ppdb_selesai ? 'Hingga: '.Carbon::parse($record->tanggal_ppdb_selesai)->translatedFormat('d F Y') : 'Hingga: (Sekarang)'
                    ),

                // Pendaftaran Jalur Prestasi
                TextColumn::make('tanggal_pendaftaran_jalur_prestasi_mulai')
                    ->label('Pendaftaran Jalur Prestasi')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn (TahunPendaftaran $record) => $record->tanggal_pendaftaran_jalur_prestasi_selesai ? 'Hingga: '.Carbon::parse($record->tanggal_pendaftaran_jalur_prestasi_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                // Pengumuman Jalur Prestasi
                TextColumn::make('tanggal_pengumuman_jalur_prestasi_mulai')
                    ->label('Pengumuman Jalur Prestasi')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn (TahunPendaftaran $record) => $record->tanggal_pengumuman_jalur_prestasi_selesai ? 'Hingga: '.Carbon::parse($record->tanggal_pengumuman_jalur_prestasi_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                // Pendaftaran Jalur Reguler
                TextColumn::make('tanggal_pendaftaran_jalur_reguler_mulai')
                    ->label('Pendaftaran Jalur Reguler')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn (TahunPendaftaran $record) => $record->tanggal_pendaftaran_jalur_reguler_selesai ? 'Hingga: '.Carbon::parse($record->tanggal_pendaftaran_jalur_reguler_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                // Penerbitan Kartu Tes
                TextColumn::make('tanggal_penerbitan_kartu_tes_mulai')
                    ->label('Penerbitan Kartu Tes')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn (TahunPendaftaran $record) => $record->tanggal_penerbitan_kartu_tes_selesai ? 'Hingga: '.Carbon::parse($record->tanggal_penerbitan_kartu_tes_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                // Tes Akademik
                TextColumn::make('tanggal_tes_akademik_mulai')
                    ->label('Tes Akademik')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn (TahunPendaftaran $record) => $record->tanggal_tes_akademik_selesai ? 'Hingga: '.Carbon::parse($record->tanggal_tes_akademik_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                // Tes Praktik
                TextColumn::make('tanggal_tes_praktik_mulai')
                    ->label('Tes Praktik')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn (TahunPendaftaran $record) => $record->tanggal_tes_praktik_selesai ? 'Hingga: '.Carbon::parse($record->tanggal_tes_praktik_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                // Pengumuman Jalur Reguler
                TextColumn::make('tanggal_pengumuman_jalur_reguler_mulai')
                    ->label('Pengumuman Jalur Reguler')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn (TahunPendaftaran $record) => $record->tanggal_pengumuman_jalur_reguler_selesai ? 'Hingga: '.Carbon::parse($record->tanggal_pengumuman_jalur_reguler_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                // Registrasi Berkas
                TextColumn::make('tanggal_registrasi_berkas_mulai')
                    ->label('Registrasi Berkas')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn (TahunPendaftaran $record) => $record->tanggal_registrasi_berkas_selesai ? 'Hingga: '.Carbon::parse($record->tanggal_registrasi_berkas_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                // Timestamp
                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d F Y H:i:s')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->label('Diubah')
                    ->dateTime('d F Y H:i:s')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('deleted_at')
                    ->label('Dihapus')
                    ->dateTime('d F Y H:i:s')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->actions([
                ActionGroup::make([
                    ViewAction::make(),
                    EditAction::make(),
                    DeleteAction::make(),
                    ForceDeleteAction::make(),
                    RestoreAction::make(),
                ]),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
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
            'index' => ListTahunPendaftarans::route('/'),
            'create' => CreateTahunPendaftaran::route('/create'),
            'view' => ViewTahunPendaftaran::route('/{record}'),
            'edit' => EditTahunPendaftaran::route('/{record}/edit'),
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
