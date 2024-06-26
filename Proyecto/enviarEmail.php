<?php
require ("contacto.php");	
$mi_contacto = new contacto("tfg");
$nombre = $email = $subject = $mensaje = $dest = $headers = $msjCorreo = NULL;

if (isset($_POST['submit'])) {
         //Obtenemos valores input formulario
     $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_EMAIL);
     $telefono = $_POST['telefono'];
     $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
     $tema = filter_var($_POST['tema'], FILTER_SANITIZE_STRING);
     $mensaje = filter_var($_POST['mensaje'], FILTER_SANITIZE_EMAIL);
    //Podemos poner varios correos para que reciban el correo, por ejemplo 'eruitir2809@g.educaand.es,enriruiztirado11@gmail.com'
     $dest = 'enriruiztirado11@gmail.com';

    //todo Añadir a la base de datos
   //Creamos cabecera.
     $headers = "MIME-Version: 1.0\r\n";
     $headers .= "Content-type: text/html; charset=utf-8";
     $headers .= 'From: ' . $email . "\r\n";
     $headers .= "Return-path: $dest\r\n";

   //Componemos cuerpo correo.
     $cuerpo= '
     <html>
          <head>
               <title>Prueba de correo</title>
          </head>
          <body>
               <h1>Email de '.$nombre.'</h1>
               <p> '.$mensaje.' </p>
          </body>
     </html>
     ';

     $mi_contacto->add_contacto($nombre, $telefono, $email, $tema, $mensaje);
     if (mail($dest, $tema, $cuerpo, $headers)) {
          echo "<script language='javascript'>
               alert('Mensaje enviado, muchas gracias.');
          </script>";
     } else {
          echo "<script language='javascript'>
               alert('fallado');
          </script>";
     }

}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Enrique Ruiz" />
    <meta name="description" content="Desarrollar una Landing Page adaptable para promover los cursos de informática del IES Kursaal, estimulando el interés y facilitando la inscripción." />
    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>TFG</title>
    <link rel="stylesheet" href="styles/stylesheet-secundario.css">
</head>
<body>
<div class="contenedor-header">
        <header>
            <div class="logo">
                <a href="https://ieskursaal.es/"><img src="assets/logo-ies-kursaal.png" width="80px"></a>
            </div>

            <button id="toggleDarkMode" class="toggle-dark-mode">Modo Oscuro</button>

            <!--Cambiar con css a calc -->
            <nav id="nav">
                <ul>
                    <li><a href="index_contacto.php" onclick="seleccionar()">INICIO</a></li>
                    <li><a href="index_contacto.php#cursos" onclick="seleccionar()">CURSOS</a></li>
                    <li><a href="index_contacto.php#razones" onclick="seleccionar()">POR QUÉ ELEGIRNOS</a></li>
                    <li><a href="index_contacto.php#valoraciones" onclick="seleccionar()">VALORACIONES</a></li>
                    <li><a href="index_contacto.php#contacto" onclick="seleccionar()">CONTACTO</a></li>
                    <li><a href="login.php" onclick="seleccionar()">LOGIN</a></li>
                </ul>
            </nav>
            <div class="nav-responsive" onclick="mostrarOcultarMenu()">
                <i class="fa-solid fa-bars"></i>
            </div>
        </header>
</div>
    
<div class="contenido_envio">
    <h2>Muchas gracias por su mensaje!</h2>
</div>
<script src="scripts/script.js"></script>
</body>
</html>