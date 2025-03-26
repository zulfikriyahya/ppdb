<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JalurPendaftaranResource\Pages;
use App\Models\JalurPendaftaran;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\HtmlString;

class JalurPendaftaranResource extends Resource
{
    protected static ?string $model = JalurPendaftaran::class;

    protected static ?string $navigationLabel = 'Jalur Pendaftaran';

    protected static ?string $label = 'Jalur Pendaftaran';

    protected static ?string $navigationGroup = 'Referensi';

    protected static ?int $navigationSort = 4;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Jalur Pendaftaran')
                    ->collapsible()
                    ->description('Data Jalur Pendaftaran.')
                    ->schema([
                        Select::make('nama')
                            ->label('Jalur Pendaftaran')
                            ->options([
                                'Prestasi' => 'Prestasi',
                                'Reguler' => 'Reguler',
                                'Afirmasi' => 'Afirmasi',
                                'Zonasi' => 'Zonasi',
                                'Mutasi' => 'Mutasi',
                            ])
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        TextInput::make('kuantitas')
                            ->label('Kuota Pendaftar')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->numeric(),

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

                        Select::make('tahun_pendaftaran_id')
                            ->label('Tahun Pendaftaran')
                            ->relationship('tahunPendaftaran', 'nama', fn ($query) => $query->where('status', 'Aktif'))
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->createOptionForm([
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
                                        'sm' => '100%',
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
                                        'sm' => '100%',
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
                                        'sm' => '100%',
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
                                        'sm' => '100%',
                                        'md' => 2,
                                        'lg' => 2,
                                        'xl' => 2,
                                        '2xl' => 2,
                                    ]),
                                // Section::make('Pendaftaran Jalur Prestasi')
                                //     ->collapsed()
                                //     ->description('Tanggal pendaftaran untuk jalur prestasi.')
                                //     ->schema([
                                //         DateTimePicker::make('tanggal_pendaftaran_jalur_prestasi_mulai')
                                //             ->label('Tanggal Mulai Pendaftaran Jalur Prestasi'),
                                //         DateTimePicker::make('tanggal_pendaftaran_jalur_prestasi_selesai')
                                //             ->label('Tanggal Selesai Pendaftaran Jalur Prestasi'),
                                //     ])
                                //     ->columns([
                                //         'sm' => '100%',
                                //         'md' => 2,
                                //         'lg' => 2,
                                //         'xl' => 2,
                                //         '2xl' => 2,
                                //     ]),
                                // Section::make('Pengumuman Jalur Prestasi')
                                //     ->collapsed()
                                //     ->description('Tanggal pengumuman untuk jalur prestasi.')
                                //     ->schema([
                                //         DateTimePicker::make('tanggal_pengumuman_jalur_prestasi_mulai')
                                //             ->label('Tanggal Mulai Pengumuman Jalur Prestasi'),
                                //         DateTimePicker::make('tanggal_pengumuman_jalur_prestasi_selesai')
                                //             ->label('Tanggal Selesai Pengumuman Jalur Prestasi'),
                                //     ])
                                //     ->columns([
                                //         'sm' => '100%',
                                //         'md' => 2,
                                //         'lg' => 2,
                                //         'xl' => 2,
                                //         '2xl' => 2,
                                //     ]),
                                // Section::make('Pendaftaran Jalur Reguler')
                                //     ->collapsed()
                                //     ->description('Tanggal pendaftaran untuk jalur reguler.')
                                //     ->schema([
                                //         DateTimePicker::make('tanggal_pendaftaran_jalur_reguler_mulai')
                                //             ->label('Tanggal Mulai Pendaftaran Jalur Reguler'),
                                //         DateTimePicker::make('tanggal_pendaftaran_jalur_reguler_selesai')
                                //             ->label('Tanggal Selesai Pendaftaran Jalur Reguler'),
                                //     ])
                                //     ->columns([
                                //         'sm' => '100%',
                                //         'md' => 2,
                                //         'lg' => 2,
                                //         'xl' => 2,
                                //         '2xl' => 2,
                                //     ]),
                                // Section::make('Pengumuman Jalur Reguler')
                                //     ->collapsed()
                                //     ->description('Tanggal pengumuman untuk jalur reguler.')
                                //     ->schema([
                                //         DateTimePicker::make('tanggal_pengumuman_jalur_reguler_mulai')
                                //             ->label('Tanggal Mulai Pengumuman Jalur Reguler'),
                                //         DateTimePicker::make('tanggal_pengumuman_jalur_reguler_selesai')
                                //             ->label('Tanggal Selesai Pengumuman Jalur Reguler'),
                                //     ])
                                //     ->columns([
                                //         'sm' => '100%',
                                //         'md' => 2,
                                //         'lg' => 2,
                                //         'xl' => 2,
                                //         '2xl' => 2,
                                //     ]),
                                // Section::make('Pendaftaran Jalur Afirmasi')
                                //     ->collapsed()
                                //     ->description('Tanggal pendaftaran untuk jalur Afirmasi.')
                                //     ->schema([
                                //         DateTimePicker::make('tanggal_pendaftaran_jalur_afirmasi_mulai')
                                //             ->label('Tanggal Mulai Pendaftaran Jalur Afirmasi'),
                                //         DateTimePicker::make('tanggal_pendaftaran_jalur_afirmasi_selesai')
                                //             ->label('Tanggal Selesai Pendaftaran Jalur Afirmasi'),
                                //     ])
                                //     ->columns([
                                //         'sm' => '100%',
                                //         'md' => 2,
                                //         'lg' => 2,
                                //         'xl' => 2,
                                //         '2xl' => 2,
                                //     ]),
                                // Section::make('Pengumuman Jalur Afirmasi')
                                //     ->collapsed()
                                //     ->description('Tanggal pengumuman untuk jalur Afirmasi.')
                                //     ->schema([
                                //         DateTimePicker::make('tanggal_pengumuman_jalur_afirmasi_mulai')
                                //             ->label('Tanggal Mulai Pengumuman Jalur Afirmasi'),
                                //         DateTimePicker::make('tanggal_pengumuman_jalur_afirmasi_selesai')
                                //             ->label('Tanggal Selesai Pengumuman Jalur Afirmasi'),
                                //     ])
                                //     ->columns([
                                //         'sm' => '100%',
                                //         'md' => 2,
                                //         'lg' => 2,
                                //         'xl' => 2,
                                //         '2xl' => 2,
                                //     ]),
                                // Section::make('Pendaftaran Jalur Zonasi')
                                //     ->collapsed()
                                //     ->description('Tanggal pendaftaran untuk jalur Zonasi.')
                                //     ->schema([
                                //         DateTimePicker::make('tanggal_pendaftaran_jalur_zonasi_mulai')
                                //             ->label('Tanggal Mulai Pendaftaran Jalur Zonasi'),
                                //         DateTimePicker::make('tanggal_pendaftaran_jalur_zonasi_selesai')
                                //             ->label('Tanggal Selesai Pendaftaran Jalur Zonasi'),
                                //     ])
                                //     ->columns([
                                //         'sm' => '100%',
                                //         'md' => 2,
                                //         'lg' => 2,
                                //         'xl' => 2,
                                //         '2xl' => 2,
                                //     ]),
                                // Section::make('Pengumuman Jalur Zonasi')
                                //     ->collapsed()
                                //     ->description('Tanggal pengumuman untuk jalur Zonasi.')
                                //     ->schema([
                                //         DateTimePicker::make('tanggal_pengumuman_jalur_zonasi_mulai')
                                //             ->label('Tanggal Mulai Pengumuman Jalur Zonasi'),
                                //         DateTimePicker::make('tanggal_pengumuman_jalur_zonasi_selesai')
                                //             ->label('Tanggal Selesai Pengumuman Jalur Zonasi'),
                                //     ])
                                //     ->columns([
                                //         'sm' => '100%',
                                //         'md' => 2,
                                //         'lg' => 2,
                                //         'xl' => 2,
                                //         '2xl' => 2,
                                //     ]),
                                // Section::make('Pendaftaran Jalur Mutasi')
                                //     ->collapsed()
                                //     ->description('Tanggal pendaftaran untuk jalur Mutasi.')
                                //     ->schema([
                                //         DateTimePicker::make('tanggal_pendaftaran_jalur_mutasi_mulai')
                                //             ->label('Tanggal Mulai Pendaftaran Jalur Mutasi'),
                                //         DateTimePicker::make('tanggal_pendaftaran_jalur_mutasi_selesai')
                                //             ->label('Tanggal Selesai Pendaftaran Jalur Mutasi'),
                                //     ])
                                //     ->columns([
                                //         'sm' => '100%',
                                //         'md' => 2,
                                //         'lg' => 2,
                                //         'xl' => 2,
                                //         '2xl' => 2,
                                //     ]),
                                // Section::make('Pengumuman Jalur Mutasi')
                                //     ->collapsed()
                                //     ->description('Tanggal pengumuman untuk jalur Mutasi.')
                                //     ->schema([
                                //         DateTimePicker::make('tanggal_pengumuman_jalur_mutasi_mulai')
                                //             ->label('Tanggal Mulai Pengumuman Jalur Mutasi'),
                                //         DateTimePicker::make('tanggal_pengumuman_jalur_mutasi_selesai')
                                //             ->label('Tanggal Selesai Pengumuman Jalur Mutasi'),
                                //     ])
                                //     ->columns([
                                //         'sm' => '100%',
                                //         'md' => 2,
                                //         'lg' => 2,
                                //         'xl' => 2,
                                //         '2xl' => 2,
                                //     ]),
                                // Section::make('Tes Akademik')
                                //     ->collapsed()
                                //     ->description('Tanggal tes akademik.')
                                //     ->schema([
                                //         DateTimePicker::make('tanggal_tes_akademik_mulai')
                                //             ->label('Tanggal Mulai Tes Akademik'),
                                //         DateTimePicker::make('tanggal_tes_akademik_selesai')
                                //             ->label('Tanggal Selesai Tes Akademik'),
                                //     ])
                                //     ->columns([
                                //         'sm' => '100%',
                                //         'md' => 2,
                                //         'lg' => 2,
                                //         'xl' => 2,
                                //         '2xl' => 2,
                                //     ]),
                                // Section::make('Tes Praktik')
                                //     ->collapsed()
                                //     ->description('Tanggal tes praktik.')
                                //     ->schema([
                                //         DateTimePicker::make('tanggal_tes_praktik_mulai')
                                //             ->label('Tanggal Mulai Tes Praktik'),
                                //         DateTimePicker::make('tanggal_tes_praktik_selesai')
                                //             ->label('Tanggal Selesai Tes Praktik'),
                                //     ])
                                //     ->columns([
                                //         'sm' => '100%',
                                //         'md' => 2,
                                //         'lg' => 2,
                                //         'xl' => 2,
                                //         '2xl' => 2,
                                //     ]),
                            ]),
                    ])
                    ->columns([
                        'sm' => '100%',
                        'md' => 4,
                        'lg' => 4,
                        'xl' => 4,
                        '2xl' => 4,
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            // ->recordTitleAttribute('nama')
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->label('Jalur Pendaftaran')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kuantitas')
                    ->label('Kuota Pendaftar')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tahunPendaftaran.nama')
                    ->label('Tahun Pendaftaran')
                    ->sortable(),

                TextColumn::make('status')
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
            'index' => Pages\ListJalurPendaftarans::route('/'),
            'create' => Pages\CreateJalurPendaftaran::route('/create'),
            'view' => Pages\ViewJalurPendaftaran::route('/{record}'),
            'edit' => Pages\EditJalurPendaftaran::route('/{record}/edit'),
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
