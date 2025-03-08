<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Bendahara;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\BendaharaResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\BendaharaResource\RelationManagers;

class BendaharaResource extends Resource
{
    protected static ?string $model = Bendahara::class;

    protected static ?string $navigationLabel = 'Bendahara';

    protected static ?string $label = 'Bendahara';

    protected static ?string $navigationGroup = 'Eksekutif';

    protected static ?int $navigationSort = 4;

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
            // ->recordTitleAttribute('nama')
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
            'index' => Pages\ListBendaharas::route('/'),
            'create' => Pages\CreateBendahara::route('/create'),
            'view' => Pages\ViewBendahara::route('/{record}'),
            'edit' => Pages\EditBendahara::route('/{record}/edit'),
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
