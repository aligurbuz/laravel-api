<?php

namespace App\Repositories\SuperAdmins\Contracts;

use App\Repositories\SuperAdmins\SuperAdminsRepository;

interface SuperAdminsRepositoryContract
{
	/**
	 * @return array
	 * @see SuperAdminsRepository::get()
	 */
	public function get(): array;


	/**
	 * @param array $data
	 * @return array|object
	 * @see SuperAdminsRepository::create()
	 */
	public function create(array $data = []): array|object;


	/**
	 * @param array $data
	 * @param bool $id
	 * @return array|object
	 * @see SuperAdminsRepository::update()
	 */
	public function update(array $data = [], bool $id = true): array|object;


	/**
	 * @param $id
	 * @param array|string[] $select
	 * @return array
	 * @see SuperAdminsRepository::find()
	 */
	public function find(int $id, array $select = ['*']): array;


	/**
	 * @return array
	 * @see SuperAdminsRepository::all()
	 */
	public function all(): array;


    /**
     * @param bool $afterLoadingRepository
     * @return array
     * @see SuperAdminsRepository::getRepository()
     */
	public function getRepository($afterLoadingRepository = true): array;

	/**
	 * @param $field
	 * @param $value
	 * @return bool
	 * @see SuperAdminsRepository::exists()
	 */
	public function exists($field, $value): bool;

    /**
     * @return object
     * @see SuperAdminsRepository::active()
     */
    public function active(): object;

    /**
     * @return SuperAdminsRepositoryContract
     * @see SuperAdminsRepository::authenticatedUser()
     */
    public function authenticatedUser() : SuperAdminsRepositoryContract;

    /**
     * @param int $code
     * @return object
     * @see SuperAdminsRepository::active()
     */
    public function code(int $code = 0) : object;

    /**
     * @return array
     * @see SuperAdminsRepository::latest()
     */
    public function latest() : array;
}
