<?php 

declare(strict_types=1);

namespace App\Models\Entities;

/**
 * @property $this id
 * @property $this password_change_code
 * @property $this email
 * @property $this hash
 * @property $this client_time
 * @property $this is_deleted
 * @property $this created_by
 * @property $this updated_by
 * @property $this deleted_by
 * @property $this deleted_at
 * @property $this created_at
 * @property $this updated_at
 */
class PasswordChange
{
	/**
	 * query data object for entity
	 *
	 * @var object
	 */
	protected static object $query;


	/**
	 * PasswordChange constructor
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
	 * get password_change_code column for database table
	 *
	 * @return mixed
	 */
	protected static function password_change_code(): mixed
	{
		return self::$query->password_change_code;
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
	 * get hash column for database table
	 *
	 * @return mixed
	 */
	protected static function hash(): mixed
	{
		return self::$query->hash;
	}


	/**
	 * get client_time column for database table
	 *
	 * @return mixed
	 */
	protected static function client_time(): mixed
	{
		return self::$query->client_time;
	}


	/**
	 * get is_deleted column for database table
	 *
	 * @return mixed
	 */
	protected static function is_deleted(): mixed
	{
		return self::$query->is_deleted;
	}


	/**
	 * get created_by column for database table
	 *
	 * @return mixed
	 */
	protected static function created_by(): mixed
	{
		return self::$query->created_by;
	}


	/**
	 * get updated_by column for database table
	 *
	 * @return mixed
	 */
	protected static function updated_by(): mixed
	{
		return self::$query->updated_by;
	}


	/**
	 * get deleted_by column for database table
	 *
	 * @return mixed
	 */
	protected static function deleted_by(): mixed
	{
		return self::$query->deleted_by;
	}


	/**
	 * get deleted_at column for database table
	 *
	 * @return mixed
	 */
	protected static function deleted_at(): mixed
	{
		return self::$query->deleted_at;
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
