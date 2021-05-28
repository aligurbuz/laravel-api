<?php

declare(strict_types=1);

namespace App\Exceptions;

use Throwable;
use App\Constants;
use App\Services\AppContainer;

/**
 * Class SqlExceptionManager
 * @package App\Exceptions
 */
class SqlExceptionManager
{
    /**
     * @var ?string
     */
    private static ?string $table;

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
     * @param ?string $table
     * @param callable $callback
     * @return mixed
     */
    public static function make(Throwable $throwable, ?string $table, callable $callback) : mixed
    {
        $dbConnection = config('database.default');

        static::$table = $table;

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

        // when a unique exception is caught,
        // the column name must be sent to the errorInput container value.
        if(preg_match('@\''.static::$table.'\.(.*?)\'@is',$message,$column)){
            AppContainer::set(Constants::errorInput,($column[1] ?? null));
        }

        // we parse the message in the mysql unique exception message and get it.
        // this method can be changed.we use it to get the unique data between quotes.
        if(preg_match('@\'(.*?)\'@is',$message,$list)){
            return Exception::modelUniqueCreateException('',['key' => ($list[1] ?? $message)]);
        }

        return $message;
    }
}
