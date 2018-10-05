<?php 
ob_start();
session_start();
error_reporting (E_ALL & ~E_NOTICE & ~E_DEPRECATED);

function generarCodigo($longitud) {
 $key = '';
 $pattern = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
 $max = strlen($pattern)-1;
 for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
 return $key;
}

$usuario = $_POST['usuario'];
$email = $_POST['email'];

require_once("../otros/conexion.php");
require_once("../otros/querys.php");
$rstEmail = mysqli_fetch_array($resultEmail, MYSQLI_ASSOC);

if (empty($usuario) ||  empty($email)) {
	$_SESSION['classError'] = "error";
	echo $_SESSION['msjLogin'] = "VACIOLos campos son obligatorios";
	// header('Location: index.php');
}elseif ($rstEmail['usuario'] == $usuario) {

	$tempPass = "USTA_". generarCodigo(7);
	echo $tempPassForEmail = $tempPass; 
	echo "<br>";
	echo $tempPass = md5($tempPass);


	$resetPass="UPDATE t_user_album SET password='".$tempPass."' WHERE usuario='".$usuario."'";
	$rstResetPass = $conexion->query($resetPass);


	if ($rstResetPass) {
		$_SESSION['msjEmail'] = "msjEmail";
		$_SESSION['msjEmailTxt'] = "La contraseña se a enviado al correo registrado.";

			// ENVIAR CORREO ==============================================================
			/*
			Primero, obtenemos el listado de e-mails
			desde nuestra base de datos y la incorporamos a un Array.
			*/
			require("mailer/datos-email.php");
			$array = array($email, $correoCC);

			/* 
			Incluimos el PHPMailerAutoload, que se encarga de incorporar 
			a nuestro código, todos los archivos necesarios para utilizar la librería.
			Supongamos que guardamos dicha librería en un directorio llamado "phpmailer"
			*/

			require("mailer/PHPMailerAutoload.php"); 

			$mail = new PHPMailer;

			// Configuramos los datos de sesión para conectarnos al servicio SMTP de Mandrill
			$mail->IsSMTP(); // Indicamos que vamos a utilizar SMTP
			$mail->Host = $HostSMTP; // El Host de Gmail
			$mail->Port = $puerto;  // El puerto que Mandrill nos indica utilizar
			$mail->SMTPAuth = $autenticacion; // Indicamos que vamos a utilizar auteticación SMTP       
			$mail->Username = $user; // Nuestro usuario en Gmail
			$mail->Password = $pass; // Nuestro password en Gmail 
			$mail->SMTPSecure = $cifrado; // Activamos el cifrado tls (también ssl)

			// Ahora configuraremos los parámetros básicos de PHPMailer para hacer un envío típico
			$mail->CharSet = 'UTF-8';
			$mail->From = $correoContacto; // Nuestro correo electrónico
			$mail->FromName = 'Universidad Santo Tomás'; // El nombre de nuestro sitio o proyecto
			$mail->IsHTML(true); // Indicamos que el email tiene formato HTML                      
			$mail->Subject = "Recuperación de contraseña"; // El asunto del email
			$mail->Body = "
			<p>Sr(a) ".$rowReNewPass['nombres']." ".$rowReNewPass['apellidos']." su contraseña temporal es: <b>".$tempPassForEmail."</b></p>
			<p>Se recomienda que al ingresar a la aplicación web cambie la contraseña temporal.</p>
			<img src='http://www.usta.edu.co/images/firma.gif' alt='Universidad Santo Tomás' style='width:300px'>
			"; // El cuerpo de nuestro mensaje

			// Recorremos nuestro array de e-mails.

			foreach ($array as $email) {
			  $mail->AddAddress($email); // Cargamos el e-mail destinatario a la clase PHPMailer
			  $mail->Send(); // Realiza el envío =)
			  $mail->ClearAddresses(); // Limpia los "Address" cargados previamente para volver a cargar uno.
			}


			mysqli_close($conexion);
			header('Location: ../login/');



	}else{
		echo "no se envio";
	}



}else{
	$_SESSION['classError'] = "error";
	$_SESSION['msjLogin'] = "NOEl usuario ó correo no está registrado";
	header('Location: index.php');
}
?>