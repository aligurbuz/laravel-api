<?php

namespace App\Client;

/**
 * Trait ClientSupport
 * @package App\Client
 */
trait ClientSupport
{
    /**
     * it is is_default in the client data
     *
     * @var string|null
     */
    protected ?string $isDefault;

    /**
     * when the is_default value is sent as 1,
     * if there is is_default in the table,
     * it will automatically run as a trigger that makes the previous records 0.
     *
     * @return string|null
     */
    public function isDefault(): ?string
    {
        return $this->isDefault;
    }
}
