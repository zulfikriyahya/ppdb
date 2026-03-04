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

class ForgotPasswordCustom extends SimplePage implements HasForms
{
    use InteractsWithForms;

    protected static string $view = 'filament.pages.auth.forgot-password-custom';

    protected static bool $shouldRegisterNavigation = false;

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill();
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('identity')
                    ->label('Username / Email / Nomor WhatsApp')
                    ->required()
                    ->suffixIcon('heroicon-o-user')
                    ->autofocus()
                    ->placeholder('Masukkan salah satu')
                    ->validationMessages([
                        'required' => 'Field ini wajib diisi.',
                    ]),
            ])
            ->statePath('data');
    }

    public function kirim(): void
    {
        $data = $this->form->getState();
        $identity = trim($data['identity']);

        // Cari user berdasarkan username, email, atau telepon
        $user = User::where('username', $identity)
            ->orWhere('email', $identity)
            ->orWhere('telepon', $identity)
            ->where('status', 'Aktif')
            ->first();

        // Selalu tampilkan pesan sukses untuk mencegah user enumeration
        if (! $user) {
            Notification::make()
                ->title('Data tidak ditemukan.')
                ->success()
                ->send();

            return;
        }

        if (! $user->telepon) {
            Notification::make()
                ->title('Akun ini tidak memiliki nomor WhatsApp terdaftar.')
                ->body('Hubungi panitia PPDB untuk bantuan.')
                ->danger()
                ->send();

            return;
        }

        // Cek cooldown
        $cooldownKey = "otp_cooldown:{$user->id}";
        if (Redis::exists($cooldownKey)) {
            $ttl = Redis::ttl($cooldownKey);
            Notification::make()
                ->title("Tunggu {$ttl} detik sebelum meminta OTP baru.")
                ->warning()
                ->send();

            return;
        }

        $otp = str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);

        Redis::setex("reset_otp:{$user->id}", 300, $otp);   // OTP TTL 5 menit
        Redis::setex($cooldownKey, 60, 1);                    // cooldown 60 detik

        $message = "Halo {$user->name},\n\n"
            ."Kode OTP reset password PPDB MTsN 1 Pandeglang Anda:\n\n"
            ."*{$otp}*\n\n"
            .'Kode berlaku selama 5 menit. Jangan bagikan kode ini kepada siapapun.';

        app(WhatsAppService::class)->send($user->telepon, $message);

        session(['reset_otp_user_id' => $user->id]);

        Notification::make()
            ->title('Kode OTP telah dikirim ke WhatsApp Anda.')
            ->success()
            ->send();

        $this->redirect(route('otp.reset-password'));
    }

    public function getTitle(): string
    {
        return 'Lupa Password';
    }
}
