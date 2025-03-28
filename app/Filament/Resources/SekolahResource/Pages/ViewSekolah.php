<?php

namespace App\Filament\Resources\SekolahResource\Pages;

use Filament\Actions;
use Filament\Infolists\Infolist;
use Filament\Resources\Pages\ViewRecord;
use Filament\Infolists\Components\Section;
use App\Filament\Resources\SekolahResource;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;

class ViewSekolah extends ViewRecord
{
    protected static string $resource = SekolahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Section::make('Informasi Instansi')
                    ->schema([
                        TextEntry::make('nama')
                            ->label('Nama Instansi'),
                        TextEntry::make('npsn')
                            ->label('Nomor Pokok Sekolah Nasional'),
                        TextEntry::make('nss')
                            ->label('Nomor Statistik Sekolah'),
                        ImageEntry::make('logo')
                            ->label('Logo'),
                        TextEntry::make('pimpinan.nama')
                            ->label('Kepala Instansi'),
                        TextEntry::make('akreditasi')
                            ->label('Akreditasi'),
                        TextEntry::make('alamat')
                            ->label('Alamat'),
                        TextEntry::make('kelurahan.nama')
                            ->label('Kelurahan'),
                        TextEntry::make('kecamatan.nama')
                            ->label('Kecamatan'),
                        TextEntry::make('kabupaten.nama')
                            ->label('Kabupaten'),
                        TextEntry::make('provinsi.nama')
                            ->label('Provinsi'),
                        TextEntry::make('negara.nama')
                            ->label('Negara'),
                        TextEntry::make('website')
                            ->label('Website'),
                        TextEntry::make('telepon')
                            ->label('Telepon'),
                        TextEntry::make('email')
                            ->label('Email'),
                        TextEntry::make('nomor_surat')
                            ->label('Nomor Surat'),
                    ])
            ]);
    }
}
