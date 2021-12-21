<?php

declare(strict_types=1);

namespace App\Factory\Email\Interfaces;

interface EmailInterface
{
    /**
     * @return void
     */
    public function order() : void;
}
