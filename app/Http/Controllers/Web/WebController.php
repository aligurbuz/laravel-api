<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class WebController extends Controller
{
    /**
     * get web opening page
     *
     * @return string
     */
    public function index() : string
    {
        return 'web';
    }
}
