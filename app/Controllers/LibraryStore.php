<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Autores;
use App\Models\Libros;
class LibraryStore extends BaseController
{
    public function index()
    {
        $autores=new Autores();
        $libros=new Libros();
        $a=$autores->findAll();
        $b=$libros->findAll();
        $data=["autor"=>$a,
               "libro"=>$b];
        return View("libros",$data);
    }


     public function guardarAutores(){
        $request = \Config\Services::request();
        $autores=new Autores();

        $data = [
            'autores_id' =>null,
            'nombre'    => $request->getPost('nombre'),
            'apellido'=>$request->getPost('apellido'),
            'pais'=> $this->request->getPost('pais'),
            'fecha_de_registro'=>$request->getPost('fecha_de_registro'),
            'cantidad_de_libros_en_el_sistema'=>$request->getPost('cantidad_de_libros_en_el_sistema')
        

        ];

         
        $a=$autores->save($data);
        return $a;



     }
     public function updateAutores(){
        $request = \Config\Services::request();
        $autores=new Autores();
        
        $autores_id=$request->getPost('autores_id');

        $data = [
          
            'nombre'    => $request->getPost('nombre'),
            'apellido'=>$request->getPost('apellido'),
            'pais'=> $this->request->getPost('pais'),
            'fecha_de_registro'=>$request->getPost('fecha_de_registro'),
            'cantidad_de_libros_en_el_sistema'=>$request->getPost('cantidad_de_libros_en_el_sistema')
        

        ];

         
        $b=$autores->update($autores_id,$data);
 return $b;



     }

public function guardarLibros(){
    $request = \Config\Services::request();
    $libros=new Libros();
    $data = [
        'libros_id' =>null,
        'nombre'    => $request->getPost('nombre'),
        'fecha_de_publicacion'=>$request->getPost('fecha_de_publicacon'),
        'edicion'=>$request->getPost('edicion'),
        'autores'=>$request->getPost('autores')
    

    ];
    $li=$libros->save($data);
    return $li;

}
public function updateLibros(){
    $request = \Config\Services::request();
    $libros=new Libros();
    $libros_id=$request->getPost('libros_id');
    $data = [
        
        'nombre'    => $request->getPost('nombre'),
        'fecha_de_publicacion'=>$request->getPost('fecha_de_publicacon'),
        'edicion'=>$request->getPost('edicion'),
        'autores'=>$request->getPost('autores')
    

    ];
    $li=$libros->update($libros_id,$data);
    return $li;

}
public function eliminarLibros($id=null){
    $libros=new Libros();
    
   $b=$libros->delete($id);
return $b;


}
public  function eliminarAutores($id=null){
$autores=new Autores();

$borrar=$autores->delete($id);

return $borrar;
}
public  function trash(){
    $autores=new Autores();
    
    $trash=$autores->onlyDeleted()->findAll();
    $data=["datos"=>$trash]
    return View("trash",$data);
    }
    public  function showAutores($id=null){
        $autores=new Autores();
        
        $show=$autores->where("autores_id",$id)->findAll();
        $data=["datos"=>$show];
        return View("showautores",$data);
        }
        public  function showLibros($id=null){
            $libros=new Libros();
            
            $show=$libros->where("libros_id",$id)->findAll();
            $data=["datos"=>$show];
            return  View("showlibros",$data);
            }
    
            public function Restore($id=null){
                $autores=new Autores();       
if($id!=null){
$d=$autores->update($id,["deteled_at"=>null]);
return $d;
}



            }


}


