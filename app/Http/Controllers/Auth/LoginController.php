<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Services\Response;
use App\Exceptions\Exception;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * get authenticate user via login
     *
     * @param LoginRequest $request
     * @return JsonResponse
     */
    public function login(LoginRequest $request) : JsonResponse
    {
        $request->validation();
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

            return Response::ok($data);
        }

        return Exception::loginException();
    }
}
