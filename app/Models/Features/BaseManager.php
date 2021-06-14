<?php

declare(strict_types=1);

namespace App\Models\Features;

use App\Models\Localization;
use App\Services\AppContainer;
use App\Services\Db;
use Illuminate\Database\Eloquent\Relations\HasOne;

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
     * get localization model
     *
     * @return HasOne
     */
    public function localization(): HasOne
    {
        return $this->hasOne(Localization::class,'localized_code',getTableCode(get_called_class()))
            ->where('language_code',appLanguageCode());
    }

    /**
     * @param $columnName
     * @param $value
     * @return mixed
     */
    private function getLocalization($columnName,$value) : mixed
    {
        $localization = $this->localization()->first();

        if(!is_null($localization)){
            $values = objectValue($localization->values);

            return $values->$columnName ?? $value;
        }

        return $value;
    }

    /**
     * get localization name for model
     *
     * @param $name
     * @return string
     */
    public function getNameAttribute($name) : string
    {
        return $this->getLocalization('name',$name);
    }

    /**
     * get localization description for model
     *
     * @param $description
     * @return string
     */
    public function getDescriptionAttribute($description) : string
    {
        return $this->getLocalization('description',$description);
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
