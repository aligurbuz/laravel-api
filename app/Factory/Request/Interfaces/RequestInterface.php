<?php

declare(strict_types=1);

namespace App\Factory\Request\Interfaces;

use App\Factory\Request\Request;

interface RequestInterface
{
    /**
     * @param string $email
     * @param string $password
     * @return array
     * @see Request::login()
     */
    public function login(string $email, string $password): array;
}
