<?php 

declare(strict_types=1);

namespace App\Http\Controllers\User;

use App\Client\user\comment\Create\CreateClient;
use App\Client\user\comment\Get\GetClient;
use App\Client\user\comment\Update\UpdateClient;
use App\Http\Controllers\Controller;
use App\Repositories\User\Contracts\CommentRepositoryContract;

class CommentController extends Controller
{
	/**
	 * get comment data
	 *
	 * @param GetClient $client
	 * @param CommentRepositoryContract $commentRepository
	 * @return array
	 */
	public function get(GetClient $client, CommentRepositoryContract $commentRepository): array
	{
		$client->handle();

		return $commentRepository->get();
	}


	/**
	 * create comment data
	 *
	 * @param CreateClient $client
	 * @param CommentRepositoryContract $commentRepository
	 * @return array
	 */
	public function create(CreateClient $client, CommentRepositoryContract $commentRepository): array
	{
		$client->handle();

		return $commentRepository->create();
	}


	/**
	 * update comment data
	 *
	 * @param UpdateClient $client
	 * @param CommentRepositoryContract $commentRepository
	 * @return array
	 */
	public function update(UpdateClient $client, CommentRepositoryContract $commentRepository): array
	{
		$client->handle();

		return $commentRepository->update();
	}
}
