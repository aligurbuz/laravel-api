<?php

declare(strict_types=1);

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Client\User\User\Get\GetUserClient;
use App\Client\User\User\Update\UpdateUserClient;
use App\Client\User\User\Create\CreateUserClient;
use App\Repositories\User\Contracts\UserRepositoryContract;

/**
 * Class UserController
 * @package App\Http\Controllers\User
 */
class UserController extends Controller
{
    use UserSupport;

    /**
     * get users data
     *
     * @param GetUserClient $client
     * @param UserRepositoryContract $userRepository
     * @return array
     */
    public function get(GetUserClient $client, UserRepositoryContract $userRepository) : array
    {
        $client->handle();

        return $userRepository->get();
    }

    /**
     * get users data
     *
     * @param CreateUserClient $client
     * @param UserRepositoryContract $userRepository
     * @return array
     */
    public function create(CreateUserClient $client, UserRepositoryContract $userRepository) : array
    {
        $client->handle();

        $user = $userRepository->create();
        $user['token'] = $user->createToken('myApp')->accessToken;

        return $user;
    }

    /**
     * get users data
     *
     * @param UpdateUserClient $client
     * @param UserRepositoryContract $userRepository
     * @return array
     */
    public function update(UpdateUserClient $client, UserRepositoryContract $userRepository) : array
    {
        $client->handle();

        return $userRepository->update();
    }
}
