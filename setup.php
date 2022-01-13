#!/usr/bin/env php
<?php

$envFile = __DIR__.'/.env';

if(!file_exists($envFile) && isset($argv[1])){
    copy(__DIR__.'/.env.example',$envFile);
    exec('cd '.__DIR__.' && composer install && sudo chmod -R 777 storage && php artisan key:generate && php artisan create:database '.$argv[1].' && php artisan name '.$argv[1].' && php artisan migrate && php artisan passport:install && php artisan permission && php artisan supervisor');
    exec('cd '.__DIR__.' && sudo chmod -R 777 storage');
}
