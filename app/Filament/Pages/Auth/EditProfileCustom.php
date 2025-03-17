<?php

namespace App\Filament\Pages\Auth;

use Filament\Pages\Page;
use Filament\Pages\Auth\EditProfile;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\TextInput;
use DiogoGPinto\AuthUIEnhancer\Pages\Auth\Concerns\HasCustomLayout;

class EditProfileCustom extends EditProfile
{
    protected function getForms(): array
    {
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
    protected function getUsernameFormComponent(): Component
    {
        return TextInput::make('username')
            ->label(__('Nomor Induk Siswa Nasional(NISN)'))
            ->required()
            ->minLength(10)
            ->maxLength(10)
            ->validationMessages([
                'max' => 'NISN: Masukkan maksimal 10 Angka.',
                'min' => 'NISN: Masukkan minimal 10 Angka.',
                'unique' => 'NISN: Nomor ini sudah pernah di isi.',
                'required' => 'Form ini wajib diisi.',
            ]);
    }
}
