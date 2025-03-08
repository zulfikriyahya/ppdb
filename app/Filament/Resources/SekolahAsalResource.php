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

    protected static ?string $navigationLabel = 'Sekolah Asal';

    protected static ?string $label = 'Sekolah Asal';

    protected static ?string $navigationGroup = 'Referensi';

    protected static ?int $navigationSort = 4;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->label('Nama Instansi')
                    ->required(),
                Forms\Components\TextInput::make('npsn')
                    ->label('Nomor Pokok Sekolah Nasional'),
                Forms\Components\TextInput::make('nss')
                    ->label('Nomor Statistik Sekolah'),
                Forms\Components\TextInput::make('logo')
                    ->label('Logo'),
                Forms\Components\Select::make('akreditasi')
                    ->label('Akreditasi')
                    ->options(['A' => 'A', 'B' => 'B', 'C' => 'C', 'D' => 'D']),
                Forms\Components\TextInput::make('alamat')
                    ->label('Alamat')
                    ->required(),
                Forms\Components\Select::make('negara_id')
                    ->label('Negara')
                    ->relationship('negara', 'nama')
                    ->required(),
                Forms\Components\Select::make('provinsi_id')
                    ->label('Provinsi')
                    ->relationship('provinsi', 'nama')
                    ->required(),
                Forms\Components\Select::make('kabupaten_id')
                    ->label('Kabupaten')
                    ->relationship('kabupaten', 'nama')
                    ->required(),
                Forms\Components\Select::make('kecamatan_id')
                    ->label('Kecamatan')
                    ->relationship('kecamatan', 'nama')
                    ->required(),
                Forms\Components\Select::make('kelurahan_id')
                    ->label('Kelurahan')
                    ->relationship('kelurahan', 'nama')
                    ->required(),
                Forms\Components\TextInput::make('website')
                    ->label('Website'),
                Forms\Components\TextInput::make('telepon')
                    ->label('Telepon')
                    ->tel(),
                Forms\Components\TextInput::make('email')
                    ->label('Email')
                    ->email(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            // ->recordTitleAttribute('nama')
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama Instansi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('npsn')
                    ->label('Nomor Pokok Sekolah Nasional')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nss')
                    ->label('Nomor Statistik Sekolah')
                    ->searchable(),
                Tables\Columns\TextColumn::make('logo')
                    ->label('Logo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('akreditasi')
                    ->label('Akreditasi')
                    ->badge()
                    ->searchable(),
                Tables\Columns\TextColumn::make('alamat')
                    ->label('Alamat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('negara.nama')
                    ->label('Negara')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('provinsi.nama')
                    ->label('Provinsi')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kabupaten.nama')
                    ->label('Kabupaten')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kecamatan.nama')
                    ->label('Kecamatan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kelurahan.nama')
                    ->label('Kelurahan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('website')
                    ->label('Website')
                    ->searchable(),
                Tables\Columns\TextColumn::make('telepon')
                    ->label('Telepon')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
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
