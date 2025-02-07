<?php

namespace App\Repositories\Resources\Support\Contracts;

use App\Models\Entities\Crypt;
use App\Repositories\Resources\Support\CryptRepository;

/**
 * @method $this id($id = null)
 * @method $this cryptCode($crypt_code = null)
 */
interface SupportCryptRepositoryContract
{
    /**
     * @return array
     * @see CryptRepository::get()
     */
    public function get(): array;


    /**
     * @return array
     * @see CryptRepository::first()
     */
    public function first(): array;


    /**
     * @return Crypt
     * @see CryptRepository::entity()
     */
    public function entity(): Crypt;


    /**
     * @param array $data
     * @return array|object
     * @see CryptRepository::create()
     */
    public function create(array $data = []): array|object;


    /**
     * @param array $data
     * @param bool $id
     * @return array|object
     * @see CryptRepository::update()
     */
    public function update(array $data = [], bool $id = true): array|object;


    /**
     * @param int $id
     * @param array|string[] $select
     * @return array
     * @see CryptRepository::find()
     */
    public function find(int $id, array $select = ['*']): array;


    /**
     * @return array
     * @see CryptRepository::all()
     */
    public function all(): array;


    /**
     * @param bool $afterLoadingRepository
     * @return array
     * @see CryptRepository::getRepository()
     */
    public function getRepository(bool $afterLoadingRepository = true): array;


    /**
     * @return array
     * @see CryptRepository::latest()
     */
    public function latest(): array;


    /**
     * @param array $data
     * @return object
     * @see CryptRepository::select()
     */
    public function select(array $data = []): object;


    /**
     * @param object|null $builder
     * @return object
     * @see CryptRepository::active()
     */
    public function active(?object $builder = null): object;


    /**
     * @param int $code
     * @return object
     * @see CryptRepository::code()
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
     * @see CryptRepository::exists()
     */
    public function exists($field, $value): bool;


    /**
     * @param array $updateData
     * @param array $createData
     * @return array|object
     * @see CryptRepository::updateOrCreate()
     */
    public function updateOrCreate(array $updateData = [], array $createData = []): array|object;
}
