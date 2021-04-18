<?php 

namespace App\Repositories\User\Contracts;

use App\Repositories\User\CommentRepository;
use Illuminate\Contracts\Pagination\Paginator;

interface CommentRepositoryContract
{
	/**
	 * @return Paginator
	 * @see CommentRepository::get()
	 */
	function get(): Paginator;


	/**
	 * @param array $data
	 * @return mixed
	 * @see CommentRepository::create()
	 */
	function create(array $data = []): mixed;


	/**
	 * @param array $data
	 * @return mixed
	 * @see CommentRepository::update()
	 */
	function update(array $data = []): mixed;


	/**
	 * @param $id
	 * @return array
	 * @see CommentRepository::find()
	 */
	function find(int $id): array;
}
