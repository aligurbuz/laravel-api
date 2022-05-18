<?php

declare(strict_types=1);

namespace App\Factory\ApiKey;

use App\Factory\ApiKey\Interfaces\ApiKeyInterface;
use App\Services\ApiKeyManager;

/**
 * Class ApiKey
 * @package App\Factory\ApiKey
 */
class ApiKey extends ApiKeyManager implements ApiKeyInterface
{
    /**
     * binds property variable
     *
     * @var array
     */
    protected array $binds = [];


    /**
     * ApiKey constructor
     *
     * @param array $binds
     */
    public function __construct(array $binds = [])
    {
        $this->binds = $binds;

        (new ApiKeyManager())->handle();
    }
}
