<?php
require_once("contacto.php");

if(session_status() != PHP_SESSION_ACTIVE){
    session_start();
}

Class Autenticacion {

    static function login($correo, $clave){
        $db = new contacto();
        $clave = sha1($clave);
        $consulta = "SELECT * FROM usuario WHERE correo = '$correo' AND clave = '$clave'";
        $resultado = $db->ejecuta_SQL($consulta);
        $filas = $resultado->rowCount();
        if ($filas == 1) {
            $login = $resultado->fetch();
            // Credenciales válidas, redirecciona a la página deseada
            $_SESSION["usuario"] = $login["codigo_user"];
            $_SESSION["login_exitoso"] = true; // Indica que el login fue exitoso
            header('Location: login.php');
            exit(); // Make sure to exit after redirection
        } else {
            // Credenciales inválidas, muestra un mensaje de error
            $_SESSION["login_error"] = 1;
            header('Location: login.php');
        }
    }
    static function logout(){
        // Destruir la sesión y redirigir a la página de inicio de sesión
        session_destroy();

        header("Location: login.php");
        exit();
    }
    static function is_user_login(){
        if(isset($_SESSION["usuario"]) && $_SESSION["usuario"] != ""){
            return true;
        }else {
            return false;
        }
    }
}


//GESTION DE PETICIONES
if (isset($_POST["correo"]) && isset($_POST["clave"])) {
    $correo = $_POST["correo"];
    $clave = $_POST["clave"];
    Autenticacion::login($correo, $clave);
}
if (isset($_POST['logout'])) {
    Autenticacion::logout();
}
?>