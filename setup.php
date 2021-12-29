#!/usr/bin/env php
<?php

$envFile = __DIR__.'/.env';

if(!file_exists($envFile)){
    copy('/var/www/html/app/.env.example','/var/www/html/app/.env');
    exec('cd /var/www/html/app && composer install && chmod -R 777 storage && php artisan key:generate');
}
