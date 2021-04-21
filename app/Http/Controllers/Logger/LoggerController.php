<?php

declare(strict_types=1);

namespace App\Http\Controllers\Logger;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoggerRequest;
use App\Repositories\Logger\Contracts\LoggerRepositoryContract;

class LoggerController extends Controller
{
	/**
	 * get logger data
	 *
	 * @param LoggerRequest $request
	 * @param LoggerRepositoryContract $loggerRepository
	 * @return array
	 */
	public function get(LoggerRequest $request, LoggerRepositoryContract $loggerRepository): array
	{
		$request->get();

		return $loggerRepository->get();
	}


	/**
	 * create logger data
	 *
	 * @param LoggerRequest $request
	 * @param LoggerRepositoryContract $loggerRepository
	 * @return array
	 */
	public function create(LoggerRequest $request, LoggerRepositoryContract $loggerRepository): array
	{
		$request->create();

		return $loggerRepository->create();
	}


	/**
	 * update logger data
	 *
	 * @param LoggerRequest $request
	 * @param LoggerRepositoryContract $loggerRepository
	 * @return array
	 */
	public function update(LoggerRequest $request, LoggerRepositoryContract $loggerRepository): array
	{
		$request->update();

		return $loggerRepository->update();
	}
}
