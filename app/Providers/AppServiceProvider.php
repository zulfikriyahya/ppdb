<?php

namespace App\Providers;

use App\Models\CalonSiswa;
use App\Observers\CalonSiswaObserver;
use Illuminate\Support\Carbon;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        setlocale(LC_TIME, 'id_ID.utf8');
        Carbon::setLocale('id');
        CalonSiswa::observe(CalonSiswaObserver::class);
    }
}
