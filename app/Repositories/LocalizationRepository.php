<?php

declare(strict_types=1);

namespace App\Repositories;

use Illuminate\Support\Str;
use App\Models\Localization;

/**
 * trait LocalizationRepository
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

        if(property_exists($repository,'localization') && count($repository->localization)){
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

            $localization   = Repository::localization()->localizedCode(($data[$this->getModelCode()] ?? 0));
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
