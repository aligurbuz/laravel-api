<?php

namespace App\Facades\Authenticate;

use App\Facades\Customer\Customer;

class Phone
{
    /**
     * get user phone for facade
     *
     * @return string|null
     */
    public static function get() : ?string
    {
        if(Guard::model()==='customer'){
            Customer::setCode(User::code());
            return Customer::contact()->phone();
        }

        return User::get()?->phone;
    }
}
