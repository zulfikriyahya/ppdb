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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class VerifikasiOtp extends SimplePage implements HasForms
{
    use InteractsWithForms;

    protected static string $view = 'filament.pages.auth.verifikasi-otp';
    protected static bool $shouldRegisterNavigation = false;

    public ?array $data = [];

    public function mount(): void
    {
        if (! session('otp_user_id')) {
            $this->redirect(filament()->getLoginUrl());
            return;
        }

        $user = User::find(session('otp_user_id'));
        if ($user?->hasVerifiedEmail()) {
            $this->redirect(filament()->getUrl());
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

    public function verifikasi(): void
    {
        $data = $this->form->getState();
        $userId = session('otp_user_id');
        $user = User::find($userId);

        if (! $user) {
            Notification::make()->title('Sesi tidak valid. Silakan daftar ulang.')->danger()->send();
            $this->redirect(filament()->getLoginUrl());
            return;
        }

        $storedOtp = Redis::get("otp:{$userId}");

        if (! $storedOtp) {
            Notification::make()->title('Kode OTP sudah kadaluarsa.')->body('Silakan minta kode OTP baru.')->danger()->send();
            return;
        }

        // OPTIMASI: Mencegah Timing Attack
        if (! hash_equals((string) $storedOtp, (string) $data['otp'])) {
            Notification::make()->title('Kode OTP tidak valid.')->body('Periksa kembali kode yang dikirim ke WhatsApp Anda.')->danger()->send();
            return;
        }

        $user->forceFill([
            'email_verified_at' => now(),
            'status' => 'Aktif',
        ])->save();

        Redis::del("otp:{$userId}");
        Redis::del("otp_cooldown:{$userId}");
        session()->forget('otp_user_id');

        Auth::login($user);

        Notification::make()->title('Akun berhasil diverifikasi!')->body('Selamat datang di PPDB MTsN 1 Pandeglang.')->success()->send();
        $this->redirect(filament()->getUrl());
    }

    public function resend(): void
    {
        $userId = session('otp_user_id');
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
        Redis::setex("otp:{$userId}", 300, $otp);
        Redis::setex($cooldownKey, 60, 1);

        $message = "Halo {$user->name},\n\nKode OTP baru verifikasi akun PPDB MTsN 1 Pandeglang Anda:\n\n*{$otp}*\n\nKode berlaku selama 5 menit. Jangan bagikan kode ini kepada siapapun.";
        app(WhatsAppService::class)->send($user->telepon, $message);

        Notification::make()->title('Kode OTP baru telah dikirim ke WhatsApp Anda.')->success()->send();
    }

    public function getTitle(): string
    {
        return 'Verifikasi OTP';
    }
}
