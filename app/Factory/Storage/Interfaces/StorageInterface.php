<?php

namespace App\Factory\Storage\Interfaces;

use App\Factory\Storage\AwsS3;

interface StorageInterface
{
    /**
     * @return array
     * @see AwsS3::put()
     */
    public function put(): array;
}
