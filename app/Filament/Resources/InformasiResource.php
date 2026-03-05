<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InformasiResource\Pages;
use App\Models\CalonSiswa;
use App\Models\Informasi;
use App\Services\WhatsAppService;
use Carbon\Carbon;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class InformasiResource extends Resource
{
    protected static ?string $model = Informasi::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Informasi';

    protected static ?string $label = 'Informasi';

    protected static ?string $slug = 'informasi';

    protected static ?int $navigationSort = 8;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-information-circle';

    public static function getNavigationBadge(): ?string
    {
        return Informasi::count();
    }

    // =========================================================================
    // Form
    // =========================================================================

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                    ->schema([
                        Select::make('tahun_pendaftaran_id')
                            ->label('Tahun Pendaftaran')
                            ->relationship('tahunPendaftaran', 'nama', fn($query) => $query->where('status', 'Aktif'))
                            ->required()
                            ->native(false)
                            ->live()
                            ->validationMessages(['required' => 'Form ini wajib diisi.'])
                            ->columnSpanFull(),
                    ]),

                Section::make()
                    ->visible(fn($get) => $get('tahun_pendaftaran_id') !== null)
                    ->schema([
                        TextInput::make('judul')
                            ->label('Judul')
                            ->required()
                            ->minLength(5)
                            ->maxLength(30)
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                                'min'      => 'Masukkan maksimal 30 karakter.',
                                'max'      => 'Masukkan maksimal 30 karakter.',
                            ]),

                        Select::make('status')
                            ->label('Status')
                            ->options(['Publish' => 'Publish', 'Draft' => 'Draft'])
                            ->native(false)
                            ->required()
                            ->live()
                            ->validationMessages(['required' => 'Form ini wajib diisi.']),

                        DateTimePicker::make('tanggal')
                            ->label('Tanggal')
                            ->default(now())
                            ->dehydrated()
                            ->required()
                            ->hidden(fn(Get $get) => $get('status') !== 'Publish')
                            ->validationMessages(['required' => 'Form ini wajib diisi.']),

                        FileUpload::make('gambar')
                            ->label('Lampiran')
                            ->maxSize('2048')
                            ->minSize('10')
                            ->downloadable()
                            ->openable()
                            ->deletable()
                            ->fetchFileInformation(false)
                            ->directory('assets/informasi')
                            ->acceptedFileTypes([
                                'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                                'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                                'application/pdf',
                                'image/png',
                                'image/jpeg',
                                'image/webp',
                            ]),

                        RichEditor::make('isi')
                            ->label('Uraian')
                            ->required()
                            ->validationMessages(['required' => 'Form ini wajib diisi.'])
                            ->fileAttachmentsDirectory('assets/lampiran-informasi')
                            ->fileAttachmentsVisibility('private')
                            ->disableGrammarly()
                            ->columnSpanFull(),
                    ])
                    ->columns(['sm' => '100%', 'md' => 2, 'lg' => 2]),
            ]);
    }

    // =========================================================================
    // Table
    // =========================================================================

    public static function table(Table $table): Table
    {
        // Konsisten dengan resource lain — pakai hasRole(), bukan cek username
        $isAdmin = Auth::user()->hasAnyRole(['super_admin', 'admin', 'verifikator', 'panitia']);

        if ($isAdmin) {
            return $table
                ->columns([
                    TextColumn::make('tahunPendaftaran.nama')
                        ->label('Tahun Pendaftaran')
                        ->badge()
                        ->color('gray')
                        ->icon('heroicon-o-calendar'),

                    TextColumn::make('judul')
                        ->label('Informasi')
                        ->description(fn(Informasi $r) => Str::limit($r->isi, 50))
                        ->icon('heroicon-o-information-circle')
                        ->iconColor('info'),

                    ImageColumn::make('gambar')
                        ->label('Lampiran'),

                    TextColumn::make('tanggal')
                        ->label('Tanggal')
                        ->dateTime('d F Y H:i:s')
                        ->sinceTooltip()
                        ->sortable(),

                    TextColumn::make('status')
                        ->label('Status')
                        ->badge()
                        ->color(fn(string $state) => match ($state) {
                            'Publish' => 'success',
                            'Draft'   => 'gray',
                        }),
                ])
                ->filters([
                    SelectFilter::make('tahun_pendaftaran')
                        ->label('Tahun Pendaftaran')
                        ->relationship('tahunPendaftaran', 'nama', fn($query) => $query->where('status', 'Aktif')),

                    SelectFilter::make('status')
                        ->label('Status')
                        ->options(['Publish' => 'Publish', 'Draft' => 'Draft']),
                ])
                ->actions([
                    ActionGroup::make([
                        ViewAction::make(),
                        EditAction::make(),
                        DeleteAction::make(),
                        self::notifikasiRowAction(),
                    ]),
                ], ActionsPosition::BeforeColumns)
                ->bulkActions([
                    DeleteBulkAction::make()
                        ->outlined()
                        ->hiddenLabel()
                        ->icon('heroicon-o-trash'),
                    self::notifikasiBulkAction(),
                ])
                ->striped()
                ->filtersLayout(FiltersLayout::AboveContentCollapsible)
                ->paginationPageOptions([10, 25, 50]);
        }

        // ------------------------------------------------------------------
        // View calon_siswa — read-only, tanpa action kirim notifikasi
        // ------------------------------------------------------------------
        return $table
            ->query(Informasi::where('status', 'Publish')->latest('updated_at'))
            ->columns([
                TextColumn::make('judul')
                    ->label('Informasi')
                    ->description(fn(Informasi $r) => Str::limit($r->isi, 50))
                    ->icon('heroicon-o-information-circle')
                    ->iconColor('info'),

                ImageColumn::make('gambar')
                    ->label('Lampiran'),

                TextColumn::make('tanggal')
                    ->label('Tanggal')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip()
                    ->sortable(),
            ])
            ->actions([
                ActionGroup::make([
                    ViewAction::make(),
                ]),
            ], ActionsPosition::BeforeColumns)
            ->striped()
            ->filtersLayout(FiltersLayout::AboveContentCollapsible)
            ->paginationPageOptions([10]);
    }

    // =========================================================================
    // Pages
    // =========================================================================

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListInformasis::route('/'),
            'create' => Pages\CreateInformasi::route('/create'),
            'view'   => Pages\ViewInformasi::route('/{record}'),
            'edit'   => Pages\EditInformasi::route('/{record}/edit'),
        ];
    }

    // =========================================================================
    // Actions
    // =========================================================================

    private static function notifikasiRowAction(): Action
    {
        return Action::make('kirim_notifikasi')
            ->label('Kirim Notifikasi WA')
            ->icon('heroicon-o-chat-bubble-left-ellipsis')
            ->color('info')
            ->disabled(fn($record) => $record->status !== 'Publish')
            ->tooltip(fn($record) => $record->status !== 'Publish' ? 'Hanya informasi berstatus Publish yang dapat dikirim' : null)
            ->form(self::targetForm())
            ->modalHeading('Kirim Notifikasi Informasi via WhatsApp')
            ->modalDescription(fn($record) => "Informasi: \"{$record->judul}\" akan dikirim ke calon siswa yang dipilih.")
            ->modalSubmitActionLabel('Kirim Sekarang')
            ->action(function ($record, array $data) {
                // Guard — tolak jika somehow Draft lolos (misal via direct call)
                if ($record->status !== 'Publish') {
                    Notification::make()
                        ->title('Tidak dapat dikirim')
                        ->body('Hanya informasi berstatus Publish yang dapat dikirim.')
                        ->danger()
                        ->send();
                    return;
                }
                $phones = self::resolvePhones($data['targets'] ?? []);

                if ($phones->isEmpty()) {
                    Notification::make()
                        ->title('Tidak ada penerima')
                        ->body('Tidak ditemukan calon siswa dengan kriteria yang dipilih, atau belum ada nomor WhatsApp terdaftar.')
                        ->warning()
                        ->send();

                    return;
                }

                $jumlah = self::dispatchPesan($phones, self::buildPesan($record));

                Notification::make()
                    ->title("Notifikasi dijadwalkan untuk {$jumlah} penerima")
                    ->body('Pesan akan dikirim secara bertahap dalam beberapa menit.')
                    ->success()
                    ->send();
            });
    }

    private static function notifikasiBulkAction(): BulkAction
    {
        return BulkAction::make('kirim_notifikasi_massal')
            ->label('Kirim Notifikasi WA')
            ->icon('heroicon-o-chat-bubble-left-ellipsis')
            ->color('info')
            ->deselectRecordsAfterCompletion()
            ->form(self::targetForm())
            ->modalHeading('Kirim Notifikasi Massal via WhatsApp')
            ->modalDescription('Semua informasi yang dipilih akan dikirim ke penerima yang dipilih secara bertahap.')
            ->modalSubmitActionLabel('Kirim Sekarang')
            ->action(function (Collection $records, array $data) {
                $phones = self::resolvePhones($data['targets'] ?? []);

                if ($phones->isEmpty()) {
                    Notification::make()
                        ->title('Tidak ada penerima')
                        ->body('Tidak ditemukan calon siswa dengan kriteria yang dipilih.')
                        ->warning()
                        ->send();

                    return;
                }

                $wa         = app(WhatsAppService::class);
                $totalJob   = 0;
                $skipped    = 0;

                // Filter — hanya kirim yang Publish
                $published = $records->filter(fn($r) => $r->status === 'Publish');
                $skipped   = $records->count() - $published->count();

                foreach ($published as $record) {
                    $pesan = self::buildPesan($record);

                    foreach ($phones as $phone) {
                        $wa->send(phone: $phone, message: $pesan, minDelay: 15, maxDelay: 300);
                        $totalJob++;
                    }
                }

                if ($published->isEmpty()) {
                    Notification::make()
                        ->title('Tidak ada yang dikirim')
                        ->body('Semua informasi yang dipilih berstatus Draft.')
                        ->warning()
                        ->send();
                    return;
                }

                $skippedInfo = $skipped > 0 ? " ({$skipped} Draft dilewati)" : '';

                Notification::make()
                    ->title("{$totalJob} notifikasi dijadwalkan")
                    ->body("{$published->count()} informasi × {$phones->count()} penerima. Pesan akan terkirim secara bertahap.{$skippedInfo}")
                    ->success()
                    ->send();
            });
    }

    // =========================================================================
    // Helpers
    // =========================================================================

    private static function targetForm(): array
    {
        return [
            CheckboxList::make('targets')
                ->label('Kirim ke')
                ->options([
                    'semua'        => '📋 Semua Calon Siswa',
                    'diverifikasi' => '🔍 Hanya yang Diverifikasi',
                    'diterima'     => '🎉 Hanya yang Diterima',
                ])
                ->descriptions([
                    'semua'        => 'Seluruh calon siswa yang terdaftar (semua status)',
                    'diverifikasi' => 'Calon siswa dengan status Diverifikasi',
                    'diterima'     => 'Status Diterima, Diterima Di Kelas Reguler, atau Diterima Di Kelas Unggulan',
                ])
                ->required()
                ->validationMessages(['required' => 'Pilih minimal satu target penerima.']),
        ];
    }

    private static function resolvePhones(array $targets): Collection
    {
        $query = CalonSiswa::withoutGlobalScopes()
            ->with('user:id,telepon')
            ->whereHas('user', fn($q) => $q->whereNotNull('telepon'));

        // Jika 'semua' dipilih → abaikan filter status lain
        if (in_array('semua', $targets)) {
            return $query
                ->get()
                ->map(fn($cs) => $cs->user?->telepon)
                ->filter()
                ->unique()
                ->values();
        }

        $statusMap = [
            'diverifikasi' => ['Diverifikasi'],
            'diterima'     => ['Diterima', 'Diterima Di Kelas Reguler', 'Diterima Di Kelas Unggulan'],
        ];

        $statuses = collect($targets)
            ->flatMap(fn($t) => $statusMap[$t] ?? [])
            ->unique()
            ->values()
            ->all();

        if (! empty($statuses)) {
            $query->whereIn('status_pendaftaran', $statuses);
        }

        return $query
            ->get()
            ->map(fn($cs) => $cs->user?->telepon)
            ->filter()
            ->unique()
            ->values();
    }

    private static function dispatchPesan(Collection $phones, string $pesan): int
    {
        $wa = app(WhatsAppService::class);

        foreach ($phones as $phone) {
            $wa->send(phone: $phone, message: $pesan, minDelay: 10, maxDelay: 180);
        }

        return $phones->count();
    }

    private static function buildPesan(Informasi $record): string
    {
        $tanggal = $record->tanggal
            ? Carbon::parse($record->tanggal)->translatedFormat('d F Y')
            : now()->translatedFormat('d F Y');

        return "📢 *Informasi PPDB MTsN 1 Pandeglang*\n\n"
            . "📌 *{$record->judul}*\n"
            . "🗓️ {$tanggal}\n\n"
            . strip_tags($record->isi) . "\n\n"
            . "Silakan login ke sistem PPDB untuk informasi lebih lanjut.\n"
            . '_MTsN 1 Pandeglang_';
    }
}
