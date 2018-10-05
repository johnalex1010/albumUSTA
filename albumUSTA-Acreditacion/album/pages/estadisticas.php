<div class="estadisticas">
<h3 class="titleContent">ESTADÍSTICAS</h3>
<p>Aquí encontrara y podrá descargar las estadísticas de la interacción de los usuarios registrados y sus respectivos progresos con el álbum de la excelencia.</p>
<a href="album/asset/exportar.php"><span class="icon-download"></span>  Exportar de forma total.</a>
<table class="tablaDatos">
	<tr>
		<form action="album/asset/exportar.php" method="POST">
			<td><p>Fecha rango 1</p><input type="date" name="fecha1"></td>
			<td><p>Fecha rango 2</p><input type="date" name="fecha2"></td>
			<td><span class="icon-download"></span>  <input type="submit"  name="btnExport" value="Exportar por fechas"></td>
			<td></td>
			<td></td>
			<td></td>
		</form>
	</tr>
	<tr>
		<th>Fecha Registro</th>
		<th>Nombres</th>
		<th>Correo</th>
		<th>Usuario</th>
		<th>Progreso</th>
	</tr>
	<?php
		while($td = mysqli_fetch_array($tabla1)){
		# code...
	?>
	<tr>
		<td><?php echo $td['fechaRegis'] ?></td>
		<td><?php echo $td['nombres']." ". $td['apellidos'] ?></td>
		<td><?php echo $td['email'] ?></td>
		<td><?php echo $td['usuario'] ?></td>
		<td>
			<div class="progress progress-danger progress-striped active">
		 		<div class="bar" style="width: <?php echo $td['porcentaje'] ?>%;"><?php echo $td['porcentaje'] ?>%</div>
			</div>	
		</td>
	</tr>
	<?php } ?>
</table>
</div>