<?php

namespace App\Client\Customer\Ages\Get;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Customer\Ages\AgesMainSupport;
use App\Models\CustomerAge;

class GetClient extends Client
{
    use GeneratorTrait;
    use ClientAutoGeneratorTrait;
    use AgesMainSupport;

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
    protected array $model = [CustomerAge::class];

    /**
     * get rule for client
     *
     * @var array
     */
    protected array $rule = [];
}
