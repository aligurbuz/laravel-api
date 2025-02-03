<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Support\Events\Crypt;

use App\Libs\HashGenerator;

trait AfterCreate
{
    /**
     * event performed after repository create
     *
     * @param array $result
     * @param array $clientData
     * @return array
     */
    public function eventFireAfterCreate(array $result = [], array $clientData = []): array
    {
        $hash = (new HashGenerator());
        $result['encrypt_body'] = $hash->encode($result['body']);
        $result['decrypt_body'] = $hash->decode($result['encrypt_body'], true);

        unset(
            $result['body'],
            $result['api_key'],
            $result['authenticate'],
            $result['updated_at'],
            $result['created_at']
        );

        return $result;
    }
}
