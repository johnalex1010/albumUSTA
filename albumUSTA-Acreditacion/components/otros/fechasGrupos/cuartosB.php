<?php 
ob_start();
require_once("../../../components/otros/conexion.php");

echo $equipoA = $_POST['equipoA'];
echo $marcadorA_F = $_POST['marcadorA_F'];
echo $marcadorA_E = $_POST['marcadorA_E'];
echo $marcadorB_E = $_POST['marcadorB_E'];
echo $marcadorB_F = $_POST['marcadorB_F'];
echo $equipoB = $_POST['equipoB'];


if (isset($_POST['marcadorCuartosB'])) {
	if (is_numeric($marcadorA_F) AND is_numeric($marcadorB_F)) {
		if (($marcadorA_F >= 0) AND ($marcadorB_F >= 0)) {
			if ($marcadorA_F > $marcadorB_F) {
				$sql1 = "UPDATE t_llaveb_cvg SET nom_equipo='".$equipoA."', GF='".$marcadorA_F."', GC='".$marcadorB_F."', PF='3', PE='".$marcadorA_E."', PT=PF+PE WHERE id_equipo='1';";
				$sql2 = "UPDATE t_llaveb_cvg SET nom_equipo='".$equipoB."', GF='".$marcadorB_F."', GC='".$marcadorA_F."', PF='0', PE='".$marcadorB_E."', PT=PF+PE WHERE id_equipo='2';";
				$rstSql1 = $conexion->query($sql1);
				$rstSql2 = $conexion->query($sql2);
				header('Location: ../../../album/?op=asiVaElMundial');
			}elseif ($marcadorA_F == $marcadorB_F) {
				$sql1 = "UPDATE t_llaveb_cvg SET nom_equipo='".$equipoA."', GF='".$marcadorA_F."', GC='".$marcadorB_F."', PF='1', PE='".$marcadorA_E."', PT=PF+PE WHERE id_equipo='1';";
				$sql2 = "UPDATE t_llaveb_cvg SET nom_equipo='".$equipoB."', GF='".$marcadorB_F."', GC='".$marcadorA_F."', PF='1', PE='".$marcadorB_E."', PT=PF+PE WHERE id_equipo='2';";
				$rstSql1 = $conexion->query($sql1);
				$rstSql2 = $conexion->query($sql2);
				header('Location: ../../../album/?op=asiVaElMundial');
			}else{
				$sql1 = "UPDATE t_llaveb_cvg SET nom_equipo='".$equipoA."', GF='".$marcadorA_F."', GC='".$marcadorB_F."', PF='0', PE='".$marcadorA_E."', PT=PF+PE WHERE id_equipo='1';";
				$sql2 = "UPDATE t_llaveb_cvg SET nom_equipo='".$equipoB."', GF='".$marcadorB_F."', GC='".$marcadorA_F."', PF='3', PE='".$marcadorB_E."', PT=PF+PE WHERE id_equipo='2';";
				$rstSql1 = $conexion->query($sql1);
				$rstSql2 = $conexion->query($sql2);
				header('Location: ../../../album/?op=asiVaElMundial');
			}
		}else{
			echo '<script language="javascript">alert("No son numeros validos");</script>';
		}
	}else{
		echo '<script language="javascript">alert("No son numeros validos");</script>';
	}
}else{
	header("Location:../../../");
}

?> 