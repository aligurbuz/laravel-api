<?php

namespace App\Facades\Http;

use App\Exceptions\Exception;
use App\Factory\Factory;
use App\Services\Request\Request;
use Illuminate\Support\Str;

abstract class HttpManager
{
    /**
     * @var Request|null
     */
    protected static ?Request $instance = null;

    /**
     * get local request
     *
     * @return Request
     */
    private static function request(): Request
    {
        if (is_null(static::$instance)) {
            $factoryMethod = lcfirst(class_basename(get_called_class()));
            static::$instance = Factory::http()->{$factoryMethod}();
        }

        return static::$instance;
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

        if (property_exists(new static(), 'methods') && isset(static::$methods[$endpoint])) {
            $endpoint = static::$methods[$endpoint];
        }

        if ($method == 'get') {
            $queryParameters = $arguments[0] ?? [];
            $endpoint = $endpoint . '?' . http_build_query($queryParameters);
        }

        return static::dataHandler(static::request()->endpoint($endpoint)->{$method}());
    }
}
