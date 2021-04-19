<?php 

declare(strict_types=1);

namespace App\Http\Controllers\Logger;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoggerRequest;
use App\Repositories\Logger\Contracts\LoggerRepositoryContract;
use App\Services\Response;
use Illuminate\Http\JsonResponse;

class LoggerController extends Controller
{
	/**
	 * get logger data
	 *
	 * @param LoggerRequest $request
	 * @param LoggerRepositoryContract $loggerRepository
	 * @return JsonResponse
	 */
	public function get(LoggerRequest $request, LoggerRepositoryContract $loggerRepository): JsonResponse
	{
		$request->get();

		return Response::ok($loggerRepository->get());
	}


	/**
	 * create logger data
	 *
	 * @param LoggerRequest $request
	 * @param LoggerRepositoryContract $loggerRepository
	 * @return JsonResponse
	 */
	public function create(LoggerRequest $request, LoggerRepositoryContract $loggerRepository): JsonResponse
	{
		$request->create();

		return Response::ok($loggerRepository->create(request()->all()));
	}


	/**
	 * update logger data
	 *
	 * @param LoggerRequest $request
	 * @param LoggerRepositoryContract $loggerRepository
	 * @return JsonResponse
	 */
	public function update(LoggerRequest $request, LoggerRepositoryContract $loggerRepository): JsonResponse
	{
		$request->update();

		return Response::ok($loggerRepository->update(request()->all()));
	}
}
