<?php

namespace App\Models\Features\GlobalScopeSources;

use App\Services\Db;
use Illuminate\Database\Eloquent\Builder;
use App\Facades\Authenticate\Authenticate as AuthenticateFacade;

class User
{
    /**
     * @var Builder
     */
    protected Builder $builder;

    /**
     * @var string
     */
    protected string $table;

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
        $this->userId();
    }

    /**
     * authenticate global scope
     *
     * @return void
     */
    public function user() : void
    {
        $user = AuthenticateFacade::id();

        if(
            !app()->runningInConsole()
            && !is_null($user)
            && $this->table=='users'
        )
        {
            $this->builder->where('id',$user);
        }
    }

    /**
     * get userId relational table
     *
     * @return void
     */
    public function userId()
    {
        $user = AuthenticateFacade::id();
        $entity = Db::columns($this->table);

        if(
            !app()->runningInConsole()
            && in_array('user_id',$entity)
            && !is_null($user)
        ){
            $this->builder->where('user_id',$user);
        }
    }
}
