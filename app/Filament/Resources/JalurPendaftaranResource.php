<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\JalurPendaftaran;
use Filament\Resources\Resource;
use Illuminate\Support\HtmlString;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\FiltersLayout;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\JalurPendaftaranResource\Pages;

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
                        // Jalur Pendaftaran
                        Forms\Components\Select::make('nama')
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
                        // Kuota Pendaftar
                        Forms\Components\TextInput::make('kuantitas')
                            ->label('Kuota Pendaftar')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->numeric(),

                        // Status Jalur
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

                        // Tahun Pendaftaran
                        Forms\Components\Select::make('tahun_pendaftaran_id')
                            ->label('Tahun Pendaftaran')
                            ->relationship('tahunPendaftaran', 'nama', fn($query) => $query->where('status', 'Aktif'))
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
                                    ->description('Tanggal Pelaksanaan PPDB.')
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
                                    ->collapsed()
                                    ->description('Tanggal pendaftaran untuk jalur prestasi.')
                                    ->schema([
                                        Forms\Components\DateTimePicker::make('tanggal_pendaftaran_jalur_prestasi_mulai')
                                            ->label('Tanggal Mulai Pendaftaran Jalur Prestasi'),
                                        Forms\Components\DateTimePicker::make('tanggal_pendaftaran_jalur_prestasi_selesai')
                                            ->label('Tanggal Selesai Pendaftaran Jalur Prestasi'),
                                    ])
                                    ->columns([
                                        'sm' => '100%',
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
                                            ->label('Tanggal Mulai Pengumuman Jalur Prestasi'),
                                        Forms\Components\DateTimePicker::make('tanggal_pengumuman_jalur_prestasi_selesai')
                                            ->label('Tanggal Selesai Pengumuman Jalur Prestasi'),
                                    ])
                                    ->columns([
                                        'sm' => '100%',
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
                                            ->label('Tanggal Mulai Pendaftaran Jalur Reguler'),
                                        Forms\Components\DateTimePicker::make('tanggal_pendaftaran_jalur_reguler_selesai')
                                            ->label('Tanggal Selesai Pendaftaran Jalur Reguler'),
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
                                            ->label('Tanggal Mulai Pengumuman Jalur Reguler'),
                                        Forms\Components\DateTimePicker::make('tanggal_pengumuman_jalur_reguler_selesai')
                                            ->label('Tanggal Selesai Pengumuman Jalur Reguler'),
                                    ])
                                    ->columns([
                                        'sm' => '100%',
                                        'md' => 2,
                                        'lg' => 2,
                                        'xl' => 2,
                                        '2xl' => 2,
                                    ]),
                                Forms\Components\Section::make('Pendaftaran Jalur Afirmasi')
                                    ->collapsed()
                                    ->description('Tanggal pendaftaran untuk jalur Afirmasi.')
                                    ->schema([
                                        Forms\Components\DateTimePicker::make('tanggal_pendaftaran_jalur_afirmasi_mulai')
                                            ->label('Tanggal Mulai Pendaftaran Jalur Afirmasi'),
                                        Forms\Components\DateTimePicker::make('tanggal_pendaftaran_jalur_afirmasi_selesai')
                                            ->label('Tanggal Selesai Pendaftaran Jalur Afirmasi'),
                                    ])
                                    ->columns([
                                        'sm' => '100%',
                                        'md' => 2,
                                        'lg' => 2,
                                        'xl' => 2,
                                        '2xl' => 2,
                                    ]),
                                Forms\Components\Section::make('Pengumuman Jalur Afirmasi')
                                    ->collapsed()
                                    ->description('Tanggal pengumuman untuk jalur Afirmasi.')
                                    ->schema([
                                        Forms\Components\DateTimePicker::make('tanggal_pengumuman_jalur_afirmasi_mulai')
                                            ->label('Tanggal Mulai Pengumuman Jalur Afirmasi'),
                                        Forms\Components\DateTimePicker::make('tanggal_pengumuman_jalur_afirmasi_selesai')
                                            ->label('Tanggal Selesai Pengumuman Jalur Afirmasi'),
                                    ])
                                    ->columns([
                                        'sm' => '100%',
                                        'md' => 2,
                                        'lg' => 2,
                                        'xl' => 2,
                                        '2xl' => 2,
                                    ]),
                                Forms\Components\Section::make('Pendaftaran Jalur Zonasi')
                                    ->collapsed()
                                    ->description('Tanggal pendaftaran untuk jalur Zonasi.')
                                    ->schema([
                                        Forms\Components\DateTimePicker::make('tanggal_pendaftaran_jalur_zonasi_mulai')
                                            ->label('Tanggal Mulai Pendaftaran Jalur Zonasi'),
                                        Forms\Components\DateTimePicker::make('tanggal_pendaftaran_jalur_zonasi_selesai')
                                            ->label('Tanggal Selesai Pendaftaran Jalur Zonasi'),
                                    ])
                                    ->columns([
                                        'sm' => '100%',
                                        'md' => 2,
                                        'lg' => 2,
                                        'xl' => 2,
                                        '2xl' => 2,
                                    ]),
                                Forms\Components\Section::make('Pengumuman Jalur Zonasi')
                                    ->collapsed()
                                    ->description('Tanggal pengumuman untuk jalur Zonasi.')
                                    ->schema([
                                        Forms\Components\DateTimePicker::make('tanggal_pengumuman_jalur_zonasi_mulai')
                                            ->label('Tanggal Mulai Pengumuman Jalur Zonasi'),
                                        Forms\Components\DateTimePicker::make('tanggal_pengumuman_jalur_zonasi_selesai')
                                            ->label('Tanggal Selesai Pengumuman Jalur Zonasi'),
                                    ])
                                    ->columns([
                                        'sm' => '100%',
                                        'md' => 2,
                                        'lg' => 2,
                                        'xl' => 2,
                                        '2xl' => 2,
                                    ]),
                                Forms\Components\Section::make('Pendaftaran Jalur Mutasi')
                                    ->collapsed()
                                    ->description('Tanggal pendaftaran untuk jalur Mutasi.')
                                    ->schema([
                                        Forms\Components\DateTimePicker::make('tanggal_pendaftaran_jalur_mutasi_mulai')
                                            ->label('Tanggal Mulai Pendaftaran Jalur Mutasi'),
                                        Forms\Components\DateTimePicker::make('tanggal_pendaftaran_jalur_mutasi_selesai')
                                            ->label('Tanggal Selesai Pendaftaran Jalur Mutasi'),
                                    ])
                                    ->columns([
                                        'sm' => '100%',
                                        'md' => 2,
                                        'lg' => 2,
                                        'xl' => 2,
                                        '2xl' => 2,
                                    ]),
                                Forms\Components\Section::make('Pengumuman Jalur Mutasi')
                                    ->collapsed()
                                    ->description('Tanggal pengumuman untuk jalur Mutasi.')
                                    ->schema([
                                        Forms\Components\DateTimePicker::make('tanggal_pengumuman_jalur_mutasi_mulai')
                                            ->label('Tanggal Mulai Pengumuman Jalur Mutasi'),
                                        Forms\Components\DateTimePicker::make('tanggal_pengumuman_jalur_mutasi_selesai')
                                            ->label('Tanggal Selesai Pengumuman Jalur Mutasi'),
                                    ])
                                    ->columns([
                                        'sm' => '100%',
                                        'md' => 2,
                                        'lg' => 2,
                                        'xl' => 2,
                                        '2xl' => 2,
                                    ]),
                                Forms\Components\Section::make('Penerbitan Kartu Tes')
                                    ->collapsed()
                                    ->description('Tanggal penerbitan kartu tes.')
                                    ->schema([
                                        Forms\Components\DateTimePicker::make('tanggal_penerbitan_kartu_tes_mulai')
                                            ->label('Tanggal Mulai Penerbitan Kartu Tes'),
                                        Forms\Components\DateTimePicker::make('tanggal_penerbitan_kartu_tes_selesai')
                                            ->label('Tanggal Selesai Penerbitan Kartu Tes'),
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
                                    ->description('Tanggal tes akademik.')
                                    ->schema([
                                        Forms\Components\DateTimePicker::make('tanggal_tes_akademik_mulai')
                                            ->label('Tanggal Mulai Tes Akademik'),
                                        Forms\Components\DateTimePicker::make('tanggal_tes_akademik_selesai')
                                            ->label('Tanggal Selesai Tes Akademik'),
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
                                    ->description('Tanggal tes praktik.')
                                    ->schema([
                                        Forms\Components\DateTimePicker::make('tanggal_tes_praktik_mulai')
                                            ->label('Tanggal Mulai Tes Praktik'),
                                        Forms\Components\DateTimePicker::make('tanggal_tes_praktik_selesai')
                                            ->label('Tanggal Selesai Tes Praktik'),
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
                                    ->description('Tanggal registrasi berkas.')
                                    ->schema([
                                        Forms\Components\DateTimePicker::make('tanggal_registrasi_berkas_mulai')
                                            ->label('Tanggal Mulai Registrasi Berkas'),
                                        Forms\Components\DateTimePicker::make('tanggal_registrasi_berkas_selesai')
                                            ->label('Tanggal Selesai Registrasi Berkas'),
                                    ])
                                    ->columns([
                                        'sm' => '100%',
                                        'md' => 2,
                                        'lg' => 2,
                                        'xl' => 2,
                                        '2xl' => 2,
                                    ]),
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
                    ->color(fn(string $state): string => match ($state) {
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
