<?php 

declare(strict_types=1);

namespace App\Models\Entities;

/**
 * @property $this id
 * @property $this crypt_code
 * @property $this api_key
 * @property $this authenticate
 * @property $this body
 * @property $this created_at
 * @property $this updated_at
 */
class Crypt
{
	/**
	 * query data object for entity
	 *
	 * @var object
	 */
	protected static object $query;


	/**
	 * Crypt constructor
	 *
	 * @param object $query
	 */
	public function __construct(object $query)
	{
		self::$query = $query;
	}


	/**
	 * get id column for database table
	 *
	 * @return mixed
	 */
	protected static function id(): mixed
	{
		return self::$query->id;
	}


	/**
	 * get crypt_code column for database table
	 *
	 * @return mixed
	 */
	protected static function crypt_code(): mixed
	{
		return self::$query->crypt_code;
	}


	/**
	 * get api_key column for database table
	 *
	 * @return mixed
	 */
	protected static function api_key(): mixed
	{
		return self::$query->api_key;
	}


	/**
	 * get authenticate column for database table
	 *
	 * @return mixed
	 */
	protected static function authenticate(): mixed
	{
		return self::$query->authenticate;
	}


	/**
	 * get body column for database table
	 *
	 * @return mixed
	 */
	protected static function body(): mixed
	{
		return self::$query->body;
	}


	/**
	 * get created_at column for database table
	 *
	 * @return mixed
	 */
	protected static function created_at(): mixed
	{
		return self::$query->created_at;
	}


	/**
	 * get updated_at column for database table
	 *
	 * @return mixed
	 */
	protected static function updated_at(): mixed
	{
		return self::$query->updated_at;
	}


	public function __get($name)
	{
		return static::{$name}();
	}
}
