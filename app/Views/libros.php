<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bibliteca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <style type="text/css">
body{
background-color:gray;


}
.table{
background-color:white;
color:black;
margin-bottom:10px;
width:90px;


}

</style>
  
  
  </head>
  <body>
  <!-- Button trigger modal -->
  <div>
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Create autores
</button>
<button type="button" class="btn btn-danger">
  <a href=<?=site_url('/trash'); ?>>trash</a>
</button>
  </div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Create Autores</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= site_url('/autores') ?>" method="post">
      <div class="modal-body">
      <?= csrf_field() ?>
      <div class="form-group">
    <label for="staticEmail" class="col-sm-2 col-form-label">Nombre</label>
    
      <input type="text"  class="form-control"  name="nombre" id="staticEmail" value=""/>
  
  </div>
  <div class="form-group">
    <label for="inputPassword" class="col-sm-2 col-form-label">Apellido</label>
  
      <input type="text" class="form-control" id="inputPassword" name="apellido" value=""/>
    </div>

    <div class="form-group">
    <label for="inputPassword" class="col-sm-2 col-form-label">Pais</label>

      <input type="text" class="form-control" id="inputPassword" name="pais" value=""/>
    </div>
    <div class="form-group">
    <label for="inputPassword" class="col-sm-2 col-form-label">Fecha registro</label>
      <input type="date" class="form-control" id="inputPassword" name="fecha_de_registro" value=""/>
    </div>
    <div class="form-group">
    <label for="inputPassword" class="col-sm-2 col-form-label">Cantidad libros</label>
      <input type="number" class="form-control" id="inputPassword" name="cantidad_de_libros_en_el_sistema" value=""/>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
</form>
    </div>
  </div>
</div>
  <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">apellido</th>
      <th scope="col">Pais</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($autor as $fila){ ?>
      <tr>
      <td>
  <?php echo $fila["autores_id"]; ?>
    </td>
        <td>
  <?php echo $fila["nombre"]; ?>
    </td>
    <td>
  <?php echo $fila["apellido"]; ?>
    </td>
    <td>
  <?php echo $fila["pais"]; ?>
    </td>
    <td>
  <a href=<?=site_url('/showautores/'.$fila["autores_id"]); ?>>View</a>
    </td>
    <td>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#example">
  update
</button>
    </td>
    <td><button type="button" class="btn btn-danger">
  <a href=<?=site_url('/eliminarautores/'.$fila["autores_id"]); ?>>delete</a>
  </button></td>
    </tr>
<!-- Modal -->
<div class="modal fade" id="example" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Update Autores</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?=site_url('/updateautores') ?>" method="post">
      <div class="modal-body">
      <div class="form-group">
    
      <label for="staticEmail" class="col-sm-2 col-form-label">Id</label>
      <input type="text"  class="form-control"  name="autores_id" id="staticEmail" value=""/>
  
  </div>
      <div class="form-group">
    <label for="staticEmail" class="col-sm-2 col-form-label">Nombre</label>
    
      <input type="text"  class="form-control"  name="nombre" id="staticEmail" value=""/>
  
  </div>
  <div class="form-group">
    <label for="inputPassword" class="col-sm-2 col-form-label">Apellido</label>
  
      <input type="text" class="form-control" id="inputPassword" name="apellido" value=""/>
    </div>

    <div class="form-group">
    <label for="inputPassword" class="col-sm-2 col-form-label">Pais</label>

      <input type="text" class="form-control" id="inputPassword" name="pais" value=""/>
    </div>
    <div class="form-group">
    <label for="inputPassword" class="col-sm-2 col-form-label">Fecha registro</label>
      <input type="date" class="form-control" id="inputPassword" name="fecha_de_registro" value=""/>
    </div>
    <div class="form-group">
    <label for="inputPassword" class="col-sm-2 col-form-label">Cantidad libros</label>
      <input type="number" class="form-control" id="inputPassword" name="cantidad_de_libros_en_el_sistema" value=""/>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
</form>
    </div>
  </div>
</div>

    <?php  } ?>
    
   
  </tbody>
</table>
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal">
  Create book
</button>

<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Create Book</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= site_url('/libros') ?>" method="post">
      <div class="modal-body">
       
     
      <div class="form-group">
    <label for="staticEmail" class="col-sm-2 col-form-label">Nombre</label>
    
      <input type="text"  class="form-control"  name="nombre" id="staticEmail" value=""/>
  
  </div>
  <div class="form-group">
    <label for="inputPassword" class="col-sm-2 col-form-label">Fecha de publicacion</label>
  
      <input type="date" class="form-control" id="inputPassword" name="fecha_de_publicacion" value=""/>
    </div>

    <div class="form-group">
    <label for="inputPassword" class="col-sm-2 col-form-label">Edicion</label>

      <input type="text" class="form-control" id="inputPassword" name="edicion" value=""/>
    </div>
    <div class="form-group">
    <label for="inputPassword" class="col-sm-2 col-form-label">Autores</label>
      <input type="text" class="form-control" id="inputPassword" name="autores" value=""/>
    </div>
  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
</form>
    </div>
  </div>
</div>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Fecha de publicacion</th>
      <th scope="col">Edicion</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($libro as $fi){ ?>
    <tr>
    <td><?php echo $fi["libros_id"];?></td>
      <td><?php echo $fi["nombre"];?></td>
      <td><?php echo $fi["fecha_de_publicacion"];?></td>
      <td><?php echo $fi["edicion"];?></td>
    
<td>

  <a href=<?=site_url('/showlibros/'.$fi["libros_id"]); ?>>View</a>
    </td>
    <td>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal1" data-bs-target="#modal">
  update
</button>
  </td>
  <td>
    <button type="button" class="btn btn-danger">
  <a href=<?=site_url('/eliminarlibros/'.$fi["libros_id"]); ?>>delete</a>
</button>
  </td>
  </tr>
<div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Create Book</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= site_url('/updateLibros') ?>" method="post">
      <div class="modal-body">
      <div class="form-group">
    <label for="staticEmail" class="col-sm-2 col-form-label">Id</label>
    
      <input type="text"  class="form-control"  name="libros_id" id="staticEmail" value=""/>
  
  </div>
      <div class="form-group">
    <label for="staticEmail" class="col-sm-2 col-form-label">Nombre</label>
    
      <input type="text"  class="form-control"  name="nombre" id="staticEmail" value=""/>
  
  </div>
  <div class="form-group">
    <label for="inputPassword" class="col-sm-2 col-form-label">Fecha de publicacion</label>
  
      <input type="date" class="form-control" id="inputPassword" name="fecha_de_publicacion" value=""/>
    </div>

    <div class="form-group">
    <label for="inputPassword" class="col-sm-2 col-form-label">Edicion</label>

      <input type="text" class="form-control" id="inputPassword" name="edicion" value=""/>
    </div>
    <div class="form-group">
    <label for="inputPassword" class="col-sm-2 col-form-label">Autores</label>
      <input type="text" class="form-control" id="inputPassword" name="autores" value=""/>
    </div>
  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
</form>
    </div>
  </div>
</div>
    <?php } ?>
   
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>