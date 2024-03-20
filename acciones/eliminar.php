<?php 

    $id= $_GET['id'];
    var_dump($id);
    
    include '../config/bd.php';
    $conexion = conexion();
    $query= eliminar($conexion,$id);

    if ($query){
        header('location:../index.php?eliminar=success');
    }else{

        header('location:../index.php?eliminar=error');

    }


?>