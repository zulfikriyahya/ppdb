<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Prestasi;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PrestasiResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;

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
                // Prestasi
                Section::make('Prestasi')
                    ->collapsible()
                    ->schema([
                        Section::make('')
                            ->schema([
                                Forms\Components\TextInput::make('nama')
                                    ->label('Nama Prestasi')
                                    ->required()
                                    ->validationMessages([
                                        'required' => 'Form ini wajib diisi.',
                                    ]),
                                Forms\Components\Select::make('jenis')
                                    ->label('Jenis Prestasi')
                                    ->options([
                                        'Hafalan Al-Quran' => 'Hafalan Al-Quran (Minimal 3 Juz)',
                                        'Olimpiade/Kejuaraan' => 'Olimpiade/Kejuaraan',
                                    ])
                                    ->required()
                                    ->validationMessages([
                                        'required' => 'Form ini wajib diisi.',
                                    ])
                                    ->live(),
                            ])
                            ->columns([
                                'sm' => '100%',
                                'md' => 2,
                                'lg' => 2,
                            ]),

                        Section::make('')
                            ->schema([
                                Forms\Components\Select::make('tingkat')
                                    ->label('Tingkat')
                                    ->options([
                                        'Nasional' => 'Nasional',
                                        'Provinsi' => 'Provinsi',
                                        'Kabupaten/Kota' => 'Kabupaten/Kota',
                                    ])
                                    ->required(fn($get) => $get('jenis') === 'Olimpiade/Kejuaraan'),
                                Forms\Components\Select::make('kategori')
                                    ->label('Kategori')
                                    ->options([
                                        'Regu/Kelompok' => 'Regu/Kelompok',
                                        'Individu' => 'Individu',
                                    ])
                                    ->required(fn($get) => $get('jenis') === 'Olimpiade/Kejuaraan'),
                                Forms\Components\Select::make('peringkat')
                                    ->label('Peringkat')
                                    ->options([
                                        '1' => '1',
                                        '2' => '2',
                                        '3' => '3',
                                    ])
                                    ->required(fn($get) => $get('jenis') === 'Olimpiade/Kejuaraan'),
                            ])
                            ->columns([
                                'sm' => '100%',
                                'md' => 3,
                                'lg' => 3,
                            ])
                            ->visible(fn($get) => $get('jenis') === 'Olimpiade/Kejuaraan'),
                    ])
                    ->columns([
                        'sm' => '100%',
                        'md' => 3,
                        'lg' => 3,
                    ]),
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
                Tables\Columns\TextColumn::make('jenis')
                    ->label('Jenis Prestasi')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'Hafalan Al-Quran' => 'success',
                        'Olimpiade/Kejuaraan' => 'primary'
                    }),
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
                ]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ])
            ->paginated([5, 10, 25, 50, 100]);
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
