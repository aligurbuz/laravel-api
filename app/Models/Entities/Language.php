<?php

declare(strict_types=1);

namespace App\Models\Entities;

/**
 * @property $this id
 * @property $this language_code
 * @property $this name
 * @property $this created_at
 * @property $this updated_at
 */
class Language
{
    /**
     * query data object for entity
     *
     * @var object
     */
    protected static object $query;


    /**
     * Language constructor
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
     * get language_code column for database table
     *
     * @return mixed
     */
    protected static function language_code(): mixed
    {
        return self::$query->language_code;
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
