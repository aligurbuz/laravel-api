<?php

namespace App\Client\Customer\Genders\Update;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Customer\Genders\GendersMainSupport;
use App\Models\CustomerGender;

class UpdateClient extends Client
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
    protected array $rule = ['customer_gender_code' => 'required|integer'];
}
