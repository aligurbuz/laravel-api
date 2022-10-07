<?php

declare(strict_types=1);

namespace App\Factory\App;

use Illuminate\Support\Str;

abstract class AppManager
{
    /**
     * get resource for bind
     *
     * @param $resource
     * @return object
     */
    protected function resource($resource): object
    {
        return $this->binds['resource'][$resource] ?? new class {
        };
    }

    /**
     * get restaurant_code for gate factory
     *
     * @return int
     */
    public function get(): int
    {
        if (method_exists($this, $who = who())) {
            return $this->{$who}();
        }

        $class = Str::camel(class_basename($this));
        return $this->{$class}();
    }
}
