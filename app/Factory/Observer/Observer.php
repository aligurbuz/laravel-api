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
     * @var string|null
     */
	protected ?string $name;

    /**
     * @var string|null
     */
	protected ?string $observer;

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
        $observerBeforeNamespace = $this->observerBeforeNamespace();

        if(class_exists($observerBeforeNamespace)){
            return new $observerBeforeNamespace(Client::data());
        }

        return null;
    }

    /**
     * run after observer for factory
     *
     * @param array $data
     * @return mixed
     */
    public function after(array $data = []) : mixed
    {
        $observerAfterNamespace = $this->observerAfterNamespace();

        if(class_exists($observerAfterNamespace)){
            return new $observerAfterNamespace($data);
        }

        return null;
    }
}
