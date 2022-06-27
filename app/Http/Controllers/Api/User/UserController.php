<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\User;

use App\Client\User\User\Create\CreateClient;
use App\Client\User\User\Get\GetClient;
use App\Client\User\User\Update\UpdateClient;
use App\Factory\Factory;
use App\Http\Controllers\Api\ApiController;
use App\Repositories\Resources\User\Contracts\UserRepositoryContract;

/**
 * Class UserController
 * @package App\Http\Controllers\Api\User
 */
class UserController extends ApiController
{
    use UserSupport;

    /**
     * get users data
     *
     * @param GetClient $client
     * @param UserRepositoryContract $userRepository
     * @return array
     */
    public function get(GetClient $client, UserRepositoryContract $userRepository): array
    {
        dd(Factory::money()->multiply(2.55,3.24));
        $client->handle();
        return $userRepository->get();
    }

    /**
     * get users data
     *
     * @param CreateClient $client
     * @param UserRepositoryContract $userRepository
     * @return array|object
     */
    public function create(CreateClient $client, UserRepositoryContract $userRepository): array|object
    {
        $client->handle();

        return current($userRepository->create());
    }

    /**
     * get users data
     *
     * @param UpdateClient $client
     * @param UserRepositoryContract $userRepository
     * @return array|object
     */
    public function update(UpdateClient $client, UserRepositoryContract $userRepository): array|object
    {
        $client->handle();
        return $userRepository->update();
    }
}
