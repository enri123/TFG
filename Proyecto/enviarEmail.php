<?php
    $nombre = $email = $subject = $mensaje = $para = $headers = $msjCorreo = NULL;

    if (isset($_POST['submit'])) {
         //Obtenemos valores input formulario
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $tema = $_POST['tema'];   
    $mensaje = $_POST['mensaje'];
    $para = 'eruitir2809@g.educaand.es';

   //Creamos cabecera.
   $headers = 'From' . " " . $email . "\r\n";
   $headers .= "Content-type: text/html; charset=utf-8";

   //Componemos cuerpo correo.
   $msjCorreo = "Nombre: " . $nombre;
   $msjCorreo .= "\r\n";
   $msjCorreo .= "Email: " . $email;
   $msjCorreo .= "\r\n";
   $msjCorreo .= "Asunto: " . $tema;
   $msjCorreo .= "\r\n";
   $msjCorreo .= "Mensaje: " . $mensaje;
   $msjCorreo .= "\r\n";

 if (mail($para, $tema, $msjCorreo, $headers)) {
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
