<?php 

declare(strict_types=1);

namespace App\Repositories\Resources\Store;

use App\Models\Item;
use App\Repositories\EloquentRepository;
use App\Repositories\GeneralPromoterTrait;
use App\Repositories\Resources\Store\Contracts\StoreItemsRepositoryContract;
use App\Repositories\Resources\Store\Events\Items\AfterCreate;
use App\Repositories\Resources\Store\Events\Items\AfterUpdate;
use App\Repositories\Resources\Store\Events\Items\BeforeCreate;
use App\Repositories\Resources\Store\Events\Items\BeforeUpdate;
use App\Repositories\Resources\Store\Promoters\Items\ItemsPromoterTrait;
use App\Repositories\Resources\Store\PropertyHandlers\ItemsPropertyHandlerTrait;

class ItemsRepository extends EloquentRepository implements StoreItemsRepositoryContract
{
	use AfterCreate;
	use AfterUpdate;
	use BeforeCreate;
	use BeforeUpdate;
	use ItemsPromoterTrait;
	use GeneralPromoterTrait;
	use ItemsPropertyHandlerTrait;

	/**
	 * get model name for repository
	 *
	 * @var string
	 */
	protected static string $model = Item::class;
}
