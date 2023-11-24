<?php

namespace App\Facades\Database\Customer;

use App\Repositories\Repository;
use App\Libs\AppContainer;

class Customer
{
    /**
     * get customer data for facade
     *
     * @return array
     */
    public static function get(): array
    {
        return AppContainer::use('customer', static function () {
            return Repository::customer()->getRepository();
        });
    }

    /**
     * get customer code for customer facade
     *
     * @return ?int
     */
    public static function code(): ?int
    {
        return (static::get())[0]['customer_code'] ?? null;
    }

    /**
     * set customer code for customer facade
     *
     * @param int $customerCode
     * @return int
     */
    public static function setCode(int $customerCode): int
    {
        return customerCode($customerCode);
    }

    /**
     * get customer contact instance for facade
     *
     * @return Contact
     */
    public static function contact(): Contact
    {
        return new Contact();
    }
}
