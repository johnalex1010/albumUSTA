<?php 
ob_start();
	session_start();
	error_reporting (E_ALL & ~E_NOTICE & ~E_DEPRECATED);

	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
		header('Location: ../../album/');
	}


	require_once("../otros/iniciales.php");
?>
<!DOCTYPE html>
<html lang="es_CO">
<head>
	<base href="<?php echo $URLBase ?>">
	<!-- METAS -->
	<meta charset="UTF-8" />
	<title>Albúm | Santoto + Planeta</title>
	<meta http-equiv="X-UA-Compatible" content="EDGE" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />	
	<meta name="description" content="Album | Mundial de la Excelencia USTA"/>
	<meta name="keywords" content="Album, Mundial de la Excelencia USTA">
	<meta name="author" content="John Alex Fandiño | Jose Lubo">

	<!-- LINK -->
	<link rel="shortcut icon" href="img/otros/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="css/main-min.css" />

</head>
<body class="bgInicio">
	<div class="contentFlex">
		<div class="cajaForm cajaLogin">
			<div class="formulario">
				<form action="components/login/autenticacion.php" class="form" method="POST">
					<h4>Iniciar Sesión</h4>
					<img src="img/logos/logoAlbum.png" alt="Escudo - Mundial de la Excelencia">
					<div class="grilla">
						<div class="celda">
							<p class="<?php echo $_SESSION['msjEmail'] ?>"><?php echo $_SESSION['msjEmailTxt'] ?></p>
							<p class="<?php echo $_SESSION['classError'] ?>"><?php echo $_SESSION['msjLogin'] ?></p>
							<div class="cajaInput">
								<span class="icon-user"></span>
								<input class="input" type="text" name="usuario" placeholder="Usuario" required>
							</div>	
						</div>
					</div>
					<div class="grilla">
						<div class="celda">
							<p class="<?php echo $_SESSION['classError'] ?>"><?php echo $_SESSION['msjLogin'] ?></p>
							<div class="cajaInput">
								<span class="icon-password"></span>
								<input type="password" class="input" name="password" placeholder="Contraseña" required>
							</div>
						</div>
					</div>
					<div class="grilla">
						<div class="celda"><input class="botonDos" type="submit"></div>
					</div>
				</form>
			</div>
			<div class="txtForm">
				<a href="components/recuperarPass/">¿Olvidó su contraseña?</a>
				<a href="components/registro/">Registrarse</a>
			</div>
		</div>
	</div>
	<?php 
		unset($_SESSION['msjEmail']);
		unset($_SESSION['msjEmailTxt']);
		unset($_SESSION['classError']);
		unset($_SESSION['msjLogin']);
	?>
</body>
</html>