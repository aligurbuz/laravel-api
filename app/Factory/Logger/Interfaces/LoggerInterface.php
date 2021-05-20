<?php

namespace App\Factory\Logger\Interfaces;

interface LoggerInterface
{
    /**
     * @param array $data
     * @return array|object
     */
    public function make(array $data = []) : array|object;
}
