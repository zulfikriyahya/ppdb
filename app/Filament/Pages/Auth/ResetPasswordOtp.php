<?php

namespace App\Filament\Pages\Auth;

use App\Models\User;
use App\Services\WhatsAppService;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\SimplePage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;
use Illuminate\Validation\Rules\Password;

class ResetPasswordOtp extends SimplePage implements HasForms
{
    use InteractsWithForms;

    protected static string $view = 'filament.pages.auth.reset-password-otp';

    protected static bool $shouldRegisterNavigation = false;

    public ?array $data = [];

    // State: 'otp' | 'password'
    public string $step = 'otp';

    public function mount(): void
    {
        if (! session('reset_otp_user_id')) {
            $this->redirect(route('otp.forgot-password'));

            return;
        }

        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema(
                $this->step === 'otp'
                    ? $this->getOtpSchema()
                    : $this->getPasswordSchema()
            )
            ->statePath('data');
    }

    protected function getOtpSchema(): array
    {
        return [
            TextInput::make('otp')
                ->label('Kode OTP')
                ->required()
                ->numeric()
                ->length(6)
                ->placeholder('Masukkan 6 digit kode OTP')
                ->suffixIcon('heroicon-o-key')
                ->autofocus()
                ->validationMessages([
                    'required' => 'Kode OTP wajib diisi.',
                    'digits' => 'Kode OTP harus 6 digit.',
                ]),
        ];
    }

    protected function getPasswordSchema(): array
    {
        return [
            TextInput::make('password')
                ->label('Password Baru')
                ->password()
                ->revealable(filament()->arePasswordsRevealable())
                ->required()
                ->rule(Password::default())
                ->same('password_confirmation')
                ->autofocus()
                ->validationMessages([
                    'required' => 'Password wajib diisi.',
                    'same' => 'Password tidak sesuai dengan konfirmasi.',
                    'min' => 'Password minimal 8 karakter.',
                ]),

            TextInput::make('password_confirmation')
                ->label('Ulangi Password Baru')
                ->password()
                ->revealable(filament()->arePasswordsRevealable())
                ->required()
                ->dehydrated(false),
        ];
    }

    public function verifikasiOtp(): void
    {
        $data = $this->form->getState();
        $userId = session('reset_otp_user_id');
        $user = User::find($userId);

        if (! $user) {
            Notification::make()
                ->title('Sesi tidak valid. Silakan ulangi proses lupa password.')
                ->danger()
                ->send();
            $this->redirect(route('otp.forgot-password'));

            return;
        }

        $storedOtp = Redis::get("reset_otp:{$userId}");

        if (! $storedOtp) {
            Notification::make()
                ->title('Kode OTP sudah kadaluarsa.')
                ->body('Silakan minta kode OTP baru.')
                ->danger()
                ->send();

            return;
        }

        if ($data['otp'] !== $storedOtp) {
            Notification::make()
                ->title('Kode OTP tidak valid.')
                ->body('Periksa kembali kode yang dikirim ke WhatsApp Anda.')
                ->danger()
                ->send();

            return;
        }

        // OTP valid — generate token reset (TTL 15 menit) dan pindah ke step password
        Redis::del("reset_otp:{$userId}");
        Redis::setex("reset_token:{$userId}", 900, 1);

        $this->step = 'password';
        $this->form->fill();

        Notification::make()
            ->title('OTP valid. Silakan buat password baru.')
            ->success()
            ->send();
    }

    public function simpanPassword(): void
    {
        $data = $this->form->getState();
        $userId = session('reset_otp_user_id');

        // Validasi token reset masih berlaku
        if (! Redis::exists("reset_token:{$userId}")) {
            Notification::make()
                ->title('Sesi reset password sudah kadaluarsa.')
                ->body('Silakan ulangi proses lupa password.')
                ->danger()
                ->send();
            $this->redirect(route('otp.forgot-password'));

            return;
        }

        $user = User::find($userId);

        if (! $user) {
            $this->redirect(route('otp.forgot-password'));

            return;
        }

        $user->forceFill([
            'password' => Hash::make($data['password']),
        ])->save();

        Redis::del("reset_token:{$userId}");
        Redis::del("otp_cooldown:{$userId}");
        session()->forget('reset_otp_user_id');

        $message = "Halo {$user->name},\n\n"
            ."Password akun PPDB MTsN 1 Pandeglang Anda telah berhasil diubah.\n\n"
            .'Jika Anda tidak merasa melakukan perubahan ini, segera hubungi panitia PPDB.';

        app(WhatsAppService::class)->send($user->telepon, $message);

        Notification::make()
            ->title('Password berhasil diubah.')
            ->body('Silakan login dengan password baru Anda.')
            ->success()
            ->send();

        $this->redirect(filament()->getLoginUrl());
    }

    public function resend(): void
    {
        $userId = session('reset_otp_user_id');
        $user = User::find($userId);

        if (! $user) {
            Notification::make()->title('Sesi tidak valid.')->danger()->send();

            return;
        }

        $cooldownKey = "otp_cooldown:{$userId}";
        if (Redis::exists($cooldownKey)) {
            $ttl = Redis::ttl($cooldownKey);
            Notification::make()
                ->title("Tunggu {$ttl} detik sebelum meminta OTP baru.")
                ->warning()
                ->send();

            return;
        }

        $otp = str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);

        Redis::setex("reset_otp:{$userId}", 300, $otp);
        Redis::setex($cooldownKey, 60, 1);

        $message = "Halo {$user->name},\n\n"
            ."Kode OTP baru reset password PPDB MTsN 1 Pandeglang Anda:\n\n"
            ."*{$otp}*\n\n"
            .'Kode berlaku selama 5 menit. Jangan bagikan kode ini kepada siapapun.';

        app(WhatsAppService::class)->send($user->telepon, $message);

        Notification::make()
            ->title('Kode OTP baru telah dikirim ke WhatsApp Anda.')
            ->success()
            ->send();
    }

    public function getTitle(): string
    {
        return $this->step === 'otp' ? 'Verifikasi OTP' : 'Buat Password Baru';
    }
}
