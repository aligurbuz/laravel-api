<?php

declare(strict_types=1);

namespace App\Services;

use Illuminate\Support\Facades\Artisan;

/**
 * Class Service
 * @package App\Services
 */
class Service
{
    /**
     * creates endpoint for application
     *
     * @param $service
     * @param $directory
     * @param $model
     * @param null $routeFile
     */
    public function create($service, $directory, $model, $routeFile = null)
    {
        Artisan::call('create:crud', [
            'controller' => $service,
            'dir' => $directory,
            'model' => $model,
            'routeFile' => $routeFile
        ]);
    }
}
