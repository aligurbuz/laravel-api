<?php 

declare(strict_types=1);

namespace App\Models\Entities;

/**
 * @property $this id
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


	protected static function id()
	{
		return self::$query->id;
	}


	protected static function name()
	{
		return self::$query->name;
	}


	protected static function email()
	{
		return self::$query->email;
	}


	protected static function email_verified_at()
	{
		return self::$query->email_verified_at;
	}


	protected static function password()
	{
		return self::$query->password;
	}


	protected static function remember_token()
	{
		return self::$query->remember_token;
	}


	protected static function created_at()
	{
		return self::$query->created_at;
	}


	protected static function updated_at()
	{
		return self::$query->updated_at;
	}


	protected static function username()
	{
		return self::$query->username;
	}


	protected static function USER()
	{
		return self::$query->USER;
	}


	protected static function CURRENT_CONNECTIONS()
	{
		return self::$query->CURRENT_CONNECTIONS;
	}


	protected static function TOTAL_CONNECTIONS()
	{
		return self::$query->TOTAL_CONNECTIONS;
	}


	public function __get($name)
	{
		return static::{$name}();
	}
}
