<?php 

declare(strict_types=1);

namespace App\Models\Entities;

/**
 * @property $this id
 * @property $this user_code
 * @property $this role_code
 * @property $this name
 * @property $this email
 * @property $this email_verified_at
 * @property $this password
 * @property $this remember_token
 * @property $this created_at
 * @property $this updated_at
 * @property $this username
 * @property $this USER
 * @property $this CURRENT_CONNECTIONS
 * @property $this TOTAL_CONNECTIONS
 */
class User
{
	/**
	 * query data object for entity
	 *
	 * @var object
	 */
	protected static object $query;


	/**
	 * User constructor
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
	 * get user_code column for database table
	 *
	 * @return mixed
	 */
	protected static function user_code(): mixed
	{
		return self::$query->user_code;
	}


	/**
	 * get role_code column for database table
	 *
	 * @return mixed
	 */
	protected static function role_code(): mixed
	{
		return self::$query->role_code;
	}


	/**
	 * get name column for database table
	 *
	 * @return mixed
	 */
	protected static function name(): mixed
	{
		return self::$query->name;
	}


	/**
	 * get email column for database table
	 *
	 * @return mixed
	 */
	protected static function email(): mixed
	{
		return self::$query->email;
	}


	/**
	 * get email_verified_at column for database table
	 *
	 * @return mixed
	 */
	protected static function email_verified_at(): mixed
	{
		return self::$query->email_verified_at;
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
	 * get remember_token column for database table
	 *
	 * @return mixed
	 */
	protected static function remember_token(): mixed
	{
		return self::$query->remember_token;
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


	/**
	 * get username column for database table
	 *
	 * @return mixed
	 */
	protected static function username(): mixed
	{
		return self::$query->username;
	}


	/**
	 * get USER column for database table
	 *
	 * @return mixed
	 */
	protected static function USER(): mixed
	{
		return self::$query->USER;
	}


	/**
	 * get CURRENT_CONNECTIONS column for database table
	 *
	 * @return mixed
	 */
	protected static function CURRENT_CONNECTIONS(): mixed
	{
		return self::$query->CURRENT_CONNECTIONS;
	}


	/**
	 * get TOTAL_CONNECTIONS column for database table
	 *
	 * @return mixed
	 */
	protected static function TOTAL_CONNECTIONS(): mixed
	{
		return self::$query->TOTAL_CONNECTIONS;
	}


	public function __get($name)
	{
		return static::{$name}();
	}
}
