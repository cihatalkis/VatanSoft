<?php

namespace CihatAlkis\VatanSoft;

/**
 * Laravel 9 VatanSoft SMS
 * @license MIT License
 * @author Cihat Alkis <cihadaklis@icloud.com>
 * @link https://cihatalkis.pw
 *
 */

use Illuminate\Support\ServiceProvider;

class VatanSoftServiceProvider extends ServiceProvider
{

    /**
     * @var bool $defer Indicates if loading of the provider is deferred.
     */
    protected $defer = false;

    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        //the configuration file to be shared
        $this->publishes([
            __DIR__ . '/../../config/VatanSoft.php' => config_path('VatanSoft.php'),
        ], 'config');

        //the translations file to be share
        $this->loadTranslationsFrom(__DIR__ . '/../../lang', 'VatanSoft');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('VatanSoft', function ($app) {
            return new VatanSoft($app);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['VatanSoft'];
    }
}
