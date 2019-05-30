<?php
session_start();
	while ($statics2=mysqli_fetch_array($statics22)) {
		// mysqli_select_db($conexion,$prefijo.$statics2['usuario']);

		//Hace el conteo de los registros del campo (visualizar)
		$resultContAlbum = $conexion->query($contarAlbum);
		$countAlbum=mysqli_fetch_assoc($resultContAlbum);

		//Hace el conteo de los registros del campo (visualizar = 1)
		$resultContLaminita = $conexion->query($contarLaminita);
		$countLaminita=mysqli_fetch_assoc($resultContLaminita);

		//Formula para sacar el porcentaje
		$total = $countAlbum['visualizar'];
		$laminitas = $countLaminita['visualizar'];

		$porcentaje = round(($laminitas/$total) * 100, 3);
		$statics2['porcentaje'];


		if ($porcentaje == $statics2['porcentaje']) {}
		else{
			// mysqli_select_db($conexion,$db_name);

			$ultimaFechaLaminita = "SELECT fechaLaminita FROM t_album_".$statics2['usuario']." ORDER BY fechaLaminita DESC LIMIT 1";
			$rUltimaFechaLaminita = $conexion->query($ultimaFechaLaminita);
			$rUltimaFechaLaminita = mysqli_fetch_array($rUltimaFechaLaminita);
			$ultimaFecha=$rUltimaFechaLaminita['fechaLaminita'];

			$up = "UPDATE t_user_album SET porcentaje='".$porcentaje."', ultimaFechaLaminita='".$ultimaFecha."' WHERE usuario='".$statics2['usuario']."'";
			$upT = $conexion->query($up);
		}

	}
?>