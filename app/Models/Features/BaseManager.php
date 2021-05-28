<?php

declare(strict_types=1);

namespace App\Models\Features;

use App\Services\Db;

/**
 * Trait BaseManager
 * @package App\Models\Features
 */
trait BaseManager
{
    use ScopeManager;

    /**
     * BaseManager constructor.
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        $this->fillable = Db::columns($this->getTable());
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
    }
}
