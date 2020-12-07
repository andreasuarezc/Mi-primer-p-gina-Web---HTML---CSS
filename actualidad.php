<!DOCTYPE html>
<html lang="es" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Asuntos de género, Derecho constitucional y Actualidad">        
        <title>ADA</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="icon" href="img/icon.png">
        <!-- Facebook Open Graph -->
        <meta property="og:locale" content="es_ES"/>
        <meta property="og:site_name" content="ADA"/>
        <meta property="og:title" content="Actualidad"/>
        <meta property="og:url" content="https://ada-web.000webhostapp.com/"/>
        <meta property="og:type" content="website"/>
        <meta property="og:description" content="ADA - Asuntos de género, Derecho constitucional y Actualidad."/>
        <meta property="og:image" content="https://images.pexels.com/photos/2103864/pexels-photo-2103864.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"/>
        <!-- Google+ / Schema.org -->
        <meta itemprop="name" content="ADA"/>
        <meta itemprop="headline" content="Asuntos de género, Derecho constitucional y Actualidad"/>
        <meta itemprop="description" content="Artículos y columnas de opinión que abordan temas de Asuntos de género, Derecho constitucional y Actualidad."/>
        <!--Style help-->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <header class="header">
            <img class= "header-logo" src="img/logo.png" alt="">
            <nav class="style-header-nav">
                <ul>
                    <li class="style-header-li"><a class="style-header-a" href="home.html">Conócenos</a></li>
                    <li class="style-header-li"><a class="style-header-a" href="asuntosGenero.html">Asuntos de género</a></li>
                    <li class="style-header-li"><a class="style-header-a" href="derechoConstitucional.html">Derecho constitucional</a></li>
                    <li class="style-header-li"><a class="style-header-a" style="text-decoration: underline;" href="actualidad.php">Actualidad</a></li>
                    <li class="style-header-li"><a class="style-header-a" href="contactanos.html">Contactanos</a></li>
                </ul>
            </nav>
        </header>
        <main class="main">
            <div class="actualidad-image head">
                <h1 class="frase-actualidad">"Si cambias el modo en que miras las cosas, las cosas que miras cambian". (Wayne Dyer)</h1>
            </div>             
            <div class="contenido">
                <div class="articule">
                    <articule>
                        <h2 class="titulo-section">Tecnología 5G en Colombia</h2>
                        <div class="contenedor-imagen1">                        
                            <img src="img/5g.jpg" alt="" class="imagen1">
                        </div>  
                        <div class="contenedor-resumen contenido-textos">
                            <p>La tecnología 5G es la denominada quinta generación de redes móviles. El avance más significativo de la 5G es la velocidad ya que permitirá navegar hasta a 10 GBps (gigabytes por segundo), 10 veces más rápido que las principales ofertas de fibra óptica del mercado. A ese ritmo se podrá, por ejemplo, descargar una película completa en cuestión de segundos. . . . .</p>
                            <a class="leer-mas" href="5g.html">Leer Más</a>
                        </div>
                    </articule>
                    <articule class="articule2">
                        <h2 class="titulo-section">Tendencias Tecnológicas 2020</h2>
                        <div class="contenedor-imagen1">                        
                            <img src="img/tendencias.jpg" alt="" class="imagen1">
                        </div>  
                        <div class="contenedor-resumen contenido-textos">
                            <p>El 2020 ha sido sin lugar a dudas un año que ha puesto a prueba la capacidad de reinvención del ser humano y esto no habría sido posible si no se contara con el nivel de evolución tecnológica actual. Una gran cantidad de actividades cotidianas del hombre han migrado al internet, ejemplo de ello es que ya es posible trabajar y hacer las compras sin tener que salir de casa. . . . .</p>
                            <a class="leer-mas" href="tendencias.html">Leer Más</a>
                        </div>
                    </articule>
                </div>
                <aside class="aside">
                    <div class="anuncios">
                        <h2 class="titulo-section">Novedad Tenológica</h2>
                        <?php
                        $inc = include_once 'conexion.php'; 
                        if($inc){
                            $consulta = 'SELECT * FROM anuncios';
                            $resultado = mysqli_query($conex,$consulta);
                            ?>
                        
                            <table class="table-actualidad">
                                <?php
                                if($resultado){
                                    while($row = $resultado->fetch_array()){
                                        $id_registro = $row['id_registro'];
                                        $titulo = $row['titulo'];
                                        $link_imagen = $row['link_imagen'];
                                        $descripcion = $row['descripcion'];
                                        ?>
                                        <tr class="aside-imagen">
                                            <td class="aside-titulo"><?php echo $titulo ?></td>
                                        </tr>
                                        <tr>
                                        <td class="aside-imagen1"><img  style="width:80%" src="<?php echo $link_imagen ?>"></td>
                                        </tr>
                                        <tr>
                                            <td style="width:30%"><?php echo $descripcion ?></td>
                                        </tr>
                                        <?php
                                    }
                                } ?>
                            </table>
                        <?php } ?>
                    </div>
                </aside> 
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
        <script src="script.js"></script>
    </body>
</html>