<?php

namespace App\Services;

use Illuminate\Support\Facades\Route;

class Loyep
{
    /**
     * Generate an asset path for the application.
     *
     * @param  string $path
     * @param  bool $secure
     * @return string
     */
    function asset($path, $secure = null)
    {
        $url = asset($path, $secure);
        $cdnUrl = config('loyep.cdn.url');
        if (!empty($cdnUrl)) {
            $url = str_replace(config('app.url'), $cdnUrl, $url);
        }
        return $url;
    }

    public function path()
    {
        return config('loyep.backend.path', 'admin');
    }

    public function routes(array $options = [])
    {
        Route::group($this->routeConfiguration(), function () use ($options) {

            Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
            Route::post('login', 'Auth\LoginController@login');

            Route::get('lock', 'Auth\LockController@showLockForm')->name('lock');
            Route::post('lock', 'Auth\LockController@lock');

            Route::get('logout', 'Auth\LoginController@logout')->name('logout');


            Route::get('/', 'Loyep\LoyepController@home')->name('home');

            // Password Reset Routes...
            Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
            Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
            Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
            Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');

            if ($options['register'] ?? false) {
                // Registration Routes...
                Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
                Route::post('register', 'Auth\RegisterController@register');
            }
        });
    }

    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = '\App\Http\Controllers';

    /**
     * Get the Nova route group configuration array.
     *
     * @return array
     */
    protected function routeConfiguration()
    {
        return [
            'namespace' => $this->namespace,
            'as' => 'planet.',
            'prefix' => Loyep::path(),
            'middleware' => ['web'],
        ];
    }

}