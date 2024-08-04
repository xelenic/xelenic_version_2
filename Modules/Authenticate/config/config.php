<?php

return [
    'name' => 'Authenticate',

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
        // Other guards...
    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],
        // Other providers...
    ],

];
