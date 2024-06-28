<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Localizations;

use App\Models\FrontLang;
use App\Repositories\EloquentRepository;
use App\Repositories\GeneralPromoterTrait;
use App\Repositories\Resources\Localizations\Contracts\LocalizationsFrontRepositoryContract;
use App\Repositories\Resources\Localizations\Events\Front\AfterCreate;
use App\Repositories\Resources\Localizations\Events\Front\AfterUpdate;
use App\Repositories\Resources\Localizations\Events\Front\BeforeCreate;
use App\Repositories\Resources\Localizations\Events\Front\BeforeUpdate;
use App\Repositories\Resources\Localizations\Promoters\Front\FrontPromoterTrait;
use App\Repositories\Resources\Localizations\PropertyHandlers\FrontPropertyHandlerTrait;

class FrontRepository extends EloquentRepository implements LocalizationsFrontRepositoryContract
{
	use AfterCreate;
	use AfterUpdate;
	use BeforeCreate;
	use BeforeUpdate;
	use FrontPromoterTrait;
	use GeneralPromoterTrait;
	use FrontPropertyHandlerTrait;

    /**
     * @var bool
     */
    protected bool $paginator = false;

	/**
	 * get model name for repository
	 *
	 * @var string
	 */
	protected static string $model = FrontLang::class;
}
