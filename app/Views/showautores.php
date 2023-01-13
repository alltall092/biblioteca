<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style type="text/css">
    ul {
  list-style-type: none; /* Remove bullets */
  padding: 0; /* Remove padding */
  margin: 0; /* Remove margins */
}

ul li {
  border: 1px solid #ddd; /* Add a thin border to each list item */
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6; /* Add a grey background color */
  padding: 12px; /* Add some padding */
}


    </style>

  
  
  
  </head>
  <body>

  <?php foreach($datos as $fi){ ?>
    
  
    
    
    <h2>Autores</h2>
    <br/>
    <ul class="list-group">
  
    <li class="list-group-item"> <?php echo $fi["nombre"];?></li>
    <li class="list-group-item"><?php echo $fi["apellido"];?></li>
    <li class="list-group-item"><?php echo $fi["pais"];?></li>
    <li class="list-group-item"><?php echo $fi["fecha_de-registro"];?></li>
    <li class="list-group-item"><?php echo $fi["cantidad_de_libros_en_el_sistema"];?></li>
  </ul>
  <?php } ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>