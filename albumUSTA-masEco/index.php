<?php 
	ob_start();
	session_start();
	error_reporting (E_ALL & ~E_NOTICE & ~E_DEPRECATED);

	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
		header('Location: album/');
	}
	require_once("components/otros/iniciales.php");
?>
<!DOCTYPE html>
<html lang="es_CO">
<head>
	<base href="<?php echo $URLBase ?>">
	<!-- METAS -->
	<meta charset="UTF-8" />
	<title>Santoto + Planenta</title>
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
		<div class="cajaBienvenida">
			<p>BIENVENIDO</p>
			<img class="imgBienvenida" src="img/logos/Santoto_mas_Planeta_blanco.png" alt="Escudo - Mundial de la Excelencia">
			<!-- <p style="font-size:2.7rem;">Próximamente</p> -->
			<div class="grilla btnBienvenida">
				<div class="celda celdax2"><a class="botonUno" href="components/login"><span class="icon-login"></span>  Iniciar sesión</a></div>
				<div class="celda celdax2"><a class="botonUno" href="components/registro"><span class="icon-registrer"></span>  Registrarse</a></div>
			</div>
		</div>
	</div>
</body>
</html>