<?php

namespace App\Models\Features;

use App\Models\Features\GlobalScopeSources\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\File;

trait BaseManager
{
    use ScopeManager;

    /**
     * BaseManager constructor.
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        $columnPath = base_path('database/columns/'.$this->getTable().'.php');
        if(file_exists($columnPath)){
            $columns = File::getRequire($columnPath);
            $this->fillable = $columns;
        }

        parent::__construct($attributes);
    }

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
