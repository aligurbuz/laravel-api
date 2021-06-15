<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Exceptions\Exception;
use App\Http\Controllers\ApiController;

class LogoutController extends ApiController
{
    /**
     * It will terminate the current token information.
     *
     * @return bool|object
     */
    public function logout() : bool|object
    {
        $logout = auth()->user()->token()->revoke();

        if(!$logout){
            return Exception::loginException();
        }

        return true;
    }
}
