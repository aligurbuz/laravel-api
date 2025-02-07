<?php

namespace App\Repositories\Resources\Support\Contracts;

use App\Models\Entities\Dummy;
use App\Repositories\Resources\Support\DummyRepository;

/**
 * @method $this id($id = null)
 * @method $this dummyCode($dummy_code = null)
 */
interface SupportDummyRepositoryContract
{
    /**
     * @return array
     * @see DummyRepository::get()
     */
    public function get(): array;


    /**
     * @return array
     * @see DummyRepository::first()
     */
    public function first(): array;


    /**
     * @return Dummy
     * @see DummyRepository::entity()
     */
    public function entity(): Dummy;


    /**
     * @param array $data
     * @return array|object
     * @see DummyRepository::create()
     */
    public function create(array $data = []): array|object;


    /**
     * @param array $data
     * @param bool $id
     * @return array|object
     * @see DummyRepository::update()
     */
    public function update(array $data = [], bool $id = true): array|object;


    /**
     * @param int $id
     * @param array|string[] $select
     * @return array
     * @see DummyRepository::find()
     */
    public function find(int $id, array $select = ['*']): array;


    /**
     * @return array
     * @see DummyRepository::all()
     */
    public function all(): array;


    /**
     * @param bool $afterLoadingRepository
     * @return array
     * @see DummyRepository::getRepository()
     */
    public function getRepository(bool $afterLoadingRepository = true): array;


    /**
     * @return array
     * @see DummyRepository::latest()
     */
    public function latest(): array;


    /**
     * @param array $data
     * @return object
     * @see DummyRepository::select()
     */
    public function select(array $data = []): object;


    /**
     * @param object|null $builder
     * @return object
     * @see DummyRepository::active()
     */
    public function active(?object $builder = null): object;


    /**
     * @param int $code
     * @return object
     * @see DummyRepository::code()
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
     * @see DummyRepository::exists()
     */
    public function exists($field, $value): bool;


    /**
     * @param array $updateData
     * @param array $createData
     * @return array|object
     * @see DummyRepository::updateOrCreate()
     */
    public function updateOrCreate(array $updateData = [], array $createData = []): array|object;
}
