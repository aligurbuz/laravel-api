<?php 

namespace App\Repositories\Mix\Contracts;

use App\Repositories\Mix\TableChangesRepository;

interface TableChangesRepositoryContract
{
	/**
	 * @return array
	 * @see TableChangesRepository::get()
	 */
	public function get(): array;


	/**
	 * @param array $data
	 * @return array|object
	 * @see TableChangesRepository::create()
	 */
	public function create(array $data = []): array|object;


	/**
	 * @param array $data
	 * @param bool $id
	 * @return array|object
	 * @see TableChangesRepository::update()
	 */
	public function update(array $data = [], bool $id = true): array|object;


	/**
	 * @param int $id
	 * @param array|string[] $select
	 * @return array
	 * @see TableChangesRepository::find()
	 */
	public function find(int $id, array $select = ['*']): array;


	/**
	 * @return array
	 * @see TableChangesRepository::all()
	 */
	public function all(): array;


	/**
	 * @param bool $afterLoadingRepository
	 * @return array
	 * @see TableChangesRepository::getRepository()
	 */
	public function getRepository(bool $afterLoadingRepository = true): array;


	/**
	 * @return array
	 * @see TableChangesRepository::latest()
	 */
	public function latest(): array;


	/**
	 * @param array $data
	 * @return object
	 * @see TableChangesRepository::select()
	 */
	public function select(array $data = []): object;


	/**
	 * @param object|null $builder
	 * @return object
	 * @see TableChangesRepository::active()
	 */
	public function active(?object $builder = null): object;


	/**
	 * @param int $code
	 * @return object
	 * @see TableChangesRepository::code()
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
	 * @see TableChangesRepository::exists()
	 */
	public function exists($field, $value): bool;
}
