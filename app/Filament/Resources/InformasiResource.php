<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InformasiResource\Pages;
use App\Models\Informasi;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ForceDeleteAction;
use Filament\Tables\Actions\ForceDeleteBulkAction;
use Filament\Tables\Actions\RestoreAction;
use Filament\Tables\Actions\RestoreBulkAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
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
                Section::make()
                    ->schema([
                        Select::make('tahun_pendaftaran_id')
                            ->label('Tahun Pendaftaran')
                            ->relationship('tahunPendaftaran', 'nama', fn ($query) => $query->where('status', 'Aktif'))
                            ->required()
                            ->native(false)
                            ->live()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->columnSpanFull(),
                    ]),
                Section::make()
                    ->visible(fn ($get) => $get('tahun_pendaftaran_id') !== null)
                    ->schema([
                        TextInput::make('judul')
                            ->label('Judul')
                            ->required()
                            ->minLength(5)
                            ->maxLength(30)
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                                'min' => 'Masukkan maksimal 30 karakter.',
                                'max' => 'Masukkan maksimal 30 karakter.',
                            ]),
                        Select::make('status')
                            ->label('Status')
                            ->options(['Publish' => 'Publish', 'Draft' => 'Draft'])
                            ->native(false)
                            ->required()
                            ->live()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        RichEditor::make('isi')
                            ->label('Uraian')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        FileUpload::make('gambar')
                            ->label('Lampiran')
                            ->maxSize('2048')
                            ->minSize('10')
                            ->downloadable(true)
                            ->openable()
                            ->deletable()
                            ->fetchFileInformation(false)
                            ->directory('assets/informasi')
                            ->acceptedFileTypes(['application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/pdf', 'image/png', 'image/jpeg', 'image/png', 'image/webp']),

                        DateTimePicker::make('tanggal')
                            ->label('Tanggal')
                            ->default(now())
                            ->required()
                            ->hidden(fn (Get $get) => $get('status') !== 'Publish')
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
            ->columns([
                TextColumn::make('judul')
                    ->label('Judul')
                    ->searchable(),
                TextColumn::make('isi')
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
                TextColumn::make('gambar')
                    ->label('Lampiran')
                    ->url('#')
                    ->searchable(),
                TextColumn::make('tanggal')
                    ->label('Tanggal')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('tahunPendaftaran.nama')
                    ->label('Tahun Pendaftaran')
                    ->sortable(),
                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Publish' => 'success',
                        'Draft' => 'gray'
                    })
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
