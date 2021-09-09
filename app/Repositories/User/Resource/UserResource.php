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
        return $data;
    }

    /**
     * trait process for repository resource
     *
     * @param array $data
     * @return array
     */
    public function traitHandler(array $data = []) : array
    {
        return $data;
    }
}
