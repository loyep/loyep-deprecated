<?php

namespace Loyep\Planet;

use Illuminate\Events\Dispatcher;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use Loyep\Planet\Http\Middleware\Authenticate;
use Loyep\Planet\Http\Middleware\RedirectIfAuthenticated;

class PlanetServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap services.
     *
     * @param Router $router
     * @param Dispatcher $dispatcher
     */
    public function boot(Router $router, Dispatcher $dispatcher)
    {
        if ( $this->app->runningInConsole() ) {
            $this->registerPublishing();
        }

        $router->aliasMiddleware('planet.auth', Authenticate::class);
        $router->aliasMiddleware('planet.guest', RedirectIfAuthenticated::class);

        $this->registerResources();
    }

    /**
     * Register the package's publishable resources.
     *
     * @return void
     */
    protected function registerPublishing()
    {

        $this->publishes([
            __DIR__ . '/Console/Commands/stubs/PlanetServiceProvider.stub' => app_path('Providers/PlanetServiceProvider.php'),
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
     * Register the package resources such as routes, templates, etc.
     *
     * @return void
     */
    protected function registerResources()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'planet');
//        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'nova');
//        $this->loadJsonTranslationsFrom(resource_path('lang/vendor/nova'));
//
//        if (Nova::runsMigrations()) {
//            $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
//        }
//
//        $this->registerRoutes();
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
