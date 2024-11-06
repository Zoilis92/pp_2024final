<?php namespace App\Controllers;

use App\Models\CarrerasModel; // Asegúrate de cargar el modelo de la tabla carreras

class Estudiantes extends BaseController
{
    public function misCursos()
    {
        // Cargar el modelo
        $carrerasModel = new CarrerasModel();

        // Obtener todas las carreras
        $carreras = $carrerasModel->findAll();

        // Pasar los datos a la vista
        return view('estudiantes/mis_cursos', ['carreras' => $carreras]);
    }
}
