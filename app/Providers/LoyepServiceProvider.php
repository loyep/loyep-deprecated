<?php

namespace App\Providers;

use App\Services\Loyep;
use Illuminate\Support\ServiceProvider;

class LoyepServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->routes();
        $this->loadViewsFrom(resource_path('/loyep/views'), 'planet');
    }

    /**
     * Register the Planet routes.
     *
     * @return void
     */
    protected function routes()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('loyep', function () {
            return new Loyep();
        });
    }
}
