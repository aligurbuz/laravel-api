<?php

declare(strict_types=1);

namespace App\Http\Controllers\User;

use App\Services\Response;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Client\User\User\Get\GetUserClient;
use App\Client\User\User\Get\UpdateUserClient;
use App\Client\User\User\Get\CreateUserClient;
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
     * @return JsonResponse
     */
    public function get(GetUserClient $client, UserRepositoryContract $userRepository) : JsonResponse
    {
        $client->handle();

        return Response::ok($userRepository->get());
    }

    /**
     * get users data
     *
     * @param CreateUserClient $client
     * @param UserRepositoryContract $userRepository
     * @return JsonResponse
     */
    public function create(CreateUserClient $client, UserRepositoryContract $userRepository) : JsonResponse
    {
        $client->handle();

        $user = $userRepository->create();
        $user['token'] = $user->createToken('myApp')->accessToken;

        return Response::ok($user);
    }

    /**
     * get users data
     *
     * @param UpdateUserClient $client
     * @param UserRepositoryContract $userRepository
     * @return JsonResponse
     */
    public function update(UpdateUserClient $client, UserRepositoryContract $userRepository) : JsonResponse
    {
        $client->handle();

        return Response::ok($userRepository->update());
    }
}
