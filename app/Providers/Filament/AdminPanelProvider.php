<?php

namespace App\Providers\Filament;

use App\Filament\Pages\Auth\EditProfileCustom;
use App\Filament\Pages\Auth\LoginCustom;
use App\Filament\Pages\Auth\RegisterCustom;
use App\Filament\Resources\UserResource;
use BezhanSalleh\FilamentShield\FilamentShieldPlugin;
use Devonab\FilamentEasyFooter\EasyFooterPlugin;
use DiogoGPinto\AuthUIEnhancer\AuthUIEnhancerPlugin;
use Filament\Enums\ThemeMode;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\MenuItem;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Support\Enums\MaxWidth;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            // ->brandLogo(fn() => view('logo'))
            // ->brandLogoHeight('1.25rem')
            ->maxContentWidth(MaxWidth::Full)
            ->unsavedChangesAlerts()
            ->databaseNotifications()
            // ->defaultThemeMode(ThemeMode::Light)
            ->brandLogo(asset('/img/brand.png'))
            ->brandLogoHeight('2.6rem')
            ->topNavigation()
            ->login(LoginCustom::class)
            ->registration(RegisterCustom::class)
            ->id('admin')
            ->profile(EditProfileCustom::class, isSimple: false)
            ->path('')
            ->colors([
                'primary' => Color::Cyan,
            ])
            ->userMenuItems([
                MenuItem::make()
                    ->label('Verifikasi Pengguna')
                    ->url(fn (): string => UserResource::getUrl())
                    ->icon('heroicon-o-identification')
                    ->visible(fn () => Auth::user()->username === 'administrator'),
            ])
            ->default()
            ->spa()
            ->passwordReset()
            ->emailVerification()
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
                FilamentShieldPlugin::make()
                    ->gridColumns([
                        'default' => 1,
                        'sm' => 2,
                        'lg' => 3,
                    ])
                    ->sectionColumnSpan(1)
                    ->checkboxListColumns([
                        'default' => 1,
                        'sm' => 2,
                        'lg' => 4,
                    ])
                    ->resourceCheckboxListColumns([
                        'default' => 1,
                        'sm' => 2,
                    ]),

                EasyFooterPlugin::make()
                    ->withFooterPosition('footer')
                    ->withLoadTime('Halaman ini dimuat dalam')
                    ->withLinks([
                        ['title' => 'Dibuat dan dikembangkan dengan ❤ oleh Yahya Zulfikri', 'url' => 'https://instagram.com/zulfikriyahya_'],
                    ])
                    ->withBorder(),

                // Pastikan variabel tema hanya digunakan pada bagian yang relevan
                AuthUIEnhancerPlugin::make()
                    ->formPanelPosition('left')
                    ->formPanelWidth('35%')
                    ->formPanelBackgroundColor(Color::hex('#010101'))
                    ->emptyPanelBackgroundImageUrl('/img/wallpaper.png')
                    ->emptyPanelBackgroundColor(Color::hex('#010101'))
                    ->showEmptyPanelOnMobile(false),
            ]);
    }
}
