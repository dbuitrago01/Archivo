<?php

#capturar datos
     $nombre= $_POST['nombreArchivo'];
     $archivo= $_FILES['archivo'];


     #categoria y tipo

     $tipo = $archivo['type'];
     $categoria = explode('.',$archivo['name'])[1];


    #fecha
     
    $fecha= date('Y-m-d H:i:s');

    $tmp_name=$archivo['tmp_name'];
    $contenido_archivo= file_get_contents($tmp_name);
    $archivoBLOB= addslashes($contenido_archivo);

    include '../config/bd.php';

    $conexion= conexion();


 

    if($categoria <>'pdf'){

        echo'<script type="text/javascript">
            alert("Solo se permiten subir documentos PDF.");
            window.location.href="../index.php"
             </script>';
    }else{
    

    $query= insertar($conexion,$nombre,$categoria,$fecha,$tipo,$archivoBLOB);

    if($query){
       # header('location:../index.php?insertar=success');
        echo  '<script type="text/javascript">
        alert( "Se registro el documento exitosamente.");
        window.location.href="../index.php"
         </script>';
       ;
    }else{
        header('location:../index.php?insertar=error');

    }
}
     


?>