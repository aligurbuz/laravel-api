<?php

declare(strict_types=1);

namespace App\Factory\Role\Interfaces;

interface RoleInterface
{
    /**
     * @return array
     */
    public function createAdministrator(): array;
}
