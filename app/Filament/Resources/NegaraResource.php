<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NegaraResource\Pages;
use App\Models\Negara;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NegaraResource extends Resource
{
    protected static ?string $model = Negara::class;

    protected static ?string $navigationLabel = 'Negara';

    protected static ?string $label = 'Negara';

    protected static ?string $navigationGroup = 'Wilayah';

    protected static ?int $navigationSort = 1;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Negara')
                    ->collapsible()
                    ->schema([
                        Forms\Components\TextInput::make('nama')
                            ->label('Negara')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        Forms\Components\FileUpload::make('bendera')
                            ->label('Bendera')
                            ->image()
                            ->imageEditor()
                            ->imageEditorAspectRatios([
                                null,
                                '4:3' => '4:3',
                            ])
                            ->fetchFileInformation(false)
                            ->directory('assets/bendera')
                            ->downloadable()
                            ->maxSize(500),
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
            // ->recordTitleAttribute('nama')
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->label('Negara')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('bendera')
                    ->label('Bendera')
                    ->defaultImageUrl('/img/bendera.png'),
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
            'index' => Pages\ListNegaras::route('/'),
            'create' => Pages\CreateNegara::route('/create'),
            'view' => Pages\ViewNegara::route('/{record}'),
            'edit' => Pages\EditNegara::route('/{record}/edit'),
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
