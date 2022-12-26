<?php

declare(strict_types=1);

namespace App\Factory\Permission\Interfaces;

use App\Factory\Permission\Permission;

interface PermissionInterface
{
    /**
     * @return array
     * @see Permission::get()
     */
    public function get(): array;

    /**
     * @return array
     * @see Permission::roleFormatter()
     */
    public function roleFormatter(): array;

    /**
     * @return bool
     * @see Permission::checkEndpoint()
     */
    public function checkEndpoint(): bool;
}
