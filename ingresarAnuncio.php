<?php
//Capturando con el metodo POST los datos del formulario
$titulo = $_POST['titulo'];
$link_imagen = $_POST['link_imagen'];
$descripcion = $_POST['descripcion'];

    include_once 'conexion.php'; // Inclusión del archivo que realiza la conexión a la BD

    $sql_agregar = 'INSERT INTO anuncios (titulo, link_imagen, descripcion)
    VALUES (?,?,?)'; //sentencia sql que agrega los datos del usuario

    $senten_agregar = $pdo->prepare($sql_agregar);

    if ($senten_agregar->execute(array($titulo, $link_imagen, $descripcion))) {
        echo "<script>alert('Anuncio enviado con exito!')</script>";
        echo "<script>location='listarAnuncios.php'</script>";// senetencia que verifica si se agrego la información a la BD
    }else {
        echo "<script>alert('Error. No se pudo guardar en la base de datos.')</script>";
        echo "<script>location='ingresarAnuncio.html'</script>";
    }
    $senten_agregar = NULL; //cierra la sentencia sql
    $pdo = NULL; //cierra el metodo de conexión PDO
