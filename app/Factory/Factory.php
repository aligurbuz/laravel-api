<?php

declare(strict_types=1);

namespace App\Factory;

use App\Factory\Logger\Interfaces\LoggerInterface;
use App\Factory\Storage\Interfaces\StorageInterface;

/**
 * Class Factory
 * @method static LoggerInterface logger($arguments = null)
 * @method static StorageInterface storage($arguments = null)
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

    /**
     * binds to classes as parameters.
     *
     * @return void
     */
    public static function bindings() : void
    {
        static::bind('Logger',[]);
        static::bind('Storage',request()->allFiles());
    }
}
