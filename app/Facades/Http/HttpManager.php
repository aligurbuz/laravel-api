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
    public static function request() : Request
    {
        if(is_null(static::$instance)){
            static::$instance = Factory::http()->local();
        }

        return static::$instance;
    }

    /**
     * get data response for client local request
     *
     * @param Request $request
     * @return array
     */
    public static function dataHandler(Request $request): array
    {
        $content = $request->getContent();

        if(!in_array($request->getStatus(),static::$successStatus,true)){
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
        $snakeSplit = explode('_',$snakeName);
        $method = $snakeSplit[0] ?? null;
        $endpoint = $snakeSplit[1] ?? null;

        return static::dataHandler(static::request()->endpoint($endpoint)->{$method}());
    }
}
