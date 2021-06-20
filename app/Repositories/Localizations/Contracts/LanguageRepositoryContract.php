<?php

namespace App\Repositories\Localizations\Contracts;

use App\Repositories\EloquentRepository;
use App\Repositories\Localizations\LanguageRepository;

interface LanguageRepositoryContract
{
	/**
	 * @return array
	 * @see LanguageRepository::get()
	 */
	function get(): array;


	/**
	 * @param array $data
	 * @return array|object
	 * @see LanguageRepository::create()
	 */
	function create(array $data = []): array|object;


    /**
     * @param array $data
     * @param bool $id
     * @return array|object
     * @see LanguageRepository::update()
     */
	function update(array $data = [],bool $id = true): array|object;


	/**
	 * @param $id
	 * @param array|string[] $select
	 * @return array
	 * @see LanguageRepository::find()
	 */
	function find(int $id, array $select = ['*']): array;


	/**
	 * @return array
	 * @see LanguageRepository::all()
	 */
	function all(): array;


	/**
	 * @param $field
	 * @param $value
	 * @return bool
	 * @see LanguageRepository::exists()
	 */
	function exists($field, $value): bool;

    /**
     * @param bool $afterLoadingRepository
     * @return array
     * @see LanguageRepository::getRepository()
     */
    public function getRepository($afterLoadingRepository = false) : array;

    /**
     * @param null $name
     * @return LanguageRepositoryContract
     * @see LanguageRepository::name()
     */
    public function name($name = null) : LanguageRepositoryContract;

    /**
     * @return object
     * @see LanguageRepository::active()
     */
    public function active(): object;

    /**
     * @param int $code
     * @return object
     * @see LanguageRepository::active()
     */
    public function code(int $code = 0) : object;
}
