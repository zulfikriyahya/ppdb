<x-filament-panels::page.simple>
    <x-filament-panels::form wire:submit="kirim">
        {{ $this->form }}

        <x-filament::button type="submit" size="lg" class="w-full">
            Kirim Kode OTP
        </x-filament::button>
    </x-filament-panels::form>

    <div class="mt-4 text-sm text-center text-gray-500 dark:text-gray-400">
        Sudah ingat password?
        <a href="{{ filament()->getLoginUrl() }}" class="font-medium text-primary-600 hover:underline">
            Kembali ke Login
        </a>
    </div>
</x-filament-panels::page.simple>
