<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store()
    {
        // Validación de datos
        $validation = \Config\Services::validation();
        $validation->setRules([
            'username' => 'required|min_length[3]|max_length[50]',
            'email'    => 'required|valid_email|is_unique[usuarios.email]',
            'password' => 'required|min_length[8]',
            'rol'      => 'required|in_list[estudiante,docente,administrador]',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return view('register', ['validation' => $validation]);
        }

        // Guardar datos en la base de datos
        $userModel = new UserModel();
        $userModel->save([
            'username' => $this->request->getPost('username'),
            'email'    => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'rol'      => $this->request->getPost('rol'),
        ]);

        return redirect()->to('/login')->with('success', 'Registro exitoso. ¡Inicia sesión!');
    }
}
