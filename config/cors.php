<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    //тут можно дописать дополнительные пути по которым будет работать CORS
    'paths' => [
        'api/*',
        'login',
        'logout',
        'sanctum/csrf-cookie'
    ],

    'allowed_methods' => ['*'],

    'allowed_origins' => ['*'],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    //по умолчанию тут значение false, если будут проблемы с аутентификацией,
    //то можно попробовать поменять, но в тестовом примере всё работало и так
    //supports_credentials' => true,
    'supports_credentials' => false,

];
