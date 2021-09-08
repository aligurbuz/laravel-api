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
    public function setRuleProcess() : void
    {
        $this->setBooleanValues();
        //$this->setRule('key','rule');
    }

    /**
     * sets autoRule client to boolean values
     *
     * @return void
     */
    private function setBooleanValues() : void
    {
        //we get boolean values from db entity values.
        $booleanValues = Db::booleanValues($this->getTable());

        foreach ($booleanValues as $booleanValue){
            $this->setAutoRule($booleanValue,['regex:/^0$|^1$/i']);
        }
    }
}
