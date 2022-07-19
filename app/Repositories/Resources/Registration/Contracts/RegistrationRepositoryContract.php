<?php

namespace App\Repositories\Resources\Registration\Contracts;

use App\Repositories\Resources\Registration\RegistrationRepository;

/**
 * @method $this id($id = null)
 * @method $this registrationCode($registration_code = null)
 * @method $this status($status = null)
 * @method $this isDeleted($is_deleted = null)
 */
interface RegistrationRepositoryContract
{
    /**
     * @return array
     * @see RegistrationRepository::get()
     */
    public function get(): array;

    /**
     * @param int $code
     * @return array
     */
    public function first(int $code): array;

    /**
     * @param array $data
     * @return array|object
     * @see RegistrationRepository::create()
     */
    public function create(array $data = []): array|object;


    /**
     * @param array $data
     * @param bool $id
     * @return array|object
     * @see RegistrationRepository::update()
     */
    public function update(array $data = [], bool $id = true): array|object;


    /**
     * @param int $id
     * @param array|string[] $select
     * @return array
     * @see RegistrationRepository::find()
     */
    public function find(int $id, array $select = ['*']): array;


    /**
     * @return array
     * @see RegistrationRepository::all()
     */
    public function all(): array;


    /**
     * @param bool $afterLoadingRepository
     * @return array
     * @see RegistrationRepository::getRepository()
     */
    public function getRepository(bool $afterLoadingRepository = true): array;


    /**
     * @return array
     * @see RegistrationRepository::latest()
     */
    public function latest(): array;


    /**
     * @param array $data
     * @return object
     * @see RegistrationRepository::select()
     */
    public function select(array $data = []): object;


    /**
     * @param object|null $builder
     * @return object
     * @see RegistrationRepository::active()
     */
    public function active(?object $builder = null): object;


    /**
     * @param int $code
     * @return object
     * @see RegistrationRepository::code()
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
     * @see RegistrationRepository::exists()
     */
    public function exists($field, $value): bool;


    /**
     * @param array $updateData
     * @param array $createData
     * @return array|object
     * @see RegistrationRepository::updateOrCreate()
     */
    public function updateOrCreate(array $updateData = [], array $createData = []): array|object;
}
