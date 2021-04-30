<?php 

declare(strict_types=1);

namespace App\Models\Entities;

/**
 * @property $this id
 * @property $this user_id
 * @property $this title
 * @property $this description
 * @property $this comment
 * @property $this counter
 * @property $this created_at
 * @property $this updated_at
 */
class User_comment
{
	/**
	 * query data object for entity
	 *
	 * @var object
	 */
	protected static object $query;


	/**
	 * User_comment constructor
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
	 * get user_id column for database table
	 *
	 * @return mixed
	 */
	protected static function user_id(): mixed
	{
		return self::$query->user_id;
	}


	/**
	 * get title column for database table
	 *
	 * @return mixed
	 */
	protected static function title(): mixed
	{
		return self::$query->title;
	}


	/**
	 * get description column for database table
	 *
	 * @return mixed
	 */
	protected static function description(): mixed
	{
		return self::$query->description;
	}


	/**
	 * get comment column for database table
	 *
	 * @return mixed
	 */
	protected static function comment(): mixed
	{
		return self::$query->comment;
	}


	/**
	 * get counter column for database table
	 *
	 * @return mixed
	 */
	protected static function counter(): mixed
	{
		return self::$query->counter;
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
