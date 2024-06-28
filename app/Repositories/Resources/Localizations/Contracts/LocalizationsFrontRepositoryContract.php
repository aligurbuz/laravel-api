<?php 

namespace App\Repositories\Resources\Localizations\Contracts;

use App\Models\Entities\FrontLang;
use App\Repositories\Resources\Localizations\FrontRepository;

/**
 * @method $this id($id = null)
 * @method $this frontLangCode($front_lang_code = null)
 * @method $this languageCode($language_code = null)
 */
interface LocalizationsFrontRepositoryContract
{
	/**
	 * @return array
	 * @see FrontRepository::get()
	 */
	public function get(): array;


	/**
	 * @return array
	 * @see FrontRepository::first()
	 */
	public function first(): array;


	/**
	 * @return FrontLang
	 * @see FrontRepository::entity()
	 */
	public function entity(): FrontLang;


	/**
	 * @param array $data
	 * @return array|object
	 * @see FrontRepository::create()
	 */
	public function create(array $data = []): array|object;


	/**
	 * @param array $data
	 * @param bool $id
	 * @return array|object
	 * @see FrontRepository::update()
	 */
	public function update(array $data = [], bool $id = true): array|object;


	/**
	 * @param int $id
	 * @param array|string[] $select
	 * @return array
	 * @see FrontRepository::find()
	 */
	public function find(int $id, array $select = ['*']): array;


	/**
	 * @return array
	 * @see FrontRepository::all()
	 */
	public function all(): array;


	/**
	 * @param bool $afterLoadingRepository
	 * @return array
	 * @see FrontRepository::getRepository()
	 */
	public function getRepository(bool $afterLoadingRepository = true): array;


	/**
	 * @return array
	 * @see FrontRepository::latest()
	 */
	public function latest(): array;


	/**
	 * @param array $data
	 * @return object
	 * @see FrontRepository::select()
	 */
	public function select(array $data = []): object;


	/**
	 * @param object|null $builder
	 * @return object
	 * @see FrontRepository::active()
	 */
	public function active(?object $builder = null): object;


	/**
	 * @param int $code
	 * @return object
	 * @see FrontRepository::code()
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
	 * @see FrontRepository::exists()
	 */
	public function exists($field, $value): bool;


	/**
	 * @param array $updateData
	 * @param array $createData
	 * @return array|object
	 * @see FrontRepository::updateOrCreate()
	 */
	public function updateOrCreate(array $updateData = [], array $createData = []): array|object;
}
