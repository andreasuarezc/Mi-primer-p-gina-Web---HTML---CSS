<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-tofit=no">
    <title>Listar Anuncios - ADA</title>
    <link rel="stylesheet" href="styles.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <main class="main">
        <div class="anuncios">
            <h1 class="titulo-section">Lista de Anuncios Publicados</h1>
            <?php
            $inc = include_once 'conexion.php'; 
            if($inc){
                $consulta = 'SELECT * FROM anuncios';
                $resultado = mysqli_query($conex,$consulta);
                ?>
            
                <table class="table">
                    <thead>
                        <tr>
                            <th class="table-th">Id</th>
                            <th class="table-th">Titulo</th>
                            <th class="table-th">Imagen</th>
                            <th class="table-th">Descripción</th>
                            <th class="table-th">Editar</th>
                            <th class="table-th">Eliminar</th>
                        </tr>
                    </thead>
                    <?php
                    if($resultado){
                        while($row = $resultado->fetch_array()){
                            $id_registro = $row['id_registro'];
                            $titulo = $row['titulo'];
                            $link_imagen = $row['link_imagen'];
                            $descripcion = $row['descripcion'];
                            ?>
                            <tr>
                                <td style="width:10%"><?php echo $id_registro ?></td>
                                <td style="width:20%"><?php echo $titulo ?></td>
                                <td><img  style="width:100%" src="<?php echo $link_imagen ?>"></td>
                                <td style="width:30%"><?php echo $descripcion ?></td>
                                <td style="width:10%"><a href="editar.php?id=<?php echo $id_registro ?>" class="form-icon" >
                                <i class='bx bx-refresh'></i></a></td>
                                <td style="width:10%"><a href="eliminar.php?id=<?php echo $id_registro ?>"class="form-icon" >
                                <i class='bx bxs-trash' ></i></a></td>
                            </tr>
                            <?php
                        }
                    } ?>
                </table>
                <div class="button">
                    <button class="form-nuevo"><a href= "ingresarAnuncio.html" ><i class='bx bxs-add-to-queue' style="font-size: 20px">Nuevo Anuncio</i></a></button>
                </div>
            <?php } ?>
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
