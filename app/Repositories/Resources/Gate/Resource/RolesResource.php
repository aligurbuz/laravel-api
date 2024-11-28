<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Gate\Resource;

use App\Factory\Factory;

class RolesResource
{
    /**
     * handle process for repository resource
     *
     * @param array $data
     * @return array
     */
    public function handle(array $data = []): array
    {
        $data['roles'] = $data['roles'] + Factory::permission()->roleFormatter();

        return $data;
    }

    /**
     * additional resource handler for repository resource
     *
     * @param array $data
     * @return array
     */
    public function additionalResourceHandler(array $data = []): array
    {
        return $data;
    }
}
