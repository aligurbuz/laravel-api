<?php

declare(strict_types=1);

namespace App\Client;

/**
 * Class ArrayRules
 * @package App\Client
 */
class ArrayRules
{
    /**
     * get array rules for client
     *
     * @return \array[][]
     */
    public function handle() : array
    {
        return [
          'serviceName' => [
              'field' => [
                  'name' => [
                      'description' => '',
                      'required' => 'true',
                      'type' => 'string'
                  ]
              ]
          ]
        ];
    }
}
