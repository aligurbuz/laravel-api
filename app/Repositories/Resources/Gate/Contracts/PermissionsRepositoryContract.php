<?php

namespace App\Repositories\Resources\Gate\Contracts;

use App\Models\Entities\Permission;
use App\Repositories\Resources\Gate\PermissionsRepository;

interface PermissionsRepositoryContract
{
    /**
     * @return array
     * @see PermissionsRepository::get()
     */
    public function get(): array;

    /**
     * @param array $data
     * @return array|object
     * @see PermissionsRepository::create()
     */
    public function create(array $data = []): array|object;

    /**
     * @return array
     */
    public function first(): array;

    /**
     * @return Permission
     */
    public function entity(): Permission;

    /**
     * @param array $data
     * @param bool $id
     * @return array|object
     * @see PermissionsRepository::update()
     */
    public function update(array $data = [], bool $id = true): array|object;


    /**
     * @param int $id
     * @param array|string[] $select
     * @return array
     * @see PermissionsRepository::find()
     */
    public function find(int $id, array $select = ['*']): array;


    /**
     * @return array
     * @see PermissionsRepository::all()
     */
    public function all(): array;


    /**
     * @param bool $afterLoadingRepository
     * @return array
     * @see PermissionsRepository::getRepository()
     */
    public function getRepository(bool $afterLoadingRepository = true): array;


    /**
     * @return array
     * @see PermissionsRepository::latest()
     */
    public function latest(): array;


    /**
     * @param array $data
     * @return object
     * @see PermissionsRepository::select()
     */
    public function select(array $data = []): object;


    /**
     * @param object|null $builder
     * @return object
     * @see PermissionsRepository::active()
     */
    public function active(?object $builder = null): object;


    /**
     * @param int $code
     * @return object
     * @see PermissionsRepository::code()
     */
    public function code(int $code = 0): object;


    /**
     * @param $field
     * @param $value
     * @return bool
     * @see PermissionsRepository::exists()
     */
    public function exists($field, $value): bool;

    /**
     * @param string|null $endpoint
     * @return PermissionsRepositoryContract
     */
    public function endpoint(?string $endpoint = null): PermissionsRepositoryContract;

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
