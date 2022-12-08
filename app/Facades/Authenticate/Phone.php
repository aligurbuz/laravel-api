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
        return static::guardDetector(function(){
            return User::get()?->phone;
        });
    }

    /**
     * get customer phone data for facade
     *
     * @return string|null
     */
    public static function customer() : ?string
    {
        Customer::setCode(User::code());

        return Customer::contact()->phone();
    }

    /**
     * @param callable $callback
     * @return mixed
     */
    private static function guardDetector(callable $callback) : mixed
    {
        if(method_exists((new static()),$model = Guard::model())){
            return static::{$model}();
        }

        return $callback();
    }
}