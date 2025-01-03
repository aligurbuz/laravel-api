<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Support\Events\Dummy;

use App\Repositories\Repository;

trait AfterCreate
{
	/**
	 * event performed after repository create
	 *
	 * @param array $result
	 * @param array $clientData
	 * @return array
	 */
	public function eventFireAfterCreate(array $result = [], array $clientData = []): array
	{
		$model = decodeString($result['endpoint_id']);

        return Repository::$model()->dummy();
	}
}
