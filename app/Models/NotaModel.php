<?php

namespace App\Models;

use CodeIgniter\Model;

class NotaModel extends Model
{
    protected $table = 'notas';
    protected $primaryKey = 'id_nota';
    protected $allowedFields = ['id_inscripcion', 'zona', 'examen', 'nota_final'];
}
