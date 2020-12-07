<?php

include_once 'conexion.php';

$id_registro =$_POST['id_registro'];
$titulo = $_POST['titulo'];
$link_imagen = $_POST['link_imagen'];
$descripcion = $_POST['descripcion'];



$sql_actualizar = "UPDATE anuncios SET titulo='$titulo', link_imagen='$link_imagen', descripcion='$descripcion' WHERE id_registro='$id_registro'"; //sentencia sql que actualiza los datos del usuario
$senten_actualizar = mysqli_query($conex, $sql_actualizar);

if ($senten_actualizar) {
    echo "<script>alert('Actualización enviada con exito!')</script>";
    echo "<script>location='listarAnuncios.php'</script>";// senetencia que verifica si se agrego la información a la BD
}else {
    echo "<script>alert('Error. No se pudo actualizar en la base de datos.')</script>";
    echo "<script>location='listarAnuncios.php'</script>";
}
$senten_actualizar = NULL; //cierra la sentencia sql
$conex = NULL; //cierra el metodo de conexión PDO