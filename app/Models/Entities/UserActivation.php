<?php

declare(strict_types=1);

namespace App\Models\Entities;

/**
 * @property $this id
 * @property $this user_activation_code
 * @property $this user_code
 * @property $this options
 * @property $this hash
 * @property $this created_by
 * @property $this updated_by
 * @property $this created_at
 * @property $this updated_at
 */
class UserActivation
{
    /**
     * query data object for entity
     *
     * @var object
     */
    protected static object $query;


    /**
     * UserActivation constructor
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
     * get user_activation_code column for database table
     *
     * @return mixed
     */
    protected static function user_activation_code(): mixed
    {
        return self::$query->user_activation_code;
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
     * get options column for database table
     *
     * @return mixed
     */
    protected static function options(): mixed
    {
        return self::$query->options;
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
