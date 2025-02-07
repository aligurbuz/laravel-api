<?php

namespace App\Client\Support\Dummy\Update;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Support\Dummy\DummyMainSupport;
use App\Models\Dummy;

class UpdateClient extends Client
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
    protected array $rule = ['dummy_code' => 'required|integer'];
}
