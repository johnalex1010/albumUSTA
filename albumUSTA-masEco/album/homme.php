<?php 
require_once("../components/otros/porcentajes.php");

$op = $_GET['op'];
switch ($op) {
	case 'perfil':
		$contenido = "pages/perfil.php";
		$url = "?op=laminitas";
		$txt = "Volver al álbum";
		break;
	case 'premios':
		$contenido = "pages/premios.php";
		$url = "?op=laminitas";
		$txt = "Volver al álbum";
		break;
	case 'challenges':
		$contenido = "pages/challenges.php";
		$url = "?op=laminitas";
		$txt = "Volver al álbum";
		break;
	case 'estadisticas':
		$contenido = "pages/estadisticas.php";
		$url = "?op=laminitas";
		$txt = "Volver al álbum";
		break;
	case 'laminitas':
		$contenido = "pages/laminitas.php";
		$url = "?op=portada";
		$txt = "Cerrar al álbum";
		break;
	case 'adicionarLaminita':
		$contenido = "pages/adicionarLaminita.php";
		$url = "?op=laminitas";
		$txt = "Volver al álbum";
		break;
	case 'topFiveSedes':
		$contenido = "pages/topFiveSedes.php";
		$url = "?op=laminitas";
		$txt = "Volver al álbum";
		break;
	case 'bigLaminita':
		if ($op."&".$_GET['big']) {
			$contenido = "pages/bigLaminita.php";
			$url = "?op=laminitas";	
			$txt = "Volver al álbum";
		}
		break;
	case 'errorAdicionLaminita':
		$contenido = "pages/errorAdicionLaminita.php";
		$url = "?op=laminitas";
		$txt = "Volver al álbum";
		break;
	case 'cambioPass':
		$contenido = "pages/cambioPass.php";
		$url = "?op=laminitas";
		$txt = "Volver al álbum";
		break;
	default:
		$contenido = "pages/portada.php";
		$url = "?op=laminitas";
		$txt = "Abrir álbum";
		break;
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
	<meta name="description" content="Albúm | Santoto + Planeta USTA"/>
	<meta name="keywords" content="Albúm | Santoto + Planeta USTA">
	<meta name="author" content="John Alex Fandiño | Jose Lubo">

	<!-- LINK -->
	<link rel="shortcut icon" href="img/otros/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="css/main-min.css" />

</head>
<body>
	<header class="headerAlbum">
		<img src="img/logos/logoUSTA.png" alt="Universidad Santo Tomás">
	</header>
	<section class="sectionAlbum">
		<?php if ($row['perfil'] != 2): ?>
			<div class="grilla">
				<div class="celda celdax20">
					<div class="panelControl">
						<img src="img/logos/logoAlbum.png" alt="Escudo de la Excelencia">
						<p class="pNombre">HOLA <?php echo $row['nombres']." ".$row['apellidos'] ?></p>
						<nav>
							<ul>
								<li><a href="album/?op=portada"><span class="icon-home"></span>  <span class="txt_panel">Inicio</span></a></li>
								<li><a href="album/?op=perfil"><span class="icon-user"></span>  <span class="txt_panel">Perfil</span></a></li>
								<li><a href="album/?op=topFiveSedes"><span class="icon-top"></span>  <span class="txt_panel">Top 3 - Sedes  y Seccionales</span></a></li>
								<li><a href="album/?op=challenges"><span class="icon-challenges"></span>  <span class="txt_panel">Challenges</span></a></li>
								<li><a href="album/?op=premios"><span class="icon-trophy"></span>  <span class="txt_panel">Premios</span></a></li>
								<?php 
									if (($row['perfil'] == 1)) {
										?>
										<li><a href="album/?op=estadisticas	"><span class="icon-statistics"></span>  <span class="txt_panel">Estadísticas (Administradores)</span></a></li>
										<?php 
									}
								?>
								

								<li><a href="components/otros/cerrar_session.php"><span class="icon-signOff"></span>  <span class="txt_panel">Cerrar sesión</span></a></li>
							</ul>
						</nav>
						<form action="album/asset/rstAdicionarLaminita.php" method="POST">
							<p class="pNombre">Ingreso Lámina</p>
							<div class="grilla">
								<div class="celda formLaminita"><span class="icon-card"></span><input type="text" name="laminita" placeholder="Codigo Lámina"></div>
								<div class="celda"><input class="botonDos" type="submit"></div>
							</div>
											
						</form>
					</div>
				</div>
				<div class="celda celdax80">
					<aside class="asideContenido">
						<div class="grilla">
							<div class="celda celdax30">
								
								<a href="album/<?php echo $url ?>" class="btnAside botonDos"><?php echo $txt ?></a>

							</div>
							<div class="celda celdax70">
								<div class="cajaProgressBar">	
									<div class="progress_container">
										<p>HOLAi Progreso</p>

										<?php 
											// mysqli_select_db($conexion,$prefijo.$row['usuario']);

											//Hace el conteo de los registros del campo (visualizar)
											$resultContAlbum = $conexion->query($contarAlbum);
											$countAlbum=mysqli_fetch_assoc($resultContAlbum);

											//Hace el conteo de los registros del campo (visualizar = 1)
											$resultContLaminita = $conexion->query($contarLaminita);
											$countLaminita=mysqli_fetch_assoc($resultContLaminita);

											//Formula para sacar el porcentaje
											$total = $countAlbum['visualizar'];
											$laminitas = $countLaminita['visualizar'];

											$porcentaje = round(($laminitas/$total) * 100, 2);
										?>
										<div class="progress progress-danger progress-striped active">
									 		<div class="bar" style="width: <?php print $porcentaje?>%;"><?php print $porcentaje ?>%</div>
										</div>
									</div>
								</div>
							</div>
					</div>
					</aside>
					<section class="contenidoAlbum">
						<?php include $contenido ?>
					</section>
				</div>
			</div>
		<?php else: ?>
			<div class="penalizado">
				<div class="">
					<h1>Su cuenta ha sido penalizada</h1>
					<p>Se ha detectado una irregularidad en su barra de progreso, la cual supera el porcentaje correspondiente a la fecha actual.<br><br>Debido a esto se han inhabilitado las funciones correspondientes al álbum digital. Lo invitamos a leer los términos y condiciones <a href="docs/Terminos_y_Condiciones.pdf" target="_blank" class="btnPenalizadoTC"> aquí</a></p>
					<p><a class="botonDos btnPenalizado" href="components/otros/cerrar_session.php"><span class="icon-signOff"></span> <span class="txt_panel"> Cerrar sesión</span></a></p>
				</div>
			</div>
		<?php endif ?>
	</section>
	<footer class="footerAlbum">
		<p><strong>Universidad Santo Tomás © 2019</strong></p>
		<h4>SANTOTO + PLANETA</h4>
		<p>Mayores informes</p>
		<p>Departamento de Comunicaciones, tel: 587 87 97 ext: 1131<br>
		Coordinación Gestión Ambiental, tel: 587 87 97 ext: 1903</p>
		<p>Todos los derechos reservados.</p>
		<p>Diseño y desarrollo, Departamento de Comunicaciones</p>
		<p><a class="btnAside botonDos" style="display: inline-block;" href="docs/Terminos_y_Condiciones.pdf" target="_blank">Términos y condiciones aquí</a></p>
	</footer>

	
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/main-min.js"></script>
</body>
</html>