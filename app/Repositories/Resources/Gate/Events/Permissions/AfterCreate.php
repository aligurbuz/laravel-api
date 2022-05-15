<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Gate\Events\Permissions;

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
		//
	}
}
