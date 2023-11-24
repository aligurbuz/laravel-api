<?php

namespace App\Facades;

use App\Libs\AppContainer;

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
