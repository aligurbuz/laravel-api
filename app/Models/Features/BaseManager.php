<?php

namespace App\Models\Features;

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

        static::addGlobalScope('authenticate',function (Builder $builder){
            if(app()->runningInConsole()===false){
                (new GlobalScopeManager($builder,(new self())->getTable()));
            }
        });
    }
}
