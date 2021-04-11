<?php

namespace App\Models\Features;

use Illuminate\Database\Eloquent\Builder;
use App\Facades\Authenticate\Authenticate as AuthenticateFacade;

class GlobalScopeManager
{
    /**
     * @var Builder
     */
    protected $builder;

    /**
     * @var string
     */
    protected $table;

    /**
     * GlobalScopeManager constructor.
     * @param Builder $builder
     * @param string $table
     */
    public function __construct(Builder $builder, string $table)
    {
        $this->builder = $builder;
        $this->table = $table;

        $this->user();
    }

    /**
     * authenticate global scope
     *
     * @return void
     */
    public function user() : void
    {
        $userId = AuthenticateFacade::id();

        if(
            !app()->runningInConsole()
            && !is_null($userId)
            && $this->table=='users'
        )
        {
            $this->builder->where('id',$userId);
        }
    }
}
