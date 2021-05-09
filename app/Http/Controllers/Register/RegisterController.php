<?php

declare(strict_types=1);

namespace App\Http\Controllers\Register;

use App\Http\Controllers\Controller;
use App\Client\User\User\Create\CreateUserClient;
use App\Repositories\User\Contracts\UserRepositoryContract;

class RegisterController extends Controller
{
    /**
     * create new user via register
     *
     * @param CreateUserClient $client
     * @param UserRepositoryContract $userRepository
     * @return array
     */
    public function register(CreateUserClient $client,UserRepositoryContract $userRepository) : array
    {
        return $this->transaction(function() use($client,$userRepository){

            $client->handle();

            $user = current($userRepository->create());
            $response = $user->toArray();
            $response['token'] = $user->createToken('myApp')->accessToken;

            return $response;
        });
    }
}
