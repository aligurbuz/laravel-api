<?php 

declare(strict_types=1);

namespace App\Repositories\Resources\Store;

use App\Models\Product;
use App\Repositories\EloquentRepository;
use App\Repositories\GeneralPromoterTrait;
use App\Repositories\Resources\Store\Contracts\StoreProductsRepositoryContract;
use App\Repositories\Resources\Store\Events\Products\AfterCreate;
use App\Repositories\Resources\Store\Events\Products\AfterUpdate;
use App\Repositories\Resources\Store\Events\Products\BeforeCreate;
use App\Repositories\Resources\Store\Events\Products\BeforeUpdate;
use App\Repositories\Resources\Store\Promoters\Products\ProductsPromoterTrait;
use App\Repositories\Resources\Store\PropertyHandlers\ProductsPropertyHandlerTrait;

class ProductsRepository extends EloquentRepository implements StoreProductsRepositoryContract
{
	use AfterCreate;
	use AfterUpdate;
	use BeforeCreate;
	use BeforeUpdate;
	use ProductsPromoterTrait;
	use GeneralPromoterTrait;
	use ProductsPropertyHandlerTrait;

	/**
	 * get model name for repository
	 *
	 * @var string
	 */
	protected static string $model = Product::class;
}
