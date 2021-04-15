<?php

namespace App\Services;

use App\Facades\Authenticate\ApiKey;
use Throwable;
use Illuminate\Http\JsonResponse;
use JetBrains\PhpStorm\ArrayShape;

class Response
{
    /**
     * application success 200 content for response
     *
     * @param mixed $data
     * @return JsonResponse
     */
    public static function ok(mixed $data) : JsonResponse
    {
        return static::response(
            [
                'status'        => true,
                'code'          => 200,
                'client'        => ApiKey::who(),
                'instructions'  => AppContainer::get('responseFormatterSupplement'),
                'resource'      => $data
            ]
        );
    }

    /**
     * application error 400 content for response
     *
     * @param null|string $message
     * @param int $code
     * @param null|Throwable $exception
     * @return JsonResponse
     */
    public static function error($message = null,$code = 400,$exception = null) : JsonResponse
    {
        $code  = ($code == '0' || !is_numeric($code)) ? 500 : $code;
        $trace = ($exception instanceof Throwable) ? $exception : debug_backtrace();

        $standard = [
            'status'        => false,
            'code'          => $code,
            'client'        => ApiKey::who(),
            'errorMessage'  => static::getExceptionMessageForEnvironment($message),
            'endpoint'      => request()->url(),
        ];

        return static::response(
            array_merge($standard,static::throwIn($trace)),
            $code
        );
    }

    /**
     * @param array $data
     * @param int $code
     * @return JsonResponse
     */
    private static function response($data = [],$code = 200) : JsonResponse
    {
        return response()->json($data,$code);
    }

    /**
     * includes the needed extra information to exception data
     *
     * @param null|array|Throwable $trace
     * @return array
     */
    private static function throwIn($trace = null) : array
    {
        if(app()->environment() == 'local'){

            if($trace instanceof Throwable){
                return array_merge_recursive([
                    'file'    => $trace->getFile(),
                    'line'    => $trace->getLine()
                ],static::getExtraStaticExceptionSupplement());
            }

            return array_merge_recursive([
                'file'    => ($trace[0]['file'] ?? null),
                'line'    => ($trace[0]['line'] ?? null)
            ],static::getExtraStaticExceptionSupplement());
        }

        return [];
    }

    /**
     * get exception message for response data
     *
     * @param null $message
     * @return string
     */
    private static function getExceptionMessageForEnvironment($message = null) : string
    {
        return (app()->environment() == 'local')
            ? $message
            : trans('exception.500error');
    }

    /**
     * masks special keys for request data
     *
     * @return array
     */
    private static function getRequest() : array
    {
        $request = request()->request->all();

        if(isset($request['password'])){
            $request['password'] = '***';
        }

        if(isset($request['credit_card_number'])){
            $request['credit_card_number'] = '***';
        }

        return $request;
    }

    /**
     * get extra static exception supplement
     *
     * @return array
     */
    #[ArrayShape(['request' => "array", 'debugBackTrace' => "array|mixed"])]
    private static function getExtraStaticExceptionSupplement() : array
    {
        return [
            'request' => [
                request()->method() => static::getRequest(),
                'queryParams' => request()->query->all()
            ],
            'debugBackTrace' => AppContainer::has('debugBackTrace')
                ? AppContainer::get('debugBackTrace')
                : debug_backtrace()
        ];
    }
}
