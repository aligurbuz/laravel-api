<?php 

declare(strict_types=1);

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Repositories\User\Contracts\CommentRepositoryContract;
use App\Services\Response;
use Illuminate\Http\JsonResponse;

class CommentController extends Controller
{
	/**
	 * get comment data
	 *
	 * @param CommentRequest $request
	 * @param CommentRepositoryContract $commentRepository
	 * @return JsonResponse
	 */
	public function get(CommentRequest $request, CommentRepositoryContract $commentRepository): JsonResponse
	{
		$request->get();

		return Response::ok($commentRepository->get());
	}


	/**
	 * create comment data
	 *
	 * @param CommentRequest $request
	 * @param CommentRepositoryContract $commentRepository
	 * @return JsonResponse
	 */
	public function create(CommentRequest $request, CommentRepositoryContract $commentRepository): JsonResponse
	{
		$request->create();

		return Response::ok($commentRepository->create(request()->all()));
	}


	/**
	 * update comment data
	 *
	 * @param CommentRequest $request
	 * @param CommentRepositoryContract $commentRepository
	 * @return JsonResponse
	 */
	public function update(CommentRequest $request, CommentRepositoryContract $commentRepository): JsonResponse
	{
		$request->update();

		return Response::ok($commentRepository->update(request()->all()));
	}
}
