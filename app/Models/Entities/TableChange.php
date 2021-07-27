<?php 

declare(strict_types=1);

namespace App\Models\Entities;

/**
 * @property $this column_name
 * @property $this created_at
 * @property $this created_by
 * @property $this deleted_at
 * @property $this deleted_by
 * @property $this id
 * @property $this is_deleted
 * @property $this new_data
 * @property $this old_data
 * @property $this status
 * @property $this table_change_code
 * @property $this table_name
 * @property $this updated_at
 * @property $this updated_by
 */
class TableChange
{
	/**
	 * query data object for entity
	 *
	 * @var object
	 */
	protected static object $query;


	/**
	 * TableChange constructor
	 *
	 * @param object $query
	 */
	public function __construct(object $query)
	{
		self::$query = $query;
	}


	/**
	 * get column_name column for database table
	 *
	 * @return mixed
	 */
	protected static function column_name(): mixed
	{
		return self::$query->column_name;
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
	 * get created_by column for database table
	 *
	 * @return mixed
	 */
	protected static function created_by(): mixed
	{
		return self::$query->created_by;
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
	 * get deleted_by column for database table
	 *
	 * @return mixed
	 */
	protected static function deleted_by(): mixed
	{
		return self::$query->deleted_by;
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
	 * get is_deleted column for database table
	 *
	 * @return mixed
	 */
	protected static function is_deleted(): mixed
	{
		return self::$query->is_deleted;
	}


	/**
	 * get new_data column for database table
	 *
	 * @return mixed
	 */
	protected static function new_data(): mixed
	{
		return self::$query->new_data;
	}


	/**
	 * get old_data column for database table
	 *
	 * @return mixed
	 */
	protected static function old_data(): mixed
	{
		return self::$query->old_data;
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
	 * get table_change_code column for database table
	 *
	 * @return mixed
	 */
	protected static function table_change_code(): mixed
	{
		return self::$query->table_change_code;
	}


	/**
	 * get table_name column for database table
	 *
	 * @return mixed
	 */
	protected static function table_name(): mixed
	{
		return self::$query->table_name;
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
	 * get updated_by column for database table
	 *
	 * @return mixed
	 */
	protected static function updated_by(): mixed
	{
		return self::$query->updated_by;
	}


	public function __get($name)
	{
		return static::{$name}();
	}
}
