<?php

namespace App\Repositories\Resources\Timezones\Contracts;

use App\Models\Entities\Timezone;
use App\Repositories\Resources\Timezones\TimezonesRepository;

interface TimezonesRepositoryContract
{
    /**
     * @return array
     * @see TimezonesRepository::get()
     */
    public function get(): array;

    /**
     * @return array
     */
    public function first(): array;

    /**
     * @return Timezone
     */
    public function entity(): Timezone;

    /**
     * @param array $data
     * @return array|object
     * @see TimezonesRepository::create()
     */
    public function create(array $data = []): array|object;


    /**
     * @param array $data
     * @param bool $id
     * @return array|object
     * @see TimezonesRepository::update()
     */
    public function update(array $data = [], bool $id = true): array|object;


    /**
     * @param int $id
     * @param array|string[] $select
     * @return array
     * @see TimezonesRepository::find()
     */
    public function find(int $id, array $select = ['*']): array;


    /**
     * @return array
     * @see TimezonesRepository::all()
     */
    public function all(): array;


    /**
     * @param bool $afterLoadingRepository
     * @return array
     * @see TimezonesRepository::getRepository()
     */
    public function getRepository(bool $afterLoadingRepository = true): array;


    /**
     * @return array
     * @see TimezonesRepository::latest()
     */
    public function latest(): array;


    /**
     * @param array $data
     * @return object
     * @see TimezonesRepository::select()
     */
    public function select(array $data = []): object;


    /**
     * @param object|null $builder
     * @return object
     * @see TimezonesRepository::active()
     */
    public function active(?object $builder = null): object;


    /**
     * @param int $code
     * @return object
     * @see TimezonesRepository::code()
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
     * @see TimezonesRepository::exists()
     */
    public function exists($field, $value): bool;


    /**
     * @param array $updateData
     * @param array $createData
     * @return array|object
     * @see TimezonesRepository::updateOrCreate()
     */
    public function updateOrCreate(array $updateData = [], array $createData = []): array|object;
}
