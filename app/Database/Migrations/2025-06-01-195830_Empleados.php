<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Empleados extends Migration
{
    public function up()
    {
        //aqui va la tabla
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,        // tamaño recomendado para INT
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nombre' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],
            'apellidos' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],
            'correo' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],
            'telefono' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ]
        ]);

        // define la clave primaria(id)
        $this->forge->addKey('id', true);
        $this->forge->createTable('empleados');
    }

    public function down()
    {
        //aqui tambien
        $this->forge->dropTable('empleados');
    }
}
