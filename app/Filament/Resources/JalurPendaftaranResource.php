<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JalurPendaftaranResource\Pages;
use App\Models\JalurPendaftaran;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;

class JalurPendaftaranResource extends Resource
{
    protected static ?string $model = JalurPendaftaran::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Jalur Pendaftaran';

    protected static ?string $label = 'Jalur Pendaftaran';

    protected static ?string $navigationGroup = 'Referensi';

    protected static ?int $navigationSort = 4;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-arrows-right-left';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Jalur Pendaftaran')
                    ->collapsible()
                    ->description('Data Jalur Pendaftaran.')
                    ->schema([
                        Select::make('nama')
                            ->label('Jalur Pendaftaran')
                            ->options([
                                'Prestasi' => 'Prestasi',
                                'Reguler' => 'Reguler',
                                'Afirmasi' => 'Afirmasi',
                                'Zonasi' => 'Zonasi',
                                'Mutasi' => 'Mutasi',
                            ])
                            ->required()
                            ->validationMessages(['required' => 'Form ini wajib diisi.']),

                        TextInput::make('kuantitas')
                            ->label('Kuota Pendaftar')
                            ->numeric()
                            ->required()
                            ->validationMessages(['required' => 'Form ini wajib diisi.']),

                        Select::make('status')
                            ->label('Status')
                            ->options(['Aktif' => 'Aktif', 'Nonaktif' => 'Nonaktif'])
                            ->default('Aktif')
                            ->native(false)
                            ->required()
                            ->validationMessages(['required' => 'Form ini wajib diisi.']),

                        Select::make('tahun_pendaftaran_id')
                            ->label('Tahun Pendaftaran')
                            ->relationship('tahunPendaftaran', 'nama', fn ($query) => $query->where('status', 'Aktif'))
                            ->required()
                            ->validationMessages(['required' => 'Form ini wajib diisi.']),
                    ])
                    ->columns(['sm' => '100%', 'md' => 4, 'lg' => 4, 'xl' => 4, '2xl' => 4]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->label('Jalur Pendaftaran')
                    ->searchable(),

                TextColumn::make('kuantitas')
                    ->label('Kuota Pendaftar')
                    ->numeric()
                    ->sortable(),

                TextColumn::make('tahunPendaftaran.nama')
                    ->label('Tahun Pendaftaran')
                    ->sortable(),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Aktif' => 'success',
                        'Nonaktif' => 'gray',
                    }),

                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip(),

                TextColumn::make('updated_at')
                    ->label('Diubah')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip(),
            ])
            ->filters([])
            ->actions([
                ActionGroup::make([
                    EditAction::make(),
                    DeleteAction::make(),
                ]),
            ], ActionsPosition::BeforeColumns)
            ->bulkActions([
                DeleteBulkAction::make()
                    ->outlined()
                    ->hiddenLabel()
                    ->icon('heroicon-o-trash'),
            ])
            ->striped()
            ->filtersLayout(FiltersLayout::AboveContentCollapsible)
            ->paginationPageOptions([10, 25, 50]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListJalurPendaftarans::route('/'),
            'create' => Pages\CreateJalurPendaftaran::route('/create'),
            'edit' => Pages\EditJalurPendaftaran::route('/{record}/edit'),
        ];
    }
}
