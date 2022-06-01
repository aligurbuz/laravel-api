<?php

declare(strict_types=1);

namespace App\Client;

trait ClientAction
{
    /**
     * The "action" prefix must be placed at the end of the camelCase statement.
     *
     * @return array
     */
    public function withUserRoleAction(): array
    {
        return [
            'with' => [
                'role' => [
                    'select' => 'role_name'
                ]
            ]
        ];
    }
}
