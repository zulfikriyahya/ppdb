<?php

namespace App\Providers\Filament;

use Filament\Pages;
use Filament\Panel;
use Filament\Widgets;
use Filament\PanelProvider;
use Filament\Navigation\MenuItem;
use Filament\Support\Colors\Color;
use Filament\Support\Enums\MaxWidth;
use Illuminate\Support\Facades\Auth;
use App\Filament\Resources\UserResource;
use Filament\Http\Middleware\Authenticate;
use Illuminate\Session\Middleware\StartSession;
use Devonab\FilamentEasyFooter\EasyFooterPlugin;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Filament\Http\Middleware\AuthenticateSession;
use DiogoGPinto\AuthUIEnhancer\AuthUIEnhancerPlugin;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Andreia\FilamentNordTheme\FilamentNordThemePlugin;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->spa()
            // ->brandLogo(fn() => view('logo'))
            // ->brandLogoHeight('1.25rem')
            ->maxContentWidth(MaxWidth::Full)
            ->unsavedChangesAlerts()
            ->databaseNotifications()
            ->topNavigation()
            ->id('admin')
            ->path('admin')
            ->login()
            ->registration()
            // ->passwordReset()
            ->emailVerification()
            ->colors([
                'primary' => Color::Cyan,
            ])
            ->userMenuItems([
                MenuItem::make()
                    ->label('Profile')
                    ->url(fn(): string => UserResource::getUrl('edit', ['record' => Auth::user()->id])) // Arahkan ke halaman edit user yang sedang login
                    ->icon('heroicon-o-identification'),
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                // Widgets\AccountWidget::class,
                // Widgets\FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->theme(asset('css/filament/admin/theme.css'))
            ->viteTheme('resources/css/filament/admin/theme.css')
            ->plugins([
                EasyFooterPlugin::make()
                    ->withFooterPosition('footer')
                    ->withLoadTime('Halaman ini dimuat dalam')
                    ->withLinks([
                        // ['title' => 'Official Website', 'url' => 'https://www.mtsn1pandeglang.sch.id/'],
                        // ['title' => 'Kebijakan Privasi', 'url' => 'https://www.mtsn1pandeglang.sch.id/kebijakan-privasi/'],
                        // ['title' => 'Tentang Kami', 'url' => 'https://www.mtsn1pandeglang.sch.id/about/'],
                        // ['title' => 'Kontak', 'url' => 'https://wa.me/6289612050291/?text=Hallo,%20PTSP%20MTs%20Negeri%201%20Pandeglang.'],
                        ['title' => 'Dibuat dan dikembangkan dengan ❤ oleh Yahya Zulfikri', 'url' => 'https://instagram.com/zulfikriyahya_'],
                    ])
                    ->withBorder(),
                // ->hiddenFromPagesEnabled()
                // ->hiddenFromPages(['admin/login', 'admin/forgot-password', 'admin/register', 'admin/email/verify']),

                // Tema
                // FilamentNordThemePlugin::make(),
                AuthUIEnhancerPlugin::make()->formPanelPosition('right')->mobileFormPanelPosition('top')->formPanelWidth('40%')/* ->formPanelBackgroundColor(Color::Zinc, '300')*/->emptyPanelBackgroundImageUrl('/img/bendera.png')->showEmptyPanelOnMobile(false),
            ]);
    }
}
