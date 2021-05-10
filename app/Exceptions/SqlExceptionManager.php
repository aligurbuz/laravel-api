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
        'mysql' => [
            '23000' => 'uniqueErrorMessage'
        ]
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
        $dbConnection = config('database.default');

        // we determine the exception code method according to your db connection settings.
        // therefore exception is returned directly if it is not present in constants.
        if(isset(static::$codes[$dbConnection][$throwable->getCode()])){
            $method = static::$codes[$dbConnection][$throwable->getCode()];
            $dbMethod = $method.'For'.ucfirst($dbConnection);

            // if the specified db method is available in the classroom,
            // it will be run.
            if(method_exists($self = new self(),$dbMethod)){
                return $self->{$dbMethod}($throwable);
            }
        }

        return call_user_func($callback);
    }

    /**
     * render message for exception
     *
     * @param Throwable $throwable
     * @return string
     */
    protected function uniqueErrorMessageForMysql(Throwable $throwable) : string
    {
        $message = $throwable->getPrevious()->getMessage();

        // we parse the message in the mysql unique exception message and get it.
        // this method can be changed.we use it to get the unique data between quotes.
        if(preg_match('@\'(.*?)\'@is',$message,$list)){
            return Exception::modelUniqueCreateException('',['key' => ($list[1] ?? $message)]);
        }

        return $message;
    }
}
