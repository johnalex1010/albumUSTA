<div class="perfil">
	<div class="grilla">
		<div class="celda celdax2">
			<h3 class="titleContent">PERFIL</h3>
			<h2><?php echo $row['nombres']." ".$row['apellidos'] ?></h2>
			<ul>
				<li><span class="icon-calendar"></span><strong> Fecha de Registro:</strong> <?php echo $row['fechaRegis'] ?></li>
				<li><span class="icon-hashtag"></span><strong> Numero de documento:</strong> <?php echo $row['documento'] ?></li>
				<li><span class="icon-arroba"></span><strong> Correo:</strong> <?php echo $row['email'] ?></li>
				<li><span class="icon-user"></span><strong> Usuario:</strong> <?php echo $row['usuario'] ?></li>
			<!-- <li><span class="icon-top10"></span><strong> Posición en la tabla general:</strong> <?php echo $td['rank'] ?></li> -->
			</ul>
			<a href="album/?op=cambioPass" class="botonDos">Cambiar contraseña</a>
		</div>
		<div class="celda celdax2">
			<h3 class="titleContent">TOP 10 - USTA COLOMBIA</h3>
			<table class="tablaDatos">
				<tr>
					<th>Posición</th>
					<th>Nombre</th>
					<th>Progreso</th>
				</tr>
				<?php 
					while($td = mysqli_fetch_array($tabla1)){
				?>				
				<tr>
					<td><?php echo $td['rank'] ?></td>					
					<td><?php echo $td['nombres']." ".$td['apellidos']; ?></td>
					<td>
						<div class="cajaProgressBar">	
							<div class="progress_container">
								<div class="progress progress-danger progress-striped active">
							 		<div class="bar" style="width: <?php echo $td['porcentaje']?>%;"><?php echo $td['porcentaje'] ?>%</div>
								</div>
							</div>
						</div>
					</td>
				</tr>
				<?php } ?>

			</table>
			<a href="album/?op=topFiveSedes">Ver TOP 5 de sedes y seccionales</a>
		</div>
	</div>
</div>