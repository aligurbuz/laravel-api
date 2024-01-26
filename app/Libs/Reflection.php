<?php

namespace App\Libs;

use ReflectionClass;
use ReflectionException;

class Reflection
{
    protected ReflectionClass $reflection;

    /**
     * @throws ReflectionException
     */
    public function __construct(string $class)
    {
        $this->reflection = new ReflectionClass($class);
    }

    public function getParentMethods(): array
    {
        $methods = $this->reflection->getParentClass()->getMethods();

        $list = [];

        foreach ($methods as $method) {
            $list[] = $method->getName();
        }

        return $list;
    }

    public function getChildMethods(): array
    {
        $methods = $this->getMethods();

        $list = [];
        $exceptMethods = array_merge($this->getParentMethods(), ['__construct']);

        foreach ($methods as $method) {
            if (!in_array($method, $exceptMethods, true)) {
                $list[] = $method;
            }
        }

        return $list;
    }

    public function getMethods(): array
    {
        $methods = $this->reflection->getMethods();

        $list = [];

        foreach ($methods as $method) {
            $list[] = $method->getName();
        }

        return $list;
    }
}
