<?php

namespace App\Facades\Database\Currency;

use App\Libs\AppContainer;
use App\Models\Entities\Currency as EntityCurrency;
use App\Repositories\Repository;

class Currency
{
    /**
     * @param int $code
     * @return EntityCurrency
     */
    public static function get(int $code): EntityCurrency
    {
        return AppContainer::use('currency_' . $code, function () use ($code) {
            return Repository::currency()->code($code)->entity();
        });
    }
}
