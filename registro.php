<?php
require ("contacto.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $contraseña = sha1($contraseña);
    $foto_perfil = 'assets/logo-ies-kursaal.png';

    $db = new contacto();
    
    try {
        $db->add_usuario($nombre, $correo, $contraseña, $foto_perfil);
        if ($db) {
            echo "Usuario agregado exitosamente";
            header("Location: login.php");
        } else {
            echo "Error al agregar usuario";
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
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
    <link rel="stylesheet" href="styless.css">
</head>
<body>
<script src="script.js"></script>
<div class="contenedor-header">
        <header>
            <div class="logo">
                <a href="https://ieskursaal.es/"><img src="assets/logo-ies-kursaal.png" width="80px"></a>
            </div>
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

<div class="contenido_default">
    <div class="header">
        <h2>
            Registro de usuario
        </h2>
    </div>
        <div class="cuerpo">
        <form action="registro.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br><br>
            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="correo" required><br><br>
            <label for="contraseña">Contraseña:</label>
            <input type="password" id="contraseña" name="contraseña" required><br><br>
            <input type="submit" value="Registrar">
        </form>
        <br><br>
        <form action="login.php" method="GET">
            <input type="submit" value="Iniciar sesión">
        </form>

    </div>
</div>
</body>
</html>
