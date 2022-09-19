<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Auth;

use App\Exceptions\Exception;
use App\Http\Controllers\Api\ApiController;

class LogoutController extends ApiController
{
    /**
     * It will terminate the current token information.
     *
     * @return array
     */
    public function logout(): array
    {
        $logout = auth()->user()->tokens()->delete();

        if (!$logout) {
            Exception::loginException();
        }

        return ['logout' => 'success'];
    }
}
