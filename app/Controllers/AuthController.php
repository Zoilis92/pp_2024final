<?php
namespace App\Controllers;

use CodeIgniter\Controller; // Asegúrate de incluir esta línea
use App\Models\UserModel;

class AuthController extends Controller
{
    public function login()
    {
        return view('login'); // Muestra la vista de login
    }

    public function loginProcess()
    {
        $model = new UserModel();
        $email = $this->request->getPost('email'); // Cambié 'username' a 'email'
        $password = $this->request->getPost('password');
    
        // Validar las credenciales
        $user = $model->where('email', $email)->first(); // Cambié 'username' a 'email'
    
        // Verificar si el usuario existe y la contraseña es correcta
        if ($user && password_verify($password, $user['password'])) {
            // Establecer sesión
            session()->set('isLoggedIn', true);
            session()->set('rol', $user['rol']);
            session()->set('email', $user['email']); // Cambié 'username' a 'email'
    
            // Redirigir al dashboard según el rol
            switch ($user['rol']) {
                case 'estudiante':
                    return redirect()->to('/dashboard/estudiante');
                case 'docente':
                    return redirect()->to('/dashboard/docente');
                case 'administrador':
                    return redirect()->to('/dashboard/administrador');
                default:
                    return redirect()->to('/login');
            }
        } else {
            return redirect()->to('/login')->with('error', 'Credenciales incorrectas');
        }
    }
}
