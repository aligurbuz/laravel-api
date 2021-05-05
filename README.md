<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel Restful Api

I share with you the framework I created for Laravel restful api.
I will explain how I set up this system below, along with the images.

Starting with the ones other than the standard installation of Laravel. If you are ready with everything;
We can start by running the command below.

```php

php artisan passport:install
php artisan passport:keys
php artisan migrate

```

After defining your keys for passport to your system
We can send a request to the user endpoint that is pre-defined in the routes/api file.

- Before;
The postman documentation, which is automatically prepared and I will include in the narration, is available as Laravel.postman_collection.json file in the postman directory.

First, let's make a login request like in the image below. In the returning response, we will be given a token.
We will use this as a bearer token in every request.

<a href="https://ibb.co/YQm2qr7"><img src="https://i.ibb.co/V9RVPKW/Screen-Shot-2021-05-05-at-12-43-49.png" alt="Screen-Shot-2021-05-05-at-12-43-49" border="0"></a>

# Controller Directory

Controller directories are always in the App/Http/Controllers directory. Their places will not change.
So this is the first place to look.

- For example, the directory User represents the user prefix, so it points to the api/user endpoint.
The UserController file is called.
  
# Response Formatter
When you look at any controls file in the controller directory, you will see that there is no response method.
The only thing we do in this Laravel framework is that the application contains only the api source, it does not serve any other method.
