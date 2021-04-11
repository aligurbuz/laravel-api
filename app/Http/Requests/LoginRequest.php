<?php

namespace App\Http\Requests;

class LoginRequest extends RequestManager
{
    /**
     * throws exception for request
     *
     * @return void
     */
    public function validation() : void
    {
        $this->handle([
            'email' => 'required',
            'password' => 'required'
        ]);
    }
}
