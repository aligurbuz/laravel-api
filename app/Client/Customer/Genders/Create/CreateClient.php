<?php

namespace App\Client\Customer\Genders\Create;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Customer\Genders\GendersMainSupport;
use App\Models\CustomerGender;

class CreateClient extends Client
{
    use GeneratorTrait;
    use ClientAutoGeneratorTrait;
    use GendersMainSupport;

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
    protected array $model = [CustomerGender::class];

    /**
     * get rule for client
     *
     * @var array
     */
    protected array $rule = [];
}
