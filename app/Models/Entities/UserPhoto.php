<?php

declare(strict_types=1);

namespace App\Models\Entities;

/**
 * @property $this created_at
 * @property $this created_by
 * @property $this deleted_at
 * @property $this deleted_by
 * @property $this id
 * @property $this image_description
 * @property $this image_name
 * @property $this is_deleted
 * @property $this sequence
 * @property $this sequence_time
 * @property $this status
 * @property $this updated_at
 * @property $this updated_by
 * @property $this user_code
 * @property $this user_image
 * @property $this user_photo_code
 */
class UserPhoto
{
    /**
     * query data object for entity
     *
     * @var object
     */
    protected static object $query;


    /**
     * UserPhoto constructor
     *
     * @param object $query
     */
    public function __construct(object $query)
    {
        self::$query = $query;
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
     * get image_description column for database table
     *
     * @return mixed
     */
    protected static function image_description(): mixed
    {
        return self::$query->image_description;
    }


    /**
     * get image_name column for database table
     *
     * @return mixed
     */
    protected static function image_name(): mixed
    {
        return self::$query->image_name;
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
     * get sequence column for database table
     *
     * @return mixed
     */
    protected static function sequence(): mixed
    {
        return self::$query->sequence;
    }


    /**
     * get sequence_time column for database table
     *
     * @return mixed
     */
    protected static function sequence_time(): mixed
    {
        return self::$query->sequence_time;
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
     * get user_image column for database table
     *
     * @return mixed
     */
    protected static function user_image(): mixed
    {
        return self::$query->user_image;
    }


    /**
     * get user_photo_code column for database table
     *
     * @return mixed
     */
    protected static function user_photo_code(): mixed
    {
        return self::$query->user_photo_code;
    }


    public function __get($name)
    {
        return static::{$name}();
    }
}
