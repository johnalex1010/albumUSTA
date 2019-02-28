<?php 
	ob_start();
	session_start();

	error_reporting (E_ALL & ~E_NOTICE & ~E_DEPRECATED);

	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
		
		echo $usuario = $_SESSION['usuario'];
		$laminita = strtoupper($_POST['laminita']);
		$fechaLaminita = date("Y-m-d h:i:s");
		
		require_once("../../components/otros/iniciales.php");
		require_once("../../components/otros/conexion.php");
		// mysqli_select_db($conexion,$prefijoBD."$usuario");
		require_once("../../components/otros/querys.php");


		$rstLaminitas1 = mysqli_fetch_array($rSqlConsultarT1);
		$rstLaminitas2 = mysqli_fetch_array($rSqlConsultarT2);

		// Condicion para agregar nueva laminita al álbum
		if ($laminita == $rstLaminitas1['laminitaLadoA']) {	
			if ($rstLaminitas2) {
				unset ($_SESSION['icorrectIngreso']);
				$_SESSION['icorrectIngreso'] = "Esta laminita ya la tienes en tu álbum de excelencia.";
				header('Location: ../../album/?op=errorAdicionLaminita');
			}else{		
				$resultUpLaminita = $conexion->query($upLaminita);
				if(mysqli_affected_rows($conexion) > 0){
					unset ($_SESSION['icorrectIngreso']);
					echo $_SESSION['laminita'] = $laminita;
					header('Location: ../../album/?op=adicionarLaminita');
				}else{
					unset ($_SESSION['icorrectIngreso']);
					$laminita = "";
					$_SESSION['icorrectIngreso'] =  "Error al ingresar laminita, por favor verifique e intente nuevamente.";
					header('Location: ../../album/?op=errorAdicionLaminita');
				}
			}
		}else{
			unset ($_SESSION['icorrectIngreso']);
			$_SESSION['icorrectIngreso'] = "El codigo no corresponde a ninguna laminita.";
			header('Location: ../../album/?op=errorAdicionLaminita');
		}
		
	}else{
		header('Location: ../../');
	}



?>