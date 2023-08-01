<?php

namespace App\Client\Countries\Cities\Get;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Countries\Cities\CitiesMainSupport;
use App\Models\City;

class GetClient extends Client
{
    use GeneratorTrait;
    use ClientAutoGeneratorTrait;
    use CitiesMainSupport;

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
    protected array $model = [City::class];

    /**
     * get rule for client
     *
     * @var array
     */
    protected array $rule = [];
}
