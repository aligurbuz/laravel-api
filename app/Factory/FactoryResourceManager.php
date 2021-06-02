<?php

declare(strict_types=1);

namespace App\Factory;

use ReflectionClass;

/**
 * Trait FactoryResourceManager
 * @package App\Factory
 */
abstract class FactoryResourceManager
{
    /**
     * @var object
     */
    protected object $factoryInstance;

    /**
     * call resource for factory object
     *
     * @param object $factory
     * @return void
     */
    public function callFactoryResource(object $factory): void
    {
        $this->factoryInstance = $factory;

        foreach ($this->getResources() as $resource){
            $resource = ucfirst($resource);
            $callableResource = $this->getResourceNamespace().'\\'.$resource.'\\'.$resource;

            $this->setResource($resource,$callableResource);
        }
    }

    /**
     * set resource for factory
     *
     * @param string $resource
     * @param string $callableResource
     * @return void
     */
    public function setResource(string $resource,string $callableResource): void
    {
        $this->factoryInstance->setResource(lcfirst($resource),new class{});

        if(class_exists($callableResource)){
            $this->factoryInstance->setResource(lcfirst($resource),new $callableResource);
        }
    }

    /**
     * get resource for factory
     *
     * @return array
     */
    public function getResources(): array
    {
        $reflectionClass = new ReflectionClass($this->factoryInstance);

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
