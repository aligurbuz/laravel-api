<?php

declare(strict_types=1);

namespace App\Repositories\Supporters;

use App\Models\Localization;
use App\Repositories\Repository;
use Illuminate\Support\Str;

/**
 * trait LocalizationRepository
 * @package App\Repositories\Executors
 */
trait LocalizationRepository
{
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
            function () use ($localization, $modelInstance) {
                return $modelInstance->hasOne(
                    $localization, 'localized_code', Str::snake(getTableCode($this->getModel()))
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

        if ($this->getModelName() !== 'Localization' && count($getLocalizations)) {
            $localizationData = [];

            foreach ($getLocalizations as $localization) {
                $localizationData[$localization] = $data[$localization] ?? '';
            }

            $localizationCreate = cR('localizations.localizations.create',
                [
                    ['localized_code' => ($data[$this->getModelCode()] ?? 0), 'values' => [$localizationData]]
                ]
            );

            Repository::localization()->create([$localizationCreate]);
        }
    }

    /**
     * get localization data
     *
     * @param object|null $repository
     * @return array
     */
    public function getLocalizations(?object $repository = null): array
    {
        $repository = $repository ?? $this;

        if (property_exists($repository, 'localization') && count($repository->localization)) {
            return $repository->localization;
        }

        return [];
    }

    /**
     * update localization data
     *
     * @param array $data
     * @return void
     */
    public function updateLocalization(array $data = []): void
    {
        $getLocalizations = $this->getLocalizations();

        if ($this->getModelName() !== 'Localization' && count($getLocalizations)) {
            $localizationData = [];

            foreach ($getLocalizations as $localization) {
                if (isset($data[$localization])) {
                    $localizationData[$localization] = $data[$localization];
                }
            }


            if (count($localizationData)) {
                $localizedCode = ($data[$this->getModelCode()] ?? 0);
                $localization = Repository::localization()->localizedCode($localizedCode);
                $repository = $localization->getRepository(false);
                $values = $repository[0]['values'][0] ?? [];

                if (count($values)) {
                    $newData = [
                        [
                            'localization_code' => ($repository[0]['localization_code'] ?? 0),
                            'values' => [array_merge($values, $localizationData)]
                        ]
                    ];

                    $localization->update($newData, false);
                }
                else{
                    Repository::localization()->create([
                        'localization_code' => $this->bigIntegerFaker(),
                        'language_code' => appLanguageCode(),
                        'localized_code' => $localizedCode,
                        'values' => [$localizationData]
                    ]);
                }
            }
        }
    }
}
