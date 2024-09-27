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
        $snakeName = Str::snake($name);
        $snakeSplit = explode('_', $snakeName);
        $method = $snakeSplit[0] ?? null;
        $endpoint = $snakeSplit[1] ?? null;


        $newInstance = new static();

        if (property_exists($newInstance, 'methods') && isset(static::$methods[$endpoint])) {
            $endpoint = static::$methods[$endpoint];
        }

        if ($method === 'get') {
            $queryParameters = $arguments[0] ?? [];
            $endpoint .= '?' . http_build_query($queryParameters);
        } else {
            $method = static::$httpMethods[$method];
            $methodArguments = $arguments[0] ?? [];
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
            static::$instance = Factory::http()->{$factoryMethod}();
        }

        return static::$instance;
    }
}
