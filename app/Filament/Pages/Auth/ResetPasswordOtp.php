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
use Illuminate\Support\Facades\Redis;

class ResetPasswordOtp extends SimplePage implements HasForms
{
    use InteractsWithForms;

    protected static string $view = 'filament.pages.auth.reset-password-otp';

    protected static bool $shouldRegisterNavigation = false;

    public ?array $data = [];

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
            ->schema([
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
            ])
            ->statePath('data');
    }

    public function verifikasiOtp(): void
    {
        $data = $this->form->getState();
        $userId = session('reset_otp_user_id');
        $user = User::find($userId);

        if (! $user) {
            Notification::make()->title('Sesi tidak valid. Silakan ulangi proses lupa password.')->danger()->send();
            $this->redirect(route('otp.forgot-password'));

            return;
        }

        $storedOtp = Redis::get("reset_otp:{$userId}");

        if (! $storedOtp) {
            Notification::make()->title('Kode OTP sudah kadaluarsa.')->body('Silakan minta kode OTP baru.')->danger()->send();

            return;
        }

        // OPTIMASI: Mencegah Timing Attack
        if (! hash_equals((string) $storedOtp, (string) $data['otp'])) {
            Notification::make()->title('Kode OTP tidak valid.')->body('Periksa kembali kode yang dikirim ke WhatsApp Anda.')->danger()->send();

            return;
        }

        Redis::del("reset_otp:{$userId}");
        Redis::setex("reset_token:{$userId}", 900, 1);

        Notification::make()->title('OTP valid. Silakan buat password baru.')->success()->send();
        $this->redirect(route('otp.new-password'));
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
            Notification::make()->title("Tunggu {$ttl} detik sebelum meminta OTP baru.")->warning()->send();

            return;
        }

        $otp = str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);
        Redis::setex("reset_otp:{$userId}", 300, $otp);
        Redis::setex($cooldownKey, 60, 1);

        $message = "Halo {$user->name},\n\nKode OTP baru reset password PPDB MTsN 1 Pandeglang Anda:\n\n*{$otp}*\n\nKode berlaku selama 5 menit. Jangan bagikan kode ini kepada siapapun.";

        app(WhatsAppService::class)->send(
            phone: $user->telepon,
            message: $message,
            minDelay: 1,
            maxDelay: 5,
        );

        Notification::make()->title('Kode OTP baru telah dikirim ke WhatsApp Anda.')->success()->send();
    }

    public function getTitle(): string
    {
        return 'Verifikasi OTP';
    }
}
