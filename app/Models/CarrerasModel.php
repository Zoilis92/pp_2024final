<?php namespace App\Models;

use CodeIgniter\Model;

class CarrerasModel extends Model
{
    protected $table = 'carreras'; // El nombre de la tabla
    protected $primaryKey = 'id_carrera'; // La clave primaria de la tabla
    protected $allowedFields = ['id_carrera', 'nombre', 'descripcion']; // Los campos que se pueden acceder
}
