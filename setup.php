#!/usr/bin/env php
<?php

$envFile = __DIR__.'/.env';

if(!file_exists($envFile) && isset($argv[1],$argv[2])){
    copy(__DIR__.'/.env.example',$envFile);
    $dir = ($argv[2]=='local') ? __DIR__.'/'.$argv[1] : __DIR__;

    exec('cd '.$dir.' && sudo chmod -R 777 storage');
    exec('cd '.$dir.' && composer install && php artisan key:generate && php artisan create:database '.$argv[1].'');
    exec('cd '.$dir.' && php artisan environment '.$argv[2]);
    exec('cd '.$dir.' && php artisan name '.$argv[1].'');
    exec('cd '.$dir.' && php artisan migrate');
    exec('cd '.$dir.' && php artisan passport:install');
    exec('cd '.$dir.' && php artisan permission');
    exec('cd '.$dir.' && php artisan supervisor');
}
else{
    throw new Exception('your parameters is missing.(this file has 2 parameters');
}
