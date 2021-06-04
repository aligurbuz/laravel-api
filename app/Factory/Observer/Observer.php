<?php

declare(strict_types=1);

namespace App\Factory\Observer;

use App\Services\Client;
use App\Factory\Observer\Interfaces\ObserverInterface;

/**
 * Class Observer
 * @package App\Factory\Observer
 */
class Observer extends ObserverManager implements ObserverInterface
{
	/**
	 * binds property variable
	 *
	 * @var array
	 */
	protected array $binds = [];

	/**
	 * Observer constructor
	 *
	 * @param array $binds
	 */
	public function __construct(array $binds = [])
	{
		$this->binds = $binds;
		$this->observerDetector();
	}

    /**
     * run before observer for factory
     *
     * @return mixed
     */
	public function before() : mixed
    {
        return $this->beforeObserver(function($before){
           return new $before(Client::data());
        });
    }

    /**
     * run after observer for factory
     *
     * @param array $data
     * @return mixed
     */
    public function after(array $data = []) : mixed
    {
        return $this->afterObserver(function($after) use($data){
            return new $after($data);
        });
    }
}
