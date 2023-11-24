<?php

declare(strict_types=1);

namespace App\Models\Entities;

/**
 * @property $this id
 * @property $this customer_gender_code
 * @property $this customer_code
 * @property $this gender_code
 * @property $this created_at
 * @property $this updated_at
 */
class CustomerGender
{
    /**
     * query data object for entity
     *
     * @var object
     */
    protected static object $query;


    /**
     * CustomerGender constructor
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
     * get customer_gender_code column for database table
     *
     * @return mixed
     */
    protected static function customer_gender_code(): mixed
    {
        return self::$query->customer_gender_code;
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
     * get gender_code column for database table
     *
     * @return mixed
     */
    protected static function gender_code(): mixed
    {
        return self::$query->gender_code;
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
