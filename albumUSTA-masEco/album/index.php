<?php

ob_start();
session_start();
error_reporting (E_ALL & ~E_NOTICE & ~E_DEPRECATED);

	require_once("../components/otros/iniciales.php");
	require_once("../components/otros/conexion.php");

	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
		
		$usuario = $_SESSION['usuario'];
		require_once("../components/otros/querys.php");
		require_once("../components/otros/porcentajes.php");
		$row = mysqli_fetch_array($resultUsuario, MYSQLI_ASSOC);
  		
	}else{
		header('Location: ../');
	}



date_default_timezone_set('America/Bogota');
$fechaCierre = "2019/05/31 12:30:00";
$fechaActual =  date("Y/m/d H:i:s", time());

if ($fechaActual >= $fechaCierre) {
	require_once "cierreCampania.php";
}else{
	require_once "homme.php";
}

	

?>