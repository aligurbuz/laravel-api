<?php

declare(strict_types=1);

namespace App\Http\Controllers\Register;

use Exception;
use App\Services\Response;
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
     * @return object
     *
     * @throws Exception
     */
    public function register(CreateUserClient $client,UserRepositoryContract $userRepository) : object
    {
        return $this->transaction(function() use($client,$userRepository){

            $client->handle();

            $user = current($userRepository->create());
            $response = $user->toArray();
            $response['token'] = $user->createToken(config('app.name'))->accessToken;

            return Response::ok($response);
        });
    }
}
