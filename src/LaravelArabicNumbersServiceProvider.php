<?php

namespace Alkoumi\LaravelArabicNumbers;

use Alkoumi\LaravelArabicNumbers\Http\Middleware\ConvertArabicDigitsToEnlishMiddleware;
use Illuminate\Contracts\Http\Kernel;
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
        // Facade
        $this->app->singleton('numbers', function ($app) {
            return $this->app->make(Numbers::class);
        });

        //Auto Register The Midddleware
        $kernel = $this->app->make(Kernel::class);
        $kernel->pushMiddleware(ConvertArabicDigitsToEnlishMiddleware::class);
    }
}
