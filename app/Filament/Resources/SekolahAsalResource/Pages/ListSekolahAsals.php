<?php

namespace App\Filament\Resources\SekolahAsalResource\Pages;

use Filament\Actions;
use Filament\Tables\Table;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\RestoreAction;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\ForceDeleteAction;
use Filament\Tables\Actions\RestoreBulkAction;
use App\Filament\Resources\SekolahAsalResource;
use Filament\Tables\Actions\ForceDeleteBulkAction;

class ListSekolahAsals extends ListRecords
{
    protected static string $resource = SekolahAsalResource::class;

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
                TextColumn::make('logo')
                    ->label('Logo')
                    ->searchable(),
                TextColumn::make('nama')
                    ->label('Nama Instansi')
                    ->searchable(),
                TextColumn::make('npsn')
                    ->label('Nomor Pokok Sekolah Nasional')
                    ->searchable(),
                TextColumn::make('nss')
                    ->label('Nomor Statistik Sekolah')
                    ->searchable(),
                TextColumn::make('jenjang')
                    ->label('Jenjang')
                    ->sortable(),
                TextColumn::make('status')
                    ->label('Status')
                    ->sortable(),
                TextColumn::make('akreditasi')
                    ->label('Akreditasi')
                    ->badge()
                    ->searchable(),
                TextColumn::make('alamat')
                    ->label('Alamat')
                    ->searchable(),
                TextColumn::make('kelurahan.nama')
                    ->label('Kelurahan')
                    ->sortable(),
                TextColumn::make('kecamatan.nama')
                    ->label('Kecamatan')
                    ->sortable(),
                TextColumn::make('kabupaten.nama')
                    ->label('Kabupaten')
                    ->sortable(),
                TextColumn::make('provinsi.nama')
                    ->label('Provinsi')
                    ->sortable(),
                TextColumn::make('negara.nama')
                    ->label('Negara')
                    ->sortable(),
                TextColumn::make('website')
                    ->label('Website')
                    ->searchable(),
                TextColumn::make('telepon')
                    ->label('Telepon')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),

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
