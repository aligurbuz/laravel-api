<?php

namespace App\Repositories\Resources\Currencies\Contracts;

use App\Repositories\Resources\Currencies\CurrenciesRepository;

interface CurrenciesRepositoryContract
{
    /**
     * @return array
     * @see CurrenciesRepository::get()
     */
    public function get(): array;


    /**
     * @param array $data
     * @return array|object
     * @see CurrenciesRepository::create()
     */
    public function create(array $data = []): array|object;


    /**
     * @param array $data
     * @param bool $id
     * @return array|object
     * @see CurrenciesRepository::update()
     */
    public function update(array $data = [], bool $id = true): array|object;


    /**
     * @param int $id
     * @param array|string[] $select
     * @return array
     * @see CurrenciesRepository::find()
     */
    public function find(int $id, array $select = ['*']): array;


    /**
     * @return array
     * @see CurrenciesRepository::all()
     */
    public function all(): array;


    /**
     * @param bool $afterLoadingRepository
     * @return array
     * @see CurrenciesRepository::getRepository()
     */
    public function getRepository(bool $afterLoadingRepository = true): array;


    /**
     * @return array
     * @see CurrenciesRepository::latest()
     */
    public function latest(): array;


    /**
     * @param array $data
     * @return object
     * @see CurrenciesRepository::select()
     */
    public function select(array $data = []): object;


    /**
     * @param object|null $builder
     * @return object
     * @see CurrenciesRepository::active()
     */
    public function active(?object $builder = null): object;


    /**
     * @param int $code
     * @return object
     * @see CurrenciesRepository::code()
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
     * @see CurrenciesRepository::exists()
     */
    public function exists($field, $value): bool;


    /**
     * @param array $updateData
     * @param array $createData
     * @return array|object
     * @see CurrenciesRepository::updateOrCreate()
     */
    public function updateOrCreate(array $updateData = [], array $createData = []): array|object;
}
