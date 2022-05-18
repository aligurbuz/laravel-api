<?php

namespace App\Client\Support\Excel\Update;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Models\Excel;

class UpdateClient extends Client
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
    protected array $model = [Excel::class];

    /**
     * get rule for client
     *
     * @var array
     */
    protected array $rule = ['excel_code' => 'required|integer'];
}
