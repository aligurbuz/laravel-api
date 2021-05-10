<?php

namespace App\Exceptions;

use Throwable;

class SqlExceptionManager
{
    /**
     * sql exception process maker
     *
     * @param Throwable $throwable
     * @param callable $callback
     * @return mixed
     */
    public static function make(Throwable $throwable,callable $callback) : mixed
    {
        if($throwable->getCode()=='23000'){
            return Exception::modelUniqueCreateException(
                '',['key' => static::uniqueErrorMessage($throwable)]
            );
        }

        return call_user_func($callback);
    }

    /**
     * render message for exception
     *
     * @param Throwable $throwable
     * @return string
     */
    private static function uniqueErrorMessage(Throwable $throwable) : string
    {
        $message = $throwable->getPrevious()->getMessage();

        if(preg_match('@\'(.*?)\'@is',$message,$list)){
            return $list[1] ?? false;
        }

        return false;
    }
}
