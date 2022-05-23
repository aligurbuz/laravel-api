<?php

declare(strict_types=1);

namespace App\Facades\Http\Local;

use App\Facades\Http\HttpManager;

/**
 * @method static getUser()
 */
class Local extends HttpManager
{
    /**
     * @var array|string[]
     */
    protected static array $successStatus = [200,201];

    /**
     * get error message for client request
     *
     * @param array $data
     * @return mixed
     */
    public static function getErrorMessage(array $data = []): mixed
    {
        return $data['errorMessage'] ?? null;
    }

    /**
     * get response for client request
     *
     * @param array $data
     * @return array
     */
    public static function getResponse(array $data = []): array
    {
        return $data['resource'] ?? [];
    }
}
