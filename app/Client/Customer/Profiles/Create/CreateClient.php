<?php

namespace App\Client\Customer\Profiles\Create;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Models\Customer;

class CreateClient extends Client
{
    use GeneratorTrait;
    use ClientAutoGeneratorTrait;

    /**
     * get capsule for client
     *
     * @var array
     */
    protected array $capsule = ['gender', 'age'];

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
    ];
}
