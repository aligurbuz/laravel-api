<?php

namespace App\Client\Definition\Genders\Get;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Definition\Genders\GendersMainSupport;
use App\Models\Gender;

class GetClient extends Client
{
    use GeneratorTrait;
    use GendersMainSupport;
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
    protected array $model = [Gender::class];

    /**
     * get rule for client
     *
     * @var array
     */
    protected array $rule = [];
}
