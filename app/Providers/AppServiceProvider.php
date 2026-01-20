<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        /**
         * Force HTTPS in production and staging environments.
         * This ensures the asset() helper generates HTTPS URLs
         * and prevents mixed content warnings on Railway.
         */
        if ($this->app->environment(['production', 'staging'])) {
            URL::forceScheme('https');
        }
    }
}
