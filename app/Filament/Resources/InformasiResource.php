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
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class InformasiResource extends Resource
{
    protected static ?string $model = Informasi::class;

    protected static ?string $recordTitleAttribute = 'nama';

    protected static ?string $navigationLabel = 'Informasi';

    protected static ?string $label = 'Informasi';

    protected static ?string $slug = 'informasi';

    protected static ?int $navigationSort = 8;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-information-circle';

    public static function getNavigationBadge(): ?string
    {
        return Informasi::count();
    }

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
                            ->validationMessages(['required' => 'Form ini wajib diisi.'])
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
                            ->validationMessages(['required' => 'Form ini wajib diisi.']),

                        DateTimePicker::make('tanggal')
                            ->label('Tanggal')
                            ->default(now())
                            ->dehydrated()
                            ->required()
                            ->hidden(fn (Get $get) => $get('status') !== 'Publish')
                            ->validationMessages(['required' => 'Form ini wajib diisi.']),

                        FileUpload::make('gambar')
                            ->label('Lampiran')
                            ->maxSize('2048')
                            ->minSize('10')
                            ->downloadable()
                            ->openable()
                            ->deletable()
                            ->fetchFileInformation(false)
                            ->directory('assets/informasi')
                            ->acceptedFileTypes([
                                'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                                'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                                'application/pdf',
                                'image/png',
                                'image/jpeg',
                                'image/webp',
                            ]),

                        RichEditor::make('isi')
                            ->label('Uraian')
                            ->required()
                            ->validationMessages(['required' => 'Form ini wajib diisi.'])
                            ->fileAttachmentsDirectory('assets/lampiran-informasi')
                            ->fileAttachmentsVisibility('private')
                            ->disableGrammarly()
                            ->columnSpanFull(),
                    ])
                    ->columns(['sm' => '100%', 'md' => 2, 'lg' => 2]),
            ]);
    }

    public static function table(Table $table): Table
    {
        $isSuperAdmin = Auth::user()->username === 'super_admin';

        if ($isSuperAdmin) {
            return $table
                ->columns([
                    TextColumn::make('tahunPendaftaran.nama')
                        ->label('Tahun Pendaftaran')
                        ->badge()
                        ->color('gray')
                        ->icon('heroicon-o-calendar'),

                    TextColumn::make('judul')
                        ->label('Informasi')
                        ->description(fn (Informasi $record): string => Str::limit($record->isi, 50))
                        ->icon('heroicon-o-information-circle')
                        ->iconColor('info'),

                    ImageColumn::make('gambar')
                        ->label('Lampiran'),

                    TextColumn::make('tanggal')
                        ->label('Tanggal')
                        ->dateTime('d F Y H:i:s')
                        ->sinceTooltip()
                        ->sortable(),

                    TextColumn::make('status')
                        ->label('Status')
                        ->badge()
                        ->color(fn (string $state): string => match ($state) {
                            'Publish' => 'success',
                            'Draft' => 'gray',
                        }),
                ])
                ->filters([
                    SelectFilter::make('tahun_pendaftaran')
                        ->label('Tahun Pendaftaran')
                        ->relationship('tahunPendaftaran', 'nama', fn ($query) => $query->where('status', 'Aktif')),

                    SelectFilter::make('status')
                        ->label('Status')
                        ->options(['Publish' => 'Publish', 'Draft' => 'Draft']),
                ])
                ->actions([
                    ActionGroup::make([
                        ViewAction::make(),
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

        return $table
            ->query(Informasi::where('status', 'Publish')->latest('updated_at'))
            ->columns([
                TextColumn::make('judul')
                    ->label('Informasi')
                    ->description(fn (Informasi $record): string => Str::limit($record->isi, 50))
                    ->icon('heroicon-o-information-circle')
                    ->iconColor('info'),

                ImageColumn::make('gambar')
                    ->label('Lampiran'),

                TextColumn::make('tanggal')
                    ->label('Tanggal')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip()
                    ->sortable(),
            ])
            ->striped()
            ->filtersLayout(FiltersLayout::AboveContentCollapsible)
            ->paginationPageOptions([10]);
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
}
