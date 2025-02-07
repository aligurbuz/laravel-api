<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Search Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the search connections below you wish
    | to use as your default connection for all search work. Of course
    | you may use many connections at once using the search library.
    |
    */
    'default' => 'ElasticSearch',

    /*
    |--------------------------------------------------------------------------
    | Search Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the search connections setup for your application.
    | Of course, examples of configuring each search platform that is
    | supported by laravel-api is shown below to make development simple.
    |
    |
    | All database work in laravel-api is done through the PHP PDO facilities
    | so make sure you have the driver for your particular search of
    | choice installed on your machine before you begin development.
    |
    */
    'connections' => [
        'ElasticSearch' => [
            'host' => env('elasticSearchHost', '172.10.0.10'),
        ]
    ]
];
