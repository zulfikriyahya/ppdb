<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TahunPendaftaranResource\Pages\CreateTahunPendaftaran;
use App\Filament\Resources\TahunPendaftaranResource\Pages\EditTahunPendaftaran;
use App\Filament\Resources\TahunPendaftaranResource\Pages\ListTahunPendaftarans;
use App\Models\JalurPendaftaran;
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
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;
use Illuminate\Support\HtmlString;

class TahunPendaftaranResource extends Resource
{
    protected static ?string $model = TahunPendaftaran::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Tahun Pendaftaran';

    protected static ?string $label = 'Tahun Pendaftaran';

    protected static ?string $navigationGroup = 'Referensi';

    protected static ?int $navigationSort = 3;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

    // -------------------------------------------------------------------------
    // Form Helpers
    // -------------------------------------------------------------------------

    /**
     * Section pendaftaran/pengumuman per jalur — visible hanya jika jalur aktif.
     */
    private static function jalurSection(string $nama, string $tipe): Section
    {
        $namaLower = strtolower($nama);
        $fieldPrefix = "tanggal_{$tipe}_jalur_{$namaLower}";
        $label = ucfirst($tipe) === 'Pendaftaran' ? 'pendaftaran' : 'pengumuman';

        return Section::make(ucfirst($tipe)." Jalur {$nama}")
            ->visible(fn () => JalurPendaftaran::query()->where('status', 'Aktif')->where('nama', $nama)->exists())
            ->description("Tanggal {$label} untuk jalur {$nama}.")
            ->schema([
                DateTimePicker::make("{$fieldPrefix}_mulai")
                    ->label('Tanggal Mulai '.ucfirst($tipe)." Jalur {$nama}")
                    ->required()
                    ->validationMessages(['required' => 'Form ini wajib diisi.']),

                DateTimePicker::make("{$fieldPrefix}_selesai")
                    ->label('Tanggal Selesai '.ucfirst($tipe)." Jalur {$nama}")
                    ->required()
                    ->validationMessages(['required' => 'Form ini wajib diisi.']),
            ])
            ->columns(['sm' => 1, 'md' => 2, 'lg' => 2, 'xl' => 2, '2xl' => 2]);
    }

    /**
     * Section tes (Akademik / Praktik) — visible setelah kartu tes diisi.
     */
    private static function tesSection(string $nama): Section
    {
        $namaLower = strtolower($nama);

        return Section::make("Tes {$nama}")
            ->visible(fn ($get) => $get('tanggal_penerbitan_kartu_tes_mulai'))
            ->description("Tanggal tes {$namaLower}.")
            ->schema([
                DateTimePicker::make("tanggal_tes_{$namaLower}_mulai")
                    ->label("Tanggal Mulai Tes {$nama}")
                    ->required()
                    ->validationMessages(['required' => 'Form ini wajib diisi.']),

                DateTimePicker::make("tanggal_tes_{$namaLower}_selesai")
                    ->label("Tanggal Selesai Tes {$nama}")
                    ->required()
                    ->validationMessages(['required' => 'Form ini wajib diisi.']),
            ])
            ->columns(['sm' => 1, 'md' => 2, 'lg' => 2, 'xl' => 2, '2xl' => 2]);
    }

    // -------------------------------------------------------------------------
    // Table Helpers
    // -------------------------------------------------------------------------

    /**
     * Kolom tanggal dengan description hingga-selesai yang berulang di table.
     */
    private static function tanggalColumn(
        string $field,
        string $label,
        string $fieldSelesai,
        string $format = 'd F Y H:i:s'
    ): TextColumn {
        return TextColumn::make($field)
            ->label($label)
            ->dateTime($format)
            ->description(
                fn (TahunPendaftaran $record): string => $record->{$fieldSelesai}
                    ? 'Hingga: '.Carbon::parse($record->{$fieldSelesai})->translatedFormat($format)
                    : 'Hingga: (Sekarang)'
            );
    }

    // -------------------------------------------------------------------------
    // Form & Table
    // -------------------------------------------------------------------------

    public static function form(Form $form): Form
    {
        $jalurs = ['Prestasi', 'Reguler', 'Afirmasi', 'Zonasi', 'Mutasi'];

        $jalurSections = collect($jalurs)
            ->flatMap(fn (string $jalur) => [
                self::jalurSection($jalur, 'pendaftaran'),
                self::jalurSection($jalur, 'pengumuman'),
            ])
            ->all();

        return $form
            ->schema([
                Section::make('Tahun Pendaftaran')
                    ->description('Data Tahun Pendaftaran.')
                    ->schema([
                        TextInput::make('nama')
                            ->label('Tahun Pendaftaran')
                            ->required()
                            ->minLength(9)
                            ->maxLength(9)
                            ->placeholder('Contoh: 2025/2026')
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                                'min' => 'Tahun Pendaftaran: Minimal 9 Karakter.',
                                'max' => 'Tahun Pendaftaran: Maksimal 9 Karakter.',
                            ]),

                        TextInput::make('kuantitas')
                            ->label('Kuota Maksimal Registrasi Akun')
                            ->numeric()
                            ->postfix('Akun')
                            ->required()
                            ->helperText(new HtmlString('<small><i>Kuota maksimal pendaftar yang dapat membuat akun pendaftaran.<sup style="color:red">*</sup></i></small>'))
                            ->validationMessages(['required' => 'Form ini wajib diisi.']),

                        Select::make('status')
                            ->label('Status')
                            ->options(['Aktif' => 'Aktif', 'Nonaktif' => 'Nonaktif'])
                            ->default('Aktif')
                            ->native(false)
                            ->required()
                            ->validationMessages(['required' => 'Form ini wajib diisi.']),
                    ])
                    ->columns(['sm' => 1, 'md' => 3, 'lg' => 3, 'xl' => 3, '2xl' => 3]),

                Section::make('Daftar Akun')
                    ->description('Tanggal Daftar Akun PPDB.')
                    ->schema([
                        DatePicker::make('tanggal_ppdb_mulai')
                            ->label('Tanggal Mulai Daftar Akun PPDB')
                            ->required()
                            ->validationMessages(['required' => 'Form ini wajib diisi.']),

                        DatePicker::make('tanggal_ppdb_selesai')
                            ->label('Tanggal Selesai Daftar Akun PPDB')
                            ->required()
                            ->validationMessages(['required' => 'Form ini wajib diisi.']),
                    ])
                    ->columns(['sm' => 1, 'md' => 2, 'lg' => 2, 'xl' => 2, '2xl' => 2]),

                Section::make('Penerbitan Kartu Tes')
                    ->description('Tanggal penerbitan kartu tes.')
                    ->schema([
                        DateTimePicker::make('tanggal_penerbitan_kartu_tes_mulai')
                            ->label('Tanggal Mulai Penerbitan Kartu Tes')
                            ->live()
                            ->required()
                            ->validationMessages(['required' => 'Form ini wajib diisi.']),

                        DateTimePicker::make('tanggal_penerbitan_kartu_tes_selesai')
                            ->label('Tanggal Selesai Penerbitan Kartu Tes')
                            ->required()
                            ->validationMessages(['required' => 'Form ini wajib diisi.']),
                    ])
                    ->columns(['sm' => 1, 'md' => 2, 'lg' => 2, 'xl' => 2, '2xl' => 2]),

                Section::make('Registrasi Berkas')
                    ->description('Tanggal registrasi berkas.')
                    ->schema([
                        DateTimePicker::make('tanggal_registrasi_berkas_mulai')
                            ->label('Tanggal Mulai Registrasi Berkas')
                            ->required()
                            ->validationMessages(['required' => 'Form ini wajib diisi.']),

                        DateTimePicker::make('tanggal_registrasi_berkas_selesai')
                            ->label('Tanggal Selesai Registrasi Berkas')
                            ->required()
                            ->validationMessages(['required' => 'Form ini wajib diisi.']),
                    ])
                    ->columns(['sm' => 1, 'md' => 2, 'lg' => 2, 'xl' => 2, '2xl' => 2]),

                ...$jalurSections,

                self::tesSection('Akademik'),
                self::tesSection('Praktik'),
            ]);
    }

    public static function table(Table $table): Table
    {
        $jalurs = ['Prestasi', 'Reguler', 'Afirmasi', 'Zonasi', 'Mutasi'];

        $jalurColumns = collect($jalurs)
            ->flatMap(fn (string $jalur) => [
                self::tanggalColumn(
                    'tanggal_pendaftaran_jalur_'.strtolower($jalur).'_mulai',
                    "Pendaftaran Jalur {$jalur}",
                    'tanggal_pendaftaran_jalur_'.strtolower($jalur).'_selesai',
                ),
                self::tanggalColumn(
                    'tanggal_pengumuman_jalur_'.strtolower($jalur).'_mulai',
                    "Pengumuman Jalur {$jalur}",
                    'tanggal_pengumuman_jalur_'.strtolower($jalur).'_selesai',
                ),
            ])
            ->all();

        return $table
            ->columns([
                TextColumn::make('nama')
                    ->label('Tahun Pendaftaran')
                    ->searchable(),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Aktif' => 'success',
                        'Nonaktif' => 'gray',
                    }),

                TextColumn::make('kuantitas')
                    ->label('Kuota')
                    ->numeric()
                    ->suffix(' Pendaftar')
                    ->badge(),

                self::tanggalColumn('tanggal_ppdb_mulai', 'Pendaftaran Akun', 'tanggal_ppdb_selesai', 'd F Y'),
                self::tanggalColumn('tanggal_penerbitan_kartu_tes_mulai', 'Penerbitan Kartu Tes', 'tanggal_penerbitan_kartu_tes_selesai'),
                self::tanggalColumn('tanggal_tes_akademik_mulai', 'Tes Akademik', 'tanggal_tes_akademik_selesai'),
                self::tanggalColumn('tanggal_tes_praktik_mulai', 'Tes Praktik', 'tanggal_tes_praktik_selesai'),
                self::tanggalColumn('tanggal_registrasi_berkas_mulai', 'Registrasi Berkas', 'tanggal_registrasi_berkas_selesai'),

                ...$jalurColumns,

                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip(),

                TextColumn::make('updated_at')
                    ->label('Diubah')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip(),
            ])
            ->filters([])
            ->actions([
                ActionGroup::make([
                    EditAction::make(),
                    DeleteAction::make(),
                ]),
            ], ActionsPosition::BeforeColumns)
            ->bulkActions([
                DeleteBulkAction::make()
                    ->outlined()
                    ->hiddenLabel()
                    ->icon('heroicon-o-trash'),
            ])
            ->striped()
            ->filtersLayout(FiltersLayout::AboveContentCollapsible)
            ->paginationPageOptions([10, 25, 50]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListTahunPendaftarans::route('/'),
            'create' => CreateTahunPendaftaran::route('/create'),
            'edit' => EditTahunPendaftaran::route('/{record}/edit'),
        ];
    }
}
