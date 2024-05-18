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
