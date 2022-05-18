<?php

namespace App\Client\Localizations\Language\Get;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Models\Language;

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
    protected array $model = [Language::class];

    /**
     * get rule for client
     *
     * @var array
     */
    protected array $rule = [];
}
