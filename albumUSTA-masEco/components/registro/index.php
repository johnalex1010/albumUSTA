<?php
ob_start();
	session_start();
	error_reporting (E_ALL & ~E_NOTICE & ~E_DEPRECATED);

//Verificar si la session esta iniciada
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	header('Location: ../../album/');
}
	require_once("../otros/iniciales.php");
	require_once("../otros/conexion.php");

//VARIABLES PARA REMPLAZO DE CARACTERES NO VALIDOS (Evitar los ataque de inyección)
	// $caraterNoValido = "<|>|&lt;|&gt;|'|{|}|;|VALUES|SELECT|INSERT|INTO|FROM|http|%|www|LIKE|ZAP|example|cookie|any|foo|)";
	$exp_regular = array();
	$exp_regular[0] = 'SELECT';
	$exp_regular[1] = 'INTO';
	$exp_regular[2] = 'UPDATE';
	$exp_regular[3] = 'WHERE';
	$exp_regular[4] = 'ORDER';
	$exp_regular[5] = 'FROM';
	$exp_regular[6] = 'VALUES';
	$exp_regular[7] = 'INSERT';
	$exp_regular[8] = 'http';
	$exp_regular[9] = 'LIKE';
	$exp_regular[10] = 'ZAP';
	$exp_regular[11] = 'FOO';
	$exp_regular[12] = ';';
	$exp_regular[13] = '}';
	$exp_regular[14] = '{';
	$exp_regular[15] = 'www';
	$permitidos = '/^[a-z A-Z üÜáéíóúÁÉÍÓÚñÑ]{1,50}$/i';
	$reemplazoCaracter = "...";

	//Preguntar si existe el POST de FORMULARIO
	if ($_POST) {
		$nombres = ucwords(trim(htmlspecialchars(str_replace($exp_regular, $reemplazoCaracter, $_POST["nombres"]))));
		$apellidos = ucwords(trim(htmlspecialchars(str_replace($exp_regular, $reemplazoCaracter, $_POST["apellidos"]))));
		$email = trim(htmlspecialchars(str_replace($exp_regular, $reemplazoCaracter, $_POST["email"])));
		$documento = trim($_POST["documento"]);
		$sede = $_POST['sede'];
		$usuario = trim(htmlspecialchars($_POST["usuario"]));
		$password = $_POST['password'];
		$rePassword = $_POST['rePassword'];
		$habeas = $_POST['habeas'];
		
		$ClassErrorNombres = "";
		$ClassErrorApellidos = "";
		$ClassErrorEmail = "";
		$ClassErrorDocumento = "";
		$ClassErrorUsuario = "";
		$ClassErrorHabeas = "";

		require_once("../otros/querys.php");


		//VALIDO NOMBRES
		if (empty($nombres)) {
			$msjNombres = "El campo Nombre(s) está vacio.";
			$ClassErrorNombres = "error";
		}else{
			if (preg_match($permitidos,$nombres)) {
				if (strlen($nombres)>=3 & strlen($nombres)<=30) {
					$_SESSION['nombres']=$nombres;
				}else{
					$msjNombres = "Longitud NO permitida, el campo Nombre(s) debe ser mínimo 3 caracteres.";
					$ClassErrorNombres = "error";
				}
			}else{
				$msjNombres = "Caracteres NO válidos para este campo.";
				$ClassErrorNombres = "error";
			}
		}
		
		 //==================

		//VALIDO APELLIDOS
		if (empty($apellidos)) {
			$msjApellidos = "El campo Apellido(s) está vacío.";
			$ClassErrorApellidos = "error";
		}else{
			if (preg_match($permitidos,$apellidos)) {
				if (strlen($apellidos)>=3 & strlen($apellidos)<=30) {
					$_SESSION['apellidos']=$apellidos;
				}else{
					$msjApellidos = "Longitud NO permitida, el campo Apellido(s) debe ser mínimo 3 caracteres.";
					$ClassErrorApellidos = "error";
				}
			}else{
				$msjApellidos = "Caracteres NO válidos para este campo.";
				$ClassErrorApellidos = "error";
			}
		}
		
		 //==================

		//VALIDO DOCUMENTO
		if (empty($documento)) {
			$msjDocumento = "El campo número de documento está vacío.";
			$ClassErrorDocumento = "error";
		}elseif (!is_numeric($documento)) {
			$msjDocumento = "No es un número.";
			$ClassErrorDocumento = "error";
		}elseif (strlen($documento)>=7 & strlen($documento)<=15) {
			if (intval($documento)){

				//HACE EL CONTEO DE REGISTROS DE LA TABLA

				$countDoc = mysqli_num_rows($resultDoc);

				if ($countDoc > 0) {
					$msjDocumento =  "Este Documento ya ha sido registrado.";
					$ClassErrorDocumento = "error";
				}
				else{
					$_SESSION['documento']=$documento;
				}				
			}else{
				$msjDocumento = "El Documento ingresado no es válido.";
				$ClassErrorDocumento = "error";
			}
		}else{
			$msjDocumento = "Longitud NO permitida, para el campo debe ser mínimo 7 caracteres y un máximo 15 caracteres.";
			$ClassErrorDocumento = "error";
		}
		//=================

		//VALIDO EMAIL
		if (empty($email)) {
			$msjEmail = "El campo Correo está vacío.";
			$ClassErrorEmail = "error";
		}elseif (strlen($email)>=2 || strlen($email)<=60){
			if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $email)) {
				

				list($correoPartUno, $correoPartDos) = preg_split('[@]', $email);
				if (($correoPartDos == "usantotomas.edu.co") || ($correoPartDos == "ustatunja.edu.co") || ($correoPartDos == "ustamed.edu.co") || ($correoPartDos == "ustabuca.edu.co") || ($correoPartDos == "ustavillavicencio.edu.co") || ($correoPartDos == "ustadistancia.edu.co") || ($correoPartDos == "usantoto.edu.co")){


					//HACE EL CONTEO DE REGISTROS DE LA TABLA
					$countEmail = mysqli_num_rows($resultEmail);

					if ($countEmail > 0) {
						$msjEmail =  "Este Correo ya ha sido registrado.";
						$ClassErrorEmail = "error";
					}
					else{
						$_SESSION['email']=$email;
					}	
				}else{
					$msjEmail = "El Correo debe ser el institucional.";
					$ClassErrorEmail = "error";
				}
			}else{
				$msjEmail = "El Correo NO es válido.";
				$ClassErrorEmail = "error";
			}

		}
		//=================

		// SEDE
		if (empty($sede)) {
			$msjSede = "Debe seleccionar una Sede";
			$ClassErrorSede = "error";
		}else{
			$_SESSION['sede'] = $sede;
		}

		// switch ($correoPartDos) {
		// 	case 'usantotomas.edu.co':
		// 		$_SESSION['sede'] = "Bogotá";
		// 		break;
		// 	case 'ustatunja.edu.co':
		// 		$_SESSION['sede'] = "Tunja";
		// 		break;
		// 	case 'ustamed.edu.co':
		// 		$_SESSION['sede'] = "Medellín";
		// 		break;
		// 	case 'ustabuca.edu.co':
		// 		$_SESSION['sede'] = "Bucaramanga";
		// 		break;
		// 	case 'ustavillavicencio.edu.co':
		// 		$_SESSION['sede'] = "Villavicencio";
		// 		break;
		// 	case 'ustadistancia.edu.co':
		// 		$_SESSION['sede'] = "Distancia";
		// 		break;
		// 	default:
		// 		# code...
		// 		break;
		// }


		//=================

		//VALIDO USUARIO
		if (empty($usuario)) {
			$msjUsuario = "El campo Usuario está vacío.";
			$ClassErrorUsuario = "error";
		}else{
			$permitidosUsuario = '/^[a-zA-Z0-9_-]{1,50}$/i';
			if (preg_match($permitidosUsuario,$usuario)){

				if (strlen($usuario)>=3 & strlen($usuario)<=12) {
					
					$count = mysqli_num_rows($resultUsuario);
					if ($count > 0) {
						$msjUsuario =  "Este Usuario ya ha sido registrado.";
						$ClassErrorUsuario = "error";
					}
					else{
						$_SESSION['usuario']=$usuario;
					}

				}else{
					$msjUsuario = "Recuerde que solo puede utilizar (números, letras y guiones bajos) y máximo de 12 caracteres.";
					$ClassErrorUsuario = "error";
				}

			}else{
				$msjUsuario = "Recuerde que solo puede utilizar (números, letras y guiones bajos) y máximo de 12 caracteres.";
				$ClassErrorUsuario = "error";
			}
		}
		//==================

		//VALIDO PASSWORD
		if (empty($password)) {
			$msjPass = "Los campos están vacíos";
			$ClassErrorPass = "error";
		}elseif (strlen($password)>=5 & strlen($password)<=16) {
			if ($password == $rePassword) {
				$password = md5($password);
				$_SESSION['password']=$password;
			}else{
				$ClassErrorPass = "error";
				$msjPass = "Las contraseñas NO coinciden";
			}
		}else{
			$ClassErrorPass = "error";
			$msjPass = "Longitud NO permitida, para el campo debe ser mínimo 6 caracteres";
		}
	
		//=================

		//VALIDO HEBAS-DATA
		//Si el checkbox condiciones tiene valor y es igual a 1
		if (isset($_POST['habeas']) && $_POST['habeas'] == '1'){
			$_SESSION['habeas']=$habeas;
		}else{
			$msjHabeas = "Debe aceptar las condiciones de uso.";
			$ClassErrorHabeas = "error";
		}
		//=================

		if(isset($_SESSION['nombres']) && isset($_SESSION['apellidos']) && isset($_SESSION['documento']) && isset($_SESSION['email']) && isset($_SESSION['usuario']) && isset($_SESSION['password']) && isset($_SESSION['habeas'])){
			header('location:registro.php');
		}

		mysqli_close($conexion);
	}
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
		<div class="cajaForm cajaRegistro">
			<div class="formulario">
				<form action="" class="form" method="post">
					<h4>Registrarse</h4>
					<img src="img/logos/logoAlbum.png" alt="Escudo - Mundial de la Excelencia">					
					
					<div class="grilla">
						<div class="celda celdax2">
							<p class="<?php echo $ClassErrorNombres ?>"><?php echo $msjNombres ?></p>
							<div class="cajaInput">
								<span class="icon-user"></span>
								<input placeholder="Nombre(s)" name="nombres" type="text" value="<?php echo $nombres ?>">
							</div>
						</div>
						<div class="celda celdax2">
							<p class="<?php echo $ClassErrorApellidos ?>"><?php echo $msjApellidos ?></p>
							<div class="cajaInput">
								<span class="icon-user"></span>
								<input placeholder="Apellido(s)" name="apellidos" type="text" value="<?php echo $apellidos ?>">
							</div>
						</div>
					</div>
					<div class="grilla">
						<div class="celda celdax2">
							<p class="<?php echo $ClassErrorDocumento ?>"><?php echo $msjDocumento ?></p>
							<div class="cajaInput">
								<span class="icon-hashtag"></span>
								<input placeholder="Número de Documento" name="documento" type="text" value="<?php echo $documento ?>">
							</div>
						</div>
						<div class="celda celdax2">
							<p class="<?php echo $ClassErrorEmail ?>"><?php echo $msjEmail ?></p>
							<div class="cajaInput">
								<span class="icon-arroba"></span>
								<input placeholder="Correo institucional" name="email" type="text" value="<?php echo $email ?>">
							</div>	
						</div>
					</div>
					<div class="grilla">
						<div class="celda">
							<p class="<?php echo $ClassErrorSede ?>"><?php echo $msjSede ?></p>
							<div class="cajaInput">
								<span class="icon-user"></span>
								<select name="sede" id="">
								<?php if (empty($sede)): ?>
									<option value="" disabled selected style="color: #ccc;">Seleccione una sede</option>
								<?php else: ?>
									<option value="<?php echo $sede ?>" selected><?php echo $sede ?></option>
								<?php endif ?>									
									<option value="Bogotá">Sede Principal Bogotá</option>
									<option value="Distancia">Educación a Distancia</option>
									<option value="Bucaramanga">Seccional Bucaramanga</option>
									<option value="Tunja">Seccional Tunja</option>
									<option value="Medellín">Sede Medellín</option>
									<option value="Villavicencio">Sede Villavicencio</option>
								</select>
							</div>
						</div>
					</div>
					<div class="grilla">
						<div class="celda">
							<p class="<?php echo $ClassErrorUsuario ?>"><?php echo $msjUsuario ?></p>
							<div class="cajaInput">
								<span class="icon-user"></span>
								<input placeholder="Usuario" title="Recuerde que solo puede utilizar (números, letras y guiones bajos) y máximo de 12 caracteres. NO se aceptan guion medio ( - )" name="usuario" type="text" value="<?php echo $usuario ?>">
							</div>
						</div>
					</div>
					<div class="grilla">
						<div class="celda celdax2">
							<p class="<?php echo $ClassErrorPass ?>"><?php echo $msjPass ?></p>
							<div class="cajaInput">
								<span class="icon-password"></span>
								<input placeholder="Contraseña" title="Recuerde que el campo contraseña debe ser mínimo 6 caracteres" name="password" type="password">
							</div>
						</div>
						<div class="celda celdax2">
							<p class="<?php echo $ClassErrorPass ?>"><?php echo $msjPass ?></p>
							<div class="cajaInput">
								<span class="icon-password"></span>
								<input placeholder="Repetir contraseña" title="Recuerde que el campo contraseña debe ser mínimo 6 caracteres" name="rePassword" type="password">
							</div>
						</div>
					</div>
					<div class="grilla">
						<div class="celda">
							<p class="<?php echo $ClassErrorHabeas ?>"><?php echo $msjHabeas ?></p>
							<div class="cajaInput">
								<input type="checkbox" name="habeas" value="1">
								<p class="pHabeas">Aceptar términos y condiciones <a href="docs/Terminos_y_Condiciones.pdf" target="_blank">aquí</a></p>
							</div>
						</div>
					<div class="grilla">
						<div class="celda"><input class="botonDos" type="submit"></div>
					</div>
				</form>
			</div>
			<div class="txtForm">
				<a href="components/login/">Iniciar sesión</a>
			</div>
		</div>
	</div>
</body>
</html>