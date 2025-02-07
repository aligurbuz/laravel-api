<?php

namespace App\Client\Support\Dummy\Create;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Support\Dummy\DummyMainSupport;
use App\Models\Dummy;

class CreateClient extends Client
{
    use GeneratorTrait;
    use DummyMainSupport;
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
    protected array $model = [Dummy::class];

    /**
     * get rule for client
     *
     * @var array
     */
    protected array $rule = [];
}
