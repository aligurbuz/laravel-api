<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Customer\Promoters\Contacts;

use App\Models\Entities\CustomerContact;

trait ContactsPromoterTrait
{
    /**
     * get auto ContactsRepository scope method
     *
     * @param object|null $builder
     * @return object
     */
    public function contactsRepository(?object $builder = null): object
    {
        return $this->apply($builder);
    }


    /**
     * get entity for repository
     *
     * @return CustomerContact
     */
    public function entity(): CustomerContact
    {
        return parent::entity();
    }
}
