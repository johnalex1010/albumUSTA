<?php
ob_start();
// error_reporting (E_ALL & ~E_NOTICE & ~E_DEPRECATED);
/*
=========
Grupo B
=========
*** Fecha 1 => 1 vs 2
*/
require_once("../../../components/otros/conexion.php");

echo $marcadorA_F = $_POST['marcadorA_F']; 
echo $marcadorB_F = $_POST['marcadorB_F'];
echo $marcadorA_E = $_POST['marcadorA_E']; 
echo $marcadorB_E = $_POST['marcadorB_E'];

if (isset($_POST['marcador1vs2'])) {

	if(is_numeric($marcadorA_F) AND is_numeric($marcadorB_F)){
		if(($marcadorA_F >= 0) AND ($marcadorB_F >= 0)){
			if ($marcadorA_F > $marcadorB_F) {

				$sql1 = "UPDATE t_grupob SET PJ=PJ+'1', GolF1='".$marcadorA_F."', PE_F1='".$marcadorA_E."', GF=GF+'".$marcadorA_F."', GC=GC+'".$marcadorB_F."', GD=GF-GC, PE=PE+'".$marcadorA_E."', PF=PF+'3', PT=PF+PE WHERE nom_equipo='Portugal';";
				$sql2 = "UPDATE t_grupob SET PJ=PJ+'1', GolF1='".$marcadorB_F."', PE_F1='".$marcadorB_E."', GF=GF+'".$marcadorB_F."', GC=GC+'".$marcadorA_F."', GD=GF-GC, PE=PE+'".$marcadorB_E."', PF=PF+'0', PT=PF+PE WHERE nom_equipo='España'";
				$rstSql1 = $conexion->query($sql1);
				$rstSql2 = $conexion->query($sql2);
				header('Location: ../../../album/?op=asiVaElMundial');
				

			}elseif ($marcadorA_F==$marcadorB_F) {
				$sql1 = "UPDATE t_grupob SET PJ=PJ+'1', GolF1='".$marcadorA_F."', PE_F1='".$marcadorA_E."', GF=GF+'".$marcadorA_F."', GC=GC+'".$marcadorB_F."', GD=GF-GC, PE=PE+'".$marcadorA_E."', PF=PF+'1', PT=PF+PE WHERE nom_equipo='Portugal';";
				$sql2 = "UPDATE t_grupob SET PJ=PJ+'1', GolF1='".$marcadorB_F."', PE_F1='".$marcadorB_E."', GF=GF+'".$marcadorB_F."', GC=GC+'".$marcadorA_F."', GD=GF-GC, PE=PE+'".$marcadorB_E."', PF=PF+'1', PT=PF+PE WHERE nom_equipo='España'";
				$rstSql1 = $conexion->query($sql1);
				$rstSql2 = $conexion->query($sql2);
				header('Location: ../../../album/?op=asiVaElMundial');
			}else{
				$sql1 = "UPDATE t_grupob SET PJ=PJ+'1', GolF1='".$marcadorA_F."', PE_F1='".$marcadorA_E."', GF=GF+'".$marcadorA_F."', GC=GC+'".$marcadorB_F."', GD=GF-GC, PE=PE+'".$marcadorA_E."', PF=PF+'0', PT=PF+PE WHERE nom_equipo='Portugal';";
				$sql2 = "UPDATE t_grupob SET PJ=PJ+'1', GolF1='".$marcadorB_F."', PE_F1='".$marcadorB_E."', GF=GF+'".$marcadorB_F."', GC=GC+'".$marcadorA_F."', GD=GF-GC, PE=PE+'".$marcadorB_E."', PF=PF+'3', PT=PF+PE WHERE nom_equipo='España'";
				$rstSql1 = $conexion->query($sql1);
				$rstSql2 = $conexion->query($sql2);
				header('Location: ../../../album/?op=asiVaElMundial');
			}
		}else{
			echo '<script language="javascript">alert("No son numeros validos");</script>'; 
		}			
	}else{
		echo '<script language="javascript">alert("No son numeros");</script>'; 
	}
}

/*
*** Fecha 1 => 3 vs 4
*/

if (isset($_POST['marcador3vs4'])) {
	if(is_numeric($marcadorA_F) AND is_numeric($marcadorB_F)){
		if(($marcadorA_F >= 0) AND ($marcadorB_F >= 0)){
			if ($marcadorA_F > $marcadorB_F) {
				$sql1 = "UPDATE t_grupob SET PJ=PJ+'1', GolF1='".$marcadorA_F."', PE_F1='".$marcadorA_E."', GF=GF+'".$marcadorA_F."', GC=GC+'".$marcadorB_F."', GD=GF-GC, PE=PE+'".$marcadorA_E."', PF=PF+'3', PT=PF+PE WHERE nom_equipo='Marruecos';";
				$sql2 = "UPDATE t_grupob SET PJ=PJ+'1', GolF1='".$marcadorB_F."', PE_F1='".$marcadorB_E."', GF=GF+'".$marcadorB_F."', GC=GC+'".$marcadorA_F."', GD=GF-GC, PE=PE+'".$marcadorB_E."', PF=PF+'0', PT=PF+PE WHERE nom_equipo='Irán'";
				$rstSql1 = $conexion->query($sql1);
				$rstSql2 = $conexion->query($sql2);
				header('Location: ../../../album/?op=asiVaElMundial');
				

			}elseif ($marcadorA_F==$marcadorB_F) {
				$sql1 = "UPDATE t_grupob SET PJ=PJ+'1', GolF1='".$marcadorA_F."', PE_F1='".$marcadorA_E."', GF=GF+'".$marcadorA_F."', GC=GC+'".$marcadorB_F."', GD=GF-GC, PE=PE+'".$marcadorA_E."', PF=PF+'1', PT=PF+PE WHERE nom_equipo='Marruecos';";
				$sql2 = "UPDATE t_grupob SET PJ=PJ+'1', GolF1='".$marcadorB_F."', PE_F1='".$marcadorB_E."', GF=GF+'".$marcadorB_F."', GC=GC+'".$marcadorA_F."', GD=GF-GC, PE=PE+'".$marcadorB_E."', PF=PF+'1', PT=PF+PE WHERE nom_equipo='Irán'";
				$rstSql1 = $conexion->query($sql1);
				$rstSql2 = $conexion->query($sql2);
				header('Location: ../../../album/?op=asiVaElMundial');
			}else{
				$sql1 = "UPDATE t_grupob SET PJ=PJ+'1', GolF1='".$marcadorA_F."', PE_F1='".$marcadorA_E."', GF=GF+'".$marcadorA_F."', GC=GC+'".$marcadorB_F."', GD=GF-GC, PE=PE+'".$marcadorA_E."', PF=PF+'0', PT=PF+PE WHERE nom_equipo='Marruecos';";
				$sql2 = "UPDATE t_grupob SET PJ=PJ+'1', GolF1='".$marcadorB_F."', PE_F1='".$marcadorB_E."', GF=GF+'".$marcadorB_F."', GC=GC+'".$marcadorA_F."', GD=GF-GC, PE=PE+'".$marcadorB_E."', PF=PF+'3', PT=PF+PE WHERE nom_equipo='Irán'";
				$rstSql1 = $conexion->query($sql1);
				$rstSql2 = $conexion->query($sql2);
				header('Location: ../../../album/?op=asiVaElMundial');
			}
		}else{
			echo '<script language="javascript">alert("No son numeros validos");</script>'; 
		}			
	}else{
		echo '<script language="javascript">alert("No son numeros");</script>'; 
	}
}

/*
*** Fecha 2 => 1 vs 3
*/


if (isset($_POST['marcador1vs3'])) {

	if(is_numeric($marcadorA_F) AND is_numeric($marcadorB_F)){
		if(($marcadorA_F >= 0) AND ($marcadorB_F >= 0)){
			if ($marcadorA_F > $marcadorB_F) {
				$sql1 = "UPDATE t_grupob SET PJ=PJ+'1', GolF2='".$marcadorA_F."', PE_F2='".$marcadorA_E."', GF=GF+'".$marcadorA_F."', GC=GC+'".$marcadorB_F."', GD=GF-GC, PE=PE+'".$marcadorA_E."', PF=PF+'3', PT=PF+PE WHERE nom_equipo='Portugal';";
				$sql2 = "UPDATE t_grupob SET PJ=PJ+'1', GolF2='".$marcadorB_F."', PE_F2='".$marcadorB_E."', GF=GF+'".$marcadorB_F."', GC=GC+'".$marcadorA_F."', GD=GF-GC, PE=PE+'".$marcadorB_E."', PF=PF+'0', PT=PF+PE WHERE nom_equipo='Marruecos'";
				$rstSql1 = $conexion->query($sql1);
				$rstSql2 = $conexion->query($sql2);
				header('Location: ../../../album/?op=asiVaElMundial');
				

			}elseif ($marcadorA_F==$marcadorB_F) {
				$sql1 = "UPDATE t_grupob SET PJ=PJ+'1', GolF2='".$marcadorA_F."', PE_F2='".$marcadorA_E."', GF=GF+'".$marcadorA_F."', GC=GC+'".$marcadorB_F."', GD=GF-GC, PE=PE+'".$marcadorA_E."', PF=PF+'1', PT=PF+PE WHERE nom_equipo='Portugal';";
				$sql2 = "UPDATE t_grupob SET PJ=PJ+'1', GolF2='".$marcadorB_F."', PE_F2='".$marcadorB_E."', GF=GF+'".$marcadorB_F."', GC=GC+'".$marcadorA_F."', GD=GF-GC, PE=PE+'".$marcadorB_E."', PF=PF+'1', PT=PF+PE WHERE nom_equipo='Marruecos'";
				$rstSql1 = $conexion->query($sql1);
				$rstSql2 = $conexion->query($sql2);
				header('Location: ../../../album/?op=asiVaElMundial');
			}else{
				$sql1 = "UPDATE t_grupob SET PJ=PJ+'1', GolF2='".$marcadorA_F."', PE_F2='".$marcadorA_E."', GF=GF+'".$marcadorA_F."', GC=GC+'".$marcadorB_F."', GD=GF-GC, PE=PE+'".$marcadorA_E."', PF=PF+'0', PT=PF+PE WHERE nom_equipo='Portugal';";
				$sql2 = "UPDATE t_grupob SET PJ=PJ+'1', GolF2='".$marcadorB_F."', PE_F2='".$marcadorB_E."', GF=GF+'".$marcadorB_F."', GC=GC+'".$marcadorA_F."', GD=GF-GC, PE=PE+'".$marcadorB_E."', PF=PF+'3', PT=PF+PE WHERE nom_equipo='Marruecos'";
				$rstSql1 = $conexion->query($sql1);
				$rstSql2 = $conexion->query($sql2);
				header('Location: ../../../album/?op=asiVaElMundial');
			}
		}else{
			echo '<script language="javascript">alert("No son numeros validos");</script>'; 
		}			
	}else{
		echo '<script language="javascript">alert("No son numeros");</script>'; 
	}
}

/*
*** Fecha 2 => 2 vs 4
*/


if (isset($_POST['marcador2vs4'])) {


	if(is_numeric($marcadorA_F) AND is_numeric($marcadorB_F)){
		if(($marcadorA_F >= 0) AND ($marcadorB_F >= 0)){
			if ($marcadorA_F > $marcadorB_F) {
				$sql1 = "UPDATE t_grupob SET PJ=PJ+'1', GolF2='".$marcadorA_F."', PE_F2='".$marcadorA_E."', GF=GF+'".$marcadorA_F."', GC=GC+'".$marcadorB_F."', GD=GF-GC, PE=PE+'".$marcadorA_E."', PF=PF+'3', PT=PF+PE WHERE nom_equipo='España';";
				$sql2 = "UPDATE t_grupob SET PJ=PJ+'1', GolF2='".$marcadorB_F."', PE_F2='".$marcadorB_E."', GF=GF+'".$marcadorB_F."', GC=GC+'".$marcadorA_F."', GD=GF-GC, PE=PE+'".$marcadorB_E."', PF=PF+'0', PT=PF+PE WHERE nom_equipo='Irán'";
				$rstSql1 = $conexion->query($sql1);
				$rstSql2 = $conexion->query($sql2);
				header('Location: ../../../album/?op=asiVaElMundial');
				

			}elseif ($marcadorA_F==$marcadorB_F) {
				$sql1 = "UPDATE t_grupob SET PJ=PJ+'1', GolF2='".$marcadorA_F."', PE_F2='".$marcadorA_E."', GF=GF+'".$marcadorA_F."', GC=GC+'".$marcadorB_F."', GD=GF-GC, PE=PE+'".$marcadorA_E."', PF=PF+'1', PT=PF+PE WHERE nom_equipo='España';";
				$sql2 = "UPDATE t_grupob SET PJ=PJ+'1', GolF2='".$marcadorB_F."', PE_F2='".$marcadorB_E."', GF=GF+'".$marcadorB_F."', GC=GC+'".$marcadorA_F."', GD=GF-GC, PE=PE+'".$marcadorB_E."', PF=PF+'1', PT=PF+PE WHERE nom_equipo='Irán'";
				$rstSql1 = $conexion->query($sql1);
				$rstSql2 = $conexion->query($sql2);
				header('Location: ../../../album/?op=asiVaElMundial');
			}else{
				$sql1 = "UPDATE t_grupob SET PJ=PJ+'1', GolF2='".$marcadorA_F."', PE_F2='".$marcadorA_E."', GF=GF+'".$marcadorA_F."', GC=GC+'".$marcadorB_F."', GD=GF-GC, PE=PE+'".$marcadorA_E."', PF=PF+'0', PT=PF+PE WHERE nom_equipo='España';";
				$sql2 = "UPDATE t_grupob SET PJ=PJ+'1', GolF2='".$marcadorB_F."', PE_F2='".$marcadorB_E."', GF=GF+'".$marcadorB_F."', GC=GC+'".$marcadorA_F."', GD=GF-GC, PE=PE+'".$marcadorB_E."', PF=PF+'3', PT=PF+PE WHERE nom_equipo='Irán'";
				$rstSql1 = $conexion->query($sql1);
				$rstSql2 = $conexion->query($sql2);
				header('Location: ../../../album/?op=asiVaElMundial');
			}
		}else{
			echo '<script language="javascript">alert("No son numeros validos");</script>'; 
		}			
	}else{
		echo '<script language="javascript">alert("No son numeros");</script>'; 
	}
}

/*
*** Fecha 3 => 1 vs 4
*/


if (isset($_POST['marcador1vs4'])) {

	if(is_numeric($marcadorA_F) AND is_numeric($marcadorB_F)){
		if(($marcadorA_F >= 0) AND ($marcadorB_F >= 0)){
			if ($marcadorA_F > $marcadorB_F) {
				$sql1 = "UPDATE t_grupob SET PJ=PJ+'1', GolF3='".$marcadorA_F."', PE_F3='".$marcadorA_E."', GF=GF+'".$marcadorA_F."', GC=GC+'".$marcadorB_F."', GD=GF-GC, PE=PE+'".$marcadorA_E."', PF=PF+'3', PT=PF+PE WHERE nom_equipo='Portugal';";
				$sql2 = "UPDATE t_grupob SET PJ=PJ+'1', GolF3='".$marcadorB_F."', PE_F3='".$marcadorB_E."', GF=GF+'".$marcadorB_F."', GC=GC+'".$marcadorA_F."', GD=GF-GC, PE=PE+'".$marcadorB_E."', PF=PF+'0', PT=PF+PE WHERE nom_equipo='Irán'";
				$rstSql1 = $conexion->query($sql1);
				$rstSql2 = $conexion->query($sql2);
				header('Location: ../../../album/?op=asiVaElMundial');
				

			}elseif ($marcadorA_F==$marcadorB_F) {
				$sql1 = "UPDATE t_grupob SET PJ=PJ+'1', GolF3='".$marcadorA_F."', PE_F3='".$marcadorA_E."', GF=GF+'".$marcadorA_F."', GC=GC+'".$marcadorB_F."', GD=GF-GC, PE=PE+'".$marcadorA_E."', PF=PF+'1', PT=PF+PE WHERE nom_equipo='Portugal';";
				$sql2 = "UPDATE t_grupob SET PJ=PJ+'1', GolF3='".$marcadorB_F."', PE_F3='".$marcadorB_E."', GF=GF+'".$marcadorB_F."', GC=GC+'".$marcadorA_F."', GD=GF-GC, PE=PE+'".$marcadorB_E."', PF=PF+'1', PT=PF+PE WHERE nom_equipo='Irán'";
				$rstSql1 = $conexion->query($sql1);
				$rstSql2 = $conexion->query($sql2);
				header('Location: ../../../album/?op=asiVaElMundial');
			}else{
				$sql1 = "UPDATE t_grupob SET PJ=PJ+'1', GolF3='".$marcadorA_F."', PE_F3='".$marcadorA_E."', GF=GF+'".$marcadorA_F."', GC=GC+'".$marcadorB_F."', GD=GF-GC, PE=PE+'".$marcadorA_E."', PF=PF+'0', PT=PF+PE WHERE nom_equipo='Portugal';";
				$sql2 = "UPDATE t_grupob SET PJ=PJ+'1', GolF3='".$marcadorB_F."', PE_F3='".$marcadorB_E."', GF=GF+'".$marcadorB_F."', GC=GC+'".$marcadorA_F."', GD=GF-GC, PE=PE+'".$marcadorB_E."', PF=PF+'3', PT=PF+PE WHERE nom_equipo='Irán'";
				$rstSql1 = $conexion->query($sql1);
				$rstSql2 = $conexion->query($sql2);
				header('Location: ../../../album/?op=asiVaElMundial');
			}
		}else{
			echo '<script language="javascript">alert("No son numeros validos");</script>'; 
		}			
	}else{
		echo '<script language="javascript">alert("No son numeros");</script>'; 
	}
}

/*
*** Fecha 3 => 2 vs 3
*/


if (isset($_POST['marcador2vs3'])) {

	if(is_numeric($marcadorA_F) AND is_numeric($marcadorB_F)){
		if(($marcadorA_F >= 0) AND ($marcadorB_F >= 0)){
			if ($marcadorA_F > $marcadorB_F) {
				$sql1 = "UPDATE t_grupob SET PJ=PJ+'1', GolF3='".$marcadorA_F."', PE_F3='".$marcadorA_E."', GF=GF+'".$marcadorA_F."', GC=GC+'".$marcadorB_F."', GD=GF-GC, PE=PE+'".$marcadorA_E."', PF=PF+'3', PT=PF+PE WHERE nom_equipo='España';";
				$sql2 = "UPDATE t_grupob SET PJ=PJ+'1', GolF3='".$marcadorB_F."', PE_F3='".$marcadorB_E."', GF=GF+'".$marcadorB_F."', GC=GC+'".$marcadorA_F."', GD=GF-GC, PE=PE+'".$marcadorB_E."', PF=PF+'0', PT=PF+PE WHERE nom_equipo='Marruecos'";
				$rstSql1 = $conexion->query($sql1);
				$rstSql2 = $conexion->query($sql2);
				header('Location: ../../../album/?op=asiVaElMundial');
				

			}elseif ($marcadorA_F==$marcadorB_F) {
				$sql1 = "UPDATE t_grupob SET PJ=PJ+'1', GolF3='".$marcadorA_F."', PE_F3='".$marcadorA_E."', GF=GF+'".$marcadorA_F."', GC=GC+'".$marcadorB_F."', GD=GF-GC, PE=PE+'".$marcadorA_E."', PF=PF+'1', PT=PF+PE WHERE nom_equipo='España';";
				$sql2 = "UPDATE t_grupob SET PJ=PJ+'1', GolF3='".$marcadorB_F."', PE_F3='".$marcadorB_E."', GF=GF+'".$marcadorB_F."', GC=GC+'".$marcadorA_F."', GD=GF-GC, PE=PE+'".$marcadorB_E."', PF=PF+'1', PT=PF+PE WHERE nom_equipo='Marruecos'";
				$rstSql1 = $conexion->query($sql1);
				$rstSql2 = $conexion->query($sql2);
				header('Location: ../../../album/?op=asiVaElMundial');
			}else{
				$sql1 = "UPDATE t_grupob SET PJ=PJ+'1', GolF3='".$marcadorA_F."', PE_F3='".$marcadorA_E."', GF=GF+'".$marcadorA_F."', GC=GC+'".$marcadorB_F."', GD=GF-GC, PE=PE+'".$marcadorA_E."', PF=PF+'0', PT=PF+PE WHERE nom_equipo='España';";
				$sql2 = "UPDATE t_grupob SET PJ=PJ+'1', GolF3='".$marcadorB_F."', PE_F3='".$marcadorB_E."', GF=GF+'".$marcadorB_F."', GC=GC+'".$marcadorA_F."', GD=GF-GC, PE=PE+'".$marcadorB_E."', PF=PF+'3', PT=PF+PE WHERE nom_equipo='Marruecos'";
				$rstSql1 = $conexion->query($sql1);
				$rstSql2 = $conexion->query($sql2);
				header('Location: ../../../album/?op=asiVaElMundial');
			}
		}else{
			echo '<script language="javascript">alert("No son numeros validos");</script>'; 
		}			
	}else{
		echo '<script language="javascript">alert("No son numeros");</script>'; 
	}
}
?>