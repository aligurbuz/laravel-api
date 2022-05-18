<?php

namespace App\Repositories\Resources\Logger\Contracts;

use App\Repositories\Resources\Logger\LoggerRepository;

interface LoggerRepositoryContract
{
    /**
     * @return array
     * @see LoggerRepository::get()
     */
    function get(): array;

    /**
     * @return array
     * @see LoggerRepository::all()
     */
    public function all(): array;

    /**
     * @param array $data
     * @return array|object
     * @see LoggerRepository::create()
     */
    function create(array $data = []): array|object;


    /**
     * @param array $data
     * @param bool $id
     * @return array|object
     * @see LoggerRepository::update()
     */
    function update(array $data = [], bool $id = true): array|object;

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
     * @see CommentRepository::find()
     */
    function find(int $id, array $select = ['*']): array;

    /**
     * @param object|null $builder
     * @return object
     * @see LoggerRepository::active()
     */
    public function active(?object $builder = null): object;

    /**
     * @param int $code
     * @return object
     * @see LoggerRepository::active()
     */
    public function code(int $code = 0): object;

    /**
     * @param array $data
     * @return object
     * @see LoggerRepository::select()
     */
    public function select(array $data = []): object;

    /**
     * @param bool $afterLoadingRepository
     * @return array
     * @see LoggerRepository::getRepository()
     */
    public function getRepository(bool $afterLoadingRepository = true): array;

    /**
     * @return array
     * @see LoggerRepository::latest()
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
