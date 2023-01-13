<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Libros extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'libros_id' => [
                'type'           => 'INT',
                'auto_increment' => true,
            ],
            'nombre' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
       
            'fecha_de_publicacion' => [
                'type' => 'DATE',
                'null' => true,
            ],
            'edicion' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'autores' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('libros_id', true);
        $this->forge->createTable('libros');
    }

    public function down()
    {
        $this->forge->dropTable('libros');
    }
}
