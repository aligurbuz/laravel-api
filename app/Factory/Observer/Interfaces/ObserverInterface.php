<?php

declare(strict_types=1);

namespace App\Factory\Observer\Interfaces;

use App\Factory\Observer\Observer;

interface ObserverInterface
{
    /**
     * @return mixed
     * @see Observer::before()
     */
    public function before() : mixed;

    /**
     * @param array $data
     * @return mixed
     * @see Observer::after()
     */
    public function after(array $data = []) : mixed;
}
