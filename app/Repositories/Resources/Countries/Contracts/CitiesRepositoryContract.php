<?php

namespace App\Repositories\Resources\Countries\Contracts;

use App\Repositories\Resources\Countries\CitiesRepository;

interface CitiesRepositoryContract
{
    /**
     * @return array
     * @see CitiesRepository::get()
     */
    public function get(): array;

    /**
     * @param int $code
     * @return array
     */
    public function first(): array;

    /**
     * @param array $data
     * @return array|object
     * @see CitiesRepository::create()
     */
    public function create(array $data = []): array|object;


    /**
     * @param array $data
     * @param bool $id
     * @return array|object
     * @see CitiesRepository::update()
     */
    public function update(array $data = [], bool $id = true): array|object;


    /**
     * @param int $id
     * @param array|string[] $select
     * @return array
     * @see CitiesRepository::find()
     */
    public function find(int $id, array $select = ['*']): array;


    /**
     * @return array
     * @see CitiesRepository::all()
     */
    public function all(): array;


    /**
     * @param bool $afterLoadingRepository
     * @return array
     * @see CitiesRepository::getRepository()
     */
    public function getRepository(bool $afterLoadingRepository = true): array;


    /**
     * @return array
     * @see CitiesRepository::latest()
     */
    public function latest(): array;


    /**
     * @param array $data
     * @return object
     * @see CitiesRepository::select()
     */
    public function select(array $data = []): object;


    /**
     * @param object|null $builder
     * @return object
     * @see CitiesRepository::active()
     */
    public function active(?object $builder = null): object;


    /**
     * @param int $code
     * @return object
     * @see CitiesRepository::code()
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
     * @see CitiesRepository::exists()
     */
    public function exists($field, $value): bool;


    /**
     * @param array $updateData
     * @param array $createData
     * @return array|object
     * @see CitiesRepository::updateOrCreate()
     */
    public function updateOrCreate(array $updateData = [], array $createData = []): array|object;
}
