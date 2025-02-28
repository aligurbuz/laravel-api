<?php

namespace App\Facades\Support\Admin\Configuration\Resource;

use App\Facades\Support\Admin\Configuration\ConfigurationManager;
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
        [$httpRequest, $columns, $indexes, $data, $repository] = self::extracted($endpoint);

        if(isset($httpRequest['resource'][0]['last_page'])) {
            $lastPage = $httpRequest['resource'][0]['last_page'];
        }

        return [
            'data' => $httpRequest,
            'ranges' => $httpRequest['instructions']['ranges'] ?? [],
            'last_page' => $lastPage ?? null,
            'relations' => $httpRequest['instructions']['relations'] ?? [],
            'repository' => $repository,
            'code_column' => $repository->getModelCode(),
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
