<x-filament-panels::page.simple>
    <x-filament-panels::form wire:submit="verifikasi">
        {{ $this->form }}

        <x-filament::button
            type="submit"
            size="lg"
            class="w-full"
        >
            Verifikasi
        </x-filament::button>
    </x-filament-panels::form>

    <div class="mt-4 text-sm text-center text-gray-500 dark:text-gray-400">
        Belum menerima kode OTP?
        <button
            wire:click="resend"
            type="button"
            class="font-medium text-primary-600 hover:underline"
        >
            Kirim ulang
        </button>
    </div>
</x-filament-panels::page.simple>
