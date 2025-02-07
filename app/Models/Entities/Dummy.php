<?php

declare(strict_types=1);

namespace App\Models\Entities;

/**
 * @property $this id
 * @property $this dummy_code
 * @property $this endpoint_id
 * @property $this created_by
 * @property $this created_at
 * @property $this updated_at
 */
class Dummy
{
    /**
     * query data object for entity
     *
     * @var object
     */
    protected static object $query;


    /**
     * Dummy constructor
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
     * get dummy_code column for database table
     *
     * @return mixed
     */
    protected static function dummy_code(): mixed
    {
        return self::$query->dummy_code;
    }


    /**
     * get endpoint_id column for database table
     *
     * @return mixed
     */
    protected static function endpoint_id(): mixed
    {
        return self::$query->endpoint_id;
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
