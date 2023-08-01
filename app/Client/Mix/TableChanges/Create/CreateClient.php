<?php

namespace App\Client\Mix\TableChanges\Create;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Mix\TableChanges\TableChangesMainSupport;
use App\Models\TableChange;

class CreateClient extends Client
{
    use GeneratorTrait;
    use ClientAutoGeneratorTrait;
    use TableChangesMainSupport;

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
    protected array $model = [TableChange::class];

    /**
     * get rule for client
     *
     * @var array
     */
    protected array $rule = [];
}
