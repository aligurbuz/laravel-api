<?php

namespace App\Repositories\Resources\SuperAdmins\Contracts;

use App\Models\Entities\SuperAdmin;
use App\Repositories\Resources\SuperAdmins\SuperAdminsRepository;

interface SuperAdminsRepositoryContract
{
    /**
     * @return array
     * @see SuperAdminsRepository::get()
     */
    public function get(): array;


    /**
     * @param array $data
     * @return array|object
     * @see SuperAdminsRepository::create()
     */
    public function create(array $data = []): array|object;

    /**
     * @return array
     */
    public function first(): array;

    /**
     * @return SuperAdmin
     */
    public function entity(): SuperAdmin;

    /**
     * @param array $data
     * @param bool $id
     * @return array|object
     * @see SuperAdminsRepository::update()
     */
    public function update(array $data = [], bool $id = true): array|object;


    /**
     * @param int $id
     * @param array|string[] $select
     * @return array
     * @see SuperAdminsRepository::find()
     */
    public function find(int $id, array $select = ['*']): array;


    /**
     * @return array
     * @see SuperAdminsRepository::all()
     */
    public function all(): array;


    /**
     * @param bool $afterLoadingRepository
     * @return array
     * @see SuperAdminsRepository::getRepository()
     */
    public function getRepository(bool $afterLoadingRepository = true): array;

    /**
     * @param $field
     * @param $value
     * @return bool
     * @see SuperAdminsRepository::exists()
     */
    public function exists($field, $value): bool;

    /**
     * @param object|null $builder
     * @return object
     * @see SuperAdminsRepository::active()
     */
    public function active(?object $builder = null): object;

    /**
     * @return SuperAdminsRepositoryContract
     * @see SuperAdminsRepository::authenticatedUser()
     */
    public function authenticatedUser(): SuperAdminsRepositoryContract;

    /**
     * @param int $code
     * @return object
     * @see SuperAdminsRepository::active()
     */
    public function code(int $code = 0): object;

    /**
     * @param array $data
     * @return object
     * @see SuperAdminsRepository::select()
     */
    public function select(array $data = []): object;

    /**
     * @return array
     * @see SuperAdminsRepository::latest()
     */
    public function latest(): array;

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
