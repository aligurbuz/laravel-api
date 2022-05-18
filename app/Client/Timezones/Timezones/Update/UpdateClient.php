<?php

namespace App\Client\Timezones\Timezones\Update;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Models\Timezone;

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
    protected array $model = [Timezone::class];

    /**
     * get rule for client
     *
     * @var array
     */
    protected array $rule = ['timezone_code' => 'required|integer'];
}
