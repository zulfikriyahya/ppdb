<?php

namespace App\Filament\Pages\Auth;

use DiogoGPinto\AuthUIEnhancer\Pages\Auth\Concerns\HasCustomLayout;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\TextInput;
use Filament\Http\Responses\Auth\Contracts\LoginResponse;
use Filament\Pages\Auth\Login;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\HtmlString;
use Illuminate\Validation\ValidationException;

class LoginCustom extends Login
{
    use HasCustomLayout;

    protected static string $view = 'filament.pages.auth.login';

    public function getTitle(): string|Htmlable
    {
        return 'Masuk ke Sistem PMBM MTsN 1 Pandeglang';
    }

    public function getHeading(): string|Htmlable
    {
        return 'Selamat Datang Kembali';
    }

    public function getSubheading(): string|Htmlable|null
    {
        return 'Silakan masuk dengan akun Anda untuk melanjutkan';
    }

    protected function getLayoutData(): array
    {
        return [
            'emptyPanelBackgroundImageUrl' => $this->getBackgroundImage(),
            'emptyPanelBackgroundColor' => $this->getBackgroundColor(),
        ];
    }

    protected function getBackgroundImage(): string
    {
        return asset('/img/wallpaper.png');
    }

    protected function getBackgroundColor(): string
    {
        return '';
    }

    protected function getForms(): array
    {
        return [
            'form' => $this->form(
                $this->makeForm()
                    ->schema([
                        $this->getLoginFormComponent(),
                        $this->getPasswordFormComponent(),
                        $this->getRememberFormComponent(),
                    ])
                    ->statePath('data'),
            ),
        ];
    }

    protected function getRememberFormComponent(): Component
    {
        return Checkbox::make('remember')
            ->label(__('Ingat Saya'))
            ->hint(new HtmlString(
                '<a href="https://daftar.mtsn1pandeglang.sch.id"
                class="text-sm text-blue-500 transition hover:text-primary-600">
                ← Kembali Beranda
            </a>'
            ));
    }

    protected function getLoginFormComponent(): Component
    {
        return TextInput::make('login')
            ->label(__('Email/Nomor Induk Siswa Nasional (NISN)'))
            ->required()
            ->suffixIcon('heroicon-o-lock-closed')
            ->autocomplete()
            ->autofocus()
            ->extraInputAttributes(['tabindex' => 1]);
    }

    public function getFooter(): ?View
    {
        return view('filament.pages.auth.login-footer');
    }

    protected function getCredentialsFromFormData(array $data): array
    {
        $login_type = filter_var($data['login'], FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        return [
            $login_type => $data['login'],
            'password' => $data['password'],
        ];
    }

    protected function throwFailureValidationException(): never
    {
        throw ValidationException::withMessages([
            'data.login' => __('filament-panels::pages/auth/login.messages.failed'),
        ]);
    }

    public function authenticate(): ?LoginResponse
    {
        $response = parent::authenticate();

        $user = Auth::user();

        if ($user && ! $user->hasVerifiedEmail()) {
            session(['otp_user_id' => $user->id]);

            Auth::logout();

            $this->redirect('/verifikasi-otp');

            return null;
        }

        return $response;
    }
}
