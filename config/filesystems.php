<?php

return [

    /*

    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    */

    'default' => env('FILESYSTEM_DISK', 'local'),

    /*

    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    */

    'disks'   => [

        'local'            => [
            'driver' => 'local',
            'root'   => storage_path('app/private'),
            'serve'  => true,
            'throw'  => false,
            'report' => false,
        ],

        'public'           => [
            'driver'     => 'local',
            'root'       => storage_path('app/public'),
            'url'        => rtrim(env('APP_URL', 'http://friendstradebd.test'), '/') . '/storage',
            'visibility' => 'public',
            'throw'      => false,
            'report'     => false,
        ],

        'products_private' => [
            'driver'     => 'local',
            'root'       => storage_path('app/private/public/products'), // সরাসরি মেইন ফোল্ডার রুট
            'url'        => rtrim(env('APP_URL', 'http://friendstradebd.test'), '/') . '/storage/products',
            'visibility' => 'public',
            'throw'      => false,
            'report'     => false,
        ],

        's3'               => [
            'driver'                  => 's3',
            'key'                     => env('AWS_ACCESS_KEY_ID'),
            'secret'                  => env('AWS_SECRET_ACCESS_KEY'),
            'region'                  => env('AWS_DEFAULT_REGION'),
            'bucket'                  => env('AWS_BUCKET'),
            'url'                     => env('AWS_URL'),
            'endpoint'                => env('AWS_ENDPOINT'),
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
            'throw'                   => false,
            'report'                  => false,
        ],

    ],

    /*

    |--------------------------------------------------------------------------
    | Symbolic Links
    |--------------------------------------------------------------------------
    */

    'links'   => [
        public_path('storage')          => storage_path('app/public'),

        // এটি আপনার Laragon এর public/storage/products কে আসল ফোল্ডারের সাথে কানেক্ট করবে
        public_path('storage/products') => storage_path('app/private/public/products'),
    ],

];
