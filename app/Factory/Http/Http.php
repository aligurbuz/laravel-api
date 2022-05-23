<?php

declare(strict_types=1);

namespace App\Factory\Http;

use App\Factory\Http\Interfaces\HttpInterface;
use App\Services\Request\Request;

/**
 * Class Http
 * @package App\Factory\Http
 */
class Http extends HttpManager implements HttpInterface
{
	/**
	 * binds property variable
	 *
	 * @var array
	 */
	protected array $binds = [];

    /**
     * @var Request|null
     */
    protected ?Request $request = null;

	/**
	 * Http constructor
	 *
	 * @param array $binds
	 */
	public function __construct(array $binds = [])
	{
		$this->binds = $binds;
        $this->request = new Request();
	}

    /**
     * get local client request
     *
     * @return Request
     */
    public function local() : Request
    {
        return $this->request->setUrl('http://172.10.0.13/api/public');
    }
}
