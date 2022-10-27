<?php 

declare(strict_types=1);

namespace App\Factory\Payment;

use App\Factory\Payment\Interfaces\PaymentInterface;

/**
 * Class Iyzico
 * @package App\Factory\Payment
 */
class Iyzico extends PaymentManager implements PaymentInterface
{
	/**
	 * binds property variable
	 *
	 * @var array
	 */
	protected array $binds = [];


	/**
	 * Iyzico constructor
	 *
	 * @param array $binds
	 */
	public function __construct(array $binds = [])
	{
		$this->binds = $binds;
	}
}
