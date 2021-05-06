<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Builder;

/**
 * Class GlobalScopeManager
 * @package App\Repositories
 */
class GlobalScopeManager
{
    /**
     * makes global scopes for builder
     *
     * @param Builder $builder
     * @param callable $callback
     * @return mixed
     */
    public function make(Builder $builder,callable $callback): mixed
    {
        return call_user_func($callback,[$builder]);
    }
}
