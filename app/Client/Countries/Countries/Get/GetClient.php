<?php

namespace App\Client\Countries\Countries\Get;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Countries\Countries\CountriesMainSupport;
use App\Models\Country;

class GetClient extends Client
{
    use GeneratorTrait;
    use ClientAutoGeneratorTrait;
    use CountriesMainSupport;

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
    protected array $model = [Country::class];

    /**
     * get rule for client
     *
     * @var array
     */
    protected array $rule = [];
}
