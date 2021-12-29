#!/usr/bin/env php
<?php

$envFile = __DIR__.'/.env';

if(!file_exists($envFile)){
    copy(__DIR__.'/.env.example',$envFile);
    exec('cd '.__DIR__.' && composer install && chmod -R 777 storage && php artisan key:generate');
}
