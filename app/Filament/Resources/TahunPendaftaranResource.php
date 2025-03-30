<?php

namespace App\Filament\Resources;

use Carbon\Carbon;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\TahunPendaftaran;
use Filament\Resources\Resource;
use Illuminate\Support\HtmlString;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\RestoreAction;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Forms\Components\DateTimePicker;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\ForceDeleteAction;
use Filament\Tables\Actions\RestoreBulkAction;
use Filament\Tables\Actions\ForceDeleteBulkAction;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TahunPendaftaranResource\Pages\EditTahunPendaftaran;
use App\Filament\Resources\TahunPendaftaranResource\Pages\ViewTahunPendaftaran;
use App\Filament\Resources\TahunPendaftaranResource\Pages\ListTahunPendaftarans;
use App\Filament\Resources\TahunPendaftaranResource\Pages\CreateTahunPendaftaran;

class TahunPendaftaranResource extends Resource
{
    protected static ?string $model = TahunPendaftaran::class;

    protected static ?string $recordTitleAttribute = 'nama';

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
                                'min' => 'Tahun Pendaftaran: Minimal 9 Karakter.',
                                'max' => 'Tahun Pendaftaran: Maksimal 9 Karakter.',
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
                        'sm' => 1,
                        'md' => 3,
                        'lg' => 3,
                        'xl' => 3,
                        '2xl' => 3,
                    ]),
                Section::make('Daftar Akun')
                    ->collapsible()
                    ->description('Tanggal Daftar Akun PPDB.')
                    ->schema([
                        DatePicker::make('tanggal_ppdb_mulai')
                            ->label('Tanggal Mulai Daftar Akun PPDB')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        DatePicker::make('tanggal_ppdb_selesai')
                            ->label('Tanggal Selesai Daftar Akun PPDB')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Penerbitan Kartu Tes')
                    ->collapsible()
                    ->description('Tanggal penerbitan kartu tes.')
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
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Registrasi Berkas')
                    ->collapsible()
                    ->description('Tanggal registrasi berkas.')
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
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Pendaftaran Jalur Prestasi')
                    ->collapsed()
                    ->description('Tanggal pendaftaran untuk jalur prestasi.')
                    ->schema([
                        DateTimePicker::make('tanggal_pendaftaran_jalur_prestasi_mulai')
                            ->label('Tanggal Mulai Pendaftaran Jalur Prestasi'),
                        DateTimePicker::make('tanggal_pendaftaran_jalur_prestasi_selesai')
                            ->label('Tanggal Selesai Pendaftaran Jalur Prestasi'),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Pengumuman Jalur Prestasi')
                    ->collapsed()
                    ->description('Tanggal pengumuman untuk jalur prestasi.')
                    ->schema([
                        DateTimePicker::make('tanggal_pengumuman_jalur_prestasi_mulai')
                            ->label('Tanggal Mulai Pengumuman Jalur Prestasi'),
                        DateTimePicker::make('tanggal_pengumuman_jalur_prestasi_selesai')
                            ->label('Tanggal Selesai Pengumuman Jalur Prestasi'),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Pendaftaran Jalur Reguler')
                    ->collapsed()
                    ->description('Tanggal pendaftaran untuk jalur reguler.')
                    ->schema([
                        DateTimePicker::make('tanggal_pendaftaran_jalur_reguler_mulai')
                            ->label('Tanggal Mulai Pendaftaran Jalur Reguler'),
                        DateTimePicker::make('tanggal_pendaftaran_jalur_reguler_selesai')
                            ->label('Tanggal Selesai Pendaftaran Jalur Reguler'),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Pengumuman Jalur Reguler')
                    ->collapsed()
                    ->description('Tanggal pengumuman untuk jalur reguler.')
                    ->schema([
                        DateTimePicker::make('tanggal_pengumuman_jalur_reguler_mulai')
                            ->label('Tanggal Mulai Pengumuman Jalur Reguler'),
                        DateTimePicker::make('tanggal_pengumuman_jalur_reguler_selesai')
                            ->label('Tanggal Selesai Pengumuman Jalur Reguler'),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Pendaftaran Jalur Afirmasi')
                    ->collapsed()
                    ->description('Tanggal pendaftaran untuk jalur Afirmasi.')
                    ->schema([
                        DateTimePicker::make('tanggal_pendaftaran_jalur_afirmasi_mulai')
                            ->label('Tanggal Mulai Pendaftaran Jalur Afirmasi'),
                        DateTimePicker::make('tanggal_pendaftaran_jalur_afirmasi_selesai')
                            ->label('Tanggal Selesai Pendaftaran Jalur Afirmasi'),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Pengumuman Jalur Afirmasi')
                    ->collapsed()
                    ->description('Tanggal pengumuman untuk jalur Afirmasi.')
                    ->schema([
                        DateTimePicker::make('tanggal_pengumuman_jalur_afirmasi_mulai')
                            ->label('Tanggal Mulai Pengumuman Jalur Afirmasi'),
                        DateTimePicker::make('tanggal_pengumuman_jalur_afirmasi_selesai')
                            ->label('Tanggal Selesai Pengumuman Jalur Afirmasi'),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Pendaftaran Jalur Zonasi')
                    ->collapsed()
                    ->description('Tanggal pendaftaran untuk jalur Zonasi.')
                    ->schema([
                        DateTimePicker::make('tanggal_pendaftaran_jalur_zonasi_mulai')
                            ->label('Tanggal Mulai Pendaftaran Jalur Zonasi'),
                        DateTimePicker::make('tanggal_pendaftaran_jalur_zonasi_selesai')
                            ->label('Tanggal Selesai Pendaftaran Jalur Zonasi'),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Pengumuman Jalur Zonasi')
                    ->collapsed()
                    ->description('Tanggal pengumuman untuk jalur Zonasi.')
                    ->schema([
                        DateTimePicker::make('tanggal_pengumuman_jalur_zonasi_mulai')
                            ->label('Tanggal Mulai Pengumuman Jalur Zonasi'),
                        DateTimePicker::make('tanggal_pengumuman_jalur_zonasi_selesai')
                            ->label('Tanggal Selesai Pengumuman Jalur Zonasi'),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Pendaftaran Jalur Mutasi')
                    ->collapsed()
                    ->description('Tanggal pendaftaran untuk jalur Mutasi.')
                    ->schema([
                        DateTimePicker::make('tanggal_pendaftaran_jalur_mutasi_mulai')
                            ->label('Tanggal Mulai Pendaftaran Jalur Mutasi'),
                        DateTimePicker::make('tanggal_pendaftaran_jalur_mutasi_selesai')
                            ->label('Tanggal Selesai Pendaftaran Jalur Mutasi'),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Pengumuman Jalur Mutasi')
                    ->collapsed()
                    ->description('Tanggal pengumuman untuk jalur Mutasi.')
                    ->schema([
                        DateTimePicker::make('tanggal_pengumuman_jalur_mutasi_mulai')
                            ->label('Tanggal Mulai Pengumuman Jalur Mutasi'),
                        DateTimePicker::make('tanggal_pengumuman_jalur_mutasi_selesai')
                            ->label('Tanggal Selesai Pengumuman Jalur Mutasi'),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Tes Akademik')
                    ->collapsed()
                    ->description('Tanggal tes akademik.')
                    ->schema([
                        DateTimePicker::make('tanggal_tes_akademik_mulai')
                            ->label('Tanggal Mulai Tes Akademik'),
                        DateTimePicker::make('tanggal_tes_akademik_selesai')
                            ->label('Tanggal Selesai Tes Akademik'),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 2,
                        'lg' => 2,
                        'xl' => 2,
                        '2xl' => 2,
                    ]),
                Section::make('Tes Praktik')
                    ->collapsed()
                    ->description('Tanggal tes praktik.')
                    ->schema([
                        DateTimePicker::make('tanggal_tes_praktik_mulai')
                            ->label('Tanggal Mulai Tes Praktik'),
                        DateTimePicker::make('tanggal_tes_praktik_selesai')
                            ->label('Tanggal Selesai Tes Praktik'),
                    ])
                    ->columns([
                        'sm' => 1,
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
            ->columns([
                TextColumn::make('nama')
                    ->label('Tahun Pendaftaran')
                    ->searchable(),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'Aktif' => 'success',
                        'Nonaktif' => 'gray'
                    }),

                TextColumn::make('kuantitas')
                    ->label('Kuota')
                    ->numeric()
                    ->suffix(' Pendaftar')
                    ->badge(),

                TextColumn::make('tanggal_ppdb_mulai')
                    ->label('Pendaftaran Akun')
                    ->date('d F Y')
                    ->description(
                        fn(TahunPendaftaran $record) => $record->tanggal_ppdb_selesai ? 'Hingga: ' . Carbon::parse($record->tanggal_ppdb_selesai)->translatedFormat('d F Y') : 'Hingga: (Sekarang)'
                    ),

                TextColumn::make('tanggal_penerbitan_kartu_tes_mulai')
                    ->label('Penerbitan Kartu Tes')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn(TahunPendaftaran $record) => $record->tanggal_penerbitan_kartu_tes_selesai ? 'Hingga: ' . Carbon::parse($record->tanggal_penerbitan_kartu_tes_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                TextColumn::make('tanggal_tes_akademik_mulai')
                    ->label('Tes Akademik')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn(TahunPendaftaran $record) => $record->tanggal_tes_akademik_selesai ? 'Hingga: ' . Carbon::parse($record->tanggal_tes_akademik_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                TextColumn::make('tanggal_tes_praktik_mulai')
                    ->label('Tes Praktik')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn(TahunPendaftaran $record) => $record->tanggal_tes_praktik_selesai ? 'Hingga: ' . Carbon::parse($record->tanggal_tes_praktik_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                TextColumn::make('tanggal_registrasi_berkas_mulai')
                    ->label('Registrasi Berkas')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn(TahunPendaftaran $record) => $record->tanggal_registrasi_berkas_selesai ? 'Hingga: ' . Carbon::parse($record->tanggal_registrasi_berkas_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                TextColumn::make('tanggal_pendaftaran_jalur_prestasi_mulai')
                    ->label('Pendaftaran Jalur Prestasi')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn(TahunPendaftaran $record) => $record->tanggal_pendaftaran_jalur_prestasi_selesai ? 'Hingga: ' . Carbon::parse($record->tanggal_pendaftaran_jalur_prestasi_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                TextColumn::make('tanggal_pengumuman_jalur_prestasi_mulai')
                    ->label('Pengumuman Jalur Prestasi')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn(TahunPendaftaran $record) => $record->tanggal_pengumuman_jalur_prestasi_selesai ? 'Hingga: ' . Carbon::parse($record->tanggal_pengumuman_jalur_prestasi_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                TextColumn::make('tanggal_pendaftaran_jalur_reguler_mulai')
                    ->label('Pendaftaran Jalur Reguler')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn(TahunPendaftaran $record) => $record->tanggal_pendaftaran_jalur_reguler_selesai ? 'Hingga: ' . Carbon::parse($record->tanggal_pendaftaran_jalur_reguler_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                TextColumn::make('tanggal_pengumuman_jalur_reguler_mulai')
                    ->label('Pengumuman Jalur Reguler')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn(TahunPendaftaran $record) => $record->tanggal_pengumuman_jalur_reguler_selesai ? 'Hingga: ' . Carbon::parse($record->tanggal_pengumuman_jalur_reguler_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                TextColumn::make('tanggal_pendaftaran_jalur_afirmasi_mulai')
                    ->label('Pendaftaran Jalur Afirmasi')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn(TahunPendaftaran $record) => $record->tanggal_pendaftaran_jalur_afirmasi_selesai ? 'Hingga: ' . Carbon::parse($record->tanggal_pendaftaran_jalur_afirmasi_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                TextColumn::make('tanggal_pengumuman_jalur_afirmasi_mulai')
                    ->label('Pengumuman Jalur Afirmasi')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn(TahunPendaftaran $record) => $record->tanggal_pengumuman_jalur_afirmasi_selesai ? 'Hingga: ' . Carbon::parse($record->tanggal_pengumuman_jalur_afirmasi_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                TextColumn::make('tanggal_pendaftaran_jalur_zonasi_mulai')
                    ->label('Pendaftaran Jalur Zonasi')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn(TahunPendaftaran $record) => $record->tanggal_pendaftaran_jalur_zonasi_selesai ? 'Hingga: ' . Carbon::parse($record->tanggal_pendaftaran_jalur_zonasi_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                TextColumn::make('tanggal_pengumuman_jalur_zonasi_mulai')
                    ->label('Pengumuman Jalur Zonasi')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn(TahunPendaftaran $record) => $record->tanggal_pengumuman_jalur_zonasi_selesai ? 'Hingga: ' . Carbon::parse($record->tanggal_pengumuman_jalur_zonasi_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                TextColumn::make('tanggal_pendaftaran_jalur_mutasi_mulai')
                    ->label('Pendaftaran Jalur Mutasi')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn(TahunPendaftaran $record) => $record->tanggal_pendaftaran_jalur_mutasi_selesai ? 'Hingga: ' . Carbon::parse($record->tanggal_pendaftaran_jalur_mutasi_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                TextColumn::make('tanggal_pengumuman_jalur_mutasi_mulai')
                    ->label('Pengumuman Jalur Mutasi')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn(TahunPendaftaran $record) => $record->tanggal_pengumuman_jalur_mutasi_selesai ? 'Hingga: ' . Carbon::parse($record->tanggal_pengumuman_jalur_mutasi_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                // TextColumn::make('created_at')
                //     ->label('Dibuat')
                //     ->dateTime('d F Y H:i:s')
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true),
                // TextColumn::make('updated_at')
                //     ->label('Diubah')
                //     ->dateTime('d F Y H:i:s')
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true),
                // TextColumn::make('deleted_at')
                //     ->label('Dihapus')
                //     ->dateTime('d F Y H:i:s')
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->actions([
                ActionGroup::make([
                    // ViewAction::make(),
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
