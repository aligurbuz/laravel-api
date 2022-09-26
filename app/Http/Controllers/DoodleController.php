<?php

namespace App\Http\Controllers;

use App\Exceptions\Exception;

class DoodleController extends Controller
{
    public function __construct()
    {
        if(!isLocale()){
            Exception::customException('doodle exception');
        }
    }

    /**
     * @return mixed
     */
    public function handle() : mixed
    {
        return 'hello world';
    }
}
