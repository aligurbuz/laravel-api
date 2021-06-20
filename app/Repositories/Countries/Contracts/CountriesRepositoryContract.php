<?php

namespace App\Repositories\Countries\Contracts;

use App\Repositories\Countries\CountriesRepository;

interface CountriesRepositoryContract
{
	/**
	 * @return array
	 * @see CountriesRepository::get()
	 */
	function get(): array;

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
	function create(array $data = []): array|object;


    /**
     * @param array $data
     * @param bool $id
     * @return array|object
     * @see CountriesRepository::update()
     */
	function update(array $data = [],bool $id = true): array|object;


	/**
	 * @param $id
	 * @param array|string[] $select
	 * @return array
	 * @see CountriesRepository::find()
	 */
	function find(int $id, array $select = ['*']): array;


	/**
	 * @param $field
	 * @param $value
	 * @return bool
	 * @see CountriesRepository::exists()
	 */
	function exists($field, $value): bool;

    /**
     * @return object
     * @see CountriesRepository::active()
     */
    public function active(): object;

    /**
     * @param int $code
     * @return object
     * @see CountriesRepository::active()
     */
    public function code(int $code = 0) : object;

    /**
     * @param bool $afterLoadingRepository
     * @return array
     * @see CountriesRepository::getRepository()
     */
    function getRepository($afterLoadingRepository = false): array;
}
