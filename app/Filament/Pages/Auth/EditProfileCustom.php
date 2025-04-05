<?php

namespace App\Filament\Pages\Auth;

use Filament\Forms\Get;
use Filament\Pages\Auth\EditProfile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Validation\Rules\Password;
use DiogoGPinto\AuthUIEnhancer\Pages\Auth\Concerns\HasCustomLayout;

class EditProfileCustom extends EditProfile
{
    use HasCustomLayout;

    protected function getForms(): array
    {
        if (Auth::user()->username === 'administrator') {
            return [
                'form' => $this->form(
                    $this->makeForm()
                        ->schema([
                            $this->getAvatarFormComponent(),
                            $this->getNameFormComponent(),
                            $this->getUsernameFormComponent(),
                            $this->getEmailFormComponent(),
                            $this->getPasswordFormComponent(),
                            $this->getPasswordConfirmationFormComponent(),
                        ])
                        ->operation('edit')
                        ->model($this->getUser())
                        ->statePath('data')
                        ->inlineLabel(! static::isSimple()),
                ),
            ];
        }

        return [
            'form' => $this->form(
                $this->makeForm()
                    ->schema([
                        $this->getNameFormComponent(),
                        $this->getUsernameFormComponent(),
                        $this->getEmailFormComponent(),
                        $this->getPasswordFormComponent(),
                        $this->getPasswordConfirmationFormComponent(),
                    ])
                    ->operation('edit')
                    ->model($this->getUser())
                    ->statePath('data')
                    ->inlineLabel(! static::isSimple()),
            ),
        ];
    }

    protected function getAvatarFormComponent(): Component
    {
        return FileUpload::make('avatar')
            ->label(__('Avatar'))
            ->image()
            ->minSize(5)
            ->maxSize(500)
            ->visibility('private')
            ->directory('assets/avatar');
    }

    protected function getNameFormComponent(): Component
    {
        return TextInput::make('name')
            ->label(__('Nama Lengkap'))
            ->suffixIcon('heroicon-o-user-circle')
            ->required()
            ->maxLength(100)
            ->autofocus();
    }

    protected function getUsernameFormComponent(): Component
    {
        if (Auth::user()->roles->first()->name === 'peserta') {
            return TextInput::make('username')
                ->label(__('Nomor Induk Siswa Nasional (NISN)'))
                ->suffixIcon('heroicon-o-identification')
                ->required()
                ->unique(ignoreRecord: true)
                ->rule(fn($record) => $record === null ? 'unique:users,username' : 'unique:users,username,' . $record->id)
                ->dehydrateStateUsing(fn($state) => $state ? $state : null)
                ->minLength(10)
                ->maxLength(10)
                ->validationMessages([
                    'max' => 'NISN: Masukkan maksimal 10 Angka.',
                    'min' => 'NISN: Masukkan minimal 10 Angka.',
                    'unique' => 'NISN: Nomor ini sudah pernah di isi.',
                    'required' => 'Form ini wajib diisi.',
                ]);
        }
        return TextInput::make('username')
            ->label(__('Username'))
            ->suffixIcon('heroicon-o-identification')
            ->required()
            ->unique(ignoreRecord: true)
            ->rule(fn($record) => $record === null ? 'unique:users,username' : 'unique:users,username,' . $record->id)
            ->dehydrateStateUsing(fn($state) => $state ? $state : null)
            ->visible(Auth::user()->username !== 'administrator')
            ->validationMessages([
                'unique' => 'Username: Username sudah pernah di isi.',
                'required' => 'Form ini wajib diisi.',
            ]);
    }

    protected function getEmailFormComponent(): Component
    {
        return TextInput::make('email')
            ->label(__('Email'))
            ->suffixIcon('heroicon-o-envelope')
            ->email()
            ->required()
            ->maxLength(50)
            ->validationMessages([
                'max' => 'Email: Masukkan maksimal 50 Karakter.',
                'unique' => 'Email: Email ini sudah pernah di isi.',
                'required' => 'Form ini wajib diisi.',
            ])
            ->unique(ignoreRecord: true);
    }

    protected function getPasswordFormComponent(): Component
    {
        return TextInput::make('password')
            ->label(__('Password'))
            ->password()
            ->revealable(filament()->arePasswordsRevealable())
            ->rule(Password::default())
            ->autocomplete('new-password')
            ->dehydrated(fn($state): bool => filled($state))
            ->dehydrateStateUsing(fn($state): string => Hash::make($state))
            ->live(debounce: 500)
            ->same('passwordConfirmation')
            ->validationMessages([
                'same' => 'Password: Password tidak sesuai dengan isian password konfirmasi.',
                'min' => 'Password: Masukkan minimal 8 karakter alfanumerik.',
                'required' => 'Form ini wajib diisi.',
            ]);
    }

    protected function getPasswordConfirmationFormComponent(): Component
    {
        return TextInput::make('passwordConfirmation')
            ->label(__('Ulangi Password'))
            ->password()
            ->revealable(filament()->arePasswordsRevealable())
            ->required()
            ->visible(fn(Get $get): bool => filled($get('password')))
            ->dehydrated(false);
    }
}
