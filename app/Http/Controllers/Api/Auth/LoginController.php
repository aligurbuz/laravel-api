<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Auth;

use Exception;
use App\Factory\Factory;
use App\Services\Client;
use App\Http\Controllers\Api\ApiController;
use App\Client\Auth\Login\Create\CreateClient;

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

        return Factory::request()->login($clientData['email'],$clientData['password']);
    }
}
