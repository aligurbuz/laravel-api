<?php

namespace App\Facades\Database\Customer;

use App\Libs\AppContainer;
use App\Repositories\Repository;

class Contact
{
    /**
     * get default customer phone data for facade
     *
     * @return string|null
     */
    public function phone(): ?string
    {
        $default = $this->isDefault();

        if (!count($default)) {
            return null;
        }

        return $default['phone_code'] . '' . $default['phone'];
    }

    /**
     * get default customer contact data for facade
     *
     * @return array
     */
    public function isDefault(): array
    {
        $collect = collect($this->get())->where('is_default', true)->all();

        return count($collect) ? current($collect) : [];
    }

    /**
     * get customer contact data for facade
     *
     * @return array
     */
    public function get(): array
    {
        return AppContainer::use('customerContact', static function () {
            return Repository::customerContact()->getRepository();
        });
    }
}
