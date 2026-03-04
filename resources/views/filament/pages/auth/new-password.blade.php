<x-filament-panels::page.simple>
    <x-filament-panels::form wire:submit="simpanPassword">
        {{ $this->form }}

        <x-filament::button type="submit" size="lg" class="w-full">
            Simpan Password Baru
        </x-filament::button>
    </x-filament-panels::form>

    <div class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">
        <a href="{{ route('otp.forgot-password') }}" class="font-medium text-primary-600 hover:underline">
            Kembali
        </a>
    </div>
</x-filament-panels::page.simple>
