<?php
  /* Fijamos las constantes de la conexión al servidor MySQL.
   El nombre del servidor es el que admite por defecto el servidor
   local.*/
  define("SERVIDOR", "localhost");
  define("USUARIO", "root");
  define("CLAVE", "");
	
  class contacto {
  	
  	protected $db;
  	
  	function __construct($BD="") //Esto es el constructor
  	{  	  
	    /* Intentamos establecer una conexión con el servidor.*/
		try {
			if ($BD!='')
				$this->db = new PDO("mysql:host=" . SERVIDOR . ";dbname=" . $BD .";charset=utf8", USUARIO, CLAVE, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
			else 
				$this->db = new PDO("mysql:host=" . SERVIDOR. ";charset=utf8", USUARIO, CLAVE, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
			
			$this->db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY,  true);
			// Indicamos como atributo que se debe devolver una cadena vacía para los valores nulos
			$this->db->setAttribute(PDO::NULL_TO_STRING, true);
			// Si no indicamos la BD es que hay que crearla de nuevo
			if ($BD=='') {
				// Ejecutamos la SQL de Creación de BD directamente
			   // en el servidor MySQL.
			   /* Intentamos crear la base de datos "ejercicios".
				* Si se consigue hacerlo, se informa de ello.
			   * Si no, también se informa y se indica cuál es el
			   * motivo del fallo con el mensaje de error.*/
			   $sql = file_get_contents('bd/db.sql');			 
			   $this->ejecuta_SQL($sql);
			}
		} catch (PDOException $e) {
			die ("<p><H3>No se ha podido establecer la conexión.
				  <P>Compruebe si está activado el servidor de bases de 
				  datos MySQL.</H3></p>\n <p>Error: " . $e->getMessage() . "</p>\n");
		} // end try
	}//end function constructor
	
	function __destruct() //Esto es el destructor
	{
		if (isset($db)) // Desconectamos de la BD
			$db=null;
	  
	}//end destructor agenda
	
	// Añadir un contacto a la lista
	function add_contacto ($Nombre, $telefono, $email, $tema,$mensaje) 
	{
    	  $sql_script = "INSERT INTO contacto (Nombre, telefono, email,
    	  					tema, mensaje)
    	  				VALUES('$Nombre', '$telefono', '$email', 
    	  					'$tema','$mensaje')";    	  					
    	
		$this->ejecuta_SQL($sql_script);
    }//end add_contacto

	// Añadir un contacto a la lista
	function add_usuario ($nombre, $correo, $clave, $foto_perfil) 
	{
    	  $sql_script = "INSERT INTO usuario (nombre, correo, clave, foto_perfil)
    	  				VALUES('$nombre', '$correo', '$clave', '$foto_perfil')";    	  					
    	
		$this->ejecuta_SQL($sql_script);
    }//end add_contacto

	// Añadir un contacto a la lista
	function add_valoracion ($id_usuario, $mensaje) 
	{
    	  $sql_script = "INSERT INTO valoraciones (id_usuario, mensaje)
		  				VALUES('$id_usuario', '$mensaje')";    	  					
    	
		$this->ejecuta_SQL($sql_script);
    }//end add_contacto
    
	function join_tabla()
	{
		$sql_script = "SELECT valoraciones.mensaje, valoraciones.hora, usuario.correo, usuario.foto_perfil, usuario.nombre 
                           FROM valoraciones 
                           JOIN usuario ON valoraciones.id_usuario = usuario.codigo_user";
        return $this->ejecuta_SQL($sql_script);
	}
    
	// Función que ejecuta una SQL
    function ejecuta_SQL($sql) {
    $resultado=$this->db->query($sql);
    if (!$resultado)
    {
        echo"<H3>No se ha podido ejecutar la consulta: <PRE>$sql</PRE><P><U> Errores</U>: </H3><PRE>";
        print_r($this->db->errorInfo());					
        die ("</PRE>");
    }
    return $resultado;
} // end ejecuta_SQL
	
  }//END clase agenda
	
?>