<?php

declare(strict_types=1);

namespace App\Factory\Email\Interfaces;

use App\Factory\Email\Email;

interface EmailInterface
{
    /**
     * @return void
     * @see Email::order()
     */
    public function order(): void;

    /**
     * @param string $email
     * @param string $hash
     * @see Email::verifyingEmailForUser()
     */
    public function verifyingEmailForUser(string $email, string $hash): void;
}
