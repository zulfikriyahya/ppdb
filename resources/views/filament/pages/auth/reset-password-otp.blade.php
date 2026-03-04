<x-filament-panels::page.simple>
    <x-filament-panels::form wire:submit="{{ $step === 'otp' ? 'verifikasiOtp' : 'simpanPassword' }}">
        {{ $this->form }}

        <x-filament::button type="submit" size="lg" class="w-full">
            {{ $step === 'otp' ? 'Verifikasi OTP' : 'Simpan Password Baru' }}
        </x-filament::button>
    </x-filament-panels::form>

    @if ($step === 'otp')
        <div class="mt-4 text-sm text-center text-gray-500 dark:text-gray-400">
            Belum menerima kode OTP?
            <button wire:click="resend" type="button" class="font-medium text-primary-600 hover:underline">
                Kirim ulang
            </button>
        </div>
    @endif

    <div class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">
        <a href="{{ route('otp.forgot-password') }}" class="font-medium text-primary-600 hover:underline">
            Kembali
        </a>
    </div>
</x-filament-panels::page.simple>
