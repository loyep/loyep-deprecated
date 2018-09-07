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
//        $router = app()->make('router');

        $namespace = 'Loyep\Planet\Http\Controllers';

        Route::namespace($namespace)->as('planet.')->group(function () {

            //        $router->namespace($namespace)->prefix('admin')->group(function () use ($router) {
            // Authentication Routes...
            Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
            Route::post('login', 'Auth\LoginController@login');
            Route::post('logout', 'Auth\LoginController@logout')->name('logout');

            // Registration Routes...
            Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
            Route::post('register', 'Auth\RegisterController@register');

            // Password Reset Routes...
            Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
            Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
            Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
            Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

            // Email Verification Routes...
//            if ( $options['verify'] ?? false ) {
//                Route::emailVerification();
//            }
        });
    }

    public function path()
    {
        return config('loyep.path', 'admin');
    }

    public function name()
    {
        return config('loyep.name', 'Planet');
    }

}