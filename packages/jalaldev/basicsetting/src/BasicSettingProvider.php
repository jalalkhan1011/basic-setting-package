<?php

namespace Jalaldev\Basicsetting;

use Illuminate\Support\ServiceProvider;

class BasicSettingProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->make('Jalaldev\Basicsetting\BasicSettingController');
        $this->loadViewsFrom(__DIR__.'/resources/views','basicsetting');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        include __DIR__.'/routes/web.php';
    }
}
