<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Filament\Http\Middleware\Authenticate;
use Filament\Facades\Filament;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Filament::registerRoutes();
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
