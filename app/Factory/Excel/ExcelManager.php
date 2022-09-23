<?php

declare(strict_types=1);

namespace App\Factory\Excel;

use Illuminate\Support\Str;

abstract class ExcelManager
{
    /**
     * calling magic method for resource
     *
     * @param string $resource
     * @return mixed
     */
    public function getResource(string $resource): mixed
    {
        return $this->resource($resource)->get();
    }

    /**
     * get method for gate factory
     *
     * @return mixed
     */
    public function get(): mixed
    {
        if (method_exists($this, $who = who())) {
            return $this->{$who}();
        }

        $class = Str::camel(class_basename($this));
        return $this->{$class}();
    }

    /**
     * get resource for bind
     *
     * @param string $resource
     * @return object
     */
    public function resource(string $resource): object
    {
        return $this->binds['resource'][$resource] ?? new class {
        };
    }
}
