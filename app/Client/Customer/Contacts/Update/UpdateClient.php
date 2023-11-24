<?php

namespace App\Client\Customer\Contacts\Update;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Customer\Contacts\ContactsMainSupport;
use App\Models\CustomerContact;

class UpdateClient extends Client
{
    use GeneratorTrait;
    use ClientAutoGeneratorTrait;
    use ContactsMainSupport;

    /**
     * get capsule for client
     *
     * @var array
     */
    protected array $capsule = [];

    /**
     * get model entity validation
     *
     * @var array|string[]
     */
    protected array $model = [CustomerContact::class];

    /**
     * get rule for client
     *
     * @var array
     */
    protected array $rule = ['customer_contact_code' => 'required|integer'];
}
