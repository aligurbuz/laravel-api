#!/usr/bin/env php
<?php

$envFile = __DIR__.'/.env';

if(!file_exists($envFile) && isset($argv[1],$argv[2])){
    copy(__DIR__.'/.env.example',$envFile);
    exec('cd '.__DIR__.' && composer install && sudo chmod -R 777 storage && php artisan key:generate && php artisan create:database '.$argv[1].' && php artisan name '.$argv[1].' && php artisan migrate && php artisan passport:install && php artisan permission && php artisan supervisor');
    exec('cd '.__DIR__.' && sudo chmod -R 777 storage');
    exec('cd '.__DIR__.' && php artisan environment '.$argv[2]);
}
else{
    throw new Exception('your parameters is missing.(this file has 2 parameters');
}
