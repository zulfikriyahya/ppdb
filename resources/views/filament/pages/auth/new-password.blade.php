<x-filament-panels::page.simple>
    <x-filament-panels::form wire:submit="simpanPassword">
        {{ $this->form }}

        <x-filament::button type="submit" size="lg" class="w-full">
            Simpan Password Baru
        </x-filament::button>
    </x-filament-panels::form>

    <div class="mt-6 text-sm text-center">
        <a
            href="{{ route('otp.forgot-password') }}"
            class="font-medium text-gray-500 transition duration-200 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-200"
        >
            &larr; Kembali
        </a>
    </div>
</x-filament-panels::page.simple>
