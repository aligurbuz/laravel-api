<?php 

namespace App\Http\Requests;

class CommentRequest extends RequestManager
{
	/**
	 * throws exception for request
	 *
	 * @return void
	 */
	public function get(): void
	{
		$this->handle([
		    //
		]);
	}


	/**
	 * throws exception for request
	 *
	 * @return void
	 */
	public function create(): void
	{
		$this->handle([
		    //
		]);
	}


	/**
	 * throws exception for request
	 *
	 * @return void
	 */
	public function update(): void
	{
		$this->handle([
		    'id' => 'required|integer'
		]);
	}
}
