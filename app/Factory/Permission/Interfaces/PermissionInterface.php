<?php

declare(strict_types=1);

namespace App\Factory\Permission\Interfaces;

interface PermissionInterface
{
    /**
     * @return array
     */
    public function get() : array;

    /**
     * @return array
     */
    public function roleFormatter() : array;
}
