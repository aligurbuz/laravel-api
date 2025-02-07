#!/usr/bin/env php
<?php

$envFile = __DIR__ . '/.env';

$dockerCompose = __DIR__ . '/docker-compose.yml';

if (!file_exists($envFile) && isset($argv[1], $argv[2])) {
    copy(__DIR__ . '/.env.example', $envFile);
    $dir = ($argv[2] == 'local') ? __DIR__ . '/' . $argv[1] : __DIR__;

    exec('cd ' . $dir . ' && sudo chmod -R 777 storage');
    exec('cd ' . $dir . ' && composer install && php artisan key:generate');
    exec('cd ' . $dir . ' && php artisan name ' . $argv[1] . '');
    if ($argv[2] !== 'local') {
        exec('cd ' . $dir . ' && php artisan environment testing');
    }

    exec('cd ' . $dir . ' && php artisan migrate', $output);
    var_dump($output);
    exec('cd ' . $dir . ' && php artisan passport:install', $output);
    var_dump($output);
    exec('cd ' . $dir . ' && php artisan environment ' . $argv[2] . '', $output);
    var_dump($output);
    exec('cd ' . $dir . ' && php artisan permission', $output);
    var_dump($output);
    exec('cd ' . $dir . ' && php artisan supervisor', $output);
    var_dump($output);
    exec('cd ' . $dir . ' && php artisan doc:update', $output);
    var_dump($output);
    exec('cd ' . $dir . ' && sudo chmod -R 777 storage', $output);
    var_dump($output);
} else {
    throw new Exception('your parameters is missing.(this file has 2 parameters');
}
