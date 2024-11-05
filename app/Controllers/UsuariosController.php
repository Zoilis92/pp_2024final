<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use CodeIgniter\Controller;

class UsuariosController extends Controller
{
    public function index()
    {
        $model = new UsuarioModel();
        $data['usuarios'] = $model->findAll();
        return view('usuarios/index', $data);
    }

    public function create()
    {
        return view('usuarios/create');
    }

    public function store()
    {
        $model = new UsuarioModel();
        
        $data = [
            'username' => $this->request->getPost('username'),
            'apellido' => $this->request->getPost('apellido'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'rol' => $this->request->getPost('rol')
        ];
        
        $model->insert($data);
        
        return redirect()->to('/usuarios');
    }

    public function edit($id)
    {
        $model = new UsuarioModel();
        $data['usuario'] = $model->find($id);
        return view('usuarios/edit', $data);
    }

    public function update($id)
    {
        $model = new UsuarioModel();
        
        $data = [
            'username' => $this->request->getPost('username'),
            'apellido' => $this->request->getPost('apellido'),
            'email' => $this->request->getPost('email'),
            'rol' => $this->request->getPost('rol')
        ];
        
        if ($this->request->getPost('password')) {
            $data['password'] = password_hash($this->request->getPost('password'), PASSWORD_DEFAULT);
        }
        
        $model->update($id, $data);
        
        return redirect()->to('/usuarios');
    }

    public function delete($id)
    {
        $model = new UsuarioModel();
        $model->delete($id);
        return redirect()->to('/usuarios');
    }
}
