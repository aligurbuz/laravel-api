<?php

declare(strict_types=1);

namespace App\Factory\App\Resource\CustomerCode;

use App\Facades\Authenticate\Authenticate;
use App\Factory\App\AppManager;

/**
 * Class RestaurantCode
 * @package App\Factory\App\Resource\CustomerCode
 */
class CustomerCode extends AppManager
{
    /**
     * @var array
     */
    protected array $arguments = [];

    /**
     * RestaurantCode constructor.
     *
     * @param array $arguments
     */
    public function __construct(array $arguments = [])
    {
        $this->arguments = $arguments;
    }

    /**
     * get customer_code for app factory object
     *
     * @return int
     */
    protected function customerCode(): int
    {
        return Authenticate::code();
    }
}
