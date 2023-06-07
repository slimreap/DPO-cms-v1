<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Filament\Navigation\UserMenuItem;
use Filament\Navigation\NavigationItem;
use Illuminate\Support\ServiceProvider;


class FilamentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Filament::serving(function () {
            // Using Vite
            // Filament::registerViteTheme('resources/css/filament.css');

            // Using Laravel Mix
            Filament::registerTheme(
                mix('css/filament-custom.css'),
            );       
        });
        
    }
}
