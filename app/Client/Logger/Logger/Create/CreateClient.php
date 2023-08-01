<?php

namespace App\Client\Logger\Logger\Create;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Logger\Logger\LoggerMainSupport;

class CreateClient extends Client
{
    use GeneratorTrait;
    use ClientAutoGeneratorTrait;
    use LoggerMainSupport;

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
    protected array $model = [];

    /**
     * get rule for client
     *
     * @var array
     */
    protected array $rule = [];
}
