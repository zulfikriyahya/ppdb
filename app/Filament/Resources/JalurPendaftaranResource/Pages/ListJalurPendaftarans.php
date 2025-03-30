<?php

namespace App\Filament\Resources\JalurPendaftaranResource\Pages;

use Filament\Actions;
use Filament\Tables\Table;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
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
use Filament\Tables\Actions\ForceDeleteBulkAction;
use App\Filament\Resources\JalurPendaftaranResource;

class ListJalurPendaftarans extends ListRecords
{
    protected static string $resource = JalurPendaftaranResource::class;

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
                    ->label('Jalur Pendaftaran')
                    ->searchable(),

                TextColumn::make('kuantitas')
                    ->label('Kuota Pendaftar')
                    ->numeric()
                    ->sortable(),

                TextColumn::make('tahunPendaftaran.nama')
                    ->label('Tahun Pendaftaran')
                    ->sortable(),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'Aktif' => 'success',
                        'Nonaktif' => 'gray'
                    }),

                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->label('Diubah')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('deleted_at')
                    ->label('Dihapus')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
