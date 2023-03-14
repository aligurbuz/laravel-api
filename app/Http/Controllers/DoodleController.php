<?php

namespace App\Http\Controllers;

use App\Exceptions\Exception;
use App\Repositories\Repository;

class DoodleController extends Controller
{
    public function __construct()
    {
        if (!isLocale()) {
            Exception::customException('doodle exception');
        }
    }

    /**
     * @return mixed
     */
    public function handle(): mixed
    {
        dd(Repository::customer()->dummy());
        return 'hello world';
    }
}
