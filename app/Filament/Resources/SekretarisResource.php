<?php

namespace App\Filament\Resources;

use Carbon\Carbon;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Sekretaris;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SekretarisResource\Pages;
use App\Filament\Resources\SekretarisResource\RelationManagers;

class SekretarisResource extends Resource
{
    protected static ?string $model = Sekretaris::class;

    protected static ?string $navigationLabel = 'Sekretaris';

    protected static ?string $label = 'Sekretaris';

    protected static ?string $navigationGroup = 'Administrasi';

    protected static ?int $navigationSort = 3;

    protected static bool $shouldRegisterNavigation = true;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Biodata
                Section::make('Biodata')
                    ->collapsible()
                    ->schema([
                        // Nama Lengkap
                        Forms\Components\TextInput::make('nama')
                            ->label('Nama Lengkap')
                            ->required(),
                        // Nomor Indul Pegawai (NIP)
                        Forms\Components\TextInput::make('nip')
                            ->label('Nomor Induk Pegawai')
                            ->prefix('NIP'),
                        // Tahun Pendaftaran
                        Forms\Components\Select::make('tahun_pendaftaran_id')
                            ->label('Tahun Pendaftaran')
                            ->relationship('tahunPendaftaran', 'nama'),
                        // Status
                        Forms\Components\Select::make('status')
                            ->label('Status')
                            ->options(['Aktif' => 'Aktif', 'Nonaktif' => 'Nonaktif',])
                            ->required(),
                    ])
                    ->columns([
                        'sm' => '100%',
                        'md' => 2,
                        'lg' => 4,
                    ]),

                // Berkas
                Section::make('Berkas')
                    ->collapsed()
                    ->schema([
                        // Foto
                        Forms\Components\FileUpload::make('berkas_foto')
                            ->label('Foto')
                            ->image()
                            ->imageEditor()
                            ->imageEditorAspectRatios([
                                null,
                                '1:1' => '1:1',
                                '3:4' => '3:4',
                            ])
                            ->fetchFileInformation(false)
                            ->directory('assets/pimpinan')
                            ->downloadable()
                            ->maxSize(500)
                            ->minSize(10)
                            ->visibility('private')
                            ->required(),
                        // Tanda Tangan Elektronik
                        Forms\Components\FileUpload::make('berkas_tte')
                            ->label('Tanda Tangan Elektronik')
                            ->image()
                            ->imageEditor()
                            ->imageEditorAspectRatios([
                                null,
                                '1:1' => '1:1',
                            ])
                            ->fetchFileInformation(false)
                            ->directory('assets/pimpinan')
                            ->downloadable()
                            ->maxSize(500)
                            ->minSize(10)
                            ->visibility('private')
                            ->required(),
                        // Surat Tugas/Surat Keputusan
                        Forms\Components\FileUpload::make('berkas_sk')
                            ->label('Surat Tugas/Surat Keputusan')
                            ->fetchFileInformation(false)
                            ->directory('assets/pimpinan')
                            ->downloadable()
                            ->maxSize(500)
                            ->minSize(10)
                            ->visibility('private')
                            ->openable()
                            ->acceptedFileTypes(['application/pdf'])
                            ->required(),
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
                Tables\Columns\ImageColumn::make('berkas_foto')
                    ->label('Foto')
                    ->circular()
                    ->defaultImageUrl('/img/avatar.png'),
                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama Lengkap')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nip')
                    ->label('NIP')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tahunPendaftaran.nama')
                    ->label('Tahun Pendaftaran')
                    ->searchable(),
                // Tables\Columns\TextColumn::make('periode_awal')
                //     ->label('Periode')
                //     ->date('d F Y')
                //     ->sortable()
                //     ->description(
                //         fn(Anggota $record) => $record->periode_akhir ? 'Hingga: ' . Carbon::parse($record->periode_akhir)->translatedFormat('d F Y') : 'Hingga: (Sekarang)'
                //     ),
                Tables\Columns\ImageColumn::make('berkas_tte')
                    ->label('TTE')
                    ->defaultImageUrl('/img/tte.png'),
                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'Aktif' => 'success',
                        'Nonaktif' => 'gray'
                    }),
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
                ])
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListSekretaris::route('/'),
            'create' => Pages\CreateSekretaris::route('/create'),
            'view' => Pages\ViewSekretaris::route('/{record}'),
            'edit' => Pages\EditSekretaris::route('/{record}/edit'),
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
