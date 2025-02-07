<?php 

namespace App\Repositories\Resources\Store\Contracts;

use App\Models\Entities\Item;
use App\Repositories\Resources\Store\ItemsRepository;

/**
 * @method $this id($id = null)
 * @method $this itemCode($item_code = null)
 * @method $this productCode($product_code = null)
 */
interface StoreItemsRepositoryContract
{
	/**
	 * @return array
	 * @see ItemsRepository::get()
	 */
	public function get(): array;


	/**
	 * @return array
	 * @see ItemsRepository::first()
	 */
	public function first(): array;


	/**
	 * @return Item
	 * @see ItemsRepository::entity()
	 */
	public function entity(): Item;


	/**
	 * @param array $data
	 * @return array|object
	 * @see ItemsRepository::create()
	 */
	public function create(array $data = []): array|object;


	/**
	 * @param array $data
	 * @param bool $id
	 * @return array|object
	 * @see ItemsRepository::update()
	 */
	public function update(array $data = [], bool $id = true): array|object;


	/**
	 * @param int $id
	 * @param array|string[] $select
	 * @return array
	 * @see ItemsRepository::find()
	 */
	public function find(int $id, array $select = ['*']): array;


	/**
	 * @return array
	 * @see ItemsRepository::all()
	 */
	public function all(): array;


	/**
	 * @param bool $afterLoadingRepository
	 * @return array
	 * @see ItemsRepository::getRepository()
	 */
	public function getRepository(bool $afterLoadingRepository = true): array;


	/**
	 * @return array
	 * @see ItemsRepository::latest()
	 */
	public function latest(): array;


	/**
	 * @param array $data
	 * @return object
	 * @see ItemsRepository::select()
	 */
	public function select(array $data = []): object;


	/**
	 * @param object|null $builder
	 * @return object
	 * @see ItemsRepository::active()
	 */
	public function active(?object $builder = null): object;


	/**
	 * @param int $code
	 * @return object
	 * @see ItemsRepository::code()
	 */
	public function code(int $code = 0): object;


	/**
	 * @param callable $callback
	 * @param mixed $tag
	 * @return array
	 */
	public function cache(mixed $tag, callable $callback): array;


	/**
	 * @param $field
	 * @param $value
	 * @return bool
	 * @see ItemsRepository::exists()
	 */
	public function exists($field, $value): bool;


	/**
	 * @param array $updateData
	 * @param array $createData
	 * @return array|object
	 * @see ItemsRepository::updateOrCreate()
	 */
	public function updateOrCreate(array $updateData = [], array $createData = []): array|object;
}
