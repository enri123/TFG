<?php
require("contacto.php");	
require_once("sesiones.php"); 

$mi_contacto = new contacto("tfg");
$nombre = $email = $subject = $mensaje = $dest = $headers = $msjCorreo = NULL;
$usuario_id = $_SESSION["usuario"];
$sql_script = "SELECT * FROM usuario WHERE codigo_user='$usuario_id'";
$resultado = $mi_contacto->ejecuta_SQL($sql_script);
$usuario = $resultado->fetch();

if (isset($_POST['submit'])) {
    // Obtenemos valores del formulario
    $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
    $telefono = filter_var($_POST['telefono'], FILTER_SANITIZE_STRING);
    $correo = filter_var($usuario['correo'], FILTER_VALIDATE_EMAIL);
    $mensaje = filter_var($_POST['mensaje'], FILTER_SANITIZE_STRING);
    $tema = "Tutoría";
    $dest = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);

    if ($dest === false) {
        echo "<script language='javascript'>
                alert('Correo electrónico no válido.');
              </script>";
        exit;
    }

    error_log($dest);
    // Creamos la cabecera del correo
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= 'From: ' . $correo . "\r\n";
    $headers .= "Return-path: $correo\r\n";

    // Componemos el cuerpo del correo
    $cuerpo = '
    <html>
        <head>
            <title>Prueba de correo</title>
        </head>
        <body>
            <h1>Email de '.$nombre.'</h1>
            <p>'.$mensaje.'<br> Número de teléfono: '.$telefono.'</p>
        </body>
    </html>';

    if (mail($dest, $tema, $cuerpo, $headers)) {
        echo "<script language='javascript'>
                alert('Mensaje enviado, muchas gracias.');
              </script>";
    } else {
        echo "<script language='javascript'>
                alert('Fallado al enviar el mensaje.');
              </script>";
    }
}
?>
