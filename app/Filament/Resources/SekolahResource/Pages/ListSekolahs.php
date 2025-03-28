<?php

namespace App\Filament\Resources\SekolahResource\Pages;

use Filament\Tables\Table;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\ImageColumn;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Enums\ActionsPosition;
use App\Filament\Resources\SekolahResource;

class ListSekolahs extends ListRecords
{
    protected static string $resource = SekolahResource::class;

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->label('Nama Instansi'),
                TextColumn::make('npsn')
                    ->label('Nomor Pokok Sekolah Nasional'),
                TextColumn::make('nss')
                    ->label('Nomor Statistik Sekolah'),
                ImageColumn::make('logo')
                    ->label('Logo'),
                TextColumn::make('pimpinan.nama')
                    ->label('Kepala Instansi'),
                TextColumn::make('akreditasi')
                    ->label('Akreditasi')
                    ->badge(),
                TextColumn::make('alamat')
                    ->label('Alamat'),
                TextColumn::make('kelurahan.nama')
                    ->label('Kelurahan'),
                TextColumn::make('kecamatan.nama')
                    ->label('Kecamatan'),
                TextColumn::make('kabupaten.nama')
                    ->label('Kabupaten'),
                TextColumn::make('provinsi.nama')
                    ->label('Provinsi'),
                TextColumn::make('negara.nama')
                    ->label('Negara'),
                TextColumn::make('website')
                    ->label('Website'),
                TextColumn::make('telepon')
                    ->label('Telepon'),
                TextColumn::make('email')
                    ->label('Email'),
                TextColumn::make('nomor_surat')
                    ->label('Nomor Surat'),
            ])
            ->actions([
                ActionGroup::make([
                    ViewAction::make(),
                    EditAction::make(),
                ]),
            ], ActionsPosition::BeforeColumns)
            ->paginationPageOptions([10, 25, 50]);
    }
}
