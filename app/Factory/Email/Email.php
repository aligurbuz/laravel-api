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
     * @var object
     */
    protected object $mailer;

	/**
	 * Email constructor
	 *
	 * @param array $binds
	 */
	public function __construct(array $binds = [])
	{
		$this->binds = $binds;
        $this->mailer = $this->binds['mailer'] ?? new class {};
	}

    /**
     * it sends mail for order shipped
     *
     * @return void
     */
    public function order() : void
    {
        $this->queue(($this->mailer)(new OrderShipped()));
    }
}
