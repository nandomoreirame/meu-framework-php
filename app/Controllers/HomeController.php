<?php

namespace App\Controllers;

use Core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $this->renderView('site.index', 'layouts.default');
    }

    public function contact()
    {
        $this->renderView('site.contact', 'layouts.default');
    }
}
