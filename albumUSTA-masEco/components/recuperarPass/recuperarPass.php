<?php
ob_start();
session_start();
error_reporting (E_ALL & ~E_NOTICE & ~E_DEPRECATED);

function generarCodigo($longitud) {
 $key = '';
 $pattern = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
 $max = strlen($pattern)-1;
 for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
 return $key;
}

echo $usuario = $_POST['usuario'];
echo "<br>";
echo $email = $_POST['email'];
echo "<br>";

require_once("../otros/conexion.php");
require_once("../otros/querys.php");
$rstEmail = mysqli_fetch_array($resultEmail, MYSQLI_ASSOC);

if (empty($usuario) ||  empty($email)) {
	$_SESSION['classError'] = "error";
	echo $_SESSION['msjLogin'] = "Los campos son obligatorios";
}elseif($rstEmail['usuario'] == $usuario){
	$tempPass = "USTA_". generarCodigo(7);
	echo $tempPassForEmail = $tempPass; 
	echo "<br>";
	echo $tempPass = md5($tempPass);

	$resetPass="UPDATE t_user_album SET password='".$tempPass."' WHERE usuario='".$usuario."'";
	$rstResetPass = $conexion->query($resetPass);

	if ($rstResetPass) {
		mail($email, 'Álbum Santoto + Planeta - Recuperación de contraseña', "Hemos generado una nueva contraseña: ".$tempPassForEmail." una vez ingrese a la plataforma le recomendamos cambiarla.");
		header('Location: ../login/');
	}
}else{
	$_SESSION['classError'] = "error";
	$_SESSION['msjLogin'] = "El usuario ó correo no está registrado";
	header('Location: index.php');
}
?>