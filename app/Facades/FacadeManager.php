<?php

namespace App\Facades;

use App\Factory\Factory;

class FacadeManager
{
    /**
     * @param array $data
     * @param string $name
     * @param string $exchange
     * @return void
     */
    public static function publish(array $data, string $name, string $exchange = 'notification'): void
    {
        $class = lcfirst(class_basename(new static()));

        Factory::queue([
            'queue' => $class,
            'routingKey' => $class . '.' . $name,
            'exchange' => $exchange
        ])->publish($data);
    }
}
