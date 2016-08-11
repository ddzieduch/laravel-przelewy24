<?php

namespace Initbizlab\Przelewy24;

use Illuminate\Support\ServiceProvider;

class Przelewy24ServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     */
    public function boot()
    {
        $this->bootConfig();
    }

    /**
     * Booting configure.
     */
    protected function bootConfig()
    {
        $path = __DIR__ . '/config/przelewy24.php';

        $this->mergeConfigFrom($path, 'przelewy24');

        if (function_exists('config_path')) {
            $this->publishes([$path => config_path('przelewy24.php')]);
        }
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->bind('przelewy24', function ($app) {
            return new Przelewy24(
                $app['config']['przelewy24.merchantId'],
                $app['config']['przelewy24.posId'],
                $app['config']['przelewy24.salt'],
                $app['config']['przelewy24.testMode']
            );
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['przelewy24'];
    }
}
