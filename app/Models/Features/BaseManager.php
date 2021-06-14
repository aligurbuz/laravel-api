<?php

declare(strict_types=1);

namespace App\Models\Features;

use App\Services\Db;
use App\Services\AppContainer;
use App\Repositories\Repository;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Trait BaseManager
 * @property object localization
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

    protected array $localizationWithQuery = [
        'localization' => [
            'foreignColumn' => 'localized_code',
            'localColumn'   => 'product_code',
            'table' => 'localizations',
            'description' => 'You can use localizations relation belonging to product data.',
            'repository' => 'localization',
        ],
    ];

    /**
     * BaseManager constructor.
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        $this->fillable = Db::columns($this->getTable());
        $this->assignAppends();
        $this->withQueryConstructor();
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
     * get eager loading constructor for localization
     *
     * @return void
     */
    protected function withQueryConstructor()
    {
        if(property_exists($this,'withQuery') && is_array($this->withQuery)){
            $this->withQuery = array_merge_recursive($this->withQuery,$this->localizationWithQuery);
        }

        $this->withQuery = $this->localizationWithQuery;
    }

    /**
     * get model name
     *
     * @return string
     */
    public function getModelName() : string
    {
        return getModelName(get_called_class());
    }

    /**
     * get repository object
     *
     * @return object
     */
    public function getRepository() : object
    {
        $model = $this->getModelName();
        return Repository::$model();
    }

    /**
     * get localization model
     *
     * @return HasOne
     */
    public function localization(): HasOne
    {
        return $this->getRepository()->withLocalization();
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
