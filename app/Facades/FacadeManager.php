<?php

namespace App\Facades;

use App\Services\AppContainer;

class FacadeManager
{
    /**
     * @var mixed
     */
    protected mixed $data;

    /**
     * FacadeManager constructor.
     */
    public function __construct()
    {
        if (AppContainer::has($this->facade)) {
            $this->data = AppContainer::get($this->facade);
        }
    }
}
