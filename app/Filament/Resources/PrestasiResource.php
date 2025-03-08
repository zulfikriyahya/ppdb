<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Prestasi;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PrestasiResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PrestasiResource\RelationManagers;

class PrestasiResource extends Resource
{
    protected static ?string $model = Prestasi::class;

    protected static ?string $navigationLabel = 'Prestasi';

    protected static ?string $label = 'Prestasi';

    protected static ?string $navigationGroup = 'Referensi';

    protected static ?int $navigationSort = 5;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->label('Nama Prestasi')
                    ->required(),
                Forms\Components\Select::make('tingkat')
                    ->label('Tingkat')
                    ->options(['Nasional' => 'Nasional', 'Provinsi' => 'Provinsi', 'Kabupaten/Kota' => 'Kabupaten/Kota'])
                    ->required(),
                Forms\Components\Select::make('kategori')
                    ->label('Kategori')
                    ->options(['Regu' => 'Regu', 'Tunggal' => 'Tunggal'])
                    ->required(),
                Forms\Components\Select::make('peringkat')
                    ->label('Peringkat')
                    ->options(['1' => '1', '2' => '2', '3' => '3'])
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            // ->recordTitleAttribute('nama')
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama Prestasi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tingkat')
                    ->label('Tingkat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kategori')
                    ->label('Kategori')
                    ->searchable(),
                Tables\Columns\TextColumn::make('peringkat')
                    ->label('Peringkat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Diubah')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->label('Dihapus')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                    Tables\Actions\ForceDeleteAction::make(),
                    Tables\Actions\RestoreAction::make(),
                ])
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
            'index' => Pages\ListPrestasis::route('/'),
            'create' => Pages\CreatePrestasi::route('/create'),
            'view' => Pages\ViewPrestasi::route('/{record}'),
            'edit' => Pages\EditPrestasi::route('/{record}/edit'),
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
