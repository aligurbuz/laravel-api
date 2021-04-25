<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Exceptions\Exception;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Client\Auth\Login\Create\CreateClient;

class LoginController extends Controller
{
    /**
     * get authenticate user via login
     *
     * @param CreateClient $client
     * @return array
     */
    public function login(CreateClient $client) : array
    {
        $client->handle();
        $authGuard = Auth::guard('web');

        if (
            $authGuard->attempt(
                [   'email' => request('email'),
                    'password' => request('password')
                ]
            )) {

            $user = Auth::user();

            $data = [];
            $data['user']  = $user->toArray();
            $data['token'] = $user->createToken('MyApp')->accessToken;

            return $data;
        }

        return Exception::loginException();
    }
}
