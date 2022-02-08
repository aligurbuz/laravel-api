<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Auth;

use Exception;
use App\Factory\Factory;
use App\Services\Client;
use App\Http\Controllers\Api\ApiController;
use App\Client\Auth\Login\Create\CreateClient;
use App\Exceptions\Exception as ExceptionService;

class LoginController extends ApiController
{
    /**
     * @var bool
     */
    protected bool $authenticate = false;

    /**
     * @param CreateClient $client
     * @return array
     *
     * @throws Exception
     */
    public function login(CreateClient $client) : array
    {
        $client->handle();
        $clientData = (Client::data())[0] ?? [];

        $loginRequest = Factory::request()->login($clientData['email'],$clientData['password']);

        if(count($loginRequest)){
            return $loginRequest;
        }

        return ExceptionService::loginException();
    }
}
