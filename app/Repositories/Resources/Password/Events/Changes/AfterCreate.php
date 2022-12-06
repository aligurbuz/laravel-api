<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Password\Events\Changes;

use App\Facades\Authenticate\User;

trait AfterCreate
{
	/**
	 * event performed after repository create
	 *
	 * @param array $result
	 * @param array $clientData
	 * @return void
	 */
	public function eventFireAfterCreate(array $result = [], array $clientData = []): void
	{

	}
}
