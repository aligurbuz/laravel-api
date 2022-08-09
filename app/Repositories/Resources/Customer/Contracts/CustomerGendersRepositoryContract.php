<?php 

namespace App\Repositories\Resources\Customer\Contracts;

use App\Models\Entities\CustomerGender;
use App\Repositories\Resources\Customer\GendersRepository;

/**
 * @method $this id($id = null)
 * @method $this customerGenderCode($customer_gender_code = null)
 * @method $this customerCode($customer_code = null)
 * @method $this gender($gender = null)
 */
interface CustomerGendersRepositoryContract
{
	/**
	 * @return array
	 * @see GendersRepository::get()
	 */
	public function get(): array;


	/**
	 * @return array
	 * @see GendersRepository::first()
	 */
	public function first(): array;


	/**
	 * @return CustomerGender
	 * @see GendersRepository::entity()
	 */
	public function entity(): CustomerGender;


	/**
	 * @param array $data
	 * @return array|object
	 * @see GendersRepository::create()
	 */
	public function create(array $data = []): array|object;


	/**
	 * @param array $data
	 * @param bool $id
	 * @return array|object
	 * @see GendersRepository::update()
	 */
	public function update(array $data = [], bool $id = true): array|object;


	/**
	 * @param int $id
	 * @param array|string[] $select
	 * @return array
	 * @see GendersRepository::find()
	 */
	public function find(int $id, array $select = ['*']): array;


	/**
	 * @return array
	 * @see GendersRepository::all()
	 */
	public function all(): array;


	/**
	 * @param bool $afterLoadingRepository
	 * @return array
	 * @see GendersRepository::getRepository()
	 */
	public function getRepository(bool $afterLoadingRepository = true): array;


	/**
	 * @return array
	 * @see GendersRepository::latest()
	 */
	public function latest(): array;


	/**
	 * @param array $data
	 * @return object
	 * @see GendersRepository::select()
	 */
	public function select(array $data = []): object;


	/**
	 * @param object|null $builder
	 * @return object
	 * @see GendersRepository::active()
	 */
	public function active(?object $builder = null): object;


	/**
	 * @param int $code
	 * @return object
	 * @see GendersRepository::code()
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
	 * @see GendersRepository::exists()
	 */
	public function exists($field, $value): bool;


	/**
	 * @param array $updateData
	 * @param array $createData
	 * @return array|object
	 * @see GendersRepository::updateOrCreate()
	 */
	public function updateOrCreate(array $updateData = [], array $createData = []): array|object;
}
