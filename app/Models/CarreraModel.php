<?php

namespace App\Models;

use CodeIgniter\Model;

class CarreraModel extends Model
{
    protected $table = 'carreras'; // Nombre de la tabla
    protected $primaryKey = 'id_carrera'; // Llave primaria
    protected $allowedFields = ['nombre', 'descripcion']; // Campos permitidos para insertar o actualizar
}
