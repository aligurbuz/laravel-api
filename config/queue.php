<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Queue Connection Name
    |--------------------------------------------------------------------------
    |
    | Laravel's queue API supports an assortment of back-ends via a single
    | API, giving you convenient access to each back-end using the same
    | syntax for every one. Here you may define a default connection.
    |
    */

    'default' => env('QUEUE_CONNECTION', 'sync'),

    /*
    |--------------------------------------------------------------------------
    | Queue Connections
    |--------------------------------------------------------------------------
    |
    | Here you may configure the connection information for each server that
    | is used by your application. A default configuration has been added
    | for each back-end shipped with Laravel. You are free to add more.
    |
    | Drivers: "sync", "database", "beanstalkd", "sqs", "redis", "null"
    |
    */

    'connections' => [

        'rabbitmq' => [
            'driver' => 'rabbitmq',
            'connection' => PhpAmqpLib\Connection\AMQPStreamConnection::class,
            'hosts' => [
                [
                    'host' => env('RABBITMQ_HOST', '172.10.0.15'),
                    'port' => env('RABBITMQ_PORT', 5672),
                    'user' => env('RABBITMQ_USER', 'myuser'),
                    'password' => env('RABBITMQ_PASSWORD', 'mypassword'),
                    'vhost' => env('RABBITMQ_VHOST', '/'),
                ]
            ],
            'options' => [
                'queue' => [
                    'exchange' => 'notification',
                    'exchange_type' => 'topic',
                    'exchange_routing_key' => 'notification.default',
                    'heartbeat' => 30, // RabbitMQ ile bağlantısının sağlığını kontrol etmek
                    'use_heartbeat_stream' => true,
                    'type' => 'topic',
                    'max_priority' => 10, // Kuyruğa eklenen mesajların maksimum önceliğini belirten parametre.
                    'message_ttl' => 60000, // Bir mesajın kuyrukta ne kadar süre bekleyeceği. Bu süre içinde işlenmezse, mesaj kuyruktan düşer.
                    'durable' => true, //  Eğer true ise, RabbitMQ sunucusu yeniden başladığında bile bu exchange veya queue de yer alan işler kaybolmaz.
                    'confirm_publish' => true, // Mesajın başarıyla RabbitMQ'ya ulaştığını doğrulamak için kullanılan bir parametre. Eğer true olarak ayarlanmışsa, mesajın başarıyla RabbitMQ'ya ulaştığından emin olunmadan önce wait_for_pending_acks_timeout süresi boyunca bekler.
                    'x-dead-letter-exchange' => ['S', 'dlq_exchange'], // Dead-letter exchange
                    'x-message-ttl' => ['I', 100000], // 100 saniye içerisinde işlenmezse DLQ ya gönderir.
                    'x-max-retries' => ['I', 3], // Maksimum deneme sayısı
                ],
                'consumer' => [
                    'qos' => [
                        'prefetch_size' => 0,
                        'prefetch_count' => 1, // Önceden alınacak mesaj sayısı (aynı anda), Bir consumer tarafından aynı anda işlenmesi için önceden alınacak mesaj sayısı
                        'global' => false,
                    ],
                ],
                /**
                 *   'ssl_options' => [
                 *   'cafile' => env('RABBITMQ_SSL_CAFILE', null),
                 *   'local_cert' => env('RABBITMQ_SSL_LOCALCERT', null),
                 *   'local_key' => env('RABBITMQ_SSL_LOCALKEY', null),
                 *   'verify_peer' => env('RABBITMQ_SSL_VERIFY_PEER', true),
                 *   'passphrase' => env('RABBITMQ_SSL_PASSPHRASE', null),
                ],
                 */
            ],
            'worker' => env('RABBITMQ_WORKER', 'default'),
            'queue' => env('RABBITMQ_QUEUE', 'default'),
        ],

        'sync' => [
            'driver' => 'sync',
        ],

        'database' => [
            'driver' => 'database',
            'table' => 'jobs',
            'queue' => 'default',
            'retry_after' => 90,
            'after_commit' => false,
        ],

        'beanstalkd' => [
            'driver' => 'beanstalkd',
            'host' => 'localhost',
            'queue' => 'default',
            'retry_after' => 90,
            'block_for' => 0,
            'after_commit' => false,
        ],

        'sqs' => [
            'driver' => 'sqs',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'prefix' => env('SQS_PREFIX', 'https://sqs.us-east-1.amazonaws.com/your-account-id'),
            'queue' => env('SQS_QUEUE', 'default'),
            'suffix' => env('SQS_SUFFIX'),
            'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
            'after_commit' => false,
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => 'default',
            'queue' => env('REDIS_QUEUE', 'default'),
            'retry_after' => 90,
            'block_for' => 5,
            'after_commit' => false,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Failed Queue Jobs
    |--------------------------------------------------------------------------
    |
    | These options configure the behavior of failed queue job logging so you
    | can control which database and table are used to store the jobs that
    | have failed. You may change them to any database / table you wish.
    |
    */

    'failed' => [
        'driver' => env('QUEUE_FAILED_DRIVER', 'database-uuids'),
        'database' => env('DB_CONNECTION', 'mysql'),
        'table' => 'failed_jobs',
    ],

];
