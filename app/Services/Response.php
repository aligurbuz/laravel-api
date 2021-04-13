<?php

namespace App\Services;

use Throwable;
use Illuminate\Http\JsonResponse;

class Response
{
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
     * application success 200 content for response
     *
     * @param mixed $data
     * @return JsonResponse
     */
    public static function ok($data) : JsonResponse
    {
        return static::response(
            [
                'status'        => true,
                'code'          => 200,
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
            'errorMessage'  => static::getExceptionMessageForEnvironment($message)
        ];

        return static::response(
            array_merge($standard,static::throwIn($trace)),
            $code
        );
    }

    /**
     * includes the needed extra information to exception data
     *
     * @param null|array|Throwable $trace
     * @return array
     */
    public static function throwIn($trace = null) : array
    {
        if(app()->environment() == 'local'){

            if($trace instanceof Throwable){
                return [
                    'file'    => $trace->getFile(),
                    'line'    => $trace->getLine(),
                    'request' => static::getRequest()
                ];
            }

            return [
                'file'    => ($trace[0]['file'] ?? null),
                'line'    => ($trace[0]['line'] ?? null),
                'request' => static::getRequest()
            ];
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
        $request = request()->all();

        if(isset($request['password'])){
            $request['password'] = '***';
        }

        if(isset($request['credit_card_number'])){
            $request['credit_card_number'] = '***';
        }

        return $request;
    }
}
