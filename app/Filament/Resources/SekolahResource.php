<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SekolahResource\Pages;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Provinsi;
use App\Models\Sekolah;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
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
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Collection;

class SekolahResource extends Resource
{
    protected static ?string $model = Sekolah::class;

    protected static ?string $navigationLabel = 'Instansi';

    protected static ?string $label = 'Instansi';

    protected static ?string $navigationGroup = 'Referensi';

    protected static ?int $navigationSort = 1;

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
                            ->label('Nomor Pokok Sekolah Nasional')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        TextInput::make('nss')
                            ->label('Nomor Statistik Sekolah/Madrasah')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        FileUpload::make('logo')
                            ->label('Logo')
                            ->image()
                            ->imageEditor()
                            ->imageEditorAspectRatios([
                                null,
                                '1:1' => '1:1',
                            ])
                            ->fetchFileInformation(false)
                            ->directory('assets/instansi')
                            ->downloadable()
                            ->maxSize(500)
                            ->minSize(10)
                            ->visibility('private')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        FileUpload::make('logo_institusi')
                            ->label('Logo Institusi')
                            ->image()
                            ->imageEditor()
                            ->imageEditorAspectRatios([
                                null,
                                '1:1' => '1:1',
                            ])
                            ->fetchFileInformation(false)
                            ->directory('assets/institusi')
                            ->downloadable()
                            ->maxSize(500)
                            ->minSize(10)
                            ->visibility('private'),
                        Select::make('pimpinan_id')
                            ->label('Kepala Instansi')
                            ->relationship('pimpinan', 'nama')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        Select::make('akreditasi')
                            ->label('Akreditasi')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ])
                            ->options(['A' => 'A', 'B' => 'B', 'C' => 'C', 'D' => 'D']),
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
                            ->options(fn (Get $get): Collection => Provinsi::query()
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
                            ->options(fn (Get $get): Collection => Kabupaten::query()
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
                            ->options(fn (Get $get): Collection => Kecamatan::query()
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
                            ->options(fn (Get $get): Collection => Kelurahan::query()
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
                            ->label('Website'),
                        TextInput::make('telepon')
                            ->label('Telepon')
                            ->tel(),
                        TextInput::make('email')
                            ->label('Email')
                            ->email(),
                    ])
                    ->columns([
                        'sm' => '100%',
                        'md' => 3,
                        'lg' => 3,
                    ]),

                Section::make('Surat')
                    ->collapsible()
                    ->schema([
                        TextInput::make('no_surat')
                            ->label('Nomor Surat SKL'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->label('Nama Instansi')
                    ->searchable(),
                TextColumn::make('npsn')
                    ->label('Nomor Pokok Sekolah Nasional')
                    ->searchable(),
                TextColumn::make('nss')
                    ->label('Nomor Statistik Sekolah')
                    ->searchable(),
                ImageColumn::make('logo')
                    ->label('Logo'),
                TextColumn::make('pimpinan.nama')
                    ->label('Kepala Instansi')
                    ->sortable(),
                TextColumn::make('akreditasi')
                    ->label('Akreditasi')
                    ->badge()
                    ->searchable(),
                TextColumn::make('alamat')
                    ->label('Alamat')
                    ->searchable(),
                TextColumn::make('negara.nama')
                    ->label('Negara')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('provinsi.nama')
                    ->label('Provinsi')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('kabupaten.nama')
                    ->label('Kabupaten')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('kecamatan.nama')
                    ->label('Kecamatan')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('kelurahan.nama')
                    ->label('Kelurahan')
                    ->numeric()
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
                TextColumn::make('nomor_surat')
                    ->label('Nomor Surat')
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
            'index' => Pages\ListSekolahs::route('/'),
            'create' => Pages\CreateSekolah::route('/create'),
            'view' => Pages\ViewSekolah::route('/{record}'),
            'edit' => Pages\EditSekolah::route('/{record}/edit'),
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
