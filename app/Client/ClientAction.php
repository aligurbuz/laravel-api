<?php

declare(strict_types=1);

namespace App\Client;

trait ClientAction
{
    /**
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
