<?php

namespace App\Controllers;

use App\Models\CursoModel;

class CursosController extends BaseController
{
    public function index()
    {
        $cursoModel = new CursoModel();
        $data['cursos'] = $cursoModel->findAll();

        return view('cursos/index', $data);
    }

    public function create()
    {
        return view('cursos/create');
    }

    public function store()
    {
        $cursoModel = new CursoModel();
        $cursoModel->save([
            'id_carrera' => $this->request->getPost('id_carrera'),
            'nombre'     => $this->request->getPost('nombre'),
            'descripcion'=> $this->request->getPost('descripcion'),
            'creditos'   => $this->request->getPost('creditos'),
        ]);

        return redirect()->to('/cursos')->with('success', 'Curso agregado exitosamente.');
    }

    public function edit($id_curso)
    {
        $cursoModel = new CursoModel();
        $data['curso'] = $cursoModel->find($id_curso);
        
        return view('cursos/edit', $data);
    }

    public function update($id_curso)
    {
        $cursoModel = new CursoModel();
        $cursoModel->update($id_curso, [
            'id_carrera' => $this->request->getPost('id_carrera'),
            'nombre'     => $this->request->getPost('nombre'),
            'descripcion'=> $this->request->getPost('descripcion'),
            'creditos'   => $this->request->getPost('creditos'),
        ]);

        return redirect()->to('/cursos')->with('success', 'Curso actualizado exitosamente.');
    }

    public function delete($id_curso)
    {
        $cursoModel = new CursoModel();
        $cursoModel->delete($id_curso);

        return redirect()->to('/cursos')->with('success', 'Curso eliminado exitosamente.');
    }
}
