<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Facades\Authenticate\ApiKey;
use Exception;
use App\Services\Client;
use App\Services\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Client\Auth\Login\Create\CreateClient;
use App\Exceptions\Exception as ExceptionService;

class LoginController extends Controller
{
    /**
     * @param CreateClient $client
     * @return object
     *
     * @throws Exception
     */
    public function login(CreateClient $client) : object
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

            $user = Auth::user();

            $data = [];
            $data['user']  = $user->toArray();
            $data['token'] = $user->createToken(ApiKey::who())->accessToken;

            return Response::ok($data);
        }

        return ExceptionService::loginException();
    }
}
