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


	protected static function id()
	{
		return self::$query->id;
	}


	protected static function user_id()
	{
		return self::$query->user_id;
	}


	protected static function title()
	{
		return self::$query->title;
	}


	protected static function description()
	{
		return self::$query->description;
	}


	protected static function comment()
	{
		return self::$query->comment;
	}


	protected static function counter()
	{
		return self::$query->counter;
	}


	protected static function created_at()
	{
		return self::$query->created_at;
	}


	protected static function updated_at()
	{
		return self::$query->updated_at;
	}


	public function __get($name)
	{
		return static::{$name}();
	}
}
