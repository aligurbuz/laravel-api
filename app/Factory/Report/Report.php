<?php

declare(strict_types=1);

namespace App\Factory\Report;

use App\Factory\Report\Interfaces\ReportInterface;

/**
 * Class Report
 * @package App\Factory\Report
 */
class Report extends ReportManager implements ReportInterface
{
	/**
	 * binds property variable
	 *
	 * @var array
	 */
	protected array $binds = [];

	/**
	 * Report constructor
	 *
	 * @param array $binds
	 */
	public function __construct(array $binds = [])
	{
		$this->binds = $binds;
	}
}
