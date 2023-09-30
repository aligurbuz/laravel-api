<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Auth;

use App\Client\Auth\Login\Create\CreateClient;
use App\Facades\Database\Authenticate\Login;
use App\Http\Controllers\Api\ApiController;
use Exception;

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
    public function login(CreateClient $client): array
    {
        $client->handle();

        return Login::attemptWithTwoFactor();
    }
}
