<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FormulirPrestasiResource\Pages;
use App\Models\CalonSiswa;
use App\Models\FormulirPrestasi;
use App\Models\Prestasi;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class FormulirPrestasiResource extends Resource
{
    protected static ?string $model = FormulirPrestasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-trophy';

    protected static ?string $navigationLabel = 'Formulir Prestasi';

    protected static ?string $navigationGroup = 'Pendaftaran';

    protected static ?int $navigationSort = 2;

    // -----------------------------------------------------------------------
    // Helper: cek apakah calon siswa yang login memilih jalur prestasi
    // Menggunakan once() agar query hanya jalan sekali per request
    // -----------------------------------------------------------------------

    protected static function isCalonSiswaJalurPrestasi(): bool
    {
        return once(function () {
            $calonSiswa = CalonSiswa::withoutGlobalScopes()
                ->with('jalurPendaftaran')
                ->where('user_id', auth()->id())
                ->first();

            if (! $calonSiswa || ! $calonSiswa->jalurPendaftaran) {
                return false;
            }

            return $calonSiswa->jalurPendaftaran->nama === 'Prestasi';
        });
    }

    // -----------------------------------------------------------------------
    // Navigasi: calon_siswa hanya lihat jika jalurnya Prestasi
    // -----------------------------------------------------------------------

    public static function shouldRegisterNavigation(): bool
    {
        $user = auth()->user();

        if (! $user) {
            return false;
        }

        if ($user->hasRole('calon_siswa')) {
            return self::isCalonSiswaJalurPrestasi();
        }

        return $user->hasAnyRole(['verifikator', 'panitia', 'admin', 'super_admin']);
    }

    // -----------------------------------------------------------------------
    // Query: calon_siswa hanya lihat milik sendiri + wajib jalur prestasi
    // -----------------------------------------------------------------------

    public static function getEloquentQuery(): Builder
    {
        $query = parent::getEloquentQuery();

        if (auth()->user()?->hasRole('calon_siswa')) {
            // Block akses total jika bukan jalur prestasi (paksa via URL sekalipun)
            if (! self::isCalonSiswaJalurPrestasi()) {
                return $query->whereRaw('0 = 1');
            }

            $calonSiswaId = CalonSiswa::withoutGlobalScopes()
                ->where('user_id', auth()->id())
                ->value('id');

            return $query->where('calon_siswa_id', $calonSiswaId);
        }

        return $query;
    }

    // -----------------------------------------------------------------------
    // Form
    // -----------------------------------------------------------------------

    public static function form(Form $form): Form
    {
        $isCalonSiswa = auth()->user()?->hasRole('calon_siswa');
        $isEditor = auth()->user()?->hasAnyRole(['admin', 'super_admin']);

        $calonSiswaId = $isCalonSiswa
            ? CalonSiswa::withoutGlobalScopes()->where('user_id', auth()->id())->value('id')
            : null;

        $nisn = $isCalonSiswa
            ? CalonSiswa::withoutGlobalScopes()->where('user_id', auth()->id())->value('nisn')
            : null;

        return $form->schema([

            Select::make('calon_siswa_id')
                ->label('Calon Siswa')
                ->relationship(
                    'calonSiswa',
                    'nama',
                    fn (Builder $query) => $query->withoutGlobalScopes()
                )
                ->getOptionLabelFromRecordUsing(
                    fn ($record) => "{$record->nama} — {$record->nisn}"
                )
                ->searchable()
                ->preload()
                ->required()
                ->default($calonSiswaId)
                ->hidden($isCalonSiswa)
                ->dehydrated(true),

            Select::make('prestasi_id')
                ->label('Jenis Prestasi')
                ->options(
                    Prestasi::all()->mapWithKeys(
                        fn ($p) => [
                            $p->id => "{$p->jenis} — {$p->nama}".($p->tingkat ? " ({$p->tingkat})" : ''),
                        ]
                    )
                )
                ->searchable()
                ->required()
                ->disabled(! $isCalonSiswa && ! $isEditor)
                ->columnSpanFull(),

            TextInput::make('nama_prestasi')
                ->label('Nama / Judul Prestasi')
                ->required()
                ->maxLength(100)
                ->placeholder('Contoh: Juara 1 MTQ Tingkat Kabupaten')
                ->disabled(! $isCalonSiswa && ! $isEditor),

            TextInput::make('tahun_prestasi')
                ->label('Tahun Prestasi')
                ->required()
                ->numeric()
                ->minValue(2000)
                ->maxValue((int) date('Y'))
                ->placeholder((string) date('Y'))
                ->disabled(! $isCalonSiswa && ! $isEditor),

            TextInput::make('penyelenggara_prestasi')
                ->label('Penyelenggara')
                ->required()
                ->maxLength(100)
                ->placeholder('Contoh: Kementerian Agama Kabupaten Pandeglang')
                ->disabled(! $isCalonSiswa && ! $isEditor),

            FileUpload::make('berkas_prestasi')
                ->label('Berkas Bukti Prestasi')
                ->helperText('Format: JPG, PNG, atau PDF. Ukuran: 10 KB – 1 MB.')
                ->acceptedFileTypes(['image/jpeg', 'image/png', 'application/pdf'])
                ->minSize(10)
                ->maxSize(1024)
                ->visibility('private')
                ->directory(fn () => 'berkas/prestasi/'.($nisn ?? 'umum'))
                ->downloadable()
                ->openable()
                ->fetchFileInformation(false)
                ->disabled(! $isCalonSiswa && ! $isEditor)
                ->columnSpanFull(),

        ])->columns(2);
    }

    // -----------------------------------------------------------------------
    // Table
    // -----------------------------------------------------------------------

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('calonSiswa.nama')
                    ->label('Nama Pendaftar')
                    ->searchable()
                    ->sortable()
                    ->hidden(auth()->user()?->hasRole('calon_siswa')),

                TextColumn::make('prestasi.jenis')
                    ->label('Jenis')
                    ->badge()
                    ->sortable(),

                TextColumn::make('nama_prestasi')
                    ->label('Nama Prestasi')
                    ->searchable()
                    ->limit(40),

                TextColumn::make('prestasi.tingkat')
                    ->label('Tingkat')
                    ->badge()
                    ->color(fn ($state) => match ($state) {
                        'Nasional' => 'danger',
                        'Provinsi' => 'warning',
                        'Kabupaten/Kota' => 'info',
                        default => 'gray',
                    }),

                TextColumn::make('tahun_prestasi')
                    ->label('Tahun')
                    ->sortable(),

                TextColumn::make('penyelenggara_prestasi')
                    ->label('Penyelenggara')
                    ->limit(30)
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('berkas_prestasi')
                    ->label('Berkas')
                    ->formatStateUsing(fn ($state) => $state ? '✅ Ada' : '❌ Belum upload')
                    ->badge()
                    ->color(fn ($state) => $state ? 'success' : 'danger'),

                TextColumn::make('updated_at')
                    ->label('Diperbarui')
                    ->dateTime('d M Y, H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('prestasi_id')
                    ->relationship('prestasi', 'jenis')
                    ->label('Jenis Prestasi'),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make()
                    ->visible(
                        auth()->user()?->hasAnyRole(['calon_siswa', 'admin', 'super_admin'])
                    ),
                Tables\Actions\DeleteAction::make()
                    ->visible(
                        auth()->user()?->hasAnyRole(['admin', 'super_admin'])
                    ),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->visible(auth()->user()?->hasAnyRole(['admin', 'super_admin'])),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFormulirPrestasis::route('/'),
            'create' => Pages\CreateFormulirPrestasi::route('/create'),
            'view' => Pages\ViewFormulirPrestasi::route('/{record}'),
            'edit' => Pages\EditFormulirPrestasi::route('/{record}/edit'),
        ];
    }
}
