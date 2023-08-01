<?php

namespace App\Client\Registration\Registration\Get;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Registration\Registration\RegistrationMainSupport;
use App\Models\Registration;

class GetClient extends Client
{
    use GeneratorTrait;
    use ClientAutoGeneratorTrait;
    use RegistrationMainSupport;

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
    protected array $model = [Registration::class];

    /**
     * get rule for client
     *
     * @var array
     */
    protected array $rule = [];
}
