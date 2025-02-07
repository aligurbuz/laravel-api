<?php

declare(strict_types=1);

namespace App\Models\Entities;

/**
 * @property $this id
 * @property $this customer_contact_code
 * @property $this customer_code
 * @property $this address
 * @property $this zipcode
 * @property $this phone
 * @property $this linkedin
 * @property $this facebook
 * @property $this twitter
 * @property $this is_default
 * @property $this status
 * @property $this is_deleted
 * @property $this created_by
 * @property $this updated_by
 * @property $this deleted_by
 * @property $this deleted_at
 * @property $this created_at
 * @property $this updated_at
 */
class CustomerContact
{
    /**
     * query data object for entity
     *
     * @var object
     */
    protected static object $query;


    /**
     * CustomerContact constructor
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
     * get customer_contact_code column for database table
     *
     * @return mixed
     */
    protected static function customer_contact_code(): mixed
    {
        return self::$query->customer_contact_code;
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
     * get address column for database table
     *
     * @return mixed
     */
    protected static function address(): mixed
    {
        return self::$query->address;
    }


    /**
     * get zipcode column for database table
     *
     * @return mixed
     */
    protected static function zipcode(): mixed
    {
        return self::$query->zipcode;
    }


    /**
     * get phone column for database table
     *
     * @return mixed
     */
    protected static function phone(): mixed
    {
        return self::$query->phone;
    }


    /**
     * get linkedin column for database table
     *
     * @return mixed
     */
    protected static function linkedin(): mixed
    {
        return self::$query->linkedin;
    }


    /**
     * get facebook column for database table
     *
     * @return mixed
     */
    protected static function facebook(): mixed
    {
        return self::$query->facebook;
    }


    /**
     * get twitter column for database table
     *
     * @return mixed
     */
    protected static function twitter(): mixed
    {
        return self::$query->twitter;
    }


    /**
     * get is_default column for database table
     *
     * @return mixed
     */
    protected static function is_default(): mixed
    {
        return self::$query->is_default;
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
