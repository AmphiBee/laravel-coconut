<?php
namespace AmphiBee\LaravelCoconut;

use Illuminate\Support\ServiceProvider;

class CoconutProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('coconut.php'),
            ], 'config');
        }

        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'coconut');

        // Register the main class to use with the facade
        $this->app->singleton('coconut', function () {
            return new \Coconut\Client(
                config('coconut.api_key'),
                [
                    'storage' => config('coconut.storages')[config('coconut.storage')]
                ]

            );
        });
    }
}
