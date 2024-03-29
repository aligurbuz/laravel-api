<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Registration;

use App\Client\Registration\Registration\Create\CreateClient;
use App\Http\Controllers\Api\ApiController;
use App\Repositories\Resources\Registration\Contracts\RegistrationRepositoryContract;

class RegistrationController extends ApiController
{
    use RegistrationSupportTrait;

    /**
     * @var bool
     */
    protected bool $authenticate = false;

    /**
     * create registration data
     *
     * @param CreateClient $client
     * @param RegistrationRepositoryContract $registrationRepository
     * @return array|object
     */
    public function create(CreateClient $client, RegistrationRepositoryContract $registrationRepository): array|object
    {
        return $this->transaction(function () use ($client, $registrationRepository) {
            $client->handle();

            return $this->verifyingEmail(function () use ($registrationRepository) {
                return $registrationRepository->create();
            });
        });
    }
}
