<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
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
use Filament\Forms\Components\Section;
use Filament\Tables\Enums\FiltersLayout;
use Illuminate\Database\Eloquent\Builder;
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
                        Forms\Components\TextInput::make('nama')
                            ->label('Nama Instansi')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        Forms\Components\TextInput::make('npsn')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Nomor Pokok Sekolah Nasional'),
                        Forms\Components\TextInput::make('nss')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Nomor Statistik Sekolah'),
                        Forms\Components\Select::make('jenjang')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Jenjang')
                            ->options(['PAUD' => 'PAUD', 'TK' => 'TK', 'SD' => 'SD', 'MI' => 'MI', 'SMP' => 'SMP', 'MTS' => 'MTS', 'SMA' => 'SMA', 'SMK' => 'SMK', 'MA' => 'MA']),
                        Forms\Components\Select::make('status')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Status')
                            ->options(['NEGERI' => 'NEGERI', 'SWASTA' => 'SWASTA']),
                        Forms\Components\Select::make('akreditasi')
                            ->label('Akreditasi')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->options(['A' => 'A', 'B' => 'B', 'C' => 'C', 'D' => 'D']),
                        Forms\Components\FileUpload::make('logo')
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
                        'lg' => 6,
                    ]),

                // Alamat
                Section::make('Alamat')
                    ->collapsible()
                    ->schema([
                        Forms\Components\TextInput::make('alamat')
                            ->label('Alamat')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        Forms\Components\Select::make('negara_id')
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
                        Forms\Components\Select::make('provinsi_id')
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
                        Forms\Components\Select::make('kabupaten_id')
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
                        Forms\Components\Select::make('kecamatan_id')
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
                        Forms\Components\Select::make('kelurahan_id')
                            ->label('Kelurahan')
                            ->options(fn(Get $get): Collection => Kelurahan::query()
                                ->where('kecamatan_id', $get('kecamatan_id'))
                                ->pluck('nama', 'id'))
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->native(false),
                    ])
                    ->columns([
                        'sm' => '100%',
                        'md' => 3,
                        'lg' => 3,
                    ]),

                // Kontak
                Section::make('Kontak')
                    ->collapsible()
                    ->schema([
                        Forms\Components\TextInput::make('website')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Website'),
                        Forms\Components\TextInput::make('telepon')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->label('Telepon')
                            ->tel(),
                        Forms\Components\TextInput::make('email')
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
            // ->recordTitleAttribute('nama')
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama Instansi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('npsn')
                    ->label('Nomor Pokok Sekolah Nasional')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nss')
                    ->label('Nomor Statistik Sekolah')
                    ->searchable(),
                Tables\Columns\TextColumn::make('jenjang')
                    ->label('Jenjang')
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->sortable(),
                Tables\Columns\TextColumn::make('logo')
                    ->label('Logo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('akreditasi')
                    ->label('Akreditasi')
                    ->badge()
                    ->searchable(),
                Tables\Columns\TextColumn::make('alamat')
                    ->label('Alamat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('negara.nama')
                    ->label('Negara')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('provinsi.nama')
                    ->label('Provinsi')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kabupaten.nama')
                    ->label('Kabupaten')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kecamatan.nama')
                    ->label('Kecamatan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kelurahan.nama')
                    ->label('Kelurahan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('website')
                    ->label('Website')
                    ->searchable(),
                Tables\Columns\TextColumn::make('telepon')
                    ->label('Telepon')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
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
