<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\CalonSiswa;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CalonSiswaResource\Pages;
use App\Filament\Resources\CalonSiswaResource\RelationManagers;

class CalonSiswaResource extends Resource
{
    protected static ?string $model = CalonSiswa::class;

    protected static ?string $navigationLabel = 'Formulir Pendaftaran';

    protected static ?string $label = 'Formulir Pendaftaran';

    protected static ?string $navigationGroup = 'Formulir';

    protected static ?int $navigationSort = 1;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required(),
                Forms\Components\TextInput::make('nik')
                    ->required(),
                Forms\Components\TextInput::make('nisn')
                    ->required(),
                Forms\Components\TextInput::make('tempat_lahir')
                    ->required(),
                Forms\Components\DatePicker::make('tanggal_lahir')
                    ->required(),
                Forms\Components\DatePicker::make('tahun_lulus')
                    ->required(),
                Forms\Components\TextInput::make('jenis_kelamin')
                    ->required(),
                Forms\Components\TextInput::make('golongan_darah')
                    ->required(),
                Forms\Components\TextInput::make('agama')
                    ->required(),
                Forms\Components\TextInput::make('anak_ke')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('jumlah_saudara')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('tinggal_bersama')
                    ->required(),
                Forms\Components\TextInput::make('jarak_ke_sekolah')
                    ->required(),
                Forms\Components\TextInput::make('disabilitas')
                    ->required(),
                Forms\Components\TextInput::make('tinggi_badan')
                    ->numeric(),
                Forms\Components\TextInput::make('berat_badan')
                    ->numeric(),
                Forms\Components\TextInput::make('no_kip'),
                Forms\Components\TextInput::make('siswa_telepon')
                    ->tel(),
                Forms\Components\TextInput::make('siswa_alamat')
                    ->required(),
                Forms\Components\Select::make('siswa_negara_id')
                    ->relationship('siswaNegara', 'id')
                    ->required(),
                Forms\Components\Select::make('siswa_provinsi_id')
                    ->relationship('siswaProvinsi', 'id')
                    ->required(),
                Forms\Components\Select::make('siswa_kabupaten_id')
                    ->relationship('siswaKabupaten', 'id')
                    ->required(),
                Forms\Components\Select::make('siswa_kecamatan_id')
                    ->relationship('siswaKecamatan', 'id')
                    ->required(),
                Forms\Components\Select::make('siswa_kelurahan_id')
                    ->relationship('siswaKelurahan', 'id')
                    ->required(),
                Forms\Components\TextInput::make('berkas_foto')
                    ->required(),
                Forms\Components\TextInput::make('berkas_kk')
                    ->required(),
                Forms\Components\TextInput::make('berkas_akta')
                    ->required(),
                Forms\Components\TextInput::make('berkas_kip'),
                Forms\Components\TextInput::make('berkas_nisn'),
                Forms\Components\TextInput::make('berkas_skbb')
                    ->required(),
                Forms\Components\TextInput::make('berkas_skab')
                    ->required(),
                Forms\Components\TextInput::make('berkas_prestasi'),
                Forms\Components\TextInput::make('ibu_nama')
                    ->required(),
                Forms\Components\TextInput::make('ibu_telepon')
                    ->tel(),
                Forms\Components\TextInput::make('ibu_pekerjaan'),
                Forms\Components\TextInput::make('ibu_status')
                    ->required(),
                Forms\Components\TextInput::make('ibu_alamat')
                    ->required(),
                Forms\Components\Select::make('ibu_negara_id')
                    ->relationship('ibuNegara', 'id')
                    ->required(),
                Forms\Components\Select::make('ibu_provinsi_id')
                    ->relationship('ibuProvinsi', 'id')
                    ->required(),
                Forms\Components\Select::make('ibu_kabupaten_id')
                    ->relationship('ibuKabupaten', 'id')
                    ->required(),
                Forms\Components\Select::make('ibu_kecamatan_id')
                    ->relationship('ibuKecamatan', 'id')
                    ->required(),
                Forms\Components\Select::make('ibu_kelurahan_id')
                    ->relationship('ibuKelurahan', 'id')
                    ->required(),
                Forms\Components\TextInput::make('ayah_nama')
                    ->required(),
                Forms\Components\TextInput::make('ayah_telepon')
                    ->tel(),
                Forms\Components\TextInput::make('ayah_pekerjaan'),
                Forms\Components\TextInput::make('ayah_status')
                    ->required(),
                Forms\Components\TextInput::make('ayah_alamat')
                    ->required(),
                Forms\Components\Select::make('ayah_negara_id')
                    ->relationship('ayahNegara', 'id')
                    ->required(),
                Forms\Components\Select::make('ayah_provinsi_id')
                    ->relationship('ayahProvinsi', 'id')
                    ->required(),
                Forms\Components\Select::make('ayah_kabupaten_id')
                    ->relationship('ayahKabupaten', 'id')
                    ->required(),
                Forms\Components\Select::make('ayah_kecamatan_id')
                    ->relationship('ayahKecamatan', 'id')
                    ->required(),
                Forms\Components\Select::make('ayah_kelurahan_id')
                    ->relationship('ayahKelurahan', 'id')
                    ->required(),
                Forms\Components\TextInput::make('wali_nama'),
                Forms\Components\TextInput::make('wali_telepon')
                    ->tel(),
                Forms\Components\TextInput::make('wali_pekerjaan'),
                Forms\Components\TextInput::make('wali_status'),
                Forms\Components\TextInput::make('wali_alamat'),
                Forms\Components\Select::make('wali_negara_id')
                    ->relationship('waliNegara', 'id'),
                Forms\Components\Select::make('wali_provinsi_id')
                    ->relationship('waliProvinsi', 'id'),
                Forms\Components\Select::make('wali_kabupaten_id')
                    ->relationship('waliKabupaten', 'id'),
                Forms\Components\Select::make('wali_kecamatan_id')
                    ->relationship('waliKecamatan', 'id'),
                Forms\Components\Select::make('wali_kelurahan_id')
                    ->relationship('waliKelurahan', 'id'),
                Forms\Components\Select::make('sekolah_asal_id')
                    ->relationship('sekolahAsal', 'id')
                    ->required(),
                Forms\Components\Select::make('jalur_pendaftaran_id')
                    ->relationship('jalurPendaftaran', 'id')
                    ->required(),
                Forms\Components\Select::make('prestasi_id')
                    ->relationship('prestasi', 'id'),
                Forms\Components\TextInput::make('peminatan_ekstrakurikuler')
                    ->required(),
                Forms\Components\TextInput::make('peminatan_pelajaran')
                    ->required(),
                Forms\Components\TextInput::make('nilai_ipa')
                    ->numeric(),
                Forms\Components\TextInput::make('nilai_ips')
                    ->numeric(),
                Forms\Components\TextInput::make('nilai_matematika')
                    ->numeric(),
                Forms\Components\TextInput::make('nilai_indonesia')
                    ->numeric(),
                Forms\Components\TextInput::make('nilai_inggris')
                    ->numeric(),
                Forms\Components\TextInput::make('nilai_arab')
                    ->numeric(),
                Forms\Components\TextInput::make('bobot_nilai_akademik')
                    ->numeric(),
                Forms\Components\TextInput::make('bobot_nilai_praktik')
                    ->numeric(),
                Forms\Components\TextInput::make('nilai_akademik')
                    ->numeric(),
                Forms\Components\TextInput::make('nilai_praktik')
                    ->numeric(),
                Forms\Components\TextInput::make('status_pendaftaran'),
                Forms\Components\Select::make('kelas_id')
                    ->relationship('kelas', 'id'),
                Forms\Components\TextInput::make('tes_sesi'),
                Forms\Components\TextInput::make('tes_ruang'),
                Forms\Components\DateTimePicker::make('tes_akademik_mulai'),
                Forms\Components\DateTimePicker::make('tes_akademik_selesai'),
                Forms\Components\DateTimePicker::make('tes_praktik_mulai'),
                Forms\Components\DateTimePicker::make('tes_praktik_selesai'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nik')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nisn')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tempat_lahir')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_lahir')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tahun_lulus')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jenis_kelamin')
                    ->searchable(),
                Tables\Columns\TextColumn::make('golongan_darah')
                    ->searchable(),
                Tables\Columns\TextColumn::make('agama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('anak_ke')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jumlah_saudara')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tinggal_bersama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jarak_ke_sekolah')
                    ->searchable(),
                Tables\Columns\TextColumn::make('disabilitas')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tinggi_badan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('berat_badan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('no_kip')
                    ->searchable(),
                Tables\Columns\TextColumn::make('siswa_telepon')
                    ->searchable(),
                Tables\Columns\TextColumn::make('siswa_alamat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('siswaNegara.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('siswaProvinsi.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('siswaKabupaten.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('siswaKecamatan.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('siswaKelurahan.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('berkas_foto')
                    ->searchable(),
                Tables\Columns\TextColumn::make('berkas_kk')
                    ->searchable(),
                Tables\Columns\TextColumn::make('berkas_akta')
                    ->searchable(),
                Tables\Columns\TextColumn::make('berkas_kip')
                    ->searchable(),
                Tables\Columns\TextColumn::make('berkas_nisn')
                    ->searchable(),
                Tables\Columns\TextColumn::make('berkas_skbb')
                    ->searchable(),
                Tables\Columns\TextColumn::make('berkas_skab')
                    ->searchable(),
                Tables\Columns\TextColumn::make('berkas_prestasi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ibu_nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ibu_telepon')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ibu_pekerjaan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ibu_status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ibu_alamat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ibuNegara.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ibuProvinsi.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ibuKabupaten.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ibuKecamatan.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ibuKelurahan.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ayah_nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ayah_telepon')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ayah_pekerjaan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ayah_status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ayah_alamat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ayahNegara.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ayahProvinsi.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ayahKabupaten.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ayahKecamatan.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ayahKelurahan.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('wali_nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('wali_telepon')
                    ->searchable(),
                Tables\Columns\TextColumn::make('wali_pekerjaan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('wali_status')
                    ->searchable(),
                Tables\Columns\TextColumn::make('wali_alamat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('waliNegara.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('waliProvinsi.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('waliKabupaten.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('waliKecamatan.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('waliKelurahan.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sekolahAsal.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('jalurPendaftaran.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('prestasi.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('peminatan_ekstrakurikuler')
                    ->searchable(),
                Tables\Columns\TextColumn::make('peminatan_pelajaran')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nilai_ipa')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nilai_ips')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nilai_matematika')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nilai_indonesia')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nilai_inggris')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nilai_arab')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bobot_nilai_akademik')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bobot_nilai_praktik')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nilai_akademik')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('nilai_praktik')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status_pendaftaran')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kelas.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tes_sesi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tes_ruang')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tes_akademik_mulai')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tes_akademik_selesai')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tes_praktik_mulai')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tes_praktik_selesai')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
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
