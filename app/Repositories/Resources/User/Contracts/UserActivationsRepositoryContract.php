<?php

namespace App\Repositories\Resources\User\Contracts;

use App\Repositories\Resources\User\ActivationsRepository;

/**
 * @method $this id($id = null)
 * @method $this userActivationCode($user_activation_code = null)
 * @method $this userCode($user_code = null)
 */
interface UserActivationsRepositoryContract
{
	/**
	 * @return array
	 * @see ActivationsRepository::get()
	 */
	public function get(): array;

    /**
     * @param int $code
     * @return array
     */
    public function first(): array;

	/**
	 * @param array $data
	 * @return array|object
	 * @see ActivationsRepository::create()
	 */
	public function create(array $data = []): array|object;


	/**
	 * @param array $data
	 * @param bool $id
	 * @return array|object
	 * @see ActivationsRepository::update()
	 */
	public function update(array $data = [], bool $id = true): array|object;


	/**
	 * @param int $id
	 * @param array|string[] $select
	 * @return array
	 * @see ActivationsRepository::find()
	 */
	public function find(int $id, array $select = ['*']): array;


	/**
	 * @return array
	 * @see ActivationsRepository::all()
	 */
	public function all(): array;


	/**
	 * @param bool $afterLoadingRepository
	 * @return array
	 * @see ActivationsRepository::getRepository()
	 */
	public function getRepository(bool $afterLoadingRepository = true): array;


	/**
	 * @return array
	 * @see ActivationsRepository::latest()
	 */
	public function latest(): array;


	/**
	 * @param array $data
	 * @return object
	 * @see ActivationsRepository::select()
	 */
	public function select(array $data = []): object;


	/**
	 * @param object|null $builder
	 * @return object
	 * @see ActivationsRepository::active()
	 */
	public function active(?object $builder = null): object;


	/**
	 * @param int $code
	 * @return object
	 * @see ActivationsRepository::code()
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
	 * @see ActivationsRepository::exists()
	 */
	public function exists($field, $value): bool;


	/**
	 * @param array $updateData
	 * @param array $createData
	 * @return array|object
	 * @see ActivationsRepository::updateOrCreate()
	 */
	public function updateOrCreate(array $updateData = [], array $createData = []): array|object;
}
