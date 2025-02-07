<?php

return [

    'adapter' => env('SOCKET_ADAPTER', 'default'),

    'connection' => [
        'default' => [
            'socketUrl' => env('SOCKET_URL'),
        ]
    ]

];
