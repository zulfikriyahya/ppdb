<x-filament-panels::page.simple>
    <x-filament-panels::form wire:submit="verifikasi">
        {{ $this->form }}

        <x-filament::button type="submit" size="lg" class="w-full">
            Verifikasi
        </x-filament::button>
    </x-filament-panels::form>

    <div class="mt-6 text-sm text-center text-gray-600 dark:text-gray-400">
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
</x-filament-panels::page.simple>
