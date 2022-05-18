<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Localizations;

use App\Client\Localizations\Language\Create\CreateClient;
use App\Client\Localizations\Language\Get\GetClient;
use App\Client\Localizations\Language\Update\UpdateClient;
use App\Http\Controllers\Api\ApiController;
use App\Repositories\Resources\Localizations\Contracts\LanguageRepositoryContract;

class LanguageController extends ApiController
{
    /**
     * get language data
     *
     * @param GetClient $client
     * @param LanguageRepositoryContract $languageRepository
     * @return array
     */
    public function get(GetClient $client, LanguageRepositoryContract $languageRepository): array
    {
        $client->handle();
        return $languageRepository->get();
    }


    /**
     * create language data
     *
     * @param CreateClient $client
     * @param LanguageRepositoryContract $languageRepository
     * @return array|object
     */
    public function create(CreateClient $client, LanguageRepositoryContract $languageRepository): array|object
    {
        return $this->transaction(function () use ($client, $languageRepository) {
            $client->handle();
            return $languageRepository->create();
        });
    }


    /**
     * update language data
     *
     * @param UpdateClient $client
     * @param LanguageRepositoryContract $languageRepository
     * @return array|object
     */
    public function update(UpdateClient $client, LanguageRepositoryContract $languageRepository): array|object
    {
        return $this->transaction(function () use ($client, $languageRepository) {
            $client->handle();
            return $languageRepository->update();
        });
    }
}
