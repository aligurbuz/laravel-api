<?php

namespace App\Facades\Support\Http;

use App\Exceptions\Exception;
use App\Factory\Factory;
use App\Libs\Request\Request;
use Illuminate\Support\Str;

abstract class HttpManager
{
    /**
     * @var Request|null
     */
    protected static ?Request $instance = null;

    /**
     * @var string
     */
    protected static string $apiKey = 'admin';

    /**
     * @var array|string[]
     */
    protected static array $httpMethods = [
        'create' => 'post',
        'update' => 'put',
        'delete' => 'delete',
    ];

    /**
     * @param string $name
     * @param array $arguments
     * @return array
     */
    public static function __callStatic(string $name, array $arguments)
    {
        return self::magicProcess($name, ($arguments[0] ?? []));
    }

    /**
     * @param string $name
     * @param array $arguments
     * @return array
     */
    public function __call(string $name, array $arguments)
    {
        return self::magicProcess($name, ($arguments[0] ?? []));
    }

    /**
     * get data response for client local request
     *
     * @param Request $request
     * @return array
     */
    private static function dataHandler(Request $request): array
    {
        $content = $request->getContent();

        if (!in_array($request->getStatus(), static::$successStatus, true)) {
            Exception::customException(static::getErrorMessage($content));
        }

        return static::getResponse($content);
    }

    /**
     * get local request
     *
     * @return Request
     */
    private static function request(): Request
    {
        if (is_null(static::$instance)) {
            $factoryMethod = lcfirst(class_basename(static::class));
            static::$instance = Factory::http(['apiKey' => static::$apiKey])->{$factoryMethod}();
        }

        return static::$instance;
    }

    /**
     * @param string $name
     * @return static
     */
    public static function apiKey(string $name): static
    {
        static::$apiKey = $name;

        return new static();
    }

    /**
     * @param string $name
     * @param $arguments
     * @return array
     */
    public static function magicProcess(string $name, $arguments): array
    {
        $snakeName = Str::snake($name);
        $snakeSplit = explode('_', $snakeName);
        $method = $snakeSplit[0] ?? null;
        $endpoint = $snakeSplit[1] ?? null;


        $newInstance = new static();

        if (property_exists($newInstance, 'methods') && isset(static::$methods[$endpoint])) {
            $endpoint = static::$methods[$endpoint];
        }

        if ($method === 'get') {
            $queryParameters = $arguments ?? [];
            $endpoint .= '?' . http_build_query($queryParameters);
        } else {
            $method = static::$httpMethods[$method];
            $methodArguments = $arguments ?? [];
        }

        if (isset($methodArguments['routeParameters'])) {
            $endpoint .= '/' . $methodArguments['routeParameters'];
            unset($methodArguments['routeParameters']);
        }

        return static::dataHandler(static::request()
            ->endpoint($endpoint)
            ->{$method}(
                $methodArguments ?? null
            )
        );
    }
}
