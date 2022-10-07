<?php

declare(strict_types=1);

namespace App\Factory\App\Interfaces;

use App\Factory\App\App;

interface AppInterface
{
    /**
     * @return int
     * @see App::customerCode()
     */
    public function customerCode(): int;
}
