<?php

namespace App\Providers;

use Illuminate\Support\Carbon;
use Illuminate\Support\ServiceProvider;
use Filament\Support\Facades\FilamentColor;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // FilamentColor::register([]);
    }

    public function boot(): void
    {
        setlocale(LC_TIME, 'id_ID.utf8');
        Carbon::setLocale('id');
    }
}
