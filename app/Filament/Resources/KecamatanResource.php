<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KecamatanResource\Pages;
use App\Models\Kecamatan;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KecamatanResource extends Resource
{
    protected static ?string $model = Kecamatan::class;

    protected static ?string $navigationLabel = 'Kecamatan';

    protected static ?string $label = 'Kecamatan';

    protected static ?string $navigationGroup = 'Wilayah';

    protected static ?int $navigationSort = 4;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Kecamatan')
                    ->collapsible()
                    ->schema([
                        Forms\Components\TextInput::make('nama')
                            ->label('Kecamatan')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        Forms\Components\Select::make('kabupaten_id')
                            ->label('Kabupaten')
                            ->relationship('kabupaten', 'nama')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                    ])
                    ->columns([
                        'sm' => '100%',
                        'md' => 2,
                        'lg' => 2,
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            // ->heading('Title')
            // ->description('Subtitle disini.')
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->label('Kecamatan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kabupaten.nama')
                    ->label('Kabupaten/Kota')
                    ->sortable(),
                Tables\Columns\TextColumn::make('kabupaten.provinsi.nama')
                    ->label('Provinsi')
                    ->sortable(),
                Tables\Columns\TextColumn::make('kabupaten.provinsi.negara.nama')
                    ->label('Negara')
                    ->sortable(),
                Tables\Columns\ImageColumn::make('kabupaten.provinsi.negara.bendera')
                    ->label('Bendera')
                    ->defaultImageUrl('/img/bendera.png')
                    ->sortable(),
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
                ]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ])
            ->striped()
            ->filtersLayout(FiltersLayout::AboveContentCollapsible)
            ->paginationPageOptions([10, 25, 50]);
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
            'index' => Pages\ListKecamatans::route('/'),
            'create' => Pages\CreateKecamatan::route('/create'),
            'view' => Pages\ViewKecamatan::route('/{record}'),
            'edit' => Pages\EditKecamatan::route('/{record}/edit'),
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
