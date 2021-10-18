<?php

namespace App\Repositories\Resources\User\Contracts;

use App\Repositories\Resources\User\PhotosRepository;

interface PhotosRepositoryContract
{
	/**
	 * @return array
	 * @see PhotosRepository::get()
	 */
	public function get(): array;


	/**
	 * @param array $data
	 * @return array|object
	 * @see PhotosRepository::create()
	 */
	public function create(array $data = []): array|object;


	/**
	 * @param array $data
	 * @param bool $id
	 * @return array|object
	 * @see PhotosRepository::update()
	 */
	public function update(array $data = [], bool $id = true): array|object;


	/**
	 * @param int $id
	 * @param array|string[] $select
	 * @return array
	 * @see PhotosRepository::find()
	 */
	public function find(int $id, array $select = ['*']): array;


	/**
	 * @return array
	 * @see PhotosRepository::all()
	 */
	public function all(): array;


	/**
	 * @param bool $afterLoadingRepository
	 * @return array
	 * @see PhotosRepository::getRepository()
	 */
	public function getRepository(bool $afterLoadingRepository = true): array;


	/**
	 * @return array
	 * @see PhotosRepository::latest()
	 */
	public function latest(): array;


	/**
	 * @param array $data
	 * @return object
	 * @see PhotosRepository::select()
	 */
	public function select(array $data = []): object;


	/**
	 * @param object|null $builder
	 * @return object
	 * @see PhotosRepository::active()
	 */
	public function active(?object $builder = null): object;


	/**
	 * @param int $code
	 * @return object
	 * @see PhotosRepository::code()
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
	 * @see PhotosRepository::exists()
	 */
	public function exists($field, $value): bool;


	/**
	 * @param array $updateData
	 * @param array $createData
	 * @return array|object
	 * @see PhotosRepository::updateOrCreate()
	 */
	public function updateOrCreate(array $updateData = [], array $createData = []): array|object;
}
