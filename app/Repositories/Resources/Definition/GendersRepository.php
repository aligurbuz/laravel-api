<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Definition;

use App\Models\Gender;
use App\Repositories\EloquentRepository;
use App\Repositories\GeneralPromoterTrait;
use App\Repositories\Resources\Definition\Contracts\DefinitionGendersRepositoryContract;
use App\Repositories\Resources\Definition\Events\Genders\AfterCreate;
use App\Repositories\Resources\Definition\Events\Genders\AfterUpdate;
use App\Repositories\Resources\Definition\Events\Genders\BeforeCreate;
use App\Repositories\Resources\Definition\Events\Genders\BeforeUpdate;
use App\Repositories\Resources\Definition\Promoters\Genders\GendersPromoterTrait;
use App\Repositories\Resources\Definition\PropertyHandlers\GendersPropertyHandlerTrait;

class GendersRepository extends EloquentRepository implements DefinitionGendersRepositoryContract
{
    use AfterCreate;
    use AfterUpdate;
    use BeforeCreate;
    use BeforeUpdate;
    use GendersPromoterTrait;
    use GeneralPromoterTrait;
    use GendersPropertyHandlerTrait;

    /**
     * get model name for repository
     *
     * @var string
     */
    protected static string $model = Gender::class;
}
