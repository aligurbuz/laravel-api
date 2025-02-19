<?php

namespace App\Facades\Support\Admin\Configuration;

use Illuminate\Http\Client\ConnectionException;
use JsonException;

trait CustomerProfiles
{
    use ConfigurationManager;

    /**
     * @param string $endpoint
     * @return array
     * @throws ConnectionException
     * @throws JsonException
     */
    public static function customerProfiles(string $endpoint): array
    {
        [$httpRequest, $columns, $indexes, $data] = self::extracted($endpoint);

        return [
            'data' => $httpRequest,
            'widgets' => [
                'table' => [
                    'columns' => $columns,
                    'indexes' => $indexes,
                    'data' => $data
                ]
            ]
        ];
    }

    public static function extraColumns(): array
    {
        return [
            'after' => 'email',
            'keys' => [
                'age',
                'gender'
            ],
            'keysValue' => [
                'age' => 'customer_ages.0.age',
                'gender' => 'customer_genders.0.gender.0.name',
            ]
        ];
    }

    /**
     * @return array
     */
    public static function getParams(): array
    {
        $params = array_merge(
            request()->query->all(),
            [
                'with' => [
                    'customerAges' => ['select' => '*'],
                    'customerGenders' => [
                        'with' => ['gender' => ['select' => '*']],
                        'select' => '*'
                    ]
                ]
            ]
        );

        request()->query->replace($params);

        return $params;
    }


}
