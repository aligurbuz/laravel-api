<?php

namespace App\Repositories\SuperAdmins\Contracts;

use App\Repositories\EloquentRepository;
use App\Repositories\SuperAdmins\SuperAdminsRepository;
use Illuminate\Database\Eloquent\Builder;

interface SuperAdminsRepositoryContract
{
	/**
	 * @return array
	 * @see SuperAdminsRepository::get()
	 */
	function get(): array;


	/**
	 * @param array $data
	 * @return array|object
	 * @see SuperAdminsRepository::create()
	 */
	function create(array $data = []): array|object;


	/**
	 * @param array $data
	 * @param bool $id
	 * @return array|object
	 * @see SuperAdminsRepository::update()
	 */
	function update(array $data = [], bool $id = true): array|object;


	/**
	 * @param $id
	 * @param array|string[] $select
	 * @return array
	 * @see SuperAdminsRepository::find()
	 */
	function find(int $id, array $select = ['*']): array;


	/**
	 * @return array
	 * @see SuperAdminsRepository::all()
	 */
	function all(): array;


	/**
	 * @return array
	 * @see SuperAdminsRepository::getRepository()
	 */
	function getRepository(): array;


	/**
	 * @param $field
	 * @param $value
	 * @return bool
	 * @see SuperAdminsRepository::exists()
	 */
	function exists($field, $value): bool;

    /**
     * @param Builder|null $builder
     * @return EloquentRepository
     * @see SuperAdminsRepository::active()
     */
    public function active(Builder $builder = null): EloquentRepository;

    /**
     * @return SuperAdminsRepositoryContract
     * @see SuperAdminsRepository::authenticatedUser()
     */
    public function authenticatedUser() : SuperAdminsRepositoryContract;
}
