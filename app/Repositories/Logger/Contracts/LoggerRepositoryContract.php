<?php 

namespace App\Repositories\Logger\Contracts;

use App\Repositories\Logger\LoggerRepository;
use Illuminate\Contracts\Pagination\Paginator;

interface LoggerRepositoryContract
{
	/**
	 * @return Paginator
	 * @see LoggerRepository::get()
	 */
	function get(): Paginator;


	/**
	 * @param array $data
	 * @return mixed
	 * @see LoggerRepository::create()
	 */
	function create(array $data = []): mixed;


	/**
	 * @param array $data
	 * @return mixed
	 * @see LoggerRepository::update()
	 */
	function update(array $data = []): mixed;


	/**
	 * @param $id
	 * @return array
	 * @see LoggerRepository::find()
	 */
	function find(int $id): array;
}
