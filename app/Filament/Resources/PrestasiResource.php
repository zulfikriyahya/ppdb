<?php

namespace App\Filament\Resources;

use App\Models\Prestasi;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\RestoreAction;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\ForceDeleteAction;
use Filament\Tables\Actions\RestoreBulkAction;
use App\Filament\Resources\PrestasiResource\Pages;
use Filament\Tables\Actions\ForceDeleteBulkAction;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PrestasiResource extends Resource
{
    protected static ?string $model = Prestasi::class;

    protected static ?string $recordTitleAttribute = 'nama';

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
                Section::make('Prestasi')
                    ->collapsible()
                    ->schema([
                        Section::make('')
                            ->schema([
                                TextInput::make('nama')
                                    ->label('Nama Prestasi')
                                    ->required()
                                    ->validationMessages([
                                        'required' => 'Form ini wajib diisi.',
                                    ]),
                                Select::make('jenis')
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
                                Select::make('tingkat')
                                    ->label('Tingkat')
                                    ->options([
                                        'Nasional' => 'Nasional',
                                        'Provinsi' => 'Provinsi',
                                        'Kabupaten/Kota' => 'Kabupaten/Kota',
                                    ])
                                    ->required(fn($get) => $get('jenis') === 'Olimpiade/Kejuaraan'),
                                Select::make('kategori')
                                    ->label('Kategori')
                                    ->options([
                                        'Regu/Kelompok' => 'Regu/Kelompok',
                                        'Individu' => 'Individu',
                                    ])
                                    ->required(fn($get) => $get('jenis') === 'Olimpiade/Kejuaraan'),
                                Select::make('peringkat')
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
            ->columns([
                TextColumn::make('nama')
                    ->label('Nama Prestasi')
                    ->searchable(),
                TextColumn::make('jenis')
                    ->label('Jenis Prestasi')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'Hafalan Al-Quran' => 'success',
                        'Olimpiade/Kejuaraan' => 'primary'
                    }),
                TextColumn::make('tingkat')
                    ->label('Tingkat')
                    ->searchable(),
                TextColumn::make('kategori')
                    ->label('Kategori')
                    ->searchable(),
                TextColumn::make('peringkat')
                    ->label('Peringkat')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->label('Diubah')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('deleted_at')
                    ->label('Dihapus')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->actions([
                ActionGroup::make([
                    ViewAction::make(),
                    EditAction::make(),
                    DeleteAction::make(),
                    ForceDeleteAction::make(),
                    RestoreAction::make(),
                ]),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ])
            ->striped()
            ->filtersLayout(FiltersLayout::AboveContentCollapsible)
            ->paginationPageOptions([10, 25, 50]);
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
}
