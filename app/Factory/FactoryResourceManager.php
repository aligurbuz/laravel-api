<?php

declare(strict_types=1);

namespace App\Factory;

use ReflectionClass;
use ReflectionException;

/**
 * Trait FactoryResourceManager
 * @package App\Factory
 */
abstract class FactoryResourceManager
{
    /**
     * call resource for factory object
     *
     * @return mixed
     * @throws ReflectionException
     */
    public function callFactory(): mixed
    {
        foreach ($this->getResources() as $resource){
            $resource = ucfirst($resource);
            $callableResource = $this->getResourceNamespace().'\\'.$resource.'\\'.$resource;

            if(class_exists($callableResource)){
                static::$arguments['resource'][lcfirst($resource)] = new $callableResource(static::$arguments);
            }
        }

        $factory = static::$factory;
        return new $factory(static::$arguments);
    }

    /**
     * get resource for factory
     *
     * @return array
     * @throws ReflectionException
     */
    public function getResources(): array
    {
        $reflectionClass = new ReflectionClass(static::$factory);

        if($reflectionClass->hasProperty('resource')){
            return $reflectionClass->getProperty('resource')->getDefaultValue();
        }

        return [];
    }

    /**
     * get resource namespace
     *
     * @return string
     */
    public function getResourceNamespace(): string
    {
        return 'App\Factory\\'.static::$name.'\Resource';
    }
}
