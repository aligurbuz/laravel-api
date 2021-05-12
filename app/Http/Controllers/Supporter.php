<?php

namespace App\Http\Controllers;

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
}
