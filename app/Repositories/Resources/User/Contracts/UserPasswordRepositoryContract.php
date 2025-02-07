<?php

namespace App\Repositories\Resources\User\Contracts;

use App\Models\Entities\UserPassword;
use App\Repositories\Resources\User\PasswordRepository;

/**
 * @method $this id($id = null)
 * @method $this userPasswordCode($user_password_code = null)
 * @method $this userCode($user_code = null)
 * @method $this status($status = null)
 */
interface UserPasswordRepositoryContract
{
    /**
     * @return array
     * @see PasswordRepository::get()
     */
    public function get(): array;


    /**
     * @return array
     * @see PasswordRepository::first()
     */
    public function first(): array;


    /**
     * @return UserPassword
     * @see PasswordRepository::entity()
     */
    public function entity(): UserPassword;


    /**
     * @param array $data
     * @return array|object
     * @see PasswordRepository::create()
     */
    public function create(array $data = []): array|object;


    /**
     * @param array $data
     * @param bool $id
     * @return array|object
     * @see PasswordRepository::update()
     */
    public function update(array $data = [], bool $id = true): array|object;


    /**
     * @param int $id
     * @param array|string[] $select
     * @return array
     * @see PasswordRepository::find()
     */
    public function find(int $id, array $select = ['*']): array;


    /**
     * @return array
     * @see PasswordRepository::all()
     */
    public function all(): array;


    /**
     * @param bool $afterLoadingRepository
     * @return array
     * @see PasswordRepository::getRepository()
     */
    public function getRepository(bool $afterLoadingRepository = true): array;


    /**
     * @return array
     * @see PasswordRepository::latest()
     */
    public function latest(): array;


    /**
     * @param array $data
     * @return object
     * @see PasswordRepository::select()
     */
    public function select(array $data = []): object;


    /**
     * @param object|null $builder
     * @return object
     * @see PasswordRepository::active()
     */
    public function active(?object $builder = null): object;


    /**
     * @param int $code
     * @return object
     * @see PasswordRepository::code()
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
     * @see PasswordRepository::exists()
     */
    public function exists($field, $value): bool;


    /**
     * @param array $updateData
     * @param array $createData
     * @return array|object
     * @see PasswordRepository::updateOrCreate()
     */
    public function updateOrCreate(array $updateData = [], array $createData = []): array|object;
}
