<?php

declare(strict_types=1);

namespace App\Factory\Request\Interfaces;

interface RequestInterface
{
    /**
     * @param string $email
     * @param string $password
     * @return array
     */
    public function login(string $email, string $password): array;
}
