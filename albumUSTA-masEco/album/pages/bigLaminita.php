<?php 
ob_start();
	session_start();

	// error_reporting (E_ALL & ~E_NOTICE & ~E_DEPRECATED);

	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
		
		$usuario = $_SESSION['usuario'];

		// if (isset($_SESSION['laminita'])) {
		// 	$laminita = $_SESSION['laminita'];
		// }else{
		// 	echo "ERROR";
		// }

		require_once("../components/otros/iniciales.php");
		require_once("../components/otros/conexion.php");
		// mysqli_select_db($conexion,$prefijoBD."$usuario");
		// require_once("../components/otros/querys.php");

		
		$sqlConsultarT = "SELECT * FROM t_album_".$usuario." WHERE laminitaLadoA='".$_GET['big']."'";
		$rSqlConsultarT = $conexion->query($sqlConsultarT);
		$rstLaminitas = mysqli_fetch_array($rSqlConsultarT);		
	}else{
		header('Location: ../');
	}
?>
<div>
	<h3 class="titleContent">VISUALIZACIÓN DE LAMINITA: <?php echo$rstLaminitas['laminitaLadoA']; ?></h3>
	<div class="ingresoLaminita">
		<p>Estás viendo la lámina número <strong><?php echo $rstLaminitas['id_laminita']; ?></strong> del álbum Santoto más Planeta.</p>
	</div>

	<div class="contenedorLaminitas">
		<div class="contentLaminita">
			<figure class="imgBig">
				<img src="img/laminitas/<?php echo $rstLaminitas['laminitaLadoA']; ?>.png" class="frontal" alt="Cod lámina álbum | Santoto más Planeta" />
				<figcaption class="trasera">
					<h3>COD: <?php echo $rstLaminitas['laminitaLadoA']; ?></h3>
					<p><?php echo $rstLaminitas['laminitaLadoB']; ?></p>
				</figcaption>
			</figure>
		</div>
	</div>
</div>