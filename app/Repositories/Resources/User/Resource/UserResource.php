<?php

declare(strict_types=1);

namespace App\Repositories\Resources\User\Resource;

/**
 * Class UserResource
 * @package App\Repositories\Resources\User\Resource
 */
class UserResource
{
    /**
     * @var array|string[]
     */
    public array $attributes = [];

    /**
     * handle process for repository resource
     *
     * @param array $data
     * @return array
     */
    public function handle(array $data = []): array
    {
        return $data;
    }

    /**
     * trait process for repository resource
     *
     * @param array $data
     * @return array
     */
    public function traitHandler(array $data = []): array
    {
        return $data;
    }
}
