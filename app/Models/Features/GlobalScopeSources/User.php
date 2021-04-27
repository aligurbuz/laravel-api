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
     * @var array
     */
    protected array $columns = [];

    /**
     * GlobalScopeManager constructor.
     * @param Builder $builder
     * @param string $table
     */
    public function __construct(Builder $builder, string $table)
    {
        $this->builder = $builder;
        $this->table = $table;
        $this->columns = Db::columns($this->table);

        $this->userId();
    }

    /**
     * get userId relational table
     *
     * @return void
     */
    public function userId()
    {
        $user = AuthenticateFacade::id() ?? 0;

        if(
            !app()->runningInConsole()
            && in_array('user_id',$this->columns)
        ){
            $this->builder->where('user_id',$user);
        }
    }
}
