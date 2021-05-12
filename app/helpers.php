<?php

use JetBrains\PhpStorm\Pure;
use App\Models\Entities\EntityMap;

if(!function_exists('entity')){

    /**
     * get factory instance
     *
     * @return EntityMap
     */
    #[Pure] function entity(): EntityMap
    {
        return new EntityMap();
    }
}
