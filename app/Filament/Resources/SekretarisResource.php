<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SekretarisResource\Pages;
use App\Models\Sekretaris;
use Filament\Resources\Resource;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;

class SekretarisResource extends Resource
{
    protected static ?string $model = Sekretaris::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Sekretaris';

    protected static ?string $label = 'Sekretaris';

    protected static ?string $navigationGroup = 'Administrasi';

    protected static ?int $navigationSort = 3;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('berkas_foto')
                    ->label('Foto')
                    ->circular()
                    ->defaultImageUrl('img/avatar.png'),

                TextColumn::make('nama')
                    ->label('Nama Lengkap')
                    ->searchable(Sekretaris::count() > 10),

                TextColumn::make('nip')
                    ->label('NIP'),

                TextColumn::make('tahunPendaftaran.nama')
                    ->label('Tahun Pendaftaran')
                    ->sortable(Sekretaris::count() > 10),

                ImageColumn::make('berkas_tte')
                    ->label('TTE')
                    ->defaultImageUrl('img/tte.png'),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Aktif' => 'success',
                        'Nonaktif' => 'gray',
                    }),

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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSekretaris::route('/'),
            'create' => Pages\CreateSekretaris::route('/create'),
            'edit' => Pages\EditSekretaris::route('/{record}/edit'),
        ];
    }
}
