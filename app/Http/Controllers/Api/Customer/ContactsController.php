<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Customer;

use App\Client\Customer\Contacts\Create\CreateClient;
use App\Client\Customer\Contacts\Get\GetClient;
use App\Client\Customer\Contacts\Update\UpdateClient;
use App\Http\Controllers\Api\ApiController;
use App\Repositories\Resources\Customer\Contracts\CustomerContactsRepositoryContract;

class ContactsController extends ApiController
{
    /**
     * get contacts data
     *
     * @param GetClient $client
     * @param CustomerContactsRepositoryContract $contactsRepository
     * @return array
     */
    public function get(GetClient $client, CustomerContactsRepositoryContract $contactsRepository): array
    {
        $client->handle();
        return $contactsRepository->get();
    }


    /**
     * create contacts data
     *
     * @param CreateClient $client
     * @param CustomerContactsRepositoryContract $contactsRepository
     * @return array|object
     */
    public function create(CreateClient $client, CustomerContactsRepositoryContract $contactsRepository): array|object
    {
        return $this->transaction(function () use ($client, $contactsRepository) {
            $client->handle();
            return $contactsRepository->create();
        });
    }


    /**
     * update contacts data
     *
     * @param UpdateClient $client
     * @param CustomerContactsRepositoryContract $contactsRepository
     * @return array|object
     */
    public function update(UpdateClient $client, CustomerContactsRepositoryContract $contactsRepository): array|object
    {
        return $this->transaction(function () use ($client, $contactsRepository) {
            $client->handle();
            return $contactsRepository->update();
        });
    }
}
