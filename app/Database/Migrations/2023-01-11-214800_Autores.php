<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Autores extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'autores_id' => [
                'type'           => 'INT',
                'auto_increment' => true,
            ],
            'nombre' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'apellido' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'pais' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'fecha_de_registro' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'cantidad_de_libros_en_el_sistema' => [
                'type' => 'INT',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
            

        ]);
        $this->forge->addKey('autores_id', true);
        $this->forge->createTable('autores');
    }

    public function down()
    {
        $this->forge->dropTable('autores');
    }
}
