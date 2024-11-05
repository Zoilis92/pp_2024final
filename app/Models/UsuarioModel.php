<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';
    protected $allowedFields = ['username', 'apellido', 'email', 'password', 'rol'];
    protected $useTimestamps = false;
}