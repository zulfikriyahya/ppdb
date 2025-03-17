<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Get;
use Filament\Forms\Form;
use App\Models\Informasi;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\FiltersLayout;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\InformasiResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InformasiResource extends Resource
{
    protected static ?string $model = Informasi::class;

    protected static ?string $navigationLabel = 'Informasi';

    protected static ?string $label = 'Informasi';

    protected static ?string $navigationGroup = 'Referensi';

    protected static ?int $navigationSort = 8;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Section
                Section::make('')
                    ->schema([
                        Forms\Components\Select::make('tahun_pendaftaran_id')
                            ->label('Tahun Pendaftaran')
                            ->relationship('tahunPendaftaran', 'nama', fn($query) => $query->where('status', 'Aktif'))
                            ->required()
                            ->live()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->columnSpanFull(),
                    ]),
                // Section
                Section::make('')
                    ->visible(fn($get) => $get('tahun_pendaftaran_id') !== null)
                    ->schema([
                        Forms\Components\TextInput::make('judul')
                            ->label('Judul')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        Forms\Components\Select::make('status')
                            ->label('Status')
                            ->options(['Publish' => 'Publish', 'Draft' => 'Draft'])
                            ->required()
                            ->live()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        Forms\Components\RichEditor::make('isi')
                            ->label('Uraian')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        Forms\Components\FileUpload::make('gambar')
                            ->label('Lampiran')
                            ->maxSize('2048')
                            ->minSize('10')
                            ->downloadable(true)
                            ->openable()
                            ->deletable()
                            ->fetchFileInformation(false)
                            ->directory('assets/informasi')
                            ->acceptedFileTypes(['application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/pdf', 'image/png', 'image/jpeg', 'image/png', 'image/webp']),

                        Forms\Components\DateTimePicker::make('tanggal')
                            ->label('Tanggal')
                            ->default(now())
                            ->required()
                            ->hidden(fn(Get $get) => $get('status') !== 'Publish')
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->columnSpanFull(),
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
                Tables\Columns\TextColumn::make('judul')
                    ->label('Judul')
                    ->searchable(),
                Tables\Columns\TextColumn::make('isi')
                    ->label('Uraian')
                    ->wrap()
                    ->words(5)
                    ->tooltip(function (TextColumn $column): ?string {
                        $state = $column->getState();
                        if (strlen($state) <= $column->getCharacterLimit()) {
                            return null;
                        }

                        return $state;
                    })
                    ->searchable(),
                Tables\Columns\TextColumn::make('gambar')
                    ->label('Lampiran')
                    ->url('#')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal')
                    ->label('Tanggal')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tahunPendaftaran.nama')
                    ->label('Tahun Pendaftaran')
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'Publish' => 'success',
                        'Draft' => 'gray'
                    })
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
