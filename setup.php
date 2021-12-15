#!/usr/bin/env php
<?php

//exec('cd /var/www/html/app && git clone https://github.com/aligurbuz/laravel-api.git '.$argv[1]);
exec('cd /var/www/html/app && composer install && mv .env.example .env && chmod -R 777 storage && php artisan key:generate && php artisan name '.$argv[1].' && php artisan migrate && php artisan passport:install && php artisan permission && php artisan supervisor');
