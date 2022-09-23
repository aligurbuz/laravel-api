<?php

declare(strict_types=1);

namespace App\Client;

use App\Facades\Authenticate\ApiKey;
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
    private function setRanges()
    {
        if (!ApiKey::isAdmin()) {
            $range = request()->query('range', '');
            $rangeList = explode(',', $range);
            if (!in_array('active', $rangeList, true)) {
                if (strlen($range) > 0) {
                    $range = $range . ',active';
                } else {
                    $range = 'active';
                }

                request()->query->remove('range');
                request()->query->add(['range' => $range]);
            }
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
    private function setPasswordRule()
    {
        if (request()->method() !== 'GET') {
            $this->ensureColumnExists('password', function () {
                $this->setRule('password', 'min:6|max:18');
            });
        }
    }
}
