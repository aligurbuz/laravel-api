<?php

namespace App\Client\Support\Excel\Create;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Support\Excel\ExcelMainSupport;
use App\Models\Excel;

class CreateClient extends Client
{
    use GeneratorTrait;
    use ClientAutoGeneratorTrait;
    use ExcelMainSupport;

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
    protected array $rule = [];
}
