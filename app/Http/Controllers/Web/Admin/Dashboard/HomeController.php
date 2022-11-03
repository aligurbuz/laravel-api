<?php

namespace App\Http\Controllers\Web\Admin\Dashboard;

use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * The method that displays the home page for the admin application.
     *
     * @return View
     */
    public function index() : View
    {
        return view('dashboard.home');
    }
}
