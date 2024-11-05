<?php

namespace App\Controllers;

use App\Models\NotaModel;
use CodeIgniter\Controller;

class NotasController extends Controller
{
    public function index()
    {
        $notaModel = new NotaModel();
        $data['notas'] = $notaModel->findAll();

        return view('notas/index', $data);
    }

    public function create()
    {
        return view('notas/create');
    }

    public function store()
    {
        $notaModel = new NotaModel();
        
        $notaModel->save([
            'id_inscripcion' => $this->request->getPost('id_inscripcion'),
            'zona' => $this->request->getPost('zona'),
            'examen' => $this->request->getPost('examen'),
            'nota_final' => $this->request->getPost('nota_final'),
        ]);

        return redirect()->to('/notas')->with('success', 'Nota agregada con éxito.');
    }

    public function edit($id_nota)
    {
        $notaModel = new NotaModel();
        $data['nota'] = $notaModel->find($id_nota);

        return view('notas/edit', $data);
    }

    public function update($id_nota)
    {
        $notaModel = new NotaModel();
        
        $notaModel->update($id_nota, [
            'id_inscripcion' => $this->request->getPost('id_inscripcion'),
            'zona' => $this->request->getPost('zona'),
            'examen' => $this->request->getPost('examen'),
            'nota_final' => $this->request->getPost('nota_final'),
        ]);

        return redirect()->to('/notas')->with('success', 'Nota actualizada con éxito.');
    }

    public function delete($id_nota)
    {
        $notaModel = new NotaModel();
        $notaModel->delete($id_nota);

        return redirect()->to('/notas')->with('success', 'Nota eliminada con éxito.');
    }
}
