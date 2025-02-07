<?php

declare(strict_types=1);

namespace App\Factory\Client\Interfaces;

interface ClientInterface
{
    /**
     * @param array $data
     * @return array
     */
    public function cR(array $data = []): array;

    public function getClientNamespace(): string;
}
