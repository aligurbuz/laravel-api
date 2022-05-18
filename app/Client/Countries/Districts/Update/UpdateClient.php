<?php

namespace App\Client\Countries\Districts\Update;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Models\District;

class UpdateClient extends Client
{
    use GeneratorTrait;
    use ClientAutoGeneratorTrait;

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
    protected array $rule = ['district_code' => 'required|integer'];
}
