<?php

namespace App\Repositories\Localizations\Contracts;

use App\Repositories\EloquentRepository;
use App\Repositories\Localizations\LocalizationsRepository;

interface LocalizationsRepositoryContract
{
	/**
	 * @return array
	 * @see LocalizationsRepository::get()
	 */
	function get(): array;


	/**
	 * @param array $data
	 * @return array|object
	 * @see LocalizationsRepository::create()
	 */
	function create(array $data = []): array|object;


    /**
     * @param array $data
     * @param bool $id
     * @return array|object
     * @see LocalizationsRepository::update()
     */
	function update(array $data = [],bool $id = true): array|object;


	/**
	 * @param $id
	 * @param array|string[] $select
	 * @return array
	 * @see LocalizationsRepository::find()
	 */
	function find(int $id, array $select = ['*']): array;


	/**
	 * @return array
	 * @see LocalizationsRepository::all()
	 */
	function all(): array;


	/**
	 * @param $field
	 * @param $value
	 * @return bool
	 * @see LocalizationsRepository::exists()
	 */
	function exists($field, $value): bool;

    /**
     * @param $localizedCode
     * @return LocalizationsRepositoryContract
     * @see LocalizationsRepository::localizedCode()
     */
    public function localizedCode($localizedCode) : LocalizationsRepositoryContract;

    /**
     * @return array
     * @see LocalizationsRepository::getRepository()
     */
    public function getRepository() : array;

    /**
     * @return object
     * @see LocalizationsRepository::active()
     */
    public function active(): object;

    /**
     * @param int $code
     * @return object
     * @see LocalizationsRepository::active()
     */
    public function code(int $code = 0) : object;
}
