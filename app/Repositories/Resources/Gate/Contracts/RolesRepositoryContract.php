<?php

namespace App\Repositories\Resources\Gate\Contracts;

use App\Repositories\Resources\Gate\RolesRepository;

interface RolesRepositoryContract
{
    /**
     * @return array
     * @see RolesRepository::get()
     */
    public function get(): array;


    /**
     * @param array $data
     * @return array|object
     * @see RolesRepository::create()
     */
    public function create(array $data = []): array|object;


    /**
     * @param array $data
     * @param bool $id
     * @return array|object
     * @see RolesRepository::update()
     */
    public function update(array $data = [], bool $id = true): array|object;


    /**
     * @param int $id
     * @param array|string[] $select
     * @return array
     * @see RolesRepository::find()
     */
    public function find(int $id, array $select = ['*']): array;


    /**
     * @return array
     * @see RolesRepository::all()
     */
    public function all(): array;


    /**
     * @param bool $afterLoadingRepository
     * @return array
     * @see RolesRepository::getRepository()
     */
    public function getRepository(bool $afterLoadingRepository = true): array;


    /**
     * @return array
     * @see RolesRepository::latest()
     */
    public function latest(): array;


    /**
     * @param array $data
     * @return object
     * @see RolesRepository::select()
     */
    public function select(array $data = []): object;


    /**
     * @param object|null $builder
     * @return object
     * @see RolesRepository::active()
     */
    public function active(?object $builder = null): object;


    /**
     * @param int $code
     * @return object
     * @see RolesRepository::code()
     */
    public function code(int $code = 0): object;


    /**
     * @param $field
     * @param $value
     * @return bool
     * @see RolesRepository::exists()
     */
    public function exists($field, $value): bool;

    /**
     * @return object
     * @see RolesRepository::user()
     */
    public function user(): object;

    /**
     * @param mixed $tag
     * @param callable $callback
     * @return array
     */
    public function cache(mixed $tag, callable $callback): array;

    /**
     * @param array $updateData
     * @param array $createData
     * @return array|object
     */
    public function updateOrCreate(array $updateData = [], array $createData = []): array|object;
}
