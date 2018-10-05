<div class="cambioPass">
	<div class="grilla">
		<div class="celda">
			<h3 class="titleContent">Cambio de contraseña</h3>
			
	
			<?php 
				// $_SESSION['cambioPass'] = "";
				if (isset($_SESSION['cambioPass'])) {
					echo "<div class='cambioPassExito'>Cambio de contraseña exitoso.</div>";
				}else{
			?>
			<p>Espacio en el que puedes cambiar tu contraseña.</p>
			<form action="album/asset/resetPass.php" method="POST">
				<?php 
					if (isset($_SESSION['error'])) {
						echo "<p class='error'>".$_SESSION['error']."</p>";
					}
				?>
				
				<input type="password" name="newPass" placeholder="Nueva contraseña">
				<input type="password" name="reNewPass" placeholder="Repetir nueva contraseña">
				<input type="submit" value="Cambiar	contraseña" class="botonDos">
			</form>
			<?php }	
				unset($_SESSION['cambioPass']);
				unset($_SESSION['error']);
			?>

		</div>
	</div>
</div>