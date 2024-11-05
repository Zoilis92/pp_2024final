<?php

namespace App\Models;

use CodeIgniter\Model;

class CursoModel extends Model
{
    protected $table = 'cursos';
    protected $primaryKey = 'id_curso';
    protected $allowedFields = ['id_carrera', 'nombre', 'descripcion', 'creditos'];
}
