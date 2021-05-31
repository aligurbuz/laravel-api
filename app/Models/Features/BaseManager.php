<?php

declare(strict_types=1);

namespace App\Models\Features;

use App\Services\AppContainer;
use App\Services\Db;

/**
 * Trait BaseManager
 * @package App\Models\Features
 */
trait BaseManager
{
    use ScopeManager,GeneralAppends;

    /**
     * @var array|string[]
     */
    protected array $autoModelAppends = [
        'created_at_human' => 'Displays the created_at value in diffForHumans format.',
        'updated_at_human' => 'Displays the updated_at value in diffForHumans format.'
    ];

    /**
     * BaseManager constructor.
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        $this->fillable = Db::columns($this->getTable());
        $this->assignAppends();
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

    /**
     * set appends according to client
     *
     * @return void
     */
    public function assignAppends()
    {
        $list = [];
        $modelAppends = array_merge($this->autoModelAppends,($this->modelAppends ?? []));
        AppContainer::set('responseFormatterSupplement',['appends' => $modelAppends]);

        $clientAppends = (request()->query->all())['append'] ?? null;

        if(!is_null($clientAppends)){
            $appendsList = explode(',',$clientAppends);

            foreach ($appendsList as $item){
                if(isset($modelAppends[$item])){
                    $list[] = $item;
                }
            }
        }

        $this->setAppends($list);
    }
}
