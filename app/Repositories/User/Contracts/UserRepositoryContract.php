<?php

namespace App\Repositories\User\Contracts;

use App\Repositories\User\UserRepository;
use Illuminate\Contracts\Pagination\Paginator;

interface UserRepositoryContract
{
    /**
     * @return array
     * @see UserRepository::get()
     */
    public function get(): array;

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
    public function update(array $data = [],$id = true): array;

    /**
     * @param $id
     * @return array
     * @see UserRepository::find()
     */
    public function find(int $id): array;
}
