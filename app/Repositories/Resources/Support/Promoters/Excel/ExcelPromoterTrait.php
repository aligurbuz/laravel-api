<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Support\Promoters\Excel;

use App\Models\Entities\Excel;

trait ExcelPromoterTrait
{
    /**
     * get auto ExcelRepository scope method
     *
     * @param object|null $builder
     * @return object
     */
    public function excelRepository(?object $builder = null): object
    {
        return $this->apply($builder);
    }

    /**
     * get entity for repository
     *
     * @return Excel
     */
    public function entity(): Excel
    {
        return parent::entity();
    }
}
