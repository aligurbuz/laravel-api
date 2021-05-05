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

```php

/**
     * get users data
     *
     * @param GetUserClient $client
     * @param UserRepositoryContract $userRepository
     * @return array
     */
    public function get(GetUserClient $client, UserRepositoryContract $userRepository) : array
    {
        $client->get();

        return $userRepository->get();
    }

```
The method above is a code block called with the http get method for user/ endpoint.
This method does not contain a conventional method such as response ()->json().
We manage this with the middleware response method.

# Middleware Response Formatter
The middleware response method is the App/Http/Middleware/Response.php file.
This file is actively run as middleware in App/Http/Controllers.php file.

```php

 /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     *
     * @throws Exception
     */
    public function handle(Request $request, Closure $next) : mixed
    {
        $response = $next($request);
        $content = json_decode($response->getContent(),1);

        if(isset($content['status']) && $content['status']===false){
            return $response;
        }

        return ResponseFormatter::ok($content);
    }

```
As you can see, Response.php middleware class is AfterMiddleware property.
After the response is received, if not exception (Because exception is returned from the App/Exceptions/Handler.php file.)
The arrow method of the ResponseFormatter class is directly invoked and the system automatically returns a specified pattern to you.

# Response Service Class
The response format is managed with the App/Services/Response.php class. You can change it as you wish according to your project. The important thing is to be able to return a stable format for the client everywhere.
So just write what you want to do in the controller and don't scramble for the format. This api app will automatically return you a pattern.

An example 200 response format:

```php

 /**
     * application success 200 content for response
     *
     * @param mixed $data
     * @return object
     *
     * @throws Exception
     */
    public static function ok(mixed $data) : object
    {
        $standard = [
            'status'        => true,
            'code'          => $code = static::getHttpSuccessCode(),
            'client'        => ApiKey::who(),
            'env'           => config('app.env'),
            'responseCode'  => static::responseCode(),
            'resource'      => $data,
            'instructions'  => AppContainer::get('responseFormatterSupplement'),
        ];

        return static::response($standard,$code);
    }

```

Appearing in the postman;

<a href="https://ibb.co/jH8WNm8"><img src="https://i.ibb.co/R7gBFfg/Screen-Shot-2021-05-05-at-13-17-57.png" alt="Screen-Shot-2021-05-05-at-13-17-57" border="0"></a>

# Exceptions
Now let's come to the main issue. The most important work experience of an API developer is actually the quality of the exceptions they return while developing the API.
This is so important that; It allows a frontend developer or backend developer to work comfortably.
The main point in this is that the data to be processed is properly validated.

```php

 /**
     * @param $request
     * @param Throwable $e
     * @return object
     *
     * @throws Exception
     */
    public function render($request, Throwable $e): object
    {
        return Response::error($e->getMessage(),$e->getCode(),$e);
    }

```
