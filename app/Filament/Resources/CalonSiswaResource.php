<?php

namespace App\Filament\Resources;

use App\Filament\Exports\CalonSiswaExporter;
use App\Filament\Resources\CalonSiswaResource\Pages;
use App\Models\CalonSiswa;
use Carbon\Carbon;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\ExportBulkAction;
use Filament\Tables\Actions\ForceDeleteBulkAction;
use Filament\Tables\Actions\RestoreBulkAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Torgodly\Html2Media\Tables\Actions\Html2MediaAction;

class CalonSiswaResource extends Resource
{
    protected static ?string $model = CalonSiswa::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Formulir Pendaftaran';

    protected static ?string $label = 'Formulir Pendaftaran';

    protected static ?string $slug = 'formulir';

    // protected static ?string $navigationGroup = 'Formulir';

    protected static ?int $navigationSort = 1;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-identification';

    public static function getNavigationBadge(): ?string
    {
        return CalonSiswa::count();
    }

    public static function table(Table $table): Table
    {
        $calonSiswa = CalonSiswa::where('nisn', Auth::user()->username)->first();
        $label = $calonSiswa ? $calonSiswa->status_pendaftaran : '';
        $statusHidden = ['Diterima', 'Diterima Di Kelas Unggulan', 'Diterima Di Kelas Reguler', 'Ditolak'];

        return $table
            ->query(
                optional(Auth::user()->roles->first())->name !== 'peserta'
                    ? CalonSiswa::query()
                    : CalonSiswa::query()->where('nisn', Auth::user()->username)
                // tambahkan logika untuk menampilkan bata berdasarkan tahun pendaftaran aktif saja
            )
            ->headerActions([
                Action::make('status_pendaftaran')
                    ->label($label)
                    ->color(function () {
                        $calonSiswa = CalonSiswa::where('nisn', Auth::user()->username)->first();
                        if (! $calonSiswa) {
                            return 'warning';
                        }
                        $status = [
                            'Diproses' => 'warning',
                            'Diverifikasi' => 'success',
                            'Berkas Tidak Lengkap' => 'warning',
                            'Ditolak' => 'danger',
                            'Diterima' => 'success',
                            'Diterima Di Kelas Reguler' => 'success',
                            'Diterima Di Kelas Unggulan' => 'info',
                        ];

                        return $status[$calonSiswa->status_pendaftaran] ?? 'warning';
                    })
                    ->icon(function () {
                        $calonSiswa = CalonSiswa::where('nisn', Auth::user()->username)->first();
                        if (! $calonSiswa) {
                            return 'heroicon-o-arrow-path';
                        }
                        $status = [
                            'Diproses' => 'heroicon-o-arrow-path',
                            'Diverifikasi' => 'heroicon-o-clipboard-document-check',
                            'Berkas Tidak Lengkap' => 'heroicon-o-document-minus',
                            'Ditolak' => 'heroicon-o-no-symbol',
                            'Diterima' => 'heroicon-o-check-circle',
                            'Diterima Di Kelas Reguler' => 'heroicon-o-shield-check',
                            'Diterima Di Kelas Unggulan' => 'heroicon-o-shield-check',
                        ];

                        return $status[$calonSiswa->status_pendaftaran] ?? 'gray';
                    })
                    ->outlined()
                    ->size('sm')
                    ->disabled()
                    ->hidden(optional(Auth::user()->roles->first())->name !== 'peserta' || $calonSiswa === null || in_array($calonSiswa->status_pendaftaran, $statusHidden)),
            ])
            ->columns([
                ImageColumn::make('berkas_foto')
                    ->label('Foto')
                    ->circular(),

                TextColumn::make('jalurPendaftaran.nama')
                    ->label('Jalur Pendaftaran')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Reguler' => 'success',
                        'Prestasi' => 'primary',
                        'Afirmasi' => 'warning',
                        'Zonasi' => 'danger',
                        'Mutasi' => 'info',
                    })
                    ->icon(fn (string $state): string => match ($state) {
                        'Reguler' => 'heroicon-o-sparkles',
                        'Prestasi' => 'heroicon-o-trophy',
                        'Afirmasi' => 'heroicon-o-gift',
                        'Zonasi' => 'heroicon-o-map',
                        'Mutasi' => 'heroicon-o-arrows-right-left',
                    }),

                TextColumn::make('status_pendaftaran')
                    ->label('Status Pendaftaran')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Diproses' => 'warning',
                        'Diverifikasi' => 'success',
                        'Berkas Tidak Lengkap' => 'warning',
                        'Ditolak' => 'danger',
                        'Diterima' => 'success',
                        'Diterima Di Kelas Reguler' => 'success',
                        'Diterima Di Kelas Unggulan' => 'primary',
                    })
                    ->icon(fn (string $state): string => match ($state) {
                        'Diproses' => 'heroicon-o-arrow-path',
                        'Diverifikasi' => 'heroicon-o-clipboard-document-check',
                        'Berkas Tidak Lengkap' => 'heroicon-o-document-minus',
                        'Ditolak' => 'heroicon-o-no-symbol',
                        'Diterima' => 'heroicon-o-check-circle',
                        'Diterima Di Kelas Reguler' => 'heroicon-o-shield-check',
                        'Diterima Di Kelas Unggulan' => 'heroicon-o-shield-check',
                    })
                    ->visible(Auth::user()->roles->first()->name === 'administrator'),
                TextColumn::make('verifikator')
                    ->label('Verifikator')
                    ->badge()
                    ->icon('heroicon-o-verify'),
                TextColumn::make('kelas.nama')
                    ->label('Diterima Di Kelas')
                    ->badge()
                    ->icon('heroicon-o-building-storefront')
                    ->visible(function () {
                        $tahunPendaftaran = DB::table('tahun_pendaftarans')
                            ->where('status', 'Aktif')
                            ->first();

                        // Pastikan data tahun pendaftaran dan tanggal selesai registrasi berkas tersedia
                        if (! $tahunPendaftaran || ! $tahunPendaftaran->tanggal_registrasi_berkas_selesai) {
                            return false;
                        }

                        // Konversi tanggal ke Carbon untuk perbandingan
                        $berkasDate = Carbon::parse($tahunPendaftaran->tanggal_registrasi_berkas_selesai);

                        // Elemen terlihat jika tanggal saat ini >= tanggal selesai registrasi berkas atau user bukan peserta
                        return Carbon::now()->gte($berkasDate) || optional(Auth::user()->roles->first())->name !== 'peserta';
                    }),

                TextColumn::make('nama')
                    ->label('Nama Lengkap')
                    ->searchable(Auth::user()->roles->first()->name === 'administrator' && CalonSiswa::count() > 10),
                TextColumn::make('jenis_kelamin')
                    ->label('Jenis Kelamin'),
                TextColumn::make('nik')
                    ->visible(Auth::user()->roles->first()->name === 'administrator')
                    ->label('NIK')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('kk')
                    ->visible(Auth::user()->roles->first()->name === 'administrator')
                    ->label('KK')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('nisn')
                    ->visible(Auth::user()->roles->first()->name === 'administrator')
                    ->label('NISN')
                    ->searchable(Auth::user()->roles->first()->name === 'administrator' && CalonSiswa::count() > 10),
                TextColumn::make('sekolahAsal.nama')
                    ->label('Sekolah Asal'),
                TextColumn::make('tempat_lahir')
                    ->visible(Auth::user()->roles->first()->name === 'administrator')
                    ->label('Tempat Lahir')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('tanggal_lahir')
                    ->visible(Auth::user()->roles->first()->name === 'administrator')
                    ->label('Tanggal Lahir')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->date('d F Y H:i:s'),
                TextColumn::make('tahun_lulus')
                    ->label('Tahun Lulus'),
                TextColumn::make('golongan_darah')
                    ->visible(Auth::user()->roles->first()->name === 'administrator')
                    ->label('Golongan Darah')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('agama')
                    ->visible(Auth::user()->roles->first()->name === 'administrator')
                    ->label('Agama')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('anak_ke')
                    ->visible(Auth::user()->roles->first()->name === 'administrator')
                    ->label('Anak Ke')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->numeric(),
                TextColumn::make('jumlah_saudara')
                    ->visible(Auth::user()->roles->first()->name === 'administrator')
                    ->label('Jumlah Saudara')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->numeric(),
                TextColumn::make('tinggal_bersama')
                    ->visible(Auth::user()->roles->first()->name === 'administrator')
                    ->label('Tinggal Bersama')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('jarak_ke_sekolah')
                    ->visible(Auth::user()->roles->first()->name === 'administrator')
                    ->label('Jarak Ke Sekolah')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('disabilitas')
                    ->visible(Auth::user()->roles->first()->name === 'administrator')
                    ->label('Disabilitas')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('tinggi_badan')
                    ->visible(Auth::user()->roles->first()->name === 'administrator')
                    ->label('Tinggi Badan')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->numeric(),
                TextColumn::make('berat_badan')
                    ->visible(Auth::user()->roles->first()->name === 'administrator')
                    ->label('Berat Badan')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->numeric(),
                TextColumn::make('no_kip')
                    ->visible(Auth::user()->roles->first()->name === 'administrator')
                    ->label('Nomor KIP')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('no_kks')
                    ->visible(Auth::user()->roles->first()->name === 'administrator')
                    ->label('Nomor KKS')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('no_pkh')
                    ->visible(Auth::user()->roles->first()->name === 'administrator')
                    ->label('Nomor PKH')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('siswa_telepon')
                    ->visible(Auth::user()->roles->first()->name === 'administrator')
                    ->label('Telepon')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('siswa_alamat')
                    ->visible(Auth::user()->roles->first()->name === 'administrator')
                    ->label('Alamat')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->wrap()
                    ->words(10)
                    ->tooltip(function (TextColumn $column): ?string {
                        $state = $column->getState();
                        if (strlen($state) <= $column->getCharacterLimit()) {
                            return null;
                        }

                        return $state;
                    }),
                TextColumn::make('siswaKelurahan.nama')
                    ->visible(Auth::user()->roles->first()->name === 'administrator')
                    ->label('Kelurahan')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('siswaKecamatan.nama')
                    ->visible(Auth::user()->roles->first()->name === 'administrator')
                    ->label('Kecamatan')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('siswaKabupaten.nama')
                    ->visible(Auth::user()->roles->first()->name === 'administrator')
                    ->label('Kabupaten')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('siswaProvinsi.nama')
                    ->visible(Auth::user()->roles->first()->name === 'administrator')
                    ->label('Provinsi')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('siswaNegara.nama')
                    ->visible(Auth::user()->roles->first()->name === 'administrator')
                    ->label('Negara')
                    ->toggleable(isToggledHiddenByDefault: true),

                // Jadwal Tes
                TextColumn::make('tes_sesi')
                    ->label('Sesi Tes')
                    ->visible(function () {
                        $tahunPendaftaran = DB::table('tahun_pendaftarans')->where('status', 'Aktif')->first();

                        if (
                            ! $tahunPendaftaran
                            || empty($tahunPendaftaran->tanggal_penerbitan_kartu_tes_mulai)
                            || empty($tahunPendaftaran->tanggal_penerbitan_kartu_tes_selesai)
                        ) {
                            return false;
                        }

                        $currentDate = Carbon::now();
                        $tesMulai = Carbon::parse($tahunPendaftaran->tanggal_penerbitan_kartu_tes_mulai);
                        $tesSelesai = Carbon::parse($tahunPendaftaran->tanggal_penerbitan_kartu_tes_selesai);

                        return $currentDate->between($tesMulai, $tesSelesai) || optional(Auth::user()->roles->first())->name !== 'peserta';
                    }),

                TextColumn::make('tes_ruang')
                    ->label('Ruang Tes')
                    ->visible(function () {
                        $tahunPendaftaran = DB::table('tahun_pendaftarans')->where('status', 'Aktif')->first();

                        if (
                            ! $tahunPendaftaran
                            || empty($tahunPendaftaran->tanggal_penerbitan_kartu_tes_mulai)
                            || empty($tahunPendaftaran->tanggal_penerbitan_kartu_tes_selesai)
                        ) {
                            return false;
                        }

                        $currentDate = Carbon::now();
                        $tesMulai = Carbon::parse($tahunPendaftaran->tanggal_penerbitan_kartu_tes_mulai);
                        $tesSelesai = Carbon::parse($tahunPendaftaran->tanggal_penerbitan_kartu_tes_selesai);

                        return $currentDate->between($tesMulai, $tesSelesai) || optional(Auth::user()->roles->first())->name !== 'peserta';
                    }),

                TextColumn::make('tes_akademik')
                    ->label('Tes Akademik')
                    ->date('d F Y H:i:s')
                    ->visible(function () {
                        $tahunPendaftaran = DB::table('tahun_pendaftarans')->where('status', 'Aktif')->first();

                        if (
                            ! $tahunPendaftaran
                            || empty($tahunPendaftaran->tanggal_penerbitan_kartu_tes_mulai)
                            || empty($tahunPendaftaran->tanggal_penerbitan_kartu_tes_selesai)
                        ) {
                            return false;
                        }

                        $currentDate = Carbon::now();
                        $tesMulai = Carbon::parse($tahunPendaftaran->tanggal_penerbitan_kartu_tes_mulai);
                        $tesSelesai = Carbon::parse($tahunPendaftaran->tanggal_penerbitan_kartu_tes_selesai);

                        return $currentDate->between($tesMulai, $tesSelesai) || optional(Auth::user()->roles->first())->name !== 'peserta';
                    }),

                TextColumn::make('tes_praktik')
                    ->label('Tes Praktik')
                    ->date('d F Y H:i:s')
                    ->visible(function () {
                        $tahunPendaftaran = DB::table('tahun_pendaftarans')->where('status', 'Aktif')->first();

                        if (
                            ! $tahunPendaftaran
                            || empty($tahunPendaftaran->tanggal_penerbitan_kartu_tes_mulai)
                            || empty($tahunPendaftaran->tanggal_penerbitan_kartu_tes_selesai)
                        ) {
                            return false;
                        }

                        $currentDate = Carbon::now();
                        $tesMulai = Carbon::parse($tahunPendaftaran->tanggal_penerbitan_kartu_tes_mulai);
                        $tesSelesai = Carbon::parse($tahunPendaftaran->tanggal_penerbitan_kartu_tes_selesai);

                        return $currentDate->between($tesMulai, $tesSelesai) || optional(Auth::user()->roles->first())->name !== 'peserta';
                    }),

                // Lainnya
                // TextColumn::make('prestasi.nama')
                //     ->label('Nama Prestasi')
                //     //     ->visible(fn() => optional(Auth::user()->roles->first())->name === 'administrator')
                //     ->toggleable(isToggledHiddenByDefault: true),

                // TextColumn::make('ekstrakurikuler.nama')
                //     ->visible(fn() => optional(Auth::user()->roles->first())->name === 'administrator')
                //     ->label('Peminatan Ekstrakurikuler')
                //     ->toggleable(isToggledHiddenByDefault: true),

                // TextColumn::make('mataPelajaran.nama')
                //     ->visible(fn() => optional(Auth::user()->roles->first())->name === 'administrator')
                //     ->label('Peminatan Pelajaran')
                //     ->formatStateUsing(
                //         fn($state) => is_array($state)
                //             ? implode(', ', array_map(fn($item) => Str::headline($item), $state))
                //             : Str::headline($state)
                //     )
                //     ->toggleable(isToggledHiddenByDefault: true),

            ])
            ->filters([
                TrashedFilter::make()
                    ->visible(Auth::user()->roles->first()->name === 'administrator'),
                SelectFilter::make('jalur_pendaftaran')
                    ->label('Jalur Pendaftaran')
                    ->relationship('jalurPendaftaran', 'nama', fn ($query) => $query->where('status', 'Aktif'))
                    ->visible(optional(Auth::user()->roles->first())->name !== 'peserta'),
                SelectFilter::make('status_pendaftaran')
                    ->label('Status Pendaftaran')
                    ->options([
                        'Diproses' => 'Diproses',
                        'Berkas Tidak Lengkap' => 'Berkas Tidak Lengkap',
                        'Diverifikasi' => 'Diverifikasi',
                        'Ditolak' => 'Ditolak',
                        'Diterima' => 'Diterima',
                        'Diterima Di Kelas Reguler' => 'Diterima Di Kelas Reguler',
                        'Diterima Di Kelas Unggulan' => 'Diterima Di Kelas Unggulan',
                    ])
                    ->visible(optional(Auth::user()->roles->first())->name !== 'peserta'),
                SelectFilter::make('kelas')
                    ->label('Kelas')
                    ->relationship('kelas', 'nama')
                    ->visible(optional(Auth::user()->roles->first())->name !== 'peserta'),
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                    Tables\Actions\ForceDeleteAction::make(),
                    Tables\Actions\RestoreAction::make(),

                    // Formulir
                    Html2MediaAction::make('cetak_formulir')
                        ->label('Formulir')
                        ->icon('heroicon-o-printer')
                        ->filename(fn ($record) => 'Formulir_'.$record->nama.'_'.$record->nisn.'.pdf')
                        ->savePdf()
                        // ->pagebreak('section', ['css', 'legacy'])
                        ->orientation('portrait')
                        ->format('a4', 'mm')
                        ->enableLinks()
                        ->margin([10, 10, 10, 10])
                        ->content(fn ($record) => view('formulir', ['record' => $record])),

                    // Kartu Tes
                    Html2MediaAction::make('cetak_kartu_tes')
                        ->label('Kartu Tes')
                        ->icon('heroicon-o-printer')
                        ->filename(fn ($record) => 'Kartu Tes_'.$record->nama.'_'.$record->nisn.'.pdf')
                        ->savePdf()
                        // ->pagebreak('section', ['css', 'legacy'])
                        ->orientation('portrait')
                        ->format('a4', 'mm')
                        ->enableLinks()
                        ->margin([10, 10, 10, 10])
                        ->content(fn ($record) => view('kartu-tes', ['record' => $record])),

                    // SKL/Hasil
                    Html2MediaAction::make('cetak_skl')
                        ->label('Hasil')
                        ->icon('heroicon-o-printer')
                        ->filename(fn ($record) => 'Hasil_'.$record->nama.'_'.$record->nisn.'.pdf')
                        ->savePdf()
                        // ->pagebreak('section', ['css', 'legacy'])
                        ->orientation('portrait')
                        ->format('a4', 'mm')
                        ->enableLinks()
                        ->margin([10, 10, 10, 10])
                        ->content(fn ($record) => view('skl', ['record' => $record])),
                ])
                    ->visible(optional(Auth::user()->roles->first())->name !== 'peserta'),
            ], ActionsPosition::BeforeColumns)

            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                    ExportBulkAction::make()
                        ->label('Ekspor')
                        ->icon('heroicon-m-cloud-arrow-down')
                        ->color('success')
                        ->exporter(CalonSiswaExporter::class)
                        ->chunkSize(250),
                    BulkAction::make('set_jalur_pendaftaran')
                        ->label('Set Jalur Pendaftaran')
                        ->icon('heroicon-o-sparkles')
                        ->color('primary')
                        ->requiresConfirmation()
                        ->form([
                            Select::make('jalur_pendaftaran')
                                ->label('Jalur Pendaftaran')
                                ->relationship('jalurPendaftaran', 'nama', fn ($query) => $query->where('status', 'Aktif'))
                                ->required(),
                        ])
                        ->action(function (Collection $records, array $data) {
                            $records->each(function ($record) use ($data) {
                                CalonSiswa::where('id', $record->id)->update([
                                    'jalur_pendaftaran_id' => $data['jalur_pendaftaran'],
                                ]);
                            });
                        }),

                    BulkAction::make('set_status_pendaftaran')
                        ->label('Set Status Pendaftaran')
                        ->icon('heroicon-o-check-circle')
                        ->color('primary')
                        ->requiresConfirmation()
                        ->form([
                            Select::make('status_pendaftaran')
                                ->label('Status')
                                ->options([
                                    'Diproses' => 'Diproses',
                                    'Berkas Tidak Lengkap' => 'Berkas Tidak Lengkap',
                                    'Diverifikasi' => 'Diverifikasi',
                                    'Ditolak' => 'Ditolak',
                                    'Diterima' => 'Diterima',
                                    'Diterima Di Kelas Reguler' => 'Diterima Di Kelas Reguler',
                                    'Diterima Di Kelas Unggulan' => 'Diterima Di Kelas Unggulan',
                                ])
                                ->required(),
                        ])
                        ->action(function (Collection $records, array $data) {
                            $records->each(function ($record) use ($data) {
                                CalonSiswa::where('id', $record->id)->update([
                                    'status_pendaftaran' => $data['status_pendaftaran'],
                                ]);
                            });
                        }),

                    BulkAction::make('set_kelas')
                        ->label('Set Kelas')
                        ->icon('heroicon-o-building-storefront')
                        ->color('primary')
                        ->requiresConfirmation()
                        ->form([
                            Select::make('kelas_id')
                                ->label('Kelas')
                                ->relationship('kelas', 'nama')
                                ->required(),
                        ])
                        ->action(function (Collection $records, array $data) {
                            $records->each(function ($record) use ($data) {
                                CalonSiswa::where('id', $record->id)->update([
                                    'kelas_id' => $data['kelas_id'],
                                ]);
                            });
                        }),
                ])
                    ->visible(Auth::user()->roles->first()->name === 'administrator'),
            ])
            ->striped()
            ->filtersLayout(FiltersLayout::AboveContentCollapsible)
            ->paginationPageOptions([10, 25, 50]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCalonSiswas::route('/'),
            'create' => Pages\CreateCalonSiswa::route('/create'),
            'view' => Pages\ViewCalonSiswa::route('/{record}'),
            'edit' => Pages\EditCalonSiswa::route('/{record}/edit'),
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
