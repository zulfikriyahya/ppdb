<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\UserResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\UserResource\RelationManagers;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationLabel = 'Pengguna';

    protected static ?string $label = 'Pengguna';

    protected static ?string $navigationGroup = 'Referensi';

    protected static ?int $navigationSort = 4;

    protected static bool $shouldRegisterNavigation = false;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Nama Lengkap')
                    ->required(),
                Forms\Components\TextInput::make('email')
                    ->label('Email')
                    ->helperText('Isi dengan email yang masih aktif')
                    ->email()
                    ->rule(fn($record) => $record === null ? 'unique:users,email' : 'unique:users,email,' . $record->id)
                    ->dehydrateStateUsing(fn($state) => $state ? $state : null)
                    ->disabledOn('edit')
                    ->required(),
                Forms\Components\DateTimePicker::make('email_verified_at')
                    ->label('Diverifikasi')
                    ->default(now()),
                Forms\Components\TextInput::make('password')
                    ->label('Password')
                    ->password()
                    ->required(fn($record) => $record === null)
                    ->dehydrateStateUsing(fn($state, $record) => $state ? bcrypt($state) : $record->password),
                // Forms\Components\TextInput::make('current_team_id')
                //     ->numeric(),
                Forms\Components\FileUpload::make('avatar')
                    ->label('Avatar')
                    ->avatar()
                    ->directory('upload/')
                    ->preserveFilenames()
                    ->minSize(10)
                    ->maxSize(100)
                    // ->validationMessages([
                    //     'maxSize' => 'Ukuran file tidak boleh lebih dari 100 KB',
                    //     'minSize' => 'Ukuran file tidak boleh kurang dari 10 KB',
                    // ])
                    ->fetchFileInformation(false),
                // Forms\Components\Textarea::make('two_factor_secret')
                //     ->columnSpanFull(),
                // Forms\Components\Textarea::make('two_factor_recovery_codes')
                //     ->columnSpanFull(),
                // Forms\Components\DateTimePicker::make('two_factor_confirmed_at'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('avatar')
                    ->circular()
                    ->label('Avatar'),
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama Lengkap')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email_verified_at')
                    ->label('Diverifikasi')
                    ->dateTime()
                    ->sortable(),
                // Tables\Columns\TextColumn::make('current_team_id')
                //     ->numeric()
                //     ->sortable(),
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
                // Tables\Columns\TextColumn::make('two_factor_confirmed_at')
                //     ->dateTime()
                //     ->sortable(),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                    Tables\Actions\RestoreAction::make(),
                ]),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'view' => Pages\ViewUser::route('/{record}'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
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
