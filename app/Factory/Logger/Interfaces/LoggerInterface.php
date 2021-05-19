<?php

namespace App\Factory\Logger\Interfaces;

interface LoggerInterface
{
    /**
     * @param array $data
     * @param array $responseContent
     * @return object
     */
    public function make(array $data = [],array $responseContent = []) : object;
}
