<?php

namespace App\Providers\Filament;

use App\Filament\Pages\Auth\EditProfileCustom;
use App\Filament\Pages\Auth\LoginCustom;
use App\Filament\Pages\Auth\RegisterCustom;
use App\Filament\Resources\CalonSiswaResource\Widgets\FormulirOverview;
use App\Filament\Resources\InformasiResource\Widgets\InformasiPublished;
use App\Filament\Resources\UserResource;
use App\Filament\Resources\UserResource\Widgets\UserRegisters;
use BezhanSalleh\FilamentShield\FilamentShieldPlugin;
use Carbon\Carbon;
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
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        // Variabel default untuk halaman registrasi
        $registerClass = $this->handleRegistrationRedirect();

        return $panel
            ->id('admin')
            ->path('')
            ->default()
            ->spa()
            ->topNavigation()
            ->login(LoginCustom::class)
            ->registration($registerClass)
            ->emailVerification()
            ->passwordReset()
            ->profile(EditProfileCustom::class)
            ->globalSearch(false)
            ->maxContentWidth(MaxWidth::Full)
            ->unsavedChangesAlerts()
            ->databaseNotifications()
            ->defaultThemeMode(ThemeMode::Dark)
            ->favicon(asset('/favicon.ico'))
            ->darkModeBrandLogo(asset('/img/brand-darkmode.png'))
            ->brandLogo(asset('/img/brand-lightmode.png'))
            ->brandLogoHeight('2.6rem')
            ->colors([
                'primary' => Color::Green,
            ])
            ->userMenuItems([
                MenuItem::make()
                    ->label('Manajemen Pengguna')
                    ->url(fn (): string => UserResource::getUrl())
                    ->icon('heroicon-o-identification')
                    // ->visible(fn() => Auth::user()?->roles?->first()?->name === 'administrator'),
                    ->visible(fn () => Auth::user()?->roles?->where('name', 'administrator')->first() !== null),
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                // AccountWidget::class,
                FormulirOverview::class,
                InformasiPublished::class,
                UserRegisters::class,
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
                    ->withLinks([
                        ['title' => 'Dibuat dan dikembangkan dengan ❤ oleh Yahya Zulfikri', 'url' => 'https://instagram.com/zulfikriyahya_'],
                    ])
                    ->withLoadTime('Halaman ini dimuat dalam')
                    ->withBorder(),

                AuthUIEnhancerPlugin::make()
                    ->formPanelPosition('left')
                    ->formPanelWidth('45%')
                    ->formPanelBackgroundColor(Color::hex('#010101'))
                    ->emptyPanelBackgroundImageUrl('img/wallpaper.png')
                    ->emptyPanelBackgroundColor(Color::hex('#010101'))
                    ->showEmptyPanelOnMobile(false),
            ]);
    }

    /**
     * Fungsi untuk menangani redirect berdasarkan tanggal pendaftaran
     * Aktifkan setelah proses migrasi database
     */
    protected function handleRegistrationRedirect(): string
    {
        try {
            // Cek apakah koneksi database tersedia
            if (! Schema::hasTable('tahun_pendaftarans')) {
                // Jika tabel tidak ada, arahkan langsung ke LoginCustom
                return LoginCustom::class;
            }

            $tahunPendaftaran = DB::table('tahun_pendaftarans')
                ->where('status', 'Aktif')
                ->first();

            if (! $tahunPendaftaran) {
                // Jika data tidak ditemukan, arahkan ke LoginCustom
                return LoginCustom::class;
            }

            // Parsing tanggal pendaftaran
            $startDate = Carbon::createFromFormat('Y-m-d H:i:s', $tahunPendaftaran->tanggal_ppdb_mulai);
            $endDate = Carbon::createFromFormat('Y-m-d H:i:s', $tahunPendaftaran->tanggal_ppdb_selesai);
            $currentDate = Carbon::now();

            // Cek apakah tanggal sekarang berada di dalam rentang pendaftaran
            if ($currentDate->lt($startDate) || $currentDate->gt($endDate)) {
                // Jika di luar rentang, arahkan ke LoginCustom
                return LoginCustom::class;
            }
        } catch (\Exception $e) {
            // Tangani error (misalnya, masalah parsing tanggal atau database tidak tersedia)
            Log::error('Error memproses tanggal atau database: '.$e->getMessage());

            return LoginCustom::class;
        }

        return RegisterCustom::class;
    }
}
