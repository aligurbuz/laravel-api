<?php

namespace App\Repositories\Resources\Customer\Contracts;

use App\Models\Entities\CustomerImage;
use App\Repositories\Resources\Customer\ImagesRepository;

/**
 * @method $this id($id = null)
 * @method $this customerImageCode($customer_image_code = null)
 * @method $this customerCode($customer_code = null)
 */
interface CustomerImagesRepositoryContract
{
    /**
     * @return array
     * @see ImagesRepository::get()
     */
    public function get(): array;


    /**
     * @return array
     * @see ImagesRepository::first()
     */
    public function first(): array;


    /**
     * @return CustomerImage
     * @see ImagesRepository::entity()
     */
    public function entity(): CustomerImage;


    /**
     * @param array $data
     * @return array|object
     * @see ImagesRepository::create()
     */
    public function create(array $data = []): array|object;


    /**
     * @param array $data
     * @param bool $id
     * @return array|object
     * @see ImagesRepository::update()
     */
    public function update(array $data = [], bool $id = true): array|object;


    /**
     * @param int $id
     * @param array|string[] $select
     * @return array
     * @see ImagesRepository::find()
     */
    public function find(int $id, array $select = ['*']): array;


    /**
     * @return array
     * @see ImagesRepository::all()
     */
    public function all(): array;


    /**
     * @param bool $afterLoadingRepository
     * @return array
     * @see ImagesRepository::getRepository()
     */
    public function getRepository(bool $afterLoadingRepository = true): array;


    /**
     * @return array
     * @see ImagesRepository::latest()
     */
    public function latest(): array;


    /**
     * @param array $data
     * @return object
     * @see ImagesRepository::select()
     */
    public function select(array $data = []): object;


    /**
     * @param object|null $builder
     * @return object
     * @see ImagesRepository::active()
     */
    public function active(?object $builder = null): object;


    /**
     * @param int $code
     * @return object
     * @see ImagesRepository::code()
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
     * @see ImagesRepository::exists()
     */
    public function exists($field, $value): bool;


    /**
     * @param array $updateData
     * @param array $createData
     * @return array|object
     * @see ImagesRepository::updateOrCreate()
     */
    public function updateOrCreate(array $updateData = [], array $createData = []): array|object;
}
