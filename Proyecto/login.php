<?php
  if(session_status() != PHP_SESSION_ACTIVE){
    session_start();
  }

  require_once("sesiones.php"); 

  $mensaje = "";
  if(isset($_SESSION["login_error"])){
    $mensaje = "Correo o contraseña incorrecta";
    unset($_SESSION["login_error"]);
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
                <li><a href="login.php" onclick="seleccionar()" class="login">LOGIN</a></li>
            </ul>
        </nav>
        <div class="nav-responsive" onclick="mostrarOcultarMenu()">
            <i class="fa-solid fa-bars"></i>
        </div>
    </header>
</div>

    <?php
    if (isset($_SESSION["login_exitoso"]) && $_SESSION["login_exitoso"] == true){
      echo "<div class='contenido_login'>";
        $mi_contacto = new contacto(); 
        $usuario_id = $_SESSION["usuario"];
        $sql_script = "SELECT * FROM usuario WHERE codigo_user='$usuario_id'";
        $resultado = $mi_contacto->ejecuta_SQL($sql_script);
        // Verificar si se encontró un usuario con las credenciales proporcionadas
        if ($resultado && $resultado->rowCount() == 1) {
            $usuario = $resultado->fetch(); // Obtener los detalles del usuario
            // Mostrar la información del usuario
            echo "<div class='primer_div'>";
            echo "<div class='datos_usuario'>";
            echo "<img src='" . $usuario['foto_perfil'] . "' width='120px' alt='Foto de perfil'>";
            echo "<p>Usuario: " . $usuario['nombre'] . "</p>";
            echo "<p>Correo: " . $usuario['correo'] . "</p>";
            echo "<p>Clave: " . $usuario['clave'] . "</p>";
            echo "  <br><form action='sesiones.php' method='POST' class='boton_logout'>
                      <input type='submit' value='Logout' name='logout'>
                    </form>";
            echo "</div>";
    ?>
        </div>
    <div class="contacto">
        <!-- Aquí puedes agregar tu formulario -->
            <div class="fila">
                <!-- Formulario -->
                <div class="col">
                <h2>Pedir Tutoria</h2>
                <form id="formContacto" action="pedir_cita.php" method="POST">
                  <label for="nombre" id="nombreLabel">Introduzca su nombre:</label>
                  <input type="text" id="nombre" name="nombre" placeholder="Tú Nombre" required="required">

                  <label for="telefono" id="telefonoLabel">Introduzca el número de teléfono:</label>
                  <input type="text" id="telefono" name="telefono" placeholder="Número telefónico" required="required">

                  <label for="email" id="emailLabel">Introduzca el email del profesor:</label>
                  <select id="email" name="email" required="required">
                    <option value="enrique@kimauestudio.com">enrique@kimauestudio.com</option>
                    <option value="enriruiztirado11@gmail.com">enriruiztirado11@gmail.com</option>
                    <option value="eruitir2809@g.educaand.es">eruitir2809@g.educaand.es</option>
                  </select>
                  <textarea required="required" id="mensaje" name="mensaje" cols="30" rows="10" placeholder="Introduzca de qué desea hablar en la tutoría"></textarea>
                  <input type="submit" id="submit" name="submit" class="btn btn-primary btn-lg" value="Enviar mensaje" />
                  </form>

                </div>
                <!-- Mapa -->
                <div class="col">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1781.5328710650856!2d-5.453040787590363!3d36.1333863118343!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0c94ceab185c63%3A0x831d796ff491fd6e!2sAv.%20Virgen%20de%20Europa%2C%204%2C%2011202%20Algeciras%2C%20C%C3%A1diz!5e0!3m2!1ses-419!2ses!4v1713781421568!5m2!1ses-419!2ses" width="500" height="450" style="border:0; margin-left: 50px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
  <?php
  } else {
      // Si no se encontró el usuario, muestra un mensaje de error
      echo "Error: No se pudo encontrar la información del usuario.";
      ?>
      <form action="sesiones.php" method="POST">
          <input type="submit" value="Logout" name="logout">
      </form>
  <?php
  }
}else{
  ?>  

  <div class="contenido_default">
    <div class="header">
      <h2>
        Inicio de Sesión
      </h2>
    </div>
    <div class="cuerpo">
      <form action="sesiones.php" method="POST">
        <label for="correo">correo:</label>
        <input type="text" value="" id="correo" name="correo"><br><br>
        <label for="clave">Password:</label>
        <input type="password" id="clave" name="clave"><br><br>
        <input type="submit" value="Iniciar sesión">
      </form>
      <br>
    <p><?= $mensaje ?></p>
  
    <br>
    <form action="registro.php" method="GET">
        <input type="submit" value="Registrarse">
    </form>
  <?php
}
    ?>
    </div>
<script src="scripts/script.js"></script>
</body>
</html>