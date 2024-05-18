<?php
	ini_set('default_charset', 'utf-8');
	require ("contacto.php");
	// Creamos la BD 
	$mi_contacto = new contacto();		
	header("Location: http://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"]."index_contacto.php"); 
	exit;
?>