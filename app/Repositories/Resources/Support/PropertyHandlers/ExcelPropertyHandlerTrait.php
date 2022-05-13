<?php

declare(strict_types=1);

namespace App\Repositories\Resources\Support\PropertyHandlers;

trait ExcelPropertyHandlerTrait
{
    /**
     * get client ranges for repository
     *
     * @var array|string[]
     */
    protected array $ranges = [];

    /**
     * localization values for repository
     *
     * @var array|string[]
     */
    protected array $localization = [];

    /**
     * hitter values for repository
     *
     * @var array|string[]
     */
    protected array $hitter = [];

    /**
     * denied eager loadings values for repository
     *
     * @var array
     */
    protected array $deniedEagerLoadings = [];

    /**
     * get auto eager loading values for repository
     *
     * @var array
     */
    protected array $autoEagerLoadings = [];

    /**
     * it contains columns to be used by groupBy method.
     *
     * @var array
     */
    protected array $groupByFields = [];

    /**
     * it contains aggregate methods to be used together groupBy method.
     *
     * @var array
     */
    protected array $groupByProcessFields = [];

    /**
     * get additional resource for repository
     *
     * @var bool
     */
    protected bool $additionalResource = false;

    /**
     * add post query for repository
     *
     * @var array
     */
    protected array $addPostQueries = [];
}
