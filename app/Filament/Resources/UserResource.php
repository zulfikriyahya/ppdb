<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages\CreateUser;
use App\Filament\Resources\UserResource\Pages\EditUser;
use App\Filament\Resources\UserResource\Pages\ListUsers;
use App\Models\User;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ForceDeleteAction;
use Filament\Tables\Actions\RestoreAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Enums\ActionsPosition;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $navigationLabel = 'Pengguna';

    protected static ?string $label = 'Pengguna';

    protected static ?string $navigationGroup = 'Referensi';

    protected static ?int $navigationSort = 9;

    protected static bool $shouldRegisterNavigation = false;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        $isCreate = $form->getRecord() === null;

        return $form
            ->schema([
                Fieldset::make('Pengguna')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama Lengkap')
                            ->required()
                            ->validationMessages(['required' => 'Form ini wajib diisi.']),

                        TextInput::make('username')
                            ->label('Nomor Induk Siswa Nasional (NISN)')
                            ->unique(ignoreRecord: true)
                            ->rule(fn ($record) => $record === null
                                ? 'unique:users,username'
                                : 'unique:users,username,'.$record->id)
                            ->dehydrateStateUsing(fn ($state) => $state ?: null)
                            ->when(
                                $isCreate,
                                fn (TextInput $field) => $field
                                    ->required()
                                    ->numeric()
                                    ->minLength(10)
                                    ->maxLength(10)
                            )
                            ->validationMessages([
                                'max_digits' => 'NISN: Masukkan maksimal 10 Angka.',
                                'min_digits' => 'NISN: Masukkan minimal 10 Angka.',
                                'unique' => 'NISN: Nomor ini sudah pernah di isi.',
                                'required' => 'Form ini wajib diisi.',
                            ]),

                        TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->unique(ignoreRecord: true)
                            ->rule(fn ($record) => $record === null
                                ? 'unique:users,email'
                                : 'unique:users,email,'.$record->id)
                            ->dehydrateStateUsing(fn ($state) => $state ?: null)
                            ->disabledOn('edit')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                                'unique' => 'Email: Email ini sudah pernah di isi.',
                            ]),

                        TextInput::make('password')
                            ->label('Password')
                            ->password()
                            ->required(fn ($record) => $record === null)
                            ->dehydrateStateUsing(fn ($state, $record) => $state ? bcrypt($state) : $record->password),

                        DateTimePicker::make('email_verified_at')
                            ->label('Diverifikasi')
                            ->default(now()),

                        Select::make('roles')
                            ->label('Peran')
                            ->relationship('roles', 'name')
                            ->multiple()
                            ->preload()
                            ->searchable()
                            ->when(
                                $isCreate,
                                fn (Select $field) => $field
                                    ->required()
                                    ->validationMessages(['required' => 'Form ini wajib diisi.'])
                            ),

                        Select::make('status')
                            ->label('Status')
                            ->options(['Aktif' => 'Aktif', 'Nonaktif' => 'Nonaktif'])
                            ->default('Aktif')
                            ->native(false)
                            ->required()
                            ->validationMessages(['required' => 'Form ini wajib diisi.']),

                        FileUpload::make('avatar')
                            ->label('Avatar')
                            ->image()
                            ->minSize(5)
                            ->maxSize(100)
                            ->visibility('private')
                            ->directory('assets/avatar')
                            ->columnSpan(2),
                    ])
                    ->columns(['sm' => 1, 'md' => 3, 'lg' => 3, 'xl' => 3, '2xl' => 3]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('avatar')
                    ->label('Avatar')
                    ->circular()
                    ->defaultImageUrl('img/avatar.png'),

                TextColumn::make('name')
                    ->label('Nama Lengkap')
                    ->searchable(),

                TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),

                TextColumn::make('email_verified_at')
                    ->label('Diverifikasi')
                    ->dateTime('d F Y H:i:s')
                    ->sortable(),

                TextColumn::make('roles.name')
                    ->label('Peran')
                    ->formatStateUsing(fn (string $state): string => Str::headline($state))
                    ->badge()
                    ->sortable(),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Aktif' => 'success',
                        'Nonaktif' => 'gray',
                    })
                    ->icon(fn (string $state): string => match ($state) {
                        'Aktif' => 'heroicon-o-check-circle',
                        'Nonaktif' => 'heroicon-o-x-mark',
                    })
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip(),

                TextColumn::make('updated_at')
                    ->label('Diubah')
                    ->dateTime('d F Y H:i:s')
                    ->sinceTooltip(),
            ])
            ->filters([
                TrashedFilter::make(),

                SelectFilter::make('role')
                    ->label('Peran')
                    ->relationship('roles', 'name')
                    ->visible(Auth::user()->username === 'super_admin'),
            ])
            ->actions([
                ActionGroup::make([
                    EditAction::make(),
                    DeleteAction::make(),
                    ForceDeleteAction::make(),
                    RestoreAction::make(),
                ])->hidden(fn ($record) => $record->username === 'super_admin'),
            ], ActionsPosition::BeforeColumns)
            ->striped()
            ->filtersLayout(FiltersLayout::AboveContentCollapsible)
            ->paginationPageOptions([10, 25, 50]);
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([SoftDeletingScope::class]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListUsers::route('/'),
            'create' => CreateUser::route('/create'),
            'edit' => EditUser::route('/{record}/edit'),
        ];
    }
}
