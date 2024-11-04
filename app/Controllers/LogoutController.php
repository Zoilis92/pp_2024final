<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class LogoutController extends Controller
{
    public function index()
    {
        // Destruir la sesión
        session()->destroy();

        // Redirigir a la página principal
        return redirect()->to('/');
    }
}
