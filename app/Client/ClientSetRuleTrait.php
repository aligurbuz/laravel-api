<?php

declare(strict_types=1);

namespace App\Client;

use App\Services\Db;

/**
 * Trait ClientSetRuleTrait
 * @package App\Client
 */
trait ClientSetRuleTrait
{
    /**
     * set rule for client
     *
     * @return void
     */
    public function setRuleProcess(): void
    {
        $this->setBooleanValues();
        $this->setEnumValues();
        $this->setPasswordRule();

    }

    /**
     * set password rule for client
     *
     * @return void
     */
    private function setPasswordRule()
    {
        if (request()->method() !== 'GET') {
            $this->ensureColumnExists('password', function () {
                $this->setRule('password', 'min:6|max:18');
            });
        }
    }

    /**
     * sets autoRule client to enum values
     *
     * @return void
     */
    private function setEnumValues(): void
    {
        $enumValues = Db::enums($this->getTable());

        foreach ($enumValues as $enumKey => $enumValue) {
            $this->setAutoRule($enumKey, 'in:' . $enumValue);
        }
    }

    /**
     * sets autoRule client to boolean values
     *
     * @return void
     */
    private function setBooleanValues(): void
    {
        //we get boolean values from db entity values.
        $booleanValues = Db::booleanValues($this->getTable());

        foreach ($booleanValues as $booleanValue) {
            $this->setAutoRule($booleanValue, ['boolean']);
        }
    }
}
