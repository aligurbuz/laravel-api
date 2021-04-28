<?php

namespace App\Factory\Owner;

use App\Factory\Owner\Interfaces\OwnerInterface;

class Owner extends OwnerSupport implements OwnerInterface
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
