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
	 * @return array
	 * @see CommentRepository::create()
	 */
	function create(array $data = []): array;


	/**
	 * @param array $data
	 * @return array
	 * @see CommentRepository::update()
	 */
	function update(array $data = []): array;


	/**
	 * @param $id
	 * @return array
	 * @see CommentRepository::find()
	 */
	function find(int $id): array;
}
