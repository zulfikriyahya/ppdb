<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Informasi;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\InformasiResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\InformasiResource\RelationManagers;

class InformasiResource extends Resource
{
    protected static ?string $model = Informasi::class;

    protected static ?string $navigationLabel = 'Informasi';

    protected static ?string $label = 'Informasi';

    protected static ?string $navigationGroup = 'Referensi';

    protected static ?int $navigationSort = 7;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul')
                    ->required(),
                Forms\Components\TextInput::make('isi')
                    ->required(),
                Forms\Components\TextInput::make('gambar'),
                Forms\Components\DateTimePicker::make('tanggal')
                    ->required(),
                Forms\Components\Select::make('tahun_pelajaran_id')
                    ->relationship('tahunPelajaran', 'id')
                    ->required(),
                Forms\Components\TextInput::make('status')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            // ->recordTitleAttribute('nama')
            ->columns([
                Tables\Columns\TextColumn::make('judul')
                    ->searchable(),
                Tables\Columns\TextColumn::make('isi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('gambar')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tahunPelajaran.id')
                    ->numeric()
                    ->sortable(),
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
            'index' => Pages\ListInformasis::route('/'),
            'create' => Pages\CreateInformasi::route('/create'),
            'view' => Pages\ViewInformasi::route('/{record}'),
            'edit' => Pages\EditInformasi::route('/{record}/edit'),
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
