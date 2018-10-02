<?php

namespace MyVendor\Superkora;

use Illuminate\Support\ServiceProvider;

class SuperkoraServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'myvendor');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'myvendor');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }



    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //$this->mergeConfigFrom(__DIR__.'/../config/superkora.php', 'superkora');

        // Register the service the package provides.
        $this->app->singleton('superkora', function ($app) {
            return new Superkora;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['superkora'];
    }
    
    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/superkora.php' => config_path('superkora.php'),
        ], 'superkora.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/myvendor'),
        ], 'superkora.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/myvendor'),
        ], 'superkora.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/myvendor'),
        ], 'superkora.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
