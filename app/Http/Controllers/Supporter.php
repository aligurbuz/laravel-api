<?php

namespace App\Http\Controllers;

use App\Factory\Factory;
use Illuminate\Support\Facades\DB;

/**
 * Trait Supporter
 * @package App\Http\Controllers
 */
trait Supporter
{
    /**
     * get db transaction for your query
     *
     * @param callable $callback
     * @return mixed
     */
    public function transaction(callable $callback): mixed
    {
        return DB::transaction(function() use($callback){
            return call_user_func($callback);
        });
    }

    /**
     * observer method for your methods
     *
     * @param $observer
     * @param callable $callback
     * @return mixed
     */
    public function observer($observer,callable $callback): mixed
    {
        $observerFactory = Factory::observer(['observer' => $observer]);

        $observerFactory->before();

        $callCallback = $callback();

        $observerFactory->after($callCallback);

        return $callCallback;
    }
}
