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

App/Exceptions/Handler.php

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

Laravel offers us a custom renderable method for exceptions.
As you can see in the code above, the render method is the place of all exceptions.
Any exception passes directly here, so we can specify a specific format for the exception.

The exception directly references the error method of the response class, and the format is specified and sent to the output.

```php

/**
     * application error content for response
     *
     * @param null|string $message
     * @param int $code
     * @param null|Throwable $exception
     * @return object
     *
     * @throws Exception
     */
    public static function error($message = null,$code = 400,$exception = null) : object
    {
        $code  = ($code == '0' || !is_numeric($code)) ? 500 : $code;
        $trace = ($exception instanceof Throwable) ? $exception : debug_backtrace();

        $standard = [
            'status'        => false,
            'code'          => $code,
            'client'        => ApiKey::who(),
            'env'           => config('app.env'),
            'responseCode'  => static::responseCode(),
            'errorMessage'  => static::getExceptionMessageForEnvironment($message,$code),
            'endpoint'      => request()->url(),
        ];

        return static::response(
            array_merge($standard,static::throwIn($trace,$code,$message)),
            $code
        );
    }

```

So How Do We Throw an Exception? It's very simple. For example, let's throw 500 server internal error in any controller.

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
        aaaaaaaaaaaaa;
        $client->get();

        return $userRepository->get();
    }

```
In the above code, php will detect an error in the UserController.php file for string aaaaaaa;
This should return 500 as the system.

See the error response for the postman.

<a href="https://ibb.co/DzYWb4z"><img src="https://i.ibb.co/Cm68tBm/Screen-Shot-2021-05-05-at-13-44-28.png" alt="Screen-Shot-2021-05-05-at-13-44-28" border="0"></a>

As you can see, nothing needs to be done for the system.
After catching special render exceptions and passing them through the error method of the response class, it returns the format to us.

However, 500 errors are for development. We should not give these server errors directly in the production environment.
Therefore, when you set as production the APP_ENV variable in your .env file, the system will automatically return to you with a message like the following.

<a href="https://ibb.co/jLYm9kx"><img src="https://i.ibb.co/VvGR0Yh/Screen-Shot-2021-05-05-at-16-20-04.png" alt="Screen-Shot-2021-05-05-at-16-20-04" border="0"></a>

As you can see, 500 errors are not shown directly to the user in production environment. However, a direct message is recorded as a log in the access_logger class run for middleware.
and thus the developer will be able to see what the error is in the log.

## Well then let's move on to special exceptions.
Special exceptions are actually application business logic errors. Examples such as not sending the order number when ordering.
can be given.We can manage these errors by putting them in the App/Exceptions/Custom directory.

Take the CustomException.php class for example.

```php

/**
     * @var string
     */
    protected string $langKey = 'customException';

    /**
     * CustomException constructor.
     *
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($message = "Custom exception", $code = 400, Throwable $previous = null)
    {
        parent::__construct($this->setMessage($message), $code, $previous);
    }

```

I have written a custom annotation class for these classes. This class is App/Exceptions/Exception.php
If all the class names written in this class are written as annotation. They contain easy usage.

```php

<?php

namespace App\Exceptions;

use App\Services\AppContainer;

/**
 * Class Exception
 * @method static customException($message = null,$keys = [])
 * @method static validationException($message = null,$keys = [])
 * @method static loginException($message = null,$keys = [])
 * @method static authenticateException($message = null,$keys = [])
 * @method static updateException($message = null,$keys = [])
 * @method static apiKeyException($message = null,$keys = [])
 * @method static accessLoggerException($message = null,$keys = [])
 * @method static clientFormatException($message = null,$keys = [])
 * @method static clientArrayLimiterException($message = null,$keys = [])
 * @method static clientCapsuleException($message = null,$keys = [])
 * @method static contentTypeException($message = null,$keys = [])
 * @package App\Exceptions
 */
class Exception
{
    /**
     * throws custom exception for statement defined as static
     *
     * @param $name
     * @param $arguments
     */
    public static function __callStatic($name, $arguments)
    {
        $namespace = 'App\Exceptions\\Custom\\'.ucfirst($name);

        // this container data is used in the script running on the access_logger middleware layer.
        // this data saved in the trace field in the access_logger table gives the debugBackTrace data in the exception system.
        static::setKeyForContainer('debugBackTrace',debug_backtrace());

        if(isset($arguments[0])){
            static::setKeyForContainer($namespace,($arguments[1] ?? []));
            throw new $namespace($arguments[0]);
        }
        else{
            throw new $namespace();
        }
    }

    /**
     * set key for container
     *
     * @param $exceptionName
     * @param array $data
     */
    private static function setKeyForContainer($exceptionName,array $data = []) : void
    {
        AppContainer::set($exceptionName,$data,true);
    }
}


```
You can use these custom classes anywhere in your application.

```php

Exception::customException();

or

throw new CustomException();

```

## Exception Language files
Exception language files are a property variable defined within the custom class you create.
```php

  /* @var string
   */
  protected string $langKey = 'customException';

```
This special key resource is defined in the exception.php file in the resource/lang directory.
You can define the return message according to the language by defining an exception here as you wish.

When you want to send a private key, you can use it as follows.

```php

Exception::customException('',['key' =>'foo']);

or

throw new CustomException('',['key' => 'foo']);

```

The language file, which is one of the features of Laravel, fits the variable definition exactly and will change a value from :key to foo and customize your message.

# Validations
Validations are indispensable control tools for your application. We can say that they are the filter of client data.
That's why I am very sensitive to validations.

I do not find it very convenient to write validations in a controller.
So I developed a special class and connected it to the console generator system.

For example: the get method of the user class uses the getUserClient class.
those classes are located in the app/Client directory.

```php

<?php

namespace App\Client\User\User\Get;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;

/**
 * Class GetClient
 * @package App\Client\User
 */
class GetUserClient extends Client
{
    use GeneratorTrait,ClientAutoGeneratorTrait;

    /**
     * get capsule for client
     *
     * @var array
     */
    protected array $capsule = [];

    /**
     * get model entity validation
     *
     * @var array|string[]
     */
    protected array $model = [];

    /**
     * get rule for client
     *
     * @var array
     */
    protected array $rule = [
        //'id' => 'required|integer'
    ];
}


```

The binded class will directly follow the rules here and return an exception if necessary.
The key rule you are familiar with here is the key.Laravelin works directly the same as it's validation system.
It will be enough to write here what the running controller class requires.

However, this class includes many features. One of them has a model key that is directly validated with the entity values of your model.

```php


     *
     * @var array|string[]
     */
    protected array $model = [User::class];


```
For example, when you use the user::class model, the column values of your table are checked and validations are performed according to this model.

Let's visualize the event by making an example;
Let's create a table of restaurants with a migration like the one below.

```php


     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants',function(Blueprint $table){
           $table->id();
           $table->string('restaurant_name');
           $table->string('restaurant_short_name');
           $table->timestamps();
        });
    }


```
