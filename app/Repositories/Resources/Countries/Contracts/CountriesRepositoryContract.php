<?php

namespace App\Repositories\Resources\Countries\Contracts;

use App\Repositories\Resources\Countries\CountriesRepository;

interface CountriesRepositoryContract
{
	/**
	 * @return array
	 * @see CountriesRepository::get()
	 */
	public function get(): array;

    /**
     * @return array
     * @see CountriesRepository::all()
     */
    public function all() : array;

	/**
	 * @param array $data
	 * @return array|object
	 * @see CountriesRepository::create()
	 */
	public function create(array $data = []): array|object;


    /**
     * @param array $data
     * @param bool $id
     * @return array|object
     * @see CountriesRepository::update()
     */
	public function update(array $data = [],bool $id = true): array|object;


	/**
	 * @param int $id
	 * @param array|string[] $select
	 * @return array
	 * @see CountriesRepository::find()
	 */
	public function find(int $id, array $select = ['*']): array;


	/**
	 * @param $field
	 * @param $value
	 * @return bool
	 * @see CountriesRepository::exists()
	 */
	public function exists($field, $value): bool;

    /**
     * @param object|null $builder
     * @return object
     * @see CountriesRepository::active()
     */
    public function active(?object $builder = null): object;

    /**
     * @param int $code
     * @return object
     * @see CountriesRepository::active()
     */
    public function code(int $code = 0) : object;

    /**
     * @param array $data
     * @return object
     * @see CountriesRepository::select()
     */
    public function select(array $data = []) : object;

    /**
     * @param bool $afterLoadingRepository
     * @return array
     * @see CountriesRepository::getRepository()
     */
    public function getRepository(bool $afterLoadingRepository = true): array;

    /**
     * @return array
     * @see CountriesRepository::latest()
     */
    public function latest() : array;

    /**
     * @param mixed $tag
     * @param callable $callback
     * @return array
     */
    public function cache(mixed $tag,callable $callback): array;

    /**
     * @param array $updateData
     * @param array $createData
     * @return array|object
     */
    public function updateOrCreate(array $updateData = [],array $createData = []): array|object;
}
