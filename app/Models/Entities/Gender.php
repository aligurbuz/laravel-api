<?php

declare(strict_types=1);

namespace App\Models\Entities;

/**
 * @property $this id
 * @property $this gender_code
 * @property $this name
 * @property $this status
 * @property $this is_deleted
 * @property $this created_by
 * @property $this updated_by
 * @property $this deleted_by
 * @property $this deleted_at
 * @property $this created_at
 * @property $this updated_at
 */
class Gender
{
    /**
     * query data object for entity
     *
     * @var object
     */
    protected static object $query;


    /**
     * Gender constructor
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
     * get gender_code column for database table
     *
     * @return mixed
     */
    protected static function gender_code(): mixed
    {
        return self::$query->gender_code;
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
     * get status column for database table
     *
     * @return mixed
     */
    protected static function status(): mixed
    {
        return self::$query->status;
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
