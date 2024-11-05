<?php

namespace App\Controllers;

use App\Models\CarreraModel;
use CodeIgniter\Controller;

class CarreraController extends Controller
{
    public function index()
    {
        $carreraModel = new CarreraModel();
        $data['carreras'] = $carreraModel->findAll(); // Obtener todas las carreras
        return view('carreras/index', $data);
    }

    public function create()
    {
        return view('carreras/create'); // Vista para crear una nueva carrera
    }

    public function store()
    {
        $carreraModel = new CarreraModel();
        
        $carreraModel->save([
            'nombre' => $this->request->getPost('nombre'),
            'descripcion' => $this->request->getPost('descripcion')
        ]);

        return redirect()->to('/carreras');
    }

    public function edit($id)
    {
        $carreraModel = new CarreraModel();
        $data['carrera'] = $carreraModel->find($id);
        
        return view('carreras/edit', $data);
    }

    public function update($id)
    {
        $carreraModel = new CarreraModel();
        
        $carreraModel->update($id, [
            'nombre' => $this->request->getPost('nombre'),
            'descripcion' => $this->request->getPost('descripcion')
        ]);

        return redirect()->to('/carreras');
    }

    public function delete($id)
    {
        $carreraModel = new CarreraModel();
        $carreraModel->delete($id);

        return redirect()->to('/carreras');
    }
}
