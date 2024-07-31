<?php

declare(strict_types=1);

namespace App\Client;

use App\Libs\Db;

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
        $this->setRanges();
        $this->setBooleanValues();
        $this->setEnumValues();
        $this->setPasswordRule();

    }

    /**
     * set range for web client
     *
     * @return void
     */
    private function setRanges(): void
    {
        //\App\Libs\Client::orderByOperationForRange();
        //\App\Libs\Client::statusOperationForRange();
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
     * set password rule for client
     *
     * @return void
     */
    private function setPasswordRule(): void
    {
        if (request()?->method() !== 'GET') {
            $this->ensureColumnExists('password', function () {
                $this->setRule('password', 'min:6|max:18');
            });
        }
    }
}
