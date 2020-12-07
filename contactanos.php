<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* The main PHPMailer class. */
require __DIR__.'\PHPMailer\src\PHPMailer.php';

/* SMTP class, needed if you want to use SMTP. */
require __DIR__.'\PHPMailer\src\SMTP.php';

//Capturando con el metodo POST los datos del formulario
    if(isset($_POST['submit'])){
        if(!empty($_POST['nombre']) && !empty($_POST['correo']) && !empty($_POST['asunto']) && !empty($_POST['mensaje'])){
            $user_nuevo = $_POST['nombre'];
            $correo = $_POST['correo'];
            $asunto = $_POST['asunto'];
            $mensaje = $_POST['mensaje'];

            $to = 'adaweb95@gmail.com';
            $body = $user_nuevo.", escribió lo siguiente: "."<br>"."Correo: ".$correo."<br>"."Mensaje: ".$mensaje;

            $mail = new PHPMailer();

            // Settings
            $mail->IsSMTP();
            $mail->CharSet = 'UTF-8';

            $mail->Host       = "smtp.gmail.com"; // SMTP server example
            $mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
            $mail->SMTPAuth   = true;                  // enable SMTP authentication
            $mail->SMTPSecure = "ssl";
            $mail->Port       = 465;                    // set the SMTP port for the GMAIL server
            $mail->Username   = "mensajesada@gmail.com"; // SMTP account username example
            $mail->Password   = "ucsdtlppakvmfdro";        // SMTP account password example

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $asunto;
            $mail->Body    = $body;
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->setFrom('mensajesada@gmail.com', 'app');
            $mail->AddAddress('adaweb95@gmail.com', 'andrea');

            include_once 'conexion.php'; // Inclusión del archivo que realiza la conexión a la BD
                
                $sql_agregar = 'INSERT INTO mensajes (nombre,correo,asunto,mensaje)
                VALUES (?,?,?,?)'; //sentencia sql que agrega los datos del usuario

                $senten_agregar = $pdo->prepare($sql_agregar);
                
                if($mail->send()){
                    if ($senten_agregar->execute(array($user_nuevo,$correo,$asunto,$mensaje))){
                        echo "<script>alert('Su mensaje ha sido enviado con exito!')</script>";
                        echo "<script>location.href='contactanos.html'</script>";// senetencia que verifica si se agrego la información a la BD
                    }else {
                        echo "<script>alert('Error. No se pudo guardar en la base de datos.')</script>";
                        echo "<script>location.href='contactanos.html'</script>";
                    }
                }
                else{
                    echo 'error' + $mail->ErrorInfo;
                    echo "<script>location.href='contactanos.html'</script>";
                }
        }else{
            echo "<script>alert('Error. Todos los campos deben ser diligenciados.')</script>";
            echo "<script>location.href='contactanos.html'</script>";
        }
        
    }
    $senten_agregar = NULL; //cierra la sentencia sql
    $pdo = NULL; //cierra el metodo de conexión PDO
?>