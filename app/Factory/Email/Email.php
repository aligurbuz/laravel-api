<?php

declare(strict_types=1);

namespace App\Factory\Email;

use App\Mail\OrderShipped;
use App\Factory\Email\Interfaces\EmailInterface;

/**
 * Class Email
 * @package App\Factory\Email
 */
class Email extends EmailManager implements EmailInterface
{
	/**
	 * binds property variable
	 *
	 * @var array
	 */
	protected array $binds = [];

	/**
	 * Email constructor
	 *
	 * @param array $binds
	 */
	public function __construct(array $binds = [])
	{
		$this->binds = $binds;
	}

    /**
     * it sends mail for order shipped
     *
     * @return void
     */
    public function order() : void
    {
        dispatch($this->binds['mailer'](new OrderShipped()));
    }
}
