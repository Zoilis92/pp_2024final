<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        // Verificar si el usuario está logueado
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        // Redirigir según el rol del usuario
        $rol = session()->get('rol');
        switch ($rol) {
            case 'estudiante':
                return redirect()->to('/dashboard/estudiante');
            case 'docente':
                return redirect()->to('/dashboard/docente');
            case 'administrador':
                return redirect()->to('/dashboard/administrador');
            default:
                return redirect()->to('/login');
        }
    }

    public function estudiante()
    {
        return view('dashboard/estudiante');
    }

    public function docente()
    {
        return view('dashboard/docente');
    }

    public function administrador()
    {
        return view('dashboard/administrador');
    }
}
