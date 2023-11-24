<?php

namespace App\Libs\Iterators;

use IteratorAggregate;
use Traversable;

class Days implements IteratorAggregate
{
    /**
     * @return Traversable
     */
    public function getIterator(): Traversable
    {
        yield from ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    }
}
