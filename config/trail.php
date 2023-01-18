<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Trail App Name
    |--------------------------------------------------------------------------
    |
    | The name of this Trail application. This value is used when the
    | application needs to display the name of the client within the UI
    | or in other locations.
    |
    */
    'name' => env('APP_NAME', 'Trail'),

    /*
    |--------------------------------------------------------------------------
    | Trail Client Routing & Middleware
    |--------------------------------------------------------------------------
    |
    | The application's graphical interface routing configuration. Both
    | domain and prefix (path) values are optional. If not provided, all UI routes
    | will be available starting from the root domain's `/` route.
    | The middleware will be assigned to every Trail "client" route. Most of the time
    | you should just stick with this stack.
    |
    */
    'client' => [
        'domain' => env('TRAIL_CLIENT_DOMAIN', false),
        'prefix' => env('TRAIL_CLIENT_PREFIX', false),
        'middleware' => [
            'web',
            Trail\Http\Middleware\Authenticate::class,
            Trail\Http\Middleware\DispatchRenderingTrailEvent::class,
            Trail\Http\Middleware\BootProfiles::class,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Trail API Routing & Middleware
    |--------------------------------------------------------------------------
    |
    | The application's API routing configuration. Should be different from
    | the client's routing configuration.
    | The middleware will be assigned to every Trail "API" route. Most of the time
    | you should just stick with this stack.
    |
    */
    'api' => [
        'domain' => env('TRAIL_API_DOMAIN', false),
        'prefix' => env('TRAIL_API_PREFIX', 'api'),
        'middleware' => [
            'api',
            Trail\Http\Middleware\Authenticate::class,
            Trail\Http\Middleware\BootProfiles::class,
        ],
    ],
];
