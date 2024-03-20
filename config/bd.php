<?php


function conexion(){

    $con =mysqli_connect('localhost','root','','archivo');

    return $con;
}


function listar(){

    $sql= "SELECT * FROM archivo";
    
    $query= mysqli_query(conexion(),$sql);
    
    return $query;
}

function insertar($conexion,$nombre,$categoria,$fecha,$tipo,$archivoBLOB){

    $sql= "INSERT INTO archivo (nombre,categoria,fecha,tipo,archivo) VALUES('$nombre','$categoria','$fecha','$tipo','$archivoBLOB')";
    $query= mysqli_query(conexion(),$sql);

    return $query;
}  


function eliminar($conexion,$id){

    $sql= "DELETE FROM archivo WHERE id =$id";
    $query= mysqli_query($conexion,$sql);

    return $query;

} 


function datos($conexion,$id){

    $sql= "SELECT * FROM archivo WHERE id = $id ";
    $query= mysqli_query($conexion,$sql);
    $datos=mysqli_fetch_assoc($query);

    return $datos;
}
?>