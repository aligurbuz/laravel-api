<?php 

namespace App\Repositories\Resources\Customer\Contracts;

use App\Models\Entities\CustomerAge;
use App\Repositories\Resources\Customer\AgesRepository;

/**
 * @method $this id($id = null)
 * @method $this customerAgeCode($customer_age_code = null)
 * @method $this customerCode($customer_code = null)
 * @method $this age($age = null)
 */
interface CustomerAgesRepositoryContract
{
	/**
	 * @return array
	 * @see AgesRepository::get()
	 */
	public function get(): array;


	/**
	 * @return array
	 * @see AgesRepository::first()
	 */
	public function first(): array;


	/**
	 * @return CustomerAge
	 * @see AgesRepository::entity()
	 */
	public function entity(): CustomerAge;


	/**
	 * @param array $data
	 * @return array|object
	 * @see AgesRepository::create()
	 */
	public function create(array $data = []): array|object;


	/**
	 * @param array $data
	 * @param bool $id
	 * @return array|object
	 * @see AgesRepository::update()
	 */
	public function update(array $data = [], bool $id = true): array|object;


	/**
	 * @param int $id
	 * @param array|string[] $select
	 * @return array
	 * @see AgesRepository::find()
	 */
	public function find(int $id, array $select = ['*']): array;


	/**
	 * @return array
	 * @see AgesRepository::all()
	 */
	public function all(): array;


	/**
	 * @param bool $afterLoadingRepository
	 * @return array
	 * @see AgesRepository::getRepository()
	 */
	public function getRepository(bool $afterLoadingRepository = true): array;


	/**
	 * @return array
	 * @see AgesRepository::latest()
	 */
	public function latest(): array;


	/**
	 * @param array $data
	 * @return object
	 * @see AgesRepository::select()
	 */
	public function select(array $data = []): object;


	/**
	 * @param object|null $builder
	 * @return object
	 * @see AgesRepository::active()
	 */
	public function active(?object $builder = null): object;


	/**
	 * @param int $code
	 * @return object
	 * @see AgesRepository::code()
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
	 * @see AgesRepository::exists()
	 */
	public function exists($field, $value): bool;


	/**
	 * @param array $updateData
	 * @param array $createData
	 * @return array|object
	 * @see AgesRepository::updateOrCreate()
	 */
	public function updateOrCreate(array $updateData = [], array $createData = []): array|object;
}
