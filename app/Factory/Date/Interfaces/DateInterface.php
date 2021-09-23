<?php

declare(strict_types=1);

namespace App\Factory\Date\Interfaces;

interface DateInterface
{
    /**
     * @param array $data
     * @return array
     */
    public function openTimeList(array $data = []) : array;
}
