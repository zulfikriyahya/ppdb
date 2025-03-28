<?php

namespace App\Filament\Resources;

use Filament\Tables;
use App\Models\Ketua;
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
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Actions\RestoreAction;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\ForceDeleteAction;
use Filament\Tables\Actions\RestoreBulkAction;
use App\Filament\Resources\KetuaResource\Pages;
use Filament\Tables\Actions\ForceDeleteBulkAction;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KetuaResource extends Resource
{
    protected static ?string $model = Ketua::class;

    protected static ?string $navigationLabel = 'Ketua';

    protected static ?string $label = 'Ketua';

    protected static ?string $navigationGroup = 'Administrasi';

    protected static ?int $navigationSort = 2;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Biodata')
                    ->collapsible()
                    ->schema([
                        TextInput::make('nama')
                            ->label('Nama Lengkap')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        TextInput::make('nip')
                            ->label('Nomor Induk Pegawai')
                            ->validationMessages([
                                'min' => 'NIP: Minimal 18 Karakter.',
                                'max' => 'NIP: Maksimal 18 Karakter.',
                            ])
                            ->maxLength(18)
                            ->minLength(18)
                            ->prefix('NIP'),
                        Select::make('tahun_pendaftaran_id')
                            ->label('Tahun Pendaftaran')
                            ->relationship('tahunPendaftaran', 'nama', fn($query) => $query->where('status', 'Aktif'))
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        Select::make('status')
                            ->label('Status')
                            ->options(['Aktif' => 'Aktif', 'Nonaktif' => 'Nonaktif'])
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                    ])
                    ->columns([
                        'sm' => '100%',
                        'md' => 2,
                        'lg' => 4,
                    ]),

                Section::make('Berkas')
                    ->collapsed()
                    ->schema([
                        FileUpload::make('berkas_foto')
                            ->label('Foto')
                            ->image()
                            ->imageEditor()
                            ->imageEditorAspectRatios([
                                null,
                                '1:1' => '1:1',
                                '3:4' => '3:4',
                            ])
                            ->fetchFileInformation(false)
                            ->directory('assets/ketua')
                            ->downloadable()
                            ->openable()
                            ->maxSize(500)
                            ->minSize(10)
                            ->visibility('private')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        FileUpload::make('berkas_tte')
                            ->label('Tanda Tangan Elektronik')
                            ->image()
                            ->imageEditor()
                            ->imageEditorAspectRatios([
                                null,
                                '1:1' => '1:1',
                            ])
                            ->fetchFileInformation(false)
                            ->directory('assets/ketua')
                            ->downloadable()
                            ->openable()
                            ->maxSize(500)
                            ->minSize(10)
                            ->visibility('private')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        FileUpload::make('berkas_sk')
                            ->label('Surat Tugas/Surat Keputusan')
                            ->fetchFileInformation(false)
                            ->directory('assets/ketua')
                            ->downloadable()
                            ->openable()
                            ->maxSize(500)
                            ->minSize(10)
                            ->visibility('private')
                            ->openable()
                            ->acceptedFileTypes(['application/pdf'])
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
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
                ImageColumn::make('berkas_foto')
                    ->label('Foto')
                    ->circular()
                    ->defaultImageUrl('/img/avatar.png'),
                TextColumn::make('nama')
                    ->label('Nama Lengkap')
                    ->searchable(),
                TextColumn::make('nip')
                    ->label('NIP')
                    ->searchable(),
                TextColumn::make('tahunPendaftaran.nama')
                    ->label('Tahun Pendaftaran')
                    ->searchable(),
                ImageColumn::make('berkas_tte')
                    ->label('TTE')
                    ->defaultImageUrl('/img/tte.png'),
                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'Aktif' => 'success',
                        'Nonaktif' => 'gray'
                    }),
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
                Tables\Filters\TrashedFilter::make(),
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
            'index' => Pages\ListKetuas::route('/'),
            'create' => Pages\CreateKetua::route('/create'),
            'view' => Pages\ViewKetua::route('/{record}'),
            'edit' => Pages\EditKetua::route('/{record}/edit'),
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
