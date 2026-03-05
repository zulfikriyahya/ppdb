<x-filament-panels::page.simple>
    <x-filament-panels::form wire:submit="verifikasiOtp">
        {{ $this->form }}

        <x-filament::button type="submit" size="lg" class="w-full">
            Verifikasi OTP
        </x-filament::button>
    </x-filament-panels::form>

    <div class="mt-6 space-y-4 text-sm text-center text-gray-600 dark:text-gray-400">
        <div>
            Belum menerima kode OTP?
            <button
                wire:click="resend"
                wire:loading.attr="disabled"
                wire:loading.class="opacity-50 cursor-not-allowed"
                type="button"
                class="font-semibold transition duration-200 text-primary-600 hover:text-primary-500 hover:underline dark:text-primary-400 dark:hover:text-primary-300"
            >
                Kirim ulang
            </button>
        </div>

        <div>
            <a
                href="{{ route('otp.forgot-password') }}"
                class="inline-block font-medium text-gray-500 transition duration-200 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-200"
            >
                &larr; Kembali
            </a>
        </div>
    </div>
</x-filament-panels::page.simple>
