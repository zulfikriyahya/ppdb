@php
    use Filament\Support\Enums\MaxWidth;
@endphp

<footer
    @class([
        'fi-footer my-4 flex flex-wrap items-center justify-center gap-x-6 gap-y-2 text-sm text-gray-500 dark:text-gray-400',
        'border-t border-gray-200 dark:border-gray-700 py-4 text-center' => in_array($footerPosition, ['sidebar', 'sidebar.footer']) || $borderTopEnabled,
        'fi-sidebar flex-col md:flex-row' => in_array($footerPosition, ['sidebar', 'sidebar.footer']),
        'mx-auto w-full px-4 md:px-6 lg:px-8' => $footerPosition === 'footer',
        match ($maxContentWidth ??= filament()->getMaxContentWidth() ?? MaxWidth::SevenExtraLarge) {
            MaxWidth::ExtraSmall, 'xs' => 'max-w-xs',
            MaxWidth::Small, 'sm' => 'max-w-sm',
            MaxWidth::Medium, 'md' => 'max-w-md',
            MaxWidth::Large, 'lg' => 'max-w-lg',
            MaxWidth::ExtraLarge, 'xl' => 'max-w-xl',
            MaxWidth::TwoExtraLarge, '2xl' => 'max-w-2xl',
            MaxWidth::ThreeExtraLarge, '3xl' => 'max-w-3xl',
            MaxWidth::FourExtraLarge, '4xl' => 'max-w-4xl',
            MaxWidth::FiveExtraLarge, '5xl' => 'max-w-5xl',
            MaxWidth::SixExtraLarge, '6xl' => 'max-w-6xl',
            MaxWidth::SevenExtraLarge, '7xl' => 'max-w-7xl',
            MaxWidth::Full, 'full' => 'max-w-full',
            default => $maxContentWidth,
        } => $footerPosition === 'footer',
    ])
>
    <!-- Copyright & Title -->
    <div class="flex items-center gap-2 font-medium text-gray-600 dark:text-gray-300">
        <a href="https://mtsn1pandeglang.sch.id" target="_blank" class="transition hover:text-primary-600 dark:hover:text-primary-400">
            &copy; 1970 &mdash; {{ now()->format('Y') }} MTs Negeri 1 Pandeglang
        </a>

        @if($sentence)
            <span class="hidden md:inline">&bull;</span>
            <span class="inline-flex items-center">
                @if($isHtmlSentence)
                    {!! $sentence !!}
                @else
                    {{ $sentence }}
                @endif
            </span>
        @endif
    </div>

    <!-- Links -->
    @if(count($links) > 0)
        <ul class="flex items-center gap-4">
            @foreach($links as $link)
                <li>
                    <a href="{{ $link['url'] }}" target="_blank" class="font-medium transition hover:text-primary-600 dark:hover:text-primary-400">
                        {{ $link['title'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    @endif

    <!-- Logo -->
    @if($logoPath)
        <div class="flex items-center gap-2">
            @if($logoText)
                <span class="font-medium">{{ $logoText }}</span>
            @endif
            @if($logoUrl)
                <a href="{{ $logoUrl }}" target="_blank" class="transition hover:opacity-80">
            @endif
                <img src="{{ $logoPath }}" alt="Logo Footer" class="object-contain w-auto" style="height: {{ $logoHeight }}px;">
            @if($logoUrl)
                </a>
            @endif
        </div>
    @endif

    <!-- Github Info -->
    @if($githubEnabled)
        <div class="flex items-center pl-4 border-l border-gray-300 dark:border-gray-600">
            <livewire:devonab.filament-easy-footer.github-version :show-logo="$showLogo" :show-url="$showUrl" />
        </div>
    @endif

    <!-- Load Time -->
    @if($loadTime)
        <div class="font-mono text-xs text-gray-400 dark:text-gray-500">
            {{ $loadTimePrefix ?? '' }} {{ $loadTime }}s 🚀
        </div>
    @endif
</footer>
