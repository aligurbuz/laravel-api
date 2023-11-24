<?php

namespace App\Repositories\Resources\Customer\Contracts;

use App\Models\Entities\CustomerContact;
use App\Repositories\Resources\Customer\ContactsRepository;

/**
 * @method $this id($id = null)
 * @method $this customerContactCode($customer_contact_code = null)
 * @method $this customerCode($customer_code = null)
 * @method $this status($status = null)
 * @method $this isDeleted($is_deleted = null)
 */
interface CustomerContactsRepositoryContract
{
    /**
     * @return array
     * @see ContactsRepository::get()
     */
    public function get(): array;


    /**
     * @return array
     * @see ContactsRepository::first()
     */
    public function first(): array;


    /**
     * @return CustomerContact
     * @see ContactsRepository::entity()
     */
    public function entity(): CustomerContact;


    /**
     * @param array $data
     * @return array|object
     * @see ContactsRepository::create()
     */
    public function create(array $data = []): array|object;


    /**
     * @param array $data
     * @param bool $id
     * @return array|object
     * @see ContactsRepository::update()
     */
    public function update(array $data = [], bool $id = true): array|object;


    /**
     * @param int $id
     * @param array|string[] $select
     * @return array
     * @see ContactsRepository::find()
     */
    public function find(int $id, array $select = ['*']): array;


    /**
     * @return array
     * @see ContactsRepository::all()
     */
    public function all(): array;


    /**
     * @param bool $afterLoadingRepository
     * @return array
     * @see ContactsRepository::getRepository()
     */
    public function getRepository(bool $afterLoadingRepository = true): array;


    /**
     * @return array
     * @see ContactsRepository::latest()
     */
    public function latest(): array;


    /**
     * @param array $data
     * @return object
     * @see ContactsRepository::select()
     */
    public function select(array $data = []): object;


    /**
     * @param object|null $builder
     * @return object
     * @see ContactsRepository::active()
     */
    public function active(?object $builder = null): object;


    /**
     * @param int $code
     * @return object
     * @see ContactsRepository::code()
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
     * @see ContactsRepository::exists()
     */
    public function exists($field, $value): bool;


    /**
     * @param array $updateData
     * @param array $createData
     * @return array|object
     * @see ContactsRepository::updateOrCreate()
     */
    public function updateOrCreate(array $updateData = [], array $createData = []): array|object;
}
