<?php

namespace App\Factory;

use Exception;
use App\Factory\Owner\Interfaces\OwnerInterface;
use Illuminate\Contracts\Container\BindingResolutionException;

/**
 * Class Factory
 * @method static OwnerInterface owner()
 * @package App\Factory
 */
class Factory
{
    /**
     * get call static for factory
     *
     * @param string $name
     * @param array $arguments
     * @return mixed
     * @throws BindingResolutionException
     * @throws Exception
     */
    public static function __callStatic(string $name,array $arguments = []): mixed
    {
        $name = ucfirst($name);
        $factory = 'App\Factory\\'.$name.'\\'.$name;

        if(class_exists($factory)){
            return app()->make($factory);
        }

        return throw new Exception('factory is not valid');
    }
}
