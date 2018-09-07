<?php

namespace Loyep\Planet;

use Illuminate\Support\ServiceProvider;

class PlanetServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ( $this->app->runningInConsole() ) {
            $this->registerPublishing();
        }
    }

    /**
     * Register the package's publishable resources.
     *
     * @return void
     */
    protected function registerPublishing()
    {

        $this->publishes([
            __DIR__.'/Console/Commands/stubs/PlanetServiceProvider.stub' => app_path('Providers/PlanetServiceProvider.php'),
        ], 'planet-provider');

        $this->publishes([
            __DIR__ . '/../config/planet.php' => config_path('planet.php'),
        ], 'planet-config');

//        $this->publishes([
//            __DIR__ . '/../public' => public_path('planet-assets'),
//        ], 'planet-assets');

//        $this->publishes([
//            __DIR__ . '/../resources/lang' => resource_path('lang/vendor/nova'),
//        ], 'planet-lang');

//        $this->publishes([
//            __DIR__ . '/../resources/views/partials' => resource_path('views/vendor/planet/partials'),
//        ], 'planet-views');

        $this->publishes([
            __DIR__ . '/../database/migrations' => database_path('migrations'),
        ], 'planet-migrations');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('planet', function () {
            return new Planet();
        });

        $this->commands([
            Console\Commands\InstallCommand::class,
            Console\Commands\PublishCommand::class,
        ]);
    }
}
