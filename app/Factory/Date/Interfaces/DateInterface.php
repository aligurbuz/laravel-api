<?php

declare(strict_types=1);

namespace App\Factory\Date\Interfaces;

interface DateInterface
{
    /**
     * @param array $data
     * @return array
     */
    public function openTimeList(array $data = []): array;

    /**
     * @param array $openTimeList
     * @param string|null $time
     * @param int|null $dayKey
     * @return bool
     */
    public function isOpen(array $openTimeList = [], ?string $time = null, ?int $dayKey = null): bool;
}
