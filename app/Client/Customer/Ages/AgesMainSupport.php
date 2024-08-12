<?php

namespace App\Client\Customer\Ages;

trait AgesMainSupport
{
    protected int $age;

    /**
     * @return int
     */
    protected function age(): int
    {
        return abs($this->get('age'));
    }
}
