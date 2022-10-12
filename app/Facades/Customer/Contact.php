<?php

namespace App\Facades\Customer;

use App\Repositories\Repository;
use App\Services\AppContainer;

class Contact
{
    /**
     * get customer contact data for facade
     *
     * @return array
     */
    public function get(): array
    {
        return AppContainer::use('customerContact', function () {
            return Repository::customerContact()->getRepository();
        });
    }

    /**
     * get default customer contact data for facade
     *
     * @return array
     */
    public function isDefault() : array
    {
        $collect = collect(static::get())->where('is_default',true)->all();

        return current($collect);
    }

    /**
     * get default customer phone data for facade
     *
     * @return string
     */
    public function phone() : string
    {
        $default = $this->isDefault();

        return $default['phone_code'].''.$default['phone'];
    }
}
