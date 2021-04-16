<?php

namespace App\Models\Features;

use App\Models\Features\GlobalScopeSources\User;
use Illuminate\Database\Eloquent\Builder;

trait BaseManager
{
    use ScopeManager;

    /**
     * model boot process
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('user',function (Builder $builder){
            if(app()->runningInConsole()===false){
                (new User($builder,(new self())->getTable()));
            }
        });
    }
}
