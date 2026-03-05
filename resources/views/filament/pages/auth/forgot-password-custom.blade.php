<x-filament-panels::page.simple>
    <x-filament-panels::form wire:submit="kirim">
        {{ $this->form }}

        <x-filament::button type="submit" size="lg" class="w-full">
            Kirim Kode OTP
        </x-filament::button>
    </x-filament-panels::form>

    <div class="mt-6 text-sm text-center text-gray-600 dark:text-gray-400">
        Sudah ingat password?
        <a
            href="{{ filament()->getLoginUrl() }}"
            class="font-semibold transition duration-200 text-primary-600 hover:text-primary-500 hover:underline dark:text-primary-400 dark:hover:text-primary-300"
        >
            Kembali ke Login
        </a>
    </div>
</x-filament-panels::page.simple>
