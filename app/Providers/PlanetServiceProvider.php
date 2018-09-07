<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Loyep\Planet\Facades\Planet;

class PlanetServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->routes();
    }

    /**
     * Register the Planet routes.
     *
     * @return void
     */
    protected function routes()
    {
        //
        Planet::routes();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
