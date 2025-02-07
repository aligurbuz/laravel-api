<?php

namespace App\Facades\Database\Customer;

use App\Libs\AppContainer;
use App\Repositories\Repository;

class Customer
{
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
     * @return ?string
     */
    public static function getName(): ?string
    {
        return (static::get())[0]['name'] ?? null;
    }

    /**
     * @return ?string
     */
    public static function getEmail(): ?string
    {
        return (static::get())[0]['email'] ?? null;
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
