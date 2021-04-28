<?php

namespace App\Factory;

use App\Factory\Owner\Interfaces\OwnerInterface;

/**
 * Class Factory
 * @method static OwnerInterface owner($arguments = null)
 * @package App\Factory
 */
class Factory extends FactoryManager
{
    /**
     * #this is adapter property for factory model
     * get the called class for factory
     *
     * @var array
     */
    protected static array $adapters = [];
}
