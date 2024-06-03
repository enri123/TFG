Create DATABASE IF NOT EXISTS tfg;
USE tfg;

CREATE TABLE IF NOT EXISTS contacto (
  registro int(4) unsigned NOT NULL auto_increment,
  Nombre varchar(60) NOT NULL DEFAULT '' ,
  telefono varchar(20) ,
  email varchar(200) ,
  tema varchar(150) ,
  mensaje varchar(100) ,
  PRIMARY KEY (registro)
) CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE IF NOT EXISTS usuario (
  codigo_user INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(50) NOT NULL,
  correo VARCHAR(255) NOT NULL,
  clave VARCHAR(255) NOT NULL,
  foto_perfil varchar(255) DEFAULT 'assets/logo-ies-kursaal.png'
) CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE IF NOT EXISTS valoraciones (
  id_valoraciones int(4) unsigned NOT NULL auto_increment,
  id_usuario INT,
  mensaje varchar(100) NOT NULL,
  hora TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id_valoraciones),
  FOREIGN KEY (id_usuario) REFERENCES usuario(codigo_user) ON DELETE CASCADE
) CHARACTER SET utf8 COLLATE utf8_general_ci;
