<?php 
	ob_start();
	session_start();
	error_reporting (E_ALL & ~E_NOTICE & ~E_DEPRECATED);

	require_once("../../components/otros/iniciales.php");
	require_once("../../components/otros/conexion.php");
	

	$usuario = $_SESSION['usuario'];
	echo $newPass = $_POST['newPass'];
	echo $reNewPass = $_POST['reNewPass'];


	if (empty($newPass) OR empty($reNewPass)) {
		$_SESSION['error'] = "Los campos están vacios.";
		header('Location: ../?op=cambioPass');
	}elseif (strlen($newPass)>=5 & strlen($newPass)<=16) {

		if ($newPass == $reNewPass) {
			echo "igual";	
			echo $newPass = md5($newPass);
			require_once("../../components/otros/querys.php");
			$rstCambioPass = $conexion->query($cambioPassword);
			mysqli_close($conexion);
			echo $_SESSION['cambioPass'] = "BIEN";
			header('Location: ../?op=cambioPass');
		}else{
			$_SESSION['error'] = "Las contraseñas no coinciden";
			header('Location: ../?op=cambioPass');
		}

	}else{
		$_SESSION['error'] = "Longitud NO permitida, para el campo debe ser mínimo 6 caracteres";
		header('Location: ../?op=cambioPass');
	}
?>
