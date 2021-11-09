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
     */
    public static function create($service,$directory,$model)
    {
        Artisan::call('create:crud',[
            'controller' => $service,
            'dir' => $directory,
            'model' => $model
        ]);
    }
}
