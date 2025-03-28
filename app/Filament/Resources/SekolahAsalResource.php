<?php

namespace App\Filament\Resources;

use Filament\Forms\Get;
use Filament\Forms\Set;
use App\Models\Provinsi;
use Filament\Forms\Form;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Filament\Tables\Table;
use App\Models\SekolahAsal;
use Filament\Resources\Resource;
use Illuminate\Support\Collection;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\RestoreAction;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\ForceDeleteAction;
use Filament\Tables\Actions\RestoreBulkAction;
use Filament\Tables\Actions\ForceDeleteBulkAction;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SekolahAsalResource\Pages;

class SekolahAsalResource extends Resource
{
    protected static ?string $model = SekolahAsal::class;

    protected static ?string $navigationLabel = 'Instansi Lain';

    protected static ?string $label = 'Instansi Lain';

    protected static ?string $navigationGroup = 'Referensi';

    protected static ?int $navigationSort = 2;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Instansi')
                    ->collapsible()
                    ->schema([
                        TextInput::make('nama')
                            ->label('Nama Instansi')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        TextInput::make('npsn')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Nomor Pokok Sekolah Nasional'),
                        TextInput::make('nss')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Nomor Statistik Sekolah'),
                        Select::make('jenjang')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Jenjang')
                            ->options(['PAUD' => 'PAUD', 'TK' => 'TK', 'SD' => 'SD', 'MI' => 'MI', 'SMP' => 'SMP', 'MTS' => 'MTS', 'SMA' => 'SMA', 'SMK' => 'SMK', 'MA' => 'MA']),
                        Select::make('status')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Status')
                            ->options(['NEGERI' => 'NEGERI', 'SWASTA' => 'SWASTA']),
                        Select::make('akreditasi')
                            ->label('Akreditasi')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->options(['A' => 'A', 'B' => 'B', 'C' => 'C', 'D' => 'D']),
                        FileUpload::make('logo')
                            ->label('Logo')
                            ->image()
                            ->imageEditor()
                            ->imageEditorAspectRatios([
                                null,
                                '1:1' => '1:1',
                            ])
                            ->fetchFileInformation(false)
                            ->directory('assets/instansi-lain')
                            ->downloadable()
                            ->openable()
                            ->maxSize(500)
                            ->minSize(10)
                            ->visibility('private')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->columnSpanFull(),
                    ])
                    ->columns([
                        'sm' => '100%',
                        'md' => 3,
                        'lg' => 3,
                    ]),

                Section::make('Alamat')
                    ->collapsible()
                    ->schema([
                        Select::make('negara_id')
                            ->label('Negara')
                            ->relationship('negara', 'nama')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->native(false)
                            ->preload()
                            ->live()
                            ->afterStateUpdated(function (Set $set) {
                                $set('provinsi_id', null);
                                $set('kabupaten_id', null);
                                $set('kecamatan_id', null);
                                $set('kelurahan_id', null);
                            }),
                        Select::make('provinsi_id')
                            ->label('Provinsi')
                            ->options(fn(Get $get): Collection => Provinsi::query()
                                ->where('negara_id', $get('negara_id'))
                                ->pluck('nama', 'id'))
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->native(false)
                            ->preload()
                            ->live()
                            ->afterStateUpdated(function (Set $set) {
                                $set('kabupaten_id', null);
                                $set('kecamatan_id', null);
                                $set('kelurahan_id', null);
                            }),
                        Select::make('kabupaten_id')
                            ->label('Kabupaten')
                            ->options(fn(Get $get): Collection => Kabupaten::query()
                                ->where('provinsi_id', $get('provinsi_id'))
                                ->pluck('nama', 'id'))
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->native(false)
                            ->preload()
                            ->live()
                            ->afterStateUpdated(function (Set $set) {
                                $set('kecamatan_id', null);
                                $set('kelurahan_id', null);
                            }),
                        Select::make('kecamatan_id')
                            ->label('Kecamatan')
                            ->options(fn(Get $get): Collection => Kecamatan::query()
                                ->where('kabupaten_id', $get('kabupaten_id'))
                                ->pluck('nama', 'id'))
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->native(false)
                            ->preload()
                            ->live()
                            ->afterStateUpdated(function (Set $set) {
                                $set('kelurahan_id', null);
                            }),
                        Select::make('kelurahan_id')
                            ->label('Kelurahan')
                            ->options(fn(Get $get): Collection => Kelurahan::query()
                                ->where('kecamatan_id', $get('kecamatan_id'))
                                ->pluck('nama', 'id'))
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->native(false),
                        TextInput::make('alamat')
                            ->label('Jalan/Kampung/Dusun')
                            ->required()
                            ->placeholder('KP KEBON CAU RT 001 RW 005')
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                    ])
                    ->columns([
                        'sm' => '100%',
                        'md' => 3,
                        'lg' => 3,
                    ]),

                Section::make('Kontak')
                    ->collapsible()
                    ->schema([
                        TextInput::make('website')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Website'),
                        TextInput::make('telepon')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Telepon')
                            ->tel(),
                        TextInput::make('email')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Email')
                            ->email(),
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
                TextColumn::make('logo')
                    ->label('Logo')
                    ->searchable(),
                TextColumn::make('nama')
                    ->label('Nama Instansi')
                    ->searchable(),
                TextColumn::make('npsn')
                    ->label('Nomor Pokok Sekolah Nasional')
                    ->searchable(),
                TextColumn::make('nss')
                    ->label('Nomor Statistik Sekolah')
                    ->searchable(),
                TextColumn::make('jenjang')
                    ->label('Jenjang')
                    ->sortable(),
                TextColumn::make('status')
                    ->label('Status')
                    ->sortable(),
                TextColumn::make('akreditasi')
                    ->label('Akreditasi')
                    ->badge()
                    ->searchable(),
                TextColumn::make('alamat')
                    ->label('Alamat')
                    ->searchable(),
                TextColumn::make('kelurahan.nama')
                    ->label('Kelurahan')
                    ->sortable(),
                TextColumn::make('kecamatan.nama')
                    ->label('Kecamatan')
                    ->sortable(),
                TextColumn::make('kabupaten.nama')
                    ->label('Kabupaten')
                    ->sortable(),
                TextColumn::make('provinsi.nama')
                    ->label('Provinsi')
                    ->sortable(),
                TextColumn::make('negara.nama')
                    ->label('Negara')
                    ->sortable(),
                TextColumn::make('website')
                    ->label('Website')
                    ->searchable(),
                TextColumn::make('telepon')
                    ->label('Telepon')
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),

                // Timestamp
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
