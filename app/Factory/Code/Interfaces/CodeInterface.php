<?php

declare(strict_types=1);

namespace App\Factory\Code\Interfaces;

use App\Factory\Code\Code;

interface CodeInterface
{
    /**
     * @param bool $notDeleted
     * @return mixed
     * @see Code::throwExceptionIfDoesntExist()
     */
    public function throwExceptionIfDoesntExist(bool $notDeleted = true): mixed;
}
