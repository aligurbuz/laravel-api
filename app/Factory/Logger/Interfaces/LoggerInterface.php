<?php

namespace App\Factory\Logger\Interfaces;

interface LoggerInterface
{
    /**
     * @param array $data
     * @return object
     */
    public function make(array $data = []) : object;
}
