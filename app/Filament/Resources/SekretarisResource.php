<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Sekretaris;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SekretarisResource\Pages;
use App\Filament\Resources\SekretarisResource\RelationManagers;

class SekretarisResource extends Resource
{
    protected static ?string $model = Sekretaris::class;

    protected static ?string $navigationLabel = 'Sekretaris';

    protected static ?string $label = 'Sekretaris';

    protected static ?string $navigationGroup = 'Eksekutif';

    protected static ?int $navigationSort = 3;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required(),
                Forms\Components\TextInput::make('nip'),
                Forms\Components\DatePicker::make('periode_awal'),
                Forms\Components\DatePicker::make('periode_akhir'),
                Forms\Components\TextInput::make('berkas_foto'),
                Forms\Components\TextInput::make('berkas_tte'),
                Forms\Components\TextInput::make('status')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nip')
                    ->searchable(),
                Tables\Columns\TextColumn::make('periode_awal')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('periode_akhir')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('berkas_foto')
                    ->searchable(),
                Tables\Columns\TextColumn::make('berkas_tte')
                    ->searchable(),
                Tables\Columns\TextColumn::make('status')
                    ->searchable(),
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
            'index' => Pages\ListSekretaris::route('/'),
            'create' => Pages\CreateSekretaris::route('/create'),
            'view' => Pages\ViewSekretaris::route('/{record}'),
            'edit' => Pages\EditSekretaris::route('/{record}/edit'),
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
