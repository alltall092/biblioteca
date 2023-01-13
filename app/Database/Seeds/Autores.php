<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Autores extends Seeder
{
    public function run()
    {
        $data = [
            'autores_id' =>null,
            'nombre'    => 'julio',
            'apellido'=>'perez',
            'pais'=>'republica dominicana',
            'fecha_de_registro'=>'2023-01-11',
            'cantidad_de_libros_en_el_sistema'=>10
        

        ];

     

        // Using Query Builder
        $this->db->table('autores')->insert($data);

    }
}
