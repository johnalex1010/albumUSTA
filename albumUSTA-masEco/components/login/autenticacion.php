<?php
ob_start();
session_start();
//Verificar si la session esta iniciada
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	header('Location: ../../album/');
}

include "../otros/conexion.php";



$usuario = $_POST['usuario'];
$password = $_POST['password'];
 

require "../otros/querys.php";


// if ($resultUsuario->num_rows > 0) {
$row = $resultUsuario->fetch_array(MYSQLI_ASSOC);
echo $row['usuario'];
if ($row['usuario']===$usuario) {
	if (md5($password) == $row['password']) { 

		$_SESSION['loggedin'] = true;
		$_SESSION['usuario'] = $usuario;
		$_SESSION['start'] = time();
		$_SESSION['expire'] = $_SESSION['start'] + (60 * 60);
		mysqli_close($conexion);
		header('location:../../album/');

	} else { 
		$_SESSION['msjLogin'] = "El usuario o la contraseña estan incorrectos.";
		$_SESSION['classError'] = "error";
		header('location:index.php');
	} 
 }else{
	$_SESSION['msjLogin'] = "El usuario o la contraseña estan incorrectos.";
 	$_SESSION['classError'] = "error";
 	header('location:index.php');
 }
 ?>