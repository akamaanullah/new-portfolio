<?php
/**
 * Application Configuration
 */

return [
    'name'        => env('APP_NAME', 'Amaanullah Portfolio'),
    'env'         => env('APP_ENV', 'development'),
    'debug'       => filter_var(env('APP_DEBUG', true), FILTER_VALIDATE_BOOLEAN),
    'url'         => env('APP_URL', 'http://localhost/web3d'),
    'timezone'    => env('APP_TIMEZONE', 'Asia/Karachi'),
    'author'      => 'Amaanullah Khan',
    'contact'     => [
        'email'    => 'info@amaanullah.com',
        'whatsapp' => '+92 319 6935307'
    ]
];
