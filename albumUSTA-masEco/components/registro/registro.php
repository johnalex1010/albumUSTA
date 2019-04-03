<?php
ob_start();
	session_start();
	error_reporting (E_ALL & ~E_NOTICE & ~E_DEPRECATED);

	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
		header('Location: ../../album/');
	}

	require_once("../otros/iniciales.php");
	require_once("../otros/conexion.php");
	
	mysqli_set_charset($conexion,"utf8");


	if(isset($_SESSION['nombres']) && isset($_SESSION['apellidos']) && isset($_SESSION['documento']) && isset($_SESSION['email']) && isset($_SESSION['sede']) && isset($_SESSION['usuario']) && isset($_SESSION['password']) && isset($_SESSION['habeas'])){
		
		$fechaRegis = date("Y-m-d");
		$nombres = $_SESSION['nombres'];
		$apellidos = $_SESSION['apellidos'];
		$documento = $_SESSION['documento'];
		$sede = $_SESSION['sede'];
		$email = $_SESSION['email'];	
		$usuario = $_SESSION['usuario'];
		$password = $_SESSION['password'];
		$habeas = $_SESSION['habeas'];
		$userBD = $prefijo."$usuario";

		require_once("../otros/querys.php");

		if ($conexion->query($insertTable) === TRUE) {

			// $resulSqlCBD = $conexion->query($sqlCreateBD);
			// mysqli_select_db($conexion,$prefijoBD."$usuario");

			require_once("creacionBD.php");
			
			//Elimino las variables de Sesión
			unset ($_SESSION['nombres']);
			unset ($_SESSION['sede']);
			unset ($_SESSION['apellidos']);
			unset ($_SESSION['email']);
			unset ($_SESSION['documento']);
			unset ($_SESSION['password']);
			unset ($_SESSION['habeas']);

			$_SESSION['loggedin'] = true;
			$_SESSION['usuario'] = $usuario;

			$_SESSION['start'] = time();
			$_SESSION['expire'] = $_SESSION['start'] + (60 * 60);
			mysqli_close($conexion);
			//Redirige al Album
			header('location:../../album/');


		}else{
			unset ($_SESSION['nombres']);
			unset ($_SESSION['sede']);
			unset ($_SESSION['apellidos']);
			unset ($_SESSION['email']);
			unset ($_SESSION['usuario']);
			unset ($_SESSION['documento']);
			unset ($_SESSION['password']);
			unset ($_SESSION['habeas']);

			print "Hubo un problema al crear usuario, por favor intente nuevamente";
			print "<a href='index.php'>Reintentar</a>";
		}
	}else{
		mysqli_close($conexion);
		session_destroy();
		header('Location: ../../');
	}

?>