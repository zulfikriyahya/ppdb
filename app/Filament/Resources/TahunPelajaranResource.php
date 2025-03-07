<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\TahunPelajaran;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\TahunPelajaranResource\Pages;
use App\Filament\Resources\TahunPelajaranResource\RelationManagers;

class TahunPelajaranResource extends Resource
{
    protected static ?string $model = TahunPelajaran::class;

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
                Forms\Components\DateTimePicker::make('tanggal_pendaftaran_mulai')
                    ->required(),
                Forms\Components\DateTimePicker::make('tanggal_pengumuman_jalur_prestasi_mulai')
                    ->required(),
                Forms\Components\DateTimePicker::make('tanggal_pengumuman_jalur_prestasi_selesai')
                    ->required(),
                Forms\Components\DateTimePicker::make('tanggal_tes_akademik_mulai')
                    ->required(),
                Forms\Components\DateTimePicker::make('tanggal_tes_akademik_selesai')
                    ->required(),
                Forms\Components\DateTimePicker::make('tanggal_tes_praktik_mulai')
                    ->required(),
                Forms\Components\DateTimePicker::make('tanggal_tes_praktik_selesai')
                    ->required(),
                Forms\Components\DateTimePicker::make('tanggal_pengumuman_jalur_reguler_mulai')
                    ->required(),
                Forms\Components\DateTimePicker::make('tanggal_pengumuman_jalur_reguler_selesai')
                    ->required(),
                Forms\Components\DateTimePicker::make('tanggal_registrasi_berkas_mulai')
                    ->required(),
                Forms\Components\DateTimePicker::make('tanggal_registrasi_berkas_selesai')
                    ->required(),
                Forms\Components\DateTimePicker::make('tanggal_pendaftaran_selesai')
                    ->required(),
                Forms\Components\TextInput::make('kuantitas')
                    ->required()
                    ->numeric(),
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
                Tables\Columns\TextColumn::make('tanggal_pendaftaran_mulai')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal_pengumuman_jalur_prestasi_mulai')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal_pengumuman_jalur_prestasi_selesai')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal_tes_akademik_mulai')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal_tes_akademik_selesai')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal_tes_praktik_mulai')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal_tes_praktik_selesai')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal_pengumuman_jalur_reguler_mulai')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal_pengumuman_jalur_reguler_selesai')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal_registrasi_berkas_mulai')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal_registrasi_berkas_selesai')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal_pendaftaran_selesai')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kuantitas')
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
            'index' => Pages\ListTahunPelajarans::route('/'),
            'create' => Pages\CreateTahunPelajaran::route('/create'),
            'view' => Pages\ViewTahunPelajaran::route('/{record}'),
            'edit' => Pages\EditTahunPelajaran::route('/{record}/edit'),
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
