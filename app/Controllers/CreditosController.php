<?php namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Files\File;

class CreditosController extends Controller
{
    public function index()
    {
        return view('creditos_view'); // La vista para agregar créditos
    }

    public function guardar()
    {
        $info_creditos = $this->request->getPost('info_creditos');
        $imagen1 = $this->request->getFile('imagen1');
        $imagen2 = $this->request->getFile('imagen2');

        // Validación y carga de imágenes
        if ($imagen1->isValid() && $imagen2->isValid()) {
            $imagen1->move('uploads');
            $imagen2->move('uploads');

            // Guardar la información en la base de datos (necesitarás una tabla para esto)
            // ... lógica para guardar en la base de datos

            return redirect()->to('/creditos')->with('success', 'Créditos guardados correctamente');
        } else {
            return redirect()->back()->with('error', 'Error al cargar las imágenes');
        }
    }
}
