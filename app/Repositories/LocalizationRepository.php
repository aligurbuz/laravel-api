<?php

declare(strict_types=1);

namespace App\Repositories;

use Illuminate\Support\Str;
use App\Models\Localization;

/**
 * Trait LocalizationRepository
 * @package App\Repositories
 */
trait LocalizationRepository
{
    /**
     * get localization data
     *
     * @return array
     */
    public function getLocalizations() : array
    {
        if(property_exists($this,'localization')){
            return $this->localization;
        }

        return [];
    }
    /**
     * get with localization relation for repository
     *
     * @param object $modelInstance
     * @return object
     */
    public function withLocalization(object $modelInstance): object
    {
        return $this->setEagerLoading($localization = Localization::class,function() use($localization,$modelInstance){
            return $modelInstance->hasOne($localization,'localized_code',Str::snake(getTableCode($this->getModel())));
        });
    }

    /**
     * get localization process for repository
     *
     * @param callable $callback
     * @return array
     */
    public function localizationProcess(callable $callback) : array
    {
        if(property_exists($this,'localization')){
            $with = request()->query->get('with',[]);
            request()->query->set('with',array_merge($with,['localization' => 'values']));

            $result =  call_user_func($callback);

            $list = [];

            if(isset($result['data']) && is_array($result['data'])){
                foreach ($result['data'] as $key => $item){
                    $values = $item['localization']['values'][0] ?? [];

                    foreach ($this->getLocalizations() as $localization){
                        $item[$localization] = $values[$localization] ?? null;
                        unset($item['localization']);
                        $list[$key] = $item;
                    }
                }
            }

            $result['data'] = $list;

            return $result;
        }

        return call_user_func($callback);
    }
}
