<?php

namespace App\Filament\Resources\TahunPendaftaranResource\Pages;

use App\Filament\Resources\TahunPendaftaranResource;
use App\Models\TahunPendaftaran;
use Carbon\Carbon;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;

class ListTahunPendaftarans extends ListRecords
{
    protected static string $resource = TahunPendaftaranResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->outlined()
                ->hiddenLabel()
                ->icon('heroicon-o-plus'),
        ];
    }

    public function table(Table $table): Table
    {
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
                        fn (TahunPendaftaran $record) => $record->tanggal_ppdb_selesai ? 'Hingga: '.Carbon::parse($record->tanggal_ppdb_selesai)->translatedFormat('d F Y') : 'Hingga: (Sekarang)'
                    ),

                TextColumn::make('tanggal_penerbitan_kartu_tes_mulai')
                    ->label('Penerbitan Kartu Tes')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn (TahunPendaftaran $record) => $record->tanggal_penerbitan_kartu_tes_selesai ? 'Hingga: '.Carbon::parse($record->tanggal_penerbitan_kartu_tes_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                TextColumn::make('tanggal_tes_akademik_mulai')
                    ->label('Tes Akademik')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn (TahunPendaftaran $record) => $record->tanggal_tes_akademik_selesai ? 'Hingga: '.Carbon::parse($record->tanggal_tes_akademik_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                TextColumn::make('tanggal_tes_praktik_mulai')
                    ->label('Tes Praktik')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn (TahunPendaftaran $record) => $record->tanggal_tes_praktik_selesai ? 'Hingga: '.Carbon::parse($record->tanggal_tes_praktik_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                TextColumn::make('tanggal_registrasi_berkas_mulai')
                    ->label('Registrasi Berkas')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn (TahunPendaftaran $record) => $record->tanggal_registrasi_berkas_selesai ? 'Hingga: '.Carbon::parse($record->tanggal_registrasi_berkas_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                TextColumn::make('tanggal_pendaftaran_jalur_prestasi_mulai')
                    ->label('Pendaftaran Jalur Prestasi')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn (TahunPendaftaran $record) => $record->tanggal_pendaftaran_jalur_prestasi_selesai ? 'Hingga: '.Carbon::parse($record->tanggal_pendaftaran_jalur_prestasi_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                TextColumn::make('tanggal_pengumuman_jalur_prestasi_mulai')
                    ->label('Pengumuman Jalur Prestasi')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn (TahunPendaftaran $record) => $record->tanggal_pengumuman_jalur_prestasi_selesai ? 'Hingga: '.Carbon::parse($record->tanggal_pengumuman_jalur_prestasi_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                TextColumn::make('tanggal_pendaftaran_jalur_reguler_mulai')
                    ->label('Pendaftaran Jalur Reguler')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn (TahunPendaftaran $record) => $record->tanggal_pendaftaran_jalur_reguler_selesai ? 'Hingga: '.Carbon::parse($record->tanggal_pendaftaran_jalur_reguler_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                TextColumn::make('tanggal_pengumuman_jalur_reguler_mulai')
                    ->label('Pengumuman Jalur Reguler')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn (TahunPendaftaran $record) => $record->tanggal_pengumuman_jalur_reguler_selesai ? 'Hingga: '.Carbon::parse($record->tanggal_pengumuman_jalur_reguler_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                TextColumn::make('tanggal_pendaftaran_jalur_afirmasi_mulai')
                    ->label('Pendaftaran Jalur Afirmasi')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn (TahunPendaftaran $record) => $record->tanggal_pendaftaran_jalur_afirmasi_selesai ? 'Hingga: '.Carbon::parse($record->tanggal_pendaftaran_jalur_afirmasi_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                TextColumn::make('tanggal_pengumuman_jalur_afirmasi_mulai')
                    ->label('Pengumuman Jalur Afirmasi')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn (TahunPendaftaran $record) => $record->tanggal_pengumuman_jalur_afirmasi_selesai ? 'Hingga: '.Carbon::parse($record->tanggal_pengumuman_jalur_afirmasi_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                TextColumn::make('tanggal_pendaftaran_jalur_zonasi_mulai')
                    ->label('Pendaftaran Jalur Zonasi')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn (TahunPendaftaran $record) => $record->tanggal_pendaftaran_jalur_zonasi_selesai ? 'Hingga: '.Carbon::parse($record->tanggal_pendaftaran_jalur_zonasi_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                TextColumn::make('tanggal_pengumuman_jalur_zonasi_mulai')
                    ->label('Pengumuman Jalur Zonasi')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn (TahunPendaftaran $record) => $record->tanggal_pengumuman_jalur_zonasi_selesai ? 'Hingga: '.Carbon::parse($record->tanggal_pengumuman_jalur_zonasi_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                TextColumn::make('tanggal_pendaftaran_jalur_mutasi_mulai')
                    ->label('Pendaftaran Jalur Mutasi')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn (TahunPendaftaran $record) => $record->tanggal_pendaftaran_jalur_mutasi_selesai ? 'Hingga: '.Carbon::parse($record->tanggal_pendaftaran_jalur_mutasi_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

                TextColumn::make('tanggal_pengumuman_jalur_mutasi_mulai')
                    ->label('Pengumuman Jalur Mutasi')
                    ->dateTime('d F Y H:i:s')
                    ->description(
                        fn (TahunPendaftaran $record) => $record->tanggal_pengumuman_jalur_mutasi_selesai ? 'Hingga: '.Carbon::parse($record->tanggal_pengumuman_jalur_mutasi_selesai)->translatedFormat('d F Y H:i:s') : 'Hingga: (Sekarang)'
                    ),

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
}
