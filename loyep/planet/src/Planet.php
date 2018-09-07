<?php

namespace Loyep\Planet;

use Illuminate\Support\Facades\Route;

class Planet
{
    /**
     * Create a new Planet instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Register the typical authentication routes for an application.
     *
     * @param  array $options
     * @return void
     */
    public function routes(array $options = [])
    {
        Route::group($this->routeConfiguration(), function () use ($options) {

            Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
            Route::post('login', 'Auth\LoginController@login');
            Route::post('logout', 'Auth\LoginController@logout')->name('logout');


            // Password Reset Routes...
            Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
            Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
            Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
            Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

            if ( $options['register'] ?? false ) {
                // Registration Routes...
                Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
                Route::post('register', 'Auth\RegisterController@register');
            }
        });
    }

    /**
     * Get the Nova route group configuration array.
     *
     * @return array
     */
    protected function routeConfiguration()
    {
        return [
            'namespace' => 'Loyep\Planet\Http\Controllers',
            'as' => 'planet.',
            'prefix' => Planet::path(),
        ];
    }

    public function path()
    {
        return config('planet.path', 'admin');
    }

    public function name()
    {
        return config('planet.name', 'Planet');
    }

}