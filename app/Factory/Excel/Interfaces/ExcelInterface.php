<?php

declare(strict_types=1);

namespace App\Factory\Excel\Interfaces;

use App\Factory\Excel\Excel;

interface ExcelInterface
{
    /**
     * @return void;
     * @see Excel::import()
     */
    public function import(): void;
}
