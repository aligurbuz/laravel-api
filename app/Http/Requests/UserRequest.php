<?php

namespace App\Http\Requests;

class UserRequest extends RequestManager
{
    /**
     * throws exception for request
     *
     * @return void
     */
    public function get() : void
    {
        $this->handle([
            //
        ]);
    }

    /**
     * throws exception for request
     *
     * @return void
     */
    public function create() : void
    {
        $this->handle([
            'name'     => 'required',
            'email'    => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);
    }

    /**
     * throws exception for request
     *
     * @return void
     */
    public function update() : void
    {
        $this->handle([
            'id' => 'required'
        ]);
    }
}
