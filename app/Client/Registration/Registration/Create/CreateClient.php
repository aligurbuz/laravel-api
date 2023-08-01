<?php

namespace App\Client\Registration\Registration\Create;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Registration\Registration\RegistrationMainSupport;
use App\Models\Registration;

class CreateClient extends Client
{
    use GeneratorTrait;
    use ClientAutoGeneratorTrait;
    use RegistrationMainSupport;

    /**
     * get capsule for client
     *
     * @var array
     */
    protected array $capsule = ['user'];

    /**
     * get model entity validation
     *
     * @var array|string[]
     */
    protected array $model = [Registration::class];

    /**
     * get rule for client
     *
     * @var array
     */
    protected array $rule = [
        'user' => 'required|array'
    ];
}
