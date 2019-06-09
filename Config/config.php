<?php

return [
    'name' => 'Menu',

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */

    'providers' => [
        /*
         * Package Service Providers...
         */
        Spatie\Menu\Laravel\MenuServiceProvider::class,
    ],

    'aliases' => [
        'Menu' => Spatie\Menu\Laravel\Facades\Menu::class,
    ],
];
