<?php

namespace App\Filament\Resources\UserResource\Pages;

use Filament\Forms\Form;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Fieldset;
use Illuminate\Database\Eloquent\Model;
use App\Filament\Resources\UserResource;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\EditRecord;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\DateTimePicker;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    // Override handleRecordUpdate dengan tanda tangan yang sesuai
    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $updatedRecord = parent::handleRecordUpdate($record, $data);
        $this->redirect($this->getResource()::getUrl('index'));

        return $updatedRecord;
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Fieldset::make('Pengguna')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama Lengkap')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        TextInput::make('username')
                            ->label('Nomor Induk Siswa Nasional (NISN)')
                            ->unique(ignoreRecord: true)
                            ->rule(fn($record) => $record === null ? 'unique:users,username' : 'unique:users,username,' . $record->id)
                            ->dehydrateStateUsing(fn($state) => $state ? $state : null)
                            ->validationMessages([
                                'max' => 'NISN: Masukkan maksimal 10 Angka.',
                                'min' => 'NISN: Masukkan minimal 10 Angka.',
                                'unique' => 'NISN: Nomor ini sudah pernah di isi.',
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->rule(fn($record) => $record === null ? 'unique:users,email' : 'unique:users,email,' . $record->id)
                            ->dehydrateStateUsing(fn($state) => $state ? $state : null)
                            ->disabledOn('edit')
                            ->required()
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        TextInput::make('password')
                            ->label('Password')
                            ->password()
                            ->required(fn($record) => $record === null)
                            ->dehydrateStateUsing(fn($state, $record) => $state ? bcrypt($state) : $record->password),
                        DateTimePicker::make('email_verified_at')
                            ->label('Diverifikasi')
                            ->default(now()),

                        Select::make('roles')
                            ->label('Peran')
                            ->relationship('roles', 'name')
                            ->multiple()
                            ->preload()
                            ->searchable(),

                        Select::make('status')
                            ->label('Status')
                            ->required()
                            ->native(false)
                            ->options([
                                'Aktif' => 'Aktif',
                                'Nonaktif' => 'Nonaktif',
                            ])
                            ->default('Aktif')
                            ->validationMessages([
                                'required' => 'Form ini wajib diisi.',
                            ]),
                        FileUpload::make('avatar')
                            ->label('Avatar')
                            ->image()
                            ->minSize(5)
                            ->maxSize(100)
                            ->visibility('private')
                            ->directory('assets/avatar')
                            ->columnSpan(2),
                    ])
                    ->columns([
                        'sm' => 1,
                        'md' => 3,
                        'lg' => 3,
                        'xl' => 3,
                        '2xl' => 3,
                    ]),
            ]);
    }
}
