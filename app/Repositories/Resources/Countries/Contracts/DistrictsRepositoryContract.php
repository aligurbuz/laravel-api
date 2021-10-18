<?php

namespace App\Repositories\Resources\Countries\Contracts;

use App\Repositories\Resources\Countries\DistrictsRepository;

interface DistrictsRepositoryContract
{
	/**
	 * @return array
	 * @see DistrictsRepository::get()
	 */
	public function get(): array;


	/**
	 * @param array $data
	 * @return array|object
	 * @see DistrictsRepository::create()
	 */
	public function create(array $data = []): array|object;


	/**
	 * @param array $data
	 * @param bool $id
	 * @return array|object
	 * @see DistrictsRepository::update()
	 */
	public function update(array $data = [], bool $id = true): array|object;


	/**
	 * @param int $id
	 * @param array|string[] $select
	 * @return array
	 * @see DistrictsRepository::find()
	 */
	public function find(int $id, array $select = ['*']): array;


	/**
	 * @return array
	 * @see DistrictsRepository::all()
	 */
	public function all(): array;


	/**
	 * @param bool $afterLoadingRepository
	 * @return array
	 * @see DistrictsRepository::getRepository()
	 */
	public function getRepository(bool $afterLoadingRepository = true): array;


	/**
	 * @return array
	 * @see DistrictsRepository::latest()
	 */
	public function latest(): array;


	/**
	 * @param array $data
	 * @return object
	 * @see DistrictsRepository::select()
	 */
	public function select(array $data = []): object;


	/**
	 * @param object|null $builder
	 * @return object
	 * @see DistrictsRepository::active()
	 */
	public function active(?object $builder = null): object;


	/**
	 * @param int $code
	 * @return object
	 * @see DistrictsRepository::code()
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
	 * @see DistrictsRepository::exists()
	 */
	public function exists($field, $value): bool;


	/**
	 * @param array $updateData
	 * @param array $createData
	 * @return array|object
	 * @see DistrictsRepository::updateOrCreate()
	 */
	public function updateOrCreate(array $updateData = [], array $createData = []): array|object;
}
