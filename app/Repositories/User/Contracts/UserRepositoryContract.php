<?php

namespace App\Repositories\User\Contracts;

use App\Repositories\User\UserRepository;
use Illuminate\Contracts\Pagination\Paginator;

interface UserRepositoryContract
{
    /**
     * @return Paginator
     * @see UserRepository::get()
     */
    public function get(): Paginator;

    /**
     * @param array $data
     * @return mixed
     * @see UserRepository::create()
     */
    public function create(array $data = []): mixed;

    /**
     * @param array $data
     * @return mixed
     * @see UserRepository::update()
     */
    public function update(array $data = []): mixed;

    /**
     * @param $id
     * @return array
     * @see UserRepository::find()
     */
    public function find(int $id): array;
}
