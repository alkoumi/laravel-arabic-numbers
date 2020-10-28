<?php

namespace Alkoumi\LaravelArabicNumbers;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class LaravelArabicNumbersServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        AliasLoader::getInstance()->alias('Numbers', Numbers::class);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('numbers', function ($app) {
            return $this->app->make(Numbers::class);
        });
    }
}
