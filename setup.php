#!/usr/bin/env php
<?php

$envFile = __DIR__.'/.env';

if(!file_exists($envFile) && isset($argv[1],$argv[2])){
    copy(__DIR__.'/.env.example',$envFile);
    exec('cd '.__DIR__.'/'.$argv[1].' && sudo chmod -R 777 storage');
    exec('cd '.__DIR__.'/'.$argv[1].' && composer install && php artisan key:generate && php artisan create:database '.$argv[1].'');
    exec('cd '.__DIR__.'/'.$argv[1].' && php artisan environment '.$argv[2]);
    exec('cd '.__DIR__.'/'.$argv[1].' && php artisan name '.$argv[1].'');
    exec('cd '.__DIR__.'/'.$argv[1].' && php artisan migrate');
    exec('cd '.__DIR__.'/'.$argv[1].' && php artisan passport:install');
    exec('cd '.__DIR__.'/'.$argv[1].' && php artisan permission');
    exec('cd '.__DIR__.'/'.$argv[1].' && php artisan supervisor');
}
else{
    throw new Exception('your parameters is missing.(this file has 2 parameters');
}
