<?php

include_once "conexion.php";
$id = $_GET["id"];
$sql_buscar = "SELECT * FROM anuncios WHERE id_registro = '$id'";
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-tofit=no">
    <title>Editar Anuncio - ADA</title>
    <link rel="stylesheet" href="styles.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <main class="main">
        <div class="contactanos2">
        <h1 class="titulo-section">¿Desea eliminar este anuncio?</h1>
            <?php $resultado = mysqli_query($conex, $sql_buscar);
            while ($row = mysqli_fetch_assoc($resultado)){
                $id_registro = $row{'id_registro'};
                $titulo = $row['titulo'];
                $link_imagen = $row['link_imagen'];
                $descripcion = $row['descripcion']; ?>
                <form class="form" action="eliminar2.php" method="POST">
                    <input type="hidden" name="id_registro" value = "<?php echo $id_registro ?>">
                    <div class="form-label">
                        <label>Titulo</label>
                        <br>
                        <br>
                        <label class="form-input" name="titulo"><?php echo $titulo ?></label>
                    </div>
                    <div class="form-label">
                        <label for="inputlink_imagen">Link Imagen</label>
                        <br>
                        <br>
                        <label class="form-input" id="inputlink_imagen" name="link_imagen"><?php echo $link_imagen ?></label>
                    </div>
                    <div class="form-label">
                        <label for="inputdescripcion">Descripción</label>
                        <br>
                        <br>
                        <label rows="6" cols="30" class="form-textarea"  name="descripcion"><?php echo $descripcion ?></label>
                    </div>
                    <button type="submit" class="form-submit">Eliminar</button>
                </form>
                <?php 
            } ?>
        </div>
    </main>
    <footer class="footer-cont">
        <div class="brand">
            <h2>Creado por: Andrea Suárez</h2>
            <div class=" social-media1">
                <a href="https://github.com/andreasuarezc"class="icon1" target="_blank">
                    <i class='bx bxl-github' ></i>
                </a>
                <a href="https://linkedin.com/in/andrea-suárez-cardona"class="icon1" target="_blank">
                    <i class='bx bxl-linkedin-square' ></i>
                </a>   
            </div>             
        </div>         
    </footer>
</body>
</html>