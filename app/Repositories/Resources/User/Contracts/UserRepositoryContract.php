<?php

namespace App\Repositories\Resources\User\Contracts;

use App\Models\Entities\User;
use App\Repositories\Resources\User\UserRepository;

interface UserRepositoryContract
{
    /**
     * @param string $email
     * @return self
     * @see UserRepository::email()
     */
    public function email(string $email): self;

    /**
     * @return array
     * @see UserRepository::get()
     */
    public function get(): array;

    /**
     * @return array
     */
    public function first(): array;

    /**
     * @return User
     */
    public function entity(): User;

    /**
     * @return array
     * @see UserRepository::all()
     */
    public function all(): array;

    /**
     * @param array $data
     * @return mixed
     * @see UserRepository::create()
     */
    public function create(array $data = []): mixed;

    /**
     * @param array $data
     * @param bool $id
     * @return mixed
     * @see UserRepository::update()
     */
    public function update(array $data = [], bool $id = true): array;

    /**
     * @param $field
     * @param $value
     * @return bool
     */
    public function exists($field, $value): bool;

    /**
     * @param int $id
     * @param array $select
     * @return array
     * @see UserRepository::find()
     */
    public function find(int $id, array $select = ['*']): array;

    /**
     * @param bool $afterLoadingRepository
     * @return array
     * @see UserRepository::getRepository()
     */
    public function getRepository(bool $afterLoadingRepository = true): array;

    /**
     * @param object|null $builder
     * @return object
     * @see UserRepository::active()
     */
    public function active(?object $builder = null): object;

    /**
     * @param int $code
     * @return object
     * @see UserRepository::active()
     */
    public function code(int $code = 0): object;

    /**
     * @param array $data
     * @return object
     * @see UserRepository::select()
     */
    public function select(array $data = []): object;

    /**
     * @return array
     * @see UserRepository::latest()
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
