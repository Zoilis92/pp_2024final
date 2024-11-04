<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index()
    {
        return view('index'); // Carga la vista 'index.php' en app/Views
    }
}

