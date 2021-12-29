#!/usr/bin/env php
<?php

//exec('cd /var/www/html/app && git clone https://github.com/aligurbuz/laravel-api.git '.$argv[1]);
$host = "172.10.0.5";

$root = "root";
$root_password = "root";

try {
    $dbh = new \PDO("mysql:host=$host", $root, $root_password);

    $dbh->exec("CREATE DATABASE ".$argv[1]);

}
catch (\PDOException $e) {
    die("DB ERROR: " . $e->getMessage());
}

copy('/var/www/html/app/.env.example','/var/www/html/app/.env');

exec('cd /var/www/html/app && composer install && chmod -R 777 storage && php artisan key:generate && php artisan name '.$argv[1].' && php artisan migrate && php artisan passport:install && php artisan permission && php artisan supervisor');
