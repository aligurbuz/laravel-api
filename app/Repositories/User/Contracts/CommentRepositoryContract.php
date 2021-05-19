<?php

namespace App\Repositories\User\Contracts;

use App\Repositories\User\CommentRepository;

interface CommentRepositoryContract
{
	/**
	 * @return array
	 * @see CommentRepository::get()
	 */
	function get(): array;


	/**
	 * @param array $data
	 * @return array|object
	 * @see CommentRepository::create()
	 */
	function create(array $data = []): array|object;


	/**
	 * @param array $data
	 * @return array|object
	 * @see CommentRepository::update()
	 */
	function update(array $data = []): array|object;

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
}
