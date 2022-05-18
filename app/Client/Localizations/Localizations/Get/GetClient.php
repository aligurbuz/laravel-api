<?php

namespace App\Client\Localizations\Localizations\Get;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Models\Localization;

class GetClient extends Client
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
    protected array $model = [Localization::class];

    /**
     * get rule for client
     *
     * @var array
     */
    protected array $rule = [];
}
