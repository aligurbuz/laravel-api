<?php

namespace App\Factory;

use App\Factory\Logger\Interfaces\LoggerInterface;

/**
 * Class Factory
 * @method static LoggerInterface logger($arguments = null)
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
    protected static array $adapters = [
        'Logger' => 'MongoDbLogger'
    ];
}
