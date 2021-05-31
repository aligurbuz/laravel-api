<?php 

declare(strict_types=1);

namespace App\Models\Entities;

/**
 * @property $this id
 * @property $this country_code
 * @property $this iso
 * @property $this name
 * @property $this default_name
 * @property $this iso3
 * @property $this num_code
 * @property $this phone_code
 * @property $this created_at
 * @property $this updated_at
 */
class Country
{
	/**
	 * query data object for entity
	 *
	 * @var object
	 */
	protected static object $query;


	/**
	 * Country constructor
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
	 * get country_code column for database table
	 *
	 * @return mixed
	 */
	protected static function country_code(): mixed
	{
		return self::$query->country_code;
	}


	/**
	 * get iso column for database table
	 *
	 * @return mixed
	 */
	protected static function iso(): mixed
	{
		return self::$query->iso;
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
	 * get default_name column for database table
	 *
	 * @return mixed
	 */
	protected static function default_name(): mixed
	{
		return self::$query->default_name;
	}


	/**
	 * get iso3 column for database table
	 *
	 * @return mixed
	 */
	protected static function iso3(): mixed
	{
		return self::$query->iso3;
	}


	/**
	 * get num_code column for database table
	 *
	 * @return mixed
	 */
	protected static function num_code(): mixed
	{
		return self::$query->num_code;
	}


	/**
	 * get phone_code column for database table
	 *
	 * @return mixed
	 */
	protected static function phone_code(): mixed
	{
		return self::$query->phone_code;
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
