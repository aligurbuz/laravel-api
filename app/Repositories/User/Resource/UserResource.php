<?php

declare(strict_types=1);

namespace App\Repositories\User\Resource;

/**
 * Class UserResource
 * @package App\Repositories\User\Resource
 */
class UserResource
{
    /**
     * handle process for repository resource
     *
     * @param array $data
     * @return array
     */
    public function handle(array $data = []) : array
    {
        $data['test'] = 1;

        return $data;
    }
}
