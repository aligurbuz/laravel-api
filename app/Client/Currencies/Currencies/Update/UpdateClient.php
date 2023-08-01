<?php

namespace App\Client\Currencies\Currencies\Update;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Currencies\Currencies\CurrenciesMainSupport;
use App\Models\Currency;

class UpdateClient extends Client
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
    protected array $rule = ['currency_code' => 'required|integer'];
}
