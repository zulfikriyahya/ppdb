<?php

namespace App\Filament\Resources;

use Carbon\Carbon;
use Filament\Tables;
use Filament\Forms\Set;
use Filament\Forms\Form;
use App\Models\CalonSiswa;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Filament\Tables\Grouping\Group;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Tables\Actions\BulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Actions\ExportAction;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Filters\TrashedFilter;
use App\Filament\Exports\CalonSiswaExporter;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\ExportBulkAction;
use Filament\Tables\Actions\RestoreBulkAction;
use Filament\Tables\Actions\ForceDeleteBulkAction;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CalonSiswaResource\Pages;
use Torgodly\Html2Media\Tables\Actions\Html2MediaAction;

class CalonSiswaResource extends Resource
{
    protected static ?string $model = CalonSiswa::class;

    protected static ?string $navigationLabel = 'Formulir Pendaftaran';

    protected static ?string $label = 'Formulir Pendaftaran';

    protected static ?string $slug = 'formulir';

    protected static ?string $navigationGroup = 'Formulir';

    protected static ?int $navigationSort = 1;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->groups([
                Group::make('jalurPendaftaran.nama')
                    ->label('Jalur Pendaftaran'),
                Group::make('status_pendaftaran')
                    ->label('Status Pendaftaran'),
                Group::make('kelas.nama')
                    ->label('Kelas'),
            ])
            ->columns([
                ImageColumn::make('berkas_foto')
                    ->label('Foto')
                    ->circular()
                    ->searchable(),
                TextColumn::make('jalurPendaftaran.nama')
                    ->label('Jalur Pendaftaran')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'Reguler' => 'success',
                        'Prestasi' => 'primary',
                        'Afirmasi' => 'warning',
                        'Zonasi' => 'danger',
                        'Mutasi' => 'info',
                    })
                    ->icon(fn(string $state): string => match ($state) {
                        'Reguler' => 'heroicon-o-sparkles',
                        'Prestasi' => 'heroicon-o-trophy',
                        'Afirmasi' => 'heroicon-o-gift',
                        'Zonasi' => 'heroicon-o-map',
                        'Mutasi' => 'heroicon-o-arrows-right-left',
                    })
                    ->sortable(),
                TextColumn::make('status_pendaftaran')
                    ->label('Status Pendaftaran')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'Diproses' => 'warning',
                        'Diverifikasi' => 'success',
                        'Berkas Tidak Lengkap' => 'warning',
                        'Ditolak' => 'danger',
                        'Diterima' => 'success',
                        'Diterima Di Kelas Reguler' => 'success',
                        'Diterima Di Kelas Unggulan' => 'primary',
                    })
                    ->icon(fn(string $state): string => match ($state) {
                        'Diproses' => 'heroicon-o-arrow-path',
                        'Diverifikasi' => 'heroicon-o-clipboard-document-check',
                        'Berkas Tidak Lengkap' => 'heroicon-o-document-minus',
                        'Ditolak' => 'heroicon-o-no-symbol',
                        'Diterima' => 'heroicon-o-check-circle',
                        'Diterima Di Kelas Reguler' => 'heroicon-o-shield-check',
                        'Diterima Di Kelas Unggulan' => 'heroicon-o-shield-check',
                    })
                    ->visible(function () {
                        $tahunPendaftaran = DB::table('tahun_pendaftarans')
                            ->where('status', 'Aktif')
                            ->first();
                        return Carbon::now() === Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_ppdb_selesai));
                    })
                    ->sortable(),
                TextColumn::make('kelas.nama')
                    ->label('Diterima Di Kelas')
                    ->badge()
                    ->icon('heroicon-o-building-storefront')
                    ->visible(function () {
                        $tahunPendaftaran = DB::table('tahun_pendaftarans')
                            ->where('status', 'Aktif')
                            ->first();
                        return Carbon::now() === Carbon::createFromFormat('Y-m-d H:i:s', trim($tahunPendaftaran->tanggal_ppdb_selesai));
                    })
                    ->sortable(),
                TextColumn::make('nama')
                    ->label('Nama Lengkap')
                    ->searchable(),

                TextColumn::make('nik')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('NIK')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('kk')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('KK')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('nisn')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('NISN')
                    ->searchable(),
                TextColumn::make('sekolahAsal.nama')
                    ->label('Sekolah Asal')
                    ->sortable(),
                TextColumn::make('tempat_lahir')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Tempat Lahir')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('tanggal_lahir')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Tanggal Lahir')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->date('d F Y H:i:s')
                    ->sortable(),
                TextColumn::make('tahun_lulus')
                    ->label('Tahun Lulus')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),
                TextColumn::make('jenis_kelamin')
                    ->label('Jenis Kelamin')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('golongan_darah')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Golongan Darah')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('agama')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Agama')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('anak_ke')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Anak Ke')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->numeric()
                    ->sortable(),
                TextColumn::make('jumlah_saudara')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Jumlah Saudara')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->numeric()
                    ->sortable(),
                TextColumn::make('tinggal_bersama')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Tinggal Bersama')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('jarak_ke_sekolah')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Jarak Ke Sekolah')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('disabilitas')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Disabilitas')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('tinggi_badan')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Tinggi Badan')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->numeric()
                    ->sortable(),
                TextColumn::make('berat_badan')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Berat Badan')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->numeric()
                    ->sortable(),
                TextColumn::make('no_kip')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Nomor KIP')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('no_kks')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Nomor KKS')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('no_pkh')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Nomor PKH')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('siswa_telepon')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Telepon')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('siswa_alamat')
                    ->visible(Auth::user()->username === 'administrator')
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
                    })
                    ->searchable(),
                TextColumn::make('siswaKelurahan.nama')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Kelurahan')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),
                TextColumn::make('siswaKecamatan.nama')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Kecamatan')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),
                TextColumn::make('siswaKabupaten.nama')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Kabupaten')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),
                TextColumn::make('siswaProvinsi.nama')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Provinsi')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),
                TextColumn::make('siswaNegara.nama')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Negara')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),

                // Berkas
                ImageColumn::make('berkas_kk')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('KK')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                ImageColumn::make('berkas_akta')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Akta')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                ImageColumn::make('berkas_kip')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('KIP')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                ImageColumn::make('berkas_nisn')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('NISN')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('berkas_skbb')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('SKBB')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('berkas_skab')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('SKAB')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('berkas_prestasi')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Bukti Prestasi')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),

                // Ibu
                TextColumn::make('ibu_nama')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Nama Ibu')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('ibu_telepon')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Telepon Ibu')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('ibu_pekerjaan')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Pekerjaan Ibu')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('ibu_status')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Status Ibu')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('ibu_alamat')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Alamat Ibu')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->wrap()
                    ->words(10)
                    ->tooltip(function (TextColumn $column): ?string {
                        $state = $column->getState();
                        if (strlen($state) <= $column->getCharacterLimit()) {
                            return null;
                        }

                        return $state;
                    })
                    ->searchable(),
                TextColumn::make('ibuKelurahan.nama')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Kelurahan')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),
                TextColumn::make('ibuKecamatan.nama')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Kecamatan')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),
                TextColumn::make('ibuKabupaten.nama')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Kabupaten')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),
                TextColumn::make('ibuProvinsi.nama')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Provinsi')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),
                TextColumn::make('ibuNegara.nama')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Negara')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),

                // Ayah
                TextColumn::make('ayah_nama')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Nama Ayah')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('ayah_telepon')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Telepon Ayah')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('ayah_pekerjaan')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Pekerjaan Ayah')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('ayah_status')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Status Ayah')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('ayah_alamat')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Alamat Ayah')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->wrap()
                    ->words(10)
                    ->tooltip(function (TextColumn $column): ?string {
                        $state = $column->getState();
                        if (strlen($state) <= $column->getCharacterLimit()) {
                            return null;
                        }

                        return $state;
                    })
                    ->searchable(),
                TextColumn::make('ayahKelurahan.nama')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Kelurahan')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),
                TextColumn::make('ayahKecamatan.nama')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Kecamatan')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),
                TextColumn::make('ayahKabupaten.nama')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Kabupaten')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),
                TextColumn::make('ayahProvinsi.nama')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Provinsi')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),
                TextColumn::make('ayahNegara.nama')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Negara')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),

                // Wali
                TextColumn::make('wali_nama')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Nama Wali')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('wali_telepon')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Telepon Wali')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('wali_pekerjaan')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Pekerjaan Wali')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),

                TextColumn::make('wali_status')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Status Wali')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('wali_alamat')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Alamat Wali')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->wrap()
                    ->words(10)
                    ->tooltip(function (TextColumn $column): ?string {
                        $state = $column->getState();
                        if (strlen($state) <= $column->getCharacterLimit()) {
                            return null;
                        }

                        return $state;
                    })
                    ->searchable(),
                TextColumn::make('waliKelurahan.nama')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Kelurahan')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),
                TextColumn::make('waliKecamatan.nama')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Kecamatan')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),
                TextColumn::make('waliKabupaten.nama')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Kabupaten')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),
                TextColumn::make('waliProvinsi.nama')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Provinsi')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),
                TextColumn::make('waliNegara.nama')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Negara')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),

                TextColumn::make('prestasi.nama')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Nama Prestasi')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),
                TextColumn::make('ekstrakurikuler.nama')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Peminatan Ekstrakurikuler')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('mataPelajaran.nama')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Peminatan Pelajaran')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),

                TextColumn::make('nilai_ipa')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Nilai IPA')
                    ->numeric()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),
                TextColumn::make('nilai_ips')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Nilai IPS')
                    ->numeric()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),
                TextColumn::make('nilai_matematika')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Nilai Matematika')
                    ->numeric()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),
                TextColumn::make('nilai_indonesia')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Nilai Bahasa Indonesia')
                    ->numeric()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),
                TextColumn::make('nilai_inggris')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Nilai Bahasa Inggris')
                    ->numeric()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),
                TextColumn::make('nilai_arab')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Nilai Bahasa Arab')
                    ->numeric()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),
                TextColumn::make('bobot_nilai_akademik')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Bobot Nilai Akademik')
                    ->numeric()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),
                TextColumn::make('bobot_nilai_praktik')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Bobot Nilai Praktik')
                    ->numeric()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),
                TextColumn::make('nilai_akademik')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Nilai Akademik')
                    ->numeric()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),
                TextColumn::make('nilai_praktik')
                    ->visible(Auth::user()->username === 'administrator')
                    ->label('Nilai Praktik')
                    ->numeric()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),
                TextColumn::make('tes_sesi')
                    ->label('Sesi Tes')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('tes_ruang')
                    ->label('Ruang Tes')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                TextColumn::make('tes_akademik')
                    ->label('Tes Akademik')
                    ->date('d F Y H:i:s')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),
                TextColumn::make('tes_praktik')
                    ->label('Tes Praktik')
                    ->date('d F Y H:i:s')
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->date('d F Y H:i:s')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->label('Diubah')
                    ->date('d F Y H:i:s')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('deleted_at')
                    ->label('Dihapus')
                    ->date('d F Y H:i:s')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])

            ->filters([
                TrashedFilter::make()
                    ->visible(Auth::user()->username === 'administrator'),
                SelectFilter::make('jalur_pendaftaran')
                    ->label('Jalur Pendaftaran')
                    ->relationship('jalurPendaftaran', 'nama', fn($query) => $query->where('status', 'Aktif')) // Menampilkan data jalurPendaftaran dengan kondisi statusnya aktif saja
                    ->visible(Auth::user()->username === 'administrator'),
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
                    ->visible(Auth::user()->username === 'administrator'),
                SelectFilter::make('kelas')
                    ->label('Kelas')
                    ->relationship('kelas', 'nama')
                    ->visible(Auth::user()->username === 'administrator'),
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    // Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                    Tables\Actions\ForceDeleteAction::make(),
                    Tables\Actions\RestoreAction::make(),

                    // Export
                    ExportAction::make('Ekspor')
                        ->label('Ekspor')
                        ->icon('heroicon-m-cloud-arrow-down')
                        ->color('success')
                        ->exporter(CalonSiswaExporter::class)
                        ->chunkSize(250)
                        ->visible(fn(): string => CalonSiswa::count() > 0 && Auth::user()->username === 'administrator'),

                    // Action Print
                    Html2MediaAction::make('formulir')
                        ->label('Cetak Formulir')
                        ->icon('heroicon-o-rectangle-stack')
                        ->scale(2)
                        ->print() // Enable print option
                        // ->preview() // Enable preview option
                        ->filename('formulir.pdf') // Custom file name
                        ->savePdf() // Enable save as PDF option
                        ->requiresConfirmation() // Show confirmation modal
                        // ->pagebreak('section', ['css', 'legacy'])
                        ->orientation('portrait') // Portrait orientation
                        ->format('a4', 'mm') // A4 format with mm units
                        ->enableLinks() // Enable links in PDF
                        ->margin([10, 20, 10, 20]) // Set custom margins
                        ->content(fn($record) => view('formulir', ['record' => $record])), // Set content
                ])
                    ->visible(Auth::user()->username === 'administrator'),
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
                                ->relationship('jalurPendaftaran', 'nama', fn($query) => $query->where('status', 'Aktif'))
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
                    ->visible(Auth::user()->username === 'administrator'),

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
        if (Auth::user() && Auth::user()->username !== 'administrator') {
            return [
                // 'index' => Pages\ListCalonSiswas::route('/'),
            ];
        }

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
