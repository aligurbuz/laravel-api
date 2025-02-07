<?php 

namespace App\Repositories\Resources\Store\Contracts;

use App\Models\Entities\Product;
use App\Repositories\Resources\Store\ProductsRepository;

/**
 * @method $this id($id = null)
 * @method $this productCode($product_code = null)
 */
interface StoreProductsRepositoryContract
{
	/**
	 * @return array
	 * @see ProductsRepository::get()
	 */
	public function get(): array;


	/**
	 * @return array
	 * @see ProductsRepository::first()
	 */
	public function first(): array;


	/**
	 * @return Product
	 * @see ProductsRepository::entity()
	 */
	public function entity(): Product;


	/**
	 * @param array $data
	 * @return array|object
	 * @see ProductsRepository::create()
	 */
	public function create(array $data = []): array|object;


	/**
	 * @param array $data
	 * @param bool $id
	 * @return array|object
	 * @see ProductsRepository::update()
	 */
	public function update(array $data = [], bool $id = true): array|object;


	/**
	 * @param int $id
	 * @param array|string[] $select
	 * @return array
	 * @see ProductsRepository::find()
	 */
	public function find(int $id, array $select = ['*']): array;


	/**
	 * @return array
	 * @see ProductsRepository::all()
	 */
	public function all(): array;


	/**
	 * @param bool $afterLoadingRepository
	 * @return array
	 * @see ProductsRepository::getRepository()
	 */
	public function getRepository(bool $afterLoadingRepository = true): array;


	/**
	 * @return array
	 * @see ProductsRepository::latest()
	 */
	public function latest(): array;


	/**
	 * @param array $data
	 * @return object
	 * @see ProductsRepository::select()
	 */
	public function select(array $data = []): object;


	/**
	 * @param object|null $builder
	 * @return object
	 * @see ProductsRepository::active()
	 */
	public function active(?object $builder = null): object;


	/**
	 * @param int $code
	 * @return object
	 * @see ProductsRepository::code()
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
	 * @see ProductsRepository::exists()
	 */
	public function exists($field, $value): bool;


	/**
	 * @param array $updateData
	 * @param array $createData
	 * @return array|object
	 * @see ProductsRepository::updateOrCreate()
	 */
	public function updateOrCreate(array $updateData = [], array $createData = []): array|object;
}
