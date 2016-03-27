<?php
session_start();
//variables precargadas
$usuario	= "admin";
$clave		= "admin";

//recibiendo valores de index.phh
$login		= $_POST["login"];
$passwd		= $_POST["passwd"];

if (($usuario==$login) && ($clave==$passwd)) {
	$_session["usuario"]=$usuario;

	echo "<script> window.location='home.php'
	</script>";	
}
else{
	echo "<script> alert('Datos Invalidos');
		window.location='index.php'
	</script>";
}

?>