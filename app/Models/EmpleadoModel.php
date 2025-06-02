<?php

namespace App\Models;

use CodeIgniter\Model;

class EmpleadoModel extends Model
{
    // nombre de la Tabla de la base de datos 
    protected $table = 'empleados'; 
    // la clave primaria de la tabla
    protected $primaryKey = 'id';
    // campos para ingresar o actualizar los datos
    protected $allowedFields = ['nombre','apellidos','correo','telefono'];
}
