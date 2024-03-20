<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="bootstrap/bootstrap.min.css" >
</head>
<body style="background-color: #F8F8F8" >
    
    <div class="container" >
      
    <form action="acciones/insertar.php" class="m-auto w-50 mt-2" method="post" enctype= "multipart/form-data">
    <h3 class="text-center">REGISTRO DOCUMENTO PDF</h3>   <BR>
        <div class="mb-2">
            <label class="form-label">Nombre del archivo:</label>
            <input class="form-control form-control-sm" require type="text" name="nombreArchivo">
        </div>
        
        <div class="mb-2">
            <label class="form-label">Selecciona un archivo:</label>
            <input class="form-control form-control-sm" require type="file" name="archivo">
        </div>


        <button class="btn btn-primary btn-sm">Subir Archivo</button>

    </form>


<br><br>
    <table class="table table-sm table-striped">

     <thead class="table-dark">
         <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Categoria</th>
            <th>Fecha</th>
            <th>Archivo</th>
            <th>Acciones</th>
         </tr>  
     </thead>
     <tbody>
      <?php

         include 'config/bd.php';
         
         $query = listar();
         $contador = 0;
       

    if (mysqli_num_rows($query) > 0) {
           
         while ($datos = mysqli_fetch_array($query)){
            $contador++;
            $id=$datos[0];
            $nombre=$datos[2].'<br>';
            $categoria=$datos[1].'<br>';
            $fecha=$datos[3].'<br>';
            $archivo=$datos[4].'<br>';
            $tipo=$datos[5].'<br>';
          

      ?>
        <tr> 
            <td><?php echo $contador;?></td>
            <td><?php echo $nombre;?></td>
            <td><?php echo $categoria;?></td>
            <td><?php echo $fecha;?></td>
            <td><?php echo $nombre;?></td>
            <td><a class="btn btn-primary"href= "editar.php?id=<?php echo $id?>" target="_blank">Visualizar</a> <a class="btn btn-danger" href="acciones/eliminar.php?id=<?php echo $id?>">Eliminar</a></td>
            
        </tr>

        <?php

       }
    } 
       ?>

     </tbody>


    </table>

    </div>


    <script src="bootstrap/bootstrap.min.js"></script>
 <script src="bootstrap/bootstrap.bundle.min.js"></script>

</body>
</html>