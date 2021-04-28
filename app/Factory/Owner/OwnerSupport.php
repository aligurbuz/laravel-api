<?php

namespace App\Factory\Owner;

class OwnerSupport
{
    /**
     * @var mixed|null
     */
    protected mixed $bind;

    /**
     * Owner constructor.
     * @param null $bind
     */
    public function __construct($bind = null)
    {
        $this->bind = $bind;
    }
}
