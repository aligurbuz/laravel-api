<?php

namespace App\Client\Countries\Districts\Get;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Countries\Districts\DistrictsMainSupport;
use App\Models\District;

class GetClient extends Client
{
    use GeneratorTrait;
    use ClientAutoGeneratorTrait;
    use DistrictsMainSupport;

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
    protected array $model = [District::class];

    /**
     * get rule for client
     *
     * @var array
     */
    protected array $rule = [];
}
