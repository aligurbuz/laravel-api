<?php

namespace App\Facades\Database\Authenticate;

use App\Facades\Database\Customer\Customer;

class Phone
{
    /**
     * get user phone for facade
     *
     * @return string|null
     */
    public static function get(): ?string
    {
        return static::guardDetector(static function () {
            return User::get()?->phone;
        });
    }

    /**
     * @param callable $callback
     * @return mixed
     */
    private static function guardDetector(callable $callback): mixed
    {
        if (method_exists((new static()), $model = Guard::model())) {
            return static::{$model}();
        }

        return $callback();
    }

    /**
     * get customer phone data for facade
     *
     * @return string|null
     */
    public static function customer(): ?string
    {
        Customer::setCode(User::code());

        return Customer::contact()->phone();
    }
}
