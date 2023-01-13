<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Libros extends Seeder
{
    public function run()
    {
        $data = [
            'libros_id' =>null,
            'nombre'    => 'juan salvador gaviota',
            'fecha_de_publicacion'=>'2023-01-10',
            'edicion'=>'obras',
            'autores'=>'juan boch'
        

        ];

     

        // Using Query Builder
        $this->db->table('libros')->insert($data);
    }
}
