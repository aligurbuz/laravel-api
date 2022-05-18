<?php

declare(strict_types=1);

namespace App\Models\Entities;

/**
 * @property $this id
 * @property $this role_code
 * @property $this role_app_code
 * @property $this role_name
 * @property $this is_administrator
 * @property $this roles
 * @property $this status
 * @property $this is_deleted
 * @property $this created_by
 * @property $this updated_by
 * @property $this deleted_by
 * @property $this deleted_at
 * @property $this created_at
 * @property $this updated_at
 */
class Role
{
    /**
     * query data object for entity
     *
     * @var object
     */
    protected static object $query;


    /**
     * Role constructor
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
     * get role_code column for database table
     *
     * @return mixed
     */
    protected static function role_code(): mixed
    {
        return self::$query->role_code;
    }


    /**
     * get role_app_code column for database table
     *
     * @return mixed
     */
    protected static function role_app_code(): mixed
    {
        return self::$query->role_app_code;
    }


    /**
     * get role_name column for database table
     *
     * @return mixed
     */
    protected static function role_name(): mixed
    {
        return self::$query->role_name;
    }


    /**
     * get is_administrator column for database table
     *
     * @return mixed
     */
    protected static function is_administrator(): mixed
    {
        return self::$query->is_administrator;
    }


    /**
     * get roles column for database table
     *
     * @return mixed
     */
    protected static function roles(): mixed
    {
        return self::$query->roles;
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
