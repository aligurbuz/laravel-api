<?php

namespace App\Client\Customer\Profiles\Create;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Customer\Profiles\ProfilesMainSupport;
use App\Models\Customer;

class CreateClient extends Client
{
    use GeneratorTrait;
    use ClientAutoGeneratorTrait;
    use ProfilesMainSupport;

    /**
     * get capsule for client
     *
     * @var array
     */
    protected array $capsule = ['gender', 'age', 'contact'];

    /**
     * get model entity validation
     *
     * @var array|string[]
     */
    protected array $model = [Customer::class];

    /**
     * get rule for client
     *
     * @var array
     */
    protected array $rule = [
        'gender' => 'array',
        'age' => 'array',
        'contact' => 'array',
    ];
}
