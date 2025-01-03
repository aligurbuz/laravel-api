<?php 

declare(strict_types=1);

namespace App\Models\Entities;

/**
 * @property $this id
 * @property $this user_password_code
 * @property $this user_code
 * @property $this password
 * @property $this expired_at
 * @property $this status
 * @property $this created_at
 * @property $this updated_at
 */
class UserPassword
{
	/**
	 * query data object for entity
	 *
	 * @var object
	 */
	protected static object $query;


	/**
	 * UserPassword constructor
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
	 * get user_password_code column for database table
	 *
	 * @return mixed
	 */
	protected static function user_password_code(): mixed
	{
		return self::$query->user_password_code;
	}


	/**
	 * get user_code column for database table
	 *
	 * @return mixed
	 */
	protected static function user_code(): mixed
	{
		return self::$query->user_code;
	}


	/**
	 * get password column for database table
	 *
	 * @return mixed
	 */
	protected static function password(): mixed
	{
		return self::$query->password;
	}


	/**
	 * get expired_at column for database table
	 *
	 * @return mixed
	 */
	protected static function expired_at(): mixed
	{
		return self::$query->expired_at;
	}


	/**
	 * get status column for database table
	 *
	 * @return mixed
	 */
	protected static function status(): mixed
	{
		return self::$query->status;
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
