<?php 
	ob_start();
	error_reporting (E_ALL & ~E_NOTICE & ~E_DEPRECATED);
	require_once("../../components/otros/iniciales.php"); 
	require_once("../../components/otros/conexion.php");
	$fechaDownLoad = date("Y/m/d");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<base href="<?php echo $URLBase ?>">
	<!-- METAS -->
	<meta charset="UTF-8" />
	<link rel="stylesheet" type="text/css" href="css/main-min.css" />
	<style>
		table, th{
			font-family: arial;
		}
		tr td{
			border: 1px solid #E6E6E6;
			line-height: 16px;
		}
		img{
			/*margin: 1rem auto;*/
			width: 500px;
			/*padding: 50px;*/
		}
	</style>

</head>
<body>
	<table class="tablaDatos">
		<tr>
			<th>Id</th>
			<th>Fecha Regsitro</th>
			<th>Nombres</th>
			<th>Documento</th>
			<th>Correo</th>
			<th>Usuario</th>
			<th>Protección de datos</th>
			<th>Progreso</th>
		</tr>
<?php 
	$fecha1=$_POST['fecha1'];
	$fecha2=$_POST['fecha2'];

	if(isset($_POST['btnExport'])){
		header("Content-Type: application/vnd.ms-excel");
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("content-disposition: attachment;filename=exportAlbumMundial_de_".$fecha1."_a_".$fecha2.".xls");

		require_once("../../components/otros/querys.php");

		while($td = mysqli_fetch_array($statics1)){

	?>
		<tr>
			<td><?php echo $td['id_usuario'] ?></td>
			<td><?php echo $td['fechaRegis'] ?></td>
			<td><?php echo $td['nombres']." ". $td['apellidos'] ?></td>
			<td><?php echo $td['documento'] ?></td>
			<td><?php echo $td['email'] ?></td>
			<td><?php echo $td['usuario'] ?></td>
			<?php if ($td['habeas'] == 1) {	?> <td>SI</td><?php } ?>
			<td><?php echo $td['porcentaje'] ?>%</td>
		</tr>
	<?php 
		}

	}else{
		header("Content-Type: application/vnd.ms-excel");
		header("Expires: 0");
		header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
		header("content-disposition: attachment;filename=exportAlbumMundial_".$fechaDownLoad."_total.xls");

		require_once("../../components/otros/querys.php");
		while($td = mysqli_fetch_array($statics33)){

	?>
		<tr>
			<td><?php echo $td['id_usuario'] ?></td>
			<td><?php echo $td['fechaRegis'] ?></td>
			<td><?php echo $td['nombres']." ". $td['apellidos'] ?></td>
			<td><?php echo $td['documento'] ?></td>
			<td><?php echo $td['email'] ?></td>
			<td><?php echo $td['usuario'] ?></td>
			<?php if ($td['habeas'] == 1) {	?> <td>SI</td><?php } ?>
			<td><?php echo $td['porcentaje'] ?>%</td>
		</tr>
	<?php 
		}
	}
?>	

	</table>

</body>
</html>	