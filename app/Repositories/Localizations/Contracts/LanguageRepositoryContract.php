<?php 

namespace App\Repositories\Localizations\Contracts;

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
	 * @return array|object
	 * @see LanguageRepository::update()
	 */
	function update(array $data = []): array|object;


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
}
