<?php

namespace App\Repositories\Resources\Support\Contracts;

use App\Repositories\Resources\Support\ExcelRepository;

/**
 * @method $this id($id = null)
 * @method $this excelCode($excel_code = null)
 * @method $this status($status = null)
 * @method $this isDeleted($is_deleted = null)
 */
interface ExcelRepositoryContract
{
    /**
     * @return array
     * @see ExcelRepository::get()
     */
    public function get(): array;


    /**
     * @param array $data
     * @return array|object
     * @see ExcelRepository::create()
     */
    public function create(array $data = []): array|object;


    /**
     * @param array $data
     * @param bool $id
     * @return array|object
     * @see ExcelRepository::update()
     */
    public function update(array $data = [], bool $id = true): array|object;


    /**
     * @param int $id
     * @param array|string[] $select
     * @return array
     * @see ExcelRepository::find()
     */
    public function find(int $id, array $select = ['*']): array;


    /**
     * @return array
     * @see ExcelRepository::all()
     */
    public function all(): array;


    /**
     * @param bool $afterLoadingRepository
     * @return array
     * @see ExcelRepository::getRepository()
     */
    public function getRepository(bool $afterLoadingRepository = true): array;


    /**
     * @return array
     * @see ExcelRepository::latest()
     */
    public function latest(): array;


    /**
     * @param array $data
     * @return object
     * @see ExcelRepository::select()
     */
    public function select(array $data = []): object;


    /**
     * @param object|null $builder
     * @return object
     * @see ExcelRepository::active()
     */
    public function active(?object $builder = null): object;


    /**
     * @param int $code
     * @return object
     * @see ExcelRepository::code()
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
     * @see ExcelRepository::exists()
     */
    public function exists($field, $value): bool;


    /**
     * @param array $updateData
     * @param array $createData
     * @return array|object
     * @see ExcelRepository::updateOrCreate()
     */
    public function updateOrCreate(array $updateData = [], array $createData = []): array|object;
}
