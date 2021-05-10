<?php

namespace App\Exceptions;

use Throwable;

class SqlExceptionManager
{
    /**
     * get codes for sql
     *
     * @var array
     */
    protected static array $codes = [
        '23000' => 'uniqueErrorMessage'
    ];

    /**
     * sql exception process maker
     *
     * @param Throwable $throwable
     * @param callable $callback
     * @return mixed
     */
    public static function make(Throwable $throwable,callable $callback) : mixed
    {
        if(isset(static::$codes[$throwable->getCode()])){
            $method = static::$codes[$throwable->getCode()];
            return static::$method($throwable);
        }

        return call_user_func($callback);
    }

    /**
     * render message for exception
     *
     * @param Throwable $throwable
     * @return string
     */
    protected static function uniqueErrorMessage(Throwable $throwable) : string
    {
        $message = $throwable->getPrevious()->getMessage();

        if(preg_match('@\'(.*?)\'@is',$message,$list)){
            return Exception::modelUniqueCreateException('',['key' => ($list[1] ?? $message)]);
        }

        return $message;
    }
}
