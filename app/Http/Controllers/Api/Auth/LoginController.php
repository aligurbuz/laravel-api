<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Auth;

use Exception;
use App\Services\Client;
use Illuminate\Support\Facades\Auth;
use App\Facades\Authenticate\ApiKey;
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
        $authGuard = Auth::guard(authGuard());

        if (
            $authGuard->attempt(
                [   'email' => $clientData['email'] ?? null,
                    'password' => $clientData['password'] ?? null,
                ]
            )) {

            $user = Auth::guard(authGuard())->user();

            $data = [];
            $data['user']  = $user->toArray();
            $data['token'] = $user->createToken(ApiKey::who())->accessToken;

            return $data;
        }

        return ExceptionService::loginException();
    }
}
