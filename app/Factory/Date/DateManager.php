<?php

declare(strict_types=1);

namespace App\Factory\Date;

abstract class DateManager
{
    /**
     * @param string $resource
     * @return object
     */
    public function getResource(string $resource): object
    {
        return $this->binds['resource'][$resource] ?? new class {
            };
    }
}
