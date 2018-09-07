<?php

namespace Loyep;

class Loyep
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
        $router = app()->make('router');

        $namespace = '\Loyep\Http\Controllers';

        $router->namespace($namespace)->prefix('admin')->group(function () use ($router) {
            // Authentication Routes...
            $router->get('login', 'Auth\LoginController@showLoginForm')->name('login');
            $router->post('login', 'Auth\LoginController@login');
            $router->post('logout', 'Auth\LoginController@logout')->name('logout');

            // Registration Routes...
            $router->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
            $router->post('register', 'Auth\RegisterController@register');

            // Password Reset Routes...
            $router->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
            $router->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
            $router->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
            $router->post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

            // Email Verification Routes...
//            if ( $options['verify'] ?? false ) {
//                $router->emailVerification();
//            }
        });
    }

    public function path()
    {
        return config('loyep.path', 'admin');
    }

    public function name()
    {
        return config('loyep.name', 'Loyep');
    }

}