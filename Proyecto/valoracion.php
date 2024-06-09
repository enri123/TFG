<?php
if(session_status() != PHP_SESSION_ACTIVE){
    session_start();
}

require("sesiones.php");
$mensaje_val=""; 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once("contacto.php");
    $db = new contacto();
    
    $codigo_user = intval($_POST["codigo_user"]); // Convierte a entero para evitar inyección SQL
    $nombre = htmlspecialchars(trim($_POST["nombre"])); // Evita XSS
    $mensaje = htmlspecialchars(trim($_POST["mensaje"])); // Evita XSS
    
    // Add valoración
    $result = $db->add_valoracion($codigo_user, $mensaje);
    if ($result) {
        $mensaje_val = "Valoración añadida con éxito.";
    } else {
        $mensaje_val = "Valoración añadida con éxito";
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

        <!-- Cambiar con css a calc -->
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
            Añadir valoración
        </h2>
    </div>
    <div class="cuerpo">
        <form action="valoracion.php" method="POST">
        <input type="hidden" id="codigo_user" name="codigo_user" value="<?=$_SESSION["usuario"] ?>"><br><br>
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" required></textarea><br><br>
        <input type="submit" value="Añadir valoración">
    </form>

    </div>
    <br>
    <form action="index_contacto.php" method="GET">
        <input type="submit" value="Inicio">
    </form>
    <br>
    <p><?= $mensaje_val ?></p>

<script src="scripts/script.js"></script>
</body>
</html>
