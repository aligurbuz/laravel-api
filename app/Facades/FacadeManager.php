<?php

namespace App\Facades;

use App\Factory\Factory;

class FacadeManager
{
    /**
     * @param array $data
     * @param string $name
     * @return void
     */
    public static function publish(array $data, string $name): void
    {
        $class = lcfirst(class_basename(new static()));

        Factory::queue(['queue' => $class, 'routingKey' => $class .'.'. $name])->publish($data);
    }
}
