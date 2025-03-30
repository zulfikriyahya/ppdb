<?php

namespace App\Filament\Resources\RoleResource\Pages;

use Filament\Actions;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Support\Colors\Color;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use App\Filament\Resources\RoleResource;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Resources\Pages\ListRecords;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Actions\DeleteBulkAction;
use BezhanSalleh\FilamentShield\Support\Utils;
use BezhanSalleh\FilamentShield\Traits\HasShieldFormComponents;

class ListRoles extends ListRecords
{
    use HasShieldFormComponents;

    protected static string $resource = RoleResource::class;

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
                TextColumn::make('name')
                    ->label('Peran')
                    ->formatStateUsing(fn($state): string => Str::headline($state))
                    ->searchable(),
                // TextColumn::make('guard_name')
                //     ->badge()
                //     ->color(Color::Cyan)
                //     ->label('Auth Guard'),
                TextColumn::make('team.name')
                    ->default('Global')
                    ->badge()
                    ->color(fn(mixed $state): string => str($state)->contains('Global') ? 'gray' : 'primary')
                    ->label(__('filament-shield::filament-shield.column.team'))
                    ->searchable()
                    ->visible(fn(): bool => static::shield()->isCentralApp() && Utils::isTenancyEnabled()),
                TextColumn::make('permissions_count')
                    ->badge()
                    ->label('Perizinan')
                    ->counts('permissions')
                    ->colors(['success']),
                TextColumn::make('updated_at')
                    ->label('Diubah')
                    ->sinceTooltip()
                    ->dateTime('d F Y H:i:s'),
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
