<?php

declare(strict_types=1);

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Client\User\Comment\Get\GetClient;
use App\Client\User\Comment\Update\UpdateClient;
use App\Client\User\Comment\Create\CreateClient;
use App\Jobs\TestJob;
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
	    dispatch(new TestJob())->delay(10);
		$client->handle();
		return $commentRepository->get();
	}


	/**
	 * create comment data
	 *
	 * @param CreateClient $client
	 * @param CommentRepositoryContract $commentRepository
	 * @return array|object
	 */
	public function create(CreateClient $client, CommentRepositoryContract $commentRepository) : array|object
	{
	    return $this->transaction(function() use($client,$commentRepository){
            $client->handle();
            return $commentRepository->create();
        });
	}


	/**
	 * update comment data
	 *
	 * @param UpdateClient $client
     *
	 * @param CommentRepositoryContract $commentRepository
	 * @return array|object
	 */
	public function update(UpdateClient $client, CommentRepositoryContract $commentRepository): array|object
	{
        return $this->transaction(function() use($client,$commentRepository){
            $client->handle();
            return $commentRepository->update();
        });
	}
}
