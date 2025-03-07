<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\SekolahAsal;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SekolahAsalResource\Pages;
use App\Filament\Resources\SekolahAsalResource\RelationManagers;

class SekolahAsalResource extends Resource
{
    protected static ?string $model = SekolahAsal::class;

    protected static ?string $navigationLabel = 'Pengguna';

    protected static ?string $label = 'Pengguna';

    protected static ?string $navigationGroup = 'Referensi';

    protected static ?int $navigationSort = 4;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required(),
                Forms\Components\TextInput::make('npsn'),
                Forms\Components\TextInput::make('nss'),
                Forms\Components\TextInput::make('logo'),
                Forms\Components\TextInput::make('akreditasi'),
                Forms\Components\TextInput::make('alamat'),
                Forms\Components\Select::make('negara_id')
                    ->relationship('negara', 'id'),
                Forms\Components\Select::make('provinsi_id')
                    ->relationship('provinsi', 'id'),
                Forms\Components\Select::make('kabupaten_id')
                    ->relationship('kabupaten', 'id'),
                Forms\Components\Select::make('kecamatan_id')
                    ->relationship('kecamatan', 'id'),
                Forms\Components\Select::make('kelurahan_id')
                    ->relationship('kelurahan', 'id'),
                Forms\Components\TextInput::make('website'),
                Forms\Components\TextInput::make('telepon')
                    ->tel(),
                Forms\Components\TextInput::make('email')
                    ->email(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('npsn')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nss')
                    ->searchable(),
                Tables\Columns\TextColumn::make('logo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('akreditasi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('alamat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('negara.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('provinsi.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kabupaten.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kecamatan.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kelurahan.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('website')
                    ->searchable(),
                Tables\Columns\TextColumn::make('telepon')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
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
            'index' => Pages\ListSekolahAsals::route('/'),
            'create' => Pages\CreateSekolahAsal::route('/create'),
            'view' => Pages\ViewSekolahAsal::route('/{record}'),
            'edit' => Pages\EditSekolahAsal::route('/{record}/edit'),
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
