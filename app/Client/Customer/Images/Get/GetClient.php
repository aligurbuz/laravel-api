<?php

namespace App\Client\Customer\Images\Get;

use App\Client\Client;
use App\Client\ClientAutoGeneratorTrait;
use App\Client\Customer\Images\ImagesMainSupport;
use App\Models\CustomerImage;

class GetClient extends Client
{
    use GeneratorTrait;
    use ClientAutoGeneratorTrait;
    use ImagesMainSupport;

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
    protected array $model = [CustomerImage::class];

    /**
     * get rule for client
     *
     * @var array
     */
    protected array $rule = [];
}
