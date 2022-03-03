<?php

declare(strict_types=1);

namespace App\Factory\Sms;

use App\Factory\Sms\Interfaces\SmsInterface;

/**
 * Class Twilio
 * @package App\Factory\Sms
 */
class Twilio extends SmsManager implements SmsInterface
{
	/**
	 * binds property variable
	 *
	 * @var array
	 */
	protected array $binds = [];

	/**
	 * Twilio constructor
	 *
	 * @param array $binds
	 */
	public function __construct(array $binds = [])
	{
		$this->binds = $binds;
	}
}
