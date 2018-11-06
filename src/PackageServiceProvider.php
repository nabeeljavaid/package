<?php

namespace Nabeeljavaid\Package;

use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Load Routes
        $this->loadRoutesFrom(__DIR__ . '/routes.php');

        // Load Language
        $this->loadTranslationsFrom( __DIR__ . '/../resources/lang', 'package');

        // Load Views
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'package');

        // Publish Config
        $this->publishes([
            __DIR__ . '/../config/package.php' => config_path('package.php'),
        ], 'config');

        // Publish Migrations
        $this->publishes([
        __DIR__.'/../database/migrations/' => database_path('migrations')
        ], 'migrations');

        // Publish Resources
        $this->publishes([
            __DIR__ . '/../resources/assets' => resource_path('assets/vendor/package'),
            __DIR__ . '/../resources/views' => resource_path('views/vendor/package'),
            __DIR__ . '/../resources/lang' => resource_path('lang/vendor/package'),
        ], 'resources');


    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // Config
        $this->mergeConfigFrom( __DIR__ . '/../config/package.php', 'package');

        // Controllers
        $this->app->make('Nabeeljavaid\Package\Controllers\PackageController');
    }
}
