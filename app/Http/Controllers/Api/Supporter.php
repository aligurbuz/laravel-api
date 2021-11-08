<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Services\Db;

/**
 * Trait Supporter
 * @package App\Http\Controllers\Api
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
        return Db::transaction(function() use($callback){
            return call_user_func($callback);
        });
    }
}
