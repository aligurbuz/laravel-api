<?php 

declare(strict_types=1);

namespace App\Models\Entities;

/**
 * @property $this age
 * @property $this created_at
 * @property $this customer_age_code
 * @property $this customer_code
 * @property $this id
 * @property $this updated_at
 */
class CustomerAge
{
	/**
	 * query data object for entity
	 *
	 * @var object
	 */
	protected static object $query;


	/**
	 * CustomerAge constructor
	 *
	 * @param object $query
	 */
	public function __construct(object $query)
	{
		self::$query = $query;
	}


	/**
	 * get age column for database table
	 *
	 * @return mixed
	 */
	protected static function age(): mixed
	{
		return self::$query->age;
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
	 * get customer_age_code column for database table
	 *
	 * @return mixed
	 */
	protected static function customer_age_code(): mixed
	{
		return self::$query->customer_age_code;
	}


	/**
	 * get customer_code column for database table
	 *
	 * @return mixed
	 */
	protected static function customer_code(): mixed
	{
		return self::$query->customer_code;
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
