<?php

namespace App\Repositories\Resources\Password\Contracts;

use App\Models\Entities\PasswordChange;
use App\Repositories\Resources\Password\ChangesRepository;

/**
 * @method $this id($id = null)
 * @method $this passwordChangeCode($password_change_code = null)
 * @method $this email($email = null)
 * @method $this isDeleted($is_deleted = null)
 */
interface PasswordChangesRepositoryContract
{
	/**
	 * @return array
	 * @see ChangesRepository::get()
	 */
	public function get(): array;

    /**
     * @param string $hash
     * @return void
     * @see ChangesRepository::smsNotification()
     */
	public function smsNotification(string $hash): void;

    /**
     * @param string $hash
     * @return void
     * @see ChangesRepository::emailNotification()
     */
	public function emailNotification(string $hash): void;


	/**
	 * @return array
	 * @see ChangesRepository::first()
	 */
	public function first(): array;


	/**
	 * @return PasswordChange
	 * @see ChangesRepository::entity()
	 */
	public function entity(): PasswordChange;


	/**
	 * @param array $data
	 * @return array|object
	 * @see ChangesRepository::create()
	 */
	public function create(array $data = []): array|object;


	/**
	 * @param array $data
	 * @param bool $id
	 * @return array|object
	 * @see ChangesRepository::update()
	 */
	public function update(array $data = [], bool $id = true): array|object;


	/**
	 * @param int $id
	 * @param array|string[] $select
	 * @return array
	 * @see ChangesRepository::find()
	 */
	public function find(int $id, array $select = ['*']): array;


	/**
	 * @return array
	 * @see ChangesRepository::all()
	 */
	public function all(): array;


	/**
	 * @param bool $afterLoadingRepository
	 * @return array
	 * @see ChangesRepository::getRepository()
	 */
	public function getRepository(bool $afterLoadingRepository = true): array;


	/**
	 * @return array
	 * @see ChangesRepository::latest()
	 */
	public function latest(): array;


	/**
	 * @param array $data
	 * @return object
	 * @see ChangesRepository::select()
	 */
	public function select(array $data = []): object;


	/**
	 * @param object|null $builder
	 * @return object
	 * @see ChangesRepository::active()
	 */
	public function active(?object $builder = null): object;


	/**
	 * @param int $code
	 * @return object
	 * @see ChangesRepository::code()
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
	 * @see ChangesRepository::exists()
	 */
	public function exists($field, $value): bool;


	/**
	 * @param array $updateData
	 * @param array $createData
	 * @return array|object
	 * @see ChangesRepository::updateOrCreate()
	 */
	public function updateOrCreate(array $updateData = [], array $createData = []): array|object;
}
