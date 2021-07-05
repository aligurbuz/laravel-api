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
     * @param object|null $repository
     * @return array
     */
    public function getLocalizations(?object $repository = null) : array
    {
        $repository = $repository ?? $this;

        if(property_exists($repository,'localization')){
            return $repository->localization;
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
        return $this->setEagerLoading(
            $localization = Localization::class,
            function() use($localization,$modelInstance){
                return $modelInstance->hasOne(
                    $localization,'localized_code',Str::snake(getTableCode($this->getModel()))
                );
            }
        );
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

            $result['data'] = $this->localizationPropagation($result['data']);
            return $result;
        }

        return call_user_func($callback);
    }

    /**
     * @param array $data
     * @param object|null $repository
     * @return array
     */
    public function localizationPropagation(array $data = [],?object $repository = null): array
    {
        $list           = [];
        $repository     = $repository ?? $this;
        $localizations  = $this->getLocalizations($repository);
        $withValues     = $repository->getModelWithValues();

        if(isset($data) && is_array($data)){
            foreach ($data as $key => $item){
                $values = $item['localization']['values'][0] ?? [];

                foreach ($withValues as $withValue){
                    if(isset($item[$withValue]['localization'])){
                        $item[$withValue] = ($this->localizationPropagation(
                                [$item[$withValue]],
                                $this->findRepositoryByModel($withValue)
                            )[0]) ?? [];
                    }
                }

                foreach ($localizations as $localization){
                    $item[$localization] = $values[$localization] ?? ($item[$localization] ?? null);
                    unset($item['localization']);
                    $list[$key] = $item;
                }
            }
        }

        return $list;
    }

    /**
     * create localization data
     *
     * @param array $data
     */
    public function createLocalization(array $data = [])
    {
        $getLocalizations = $this->getLocalizations();

        if($this->getModelName()!=='Localization' && count($getLocalizations)){
            $localizationData = [];

            foreach ($getLocalizations as $localization){
                $localizationData[$localization] = $data[$localization] ?? '';
            }

            $localizationCreate = cR('localizations.localizations.create',
                [
                    ['localized_code' => ($data[$this->getModelCode()] ?? 0),'values' => [$localizationData]]
                ]
            );

            Repository::localization()->create([$localizationCreate]);
        }
    }

    /**
     * update localization data
     *
     * @param array $data
     * @return void
     */
    public function updateLocalization(array $data = []) : void
    {
        $getLocalizations = $this->getLocalizations();

        if($this->getModelName()!=='Localization' && count($getLocalizations)){
            $localizationData = [];

            foreach ($getLocalizations as $localization){
                if(isset($data[$localization])){
                    $localizationData[$localization] = $data[$localization];
                }
            }

            $localization   = Repository::localization()->localizedCode(($data['product_code'] ?? 0));
            $repository     = $localization->getRepository(false);
            $values         = $repository[0]['values'][0] ?? [];

            $newData = [
                [
                    'localization_code' => ($repository[0]['localization_code'] ?? 0),
                    'values' => [array_merge($values,$localizationData)]
                ]
            ];

            $localization->update($newData,false);
        }
    }
}
