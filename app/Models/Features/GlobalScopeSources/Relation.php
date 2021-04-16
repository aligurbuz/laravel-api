<?php

namespace App\Models\Features\GlobalScopeSources;

use Illuminate\Database\Eloquent\Builder;

class Relation
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

        $this->relation();
    }

    /**
     * authenticate global scope
     *
     * @return void
     */
    public function relation() : void
    {
        //
    }
}
