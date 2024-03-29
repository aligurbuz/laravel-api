<?php

namespace App\Client\Currencies\Currencies\Create;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Currencies\Currencies\CurrenciesMainSupport;
use App\Models\Currency;

class CreateClient extends Client
{
    use GeneratorTrait;
    use ClientAutoGeneratorTrait;
    use CurrenciesMainSupport;

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
    protected array $model = [Currency::class];

    /**
     * get rule for client
     *
     * @var array
     */
    protected array $rule = [];
}
