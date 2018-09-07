<?php

namespace Loyep;

use Illuminate\Support\ServiceProvider;

class LoyepServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
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
