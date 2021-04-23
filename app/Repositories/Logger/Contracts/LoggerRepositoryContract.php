<?php

namespace App\Repositories\Logger\Contracts;

use App\Repositories\Logger\LoggerRepository;
use Illuminate\Contracts\Pagination\Paginator;

interface LoggerRepositoryContract
{
	/**
	 * @return array
	 * @see LoggerRepository::get()
	 */
	function get(): array;


	/**
	 * @param array $data
	 * @return array|object
	 * @see LoggerRepository::create()
	 */
	function create(array $data = []): array|object;


	/**
	 * @param array $data
	 * @return array|object
	 * @see LoggerRepository::update()
	 */
	function update(array $data = []): array|object;


	/**
	 * @param $id
	 * @return array
	 * @see LoggerRepository::find()
	 */
	function find(int $id): array;
}
