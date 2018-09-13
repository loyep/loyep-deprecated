<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Loyep App Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application. This value is used when the
    | framework needs to display the name of the application within the UI
    | or in other locations. Of course, you're free to change the value.
    |
    */
    'name' => 'Planet',

    /*
    |--------------------------------------------------------------------------
    | Loyep App URL
    |--------------------------------------------------------------------------
    |
    | This URL is where users will be directed when clicking the application
    | name in the Planet navigation bar. You are free to change this URL to
    | any location you wish depending on the needs of your application.
    |
    */

    'url' => env('APP_URL', '/'),

    /*
    |--------------------------------------------------------------------------
    | Loyep CDN
    |--------------------------------------------------------------------------
    |
    | This URL is where users will be directed when clicking the application
    | name in the Planet navigation bar. You are free to change this URL to
    | any location you wish depending on the needs of your application.
    |
    */
    'cdn' => [

        'url' => env('APP_URL', '/'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Loyep Path
    |--------------------------------------------------------------------------
    |
    | This is the URI path where Planet will be accessible from. Feel free to
    | change this path to anything you like. Note that this URI will not
    | affect Planet's internal API routes which aren't exposed to users.
    |
    */

    'path' => 'admin',

];
