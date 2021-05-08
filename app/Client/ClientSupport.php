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
    protected function isDefault(): ?string
    {
        if($this->isDefault == '1' && request()->method() !== 'GET'){
            $this->ensureColumnExists('is_default',function(){
                $this->repository()->update([['is_default' => '0']],false);
            });
        }

        return $this->isDefault;
    }
}
