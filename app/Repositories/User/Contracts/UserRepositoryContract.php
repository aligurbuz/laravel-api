<?php

namespace App\Repositories\User\Contracts;

use App\Repositories\EloquentRepository;
use App\Repositories\User\UserRepository;
use Illuminate\Database\Eloquent\Builder;

interface UserRepositoryContract
{
    /**
     * @return array
     * @see UserRepository::get()
     */
    public function get(): array;

    /**
     * @return array
     * @see UserRepository::all()
     */
    public function all() : array;

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
    public function update(array $data = [],bool $id = true): array;

    /**
     * @param $field
     * @param $value
     * @return bool
     */
    public function exists($field,$value) : bool;

    /**
     * @param int $id
     * @param array $select
     * @return array
     * @see CommentRepository::find()
     */
    function find(int $id,array $select = ['*']): array;

    /**
     * @param Builder|null $builder
     * @return EloquentRepository
     * @see UserRepository::active()
     */
    public function active(Builder $builder = null): EloquentRepository;
}
