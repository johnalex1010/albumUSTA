<div class="top5Sedes">
	<div class="grilla">
		<div class="celda celdax3">
			<h3 class="titleContent">TOP 5 - BOGOTÁ</h3>
			<table class="tablaDatos">
				<tr>
					<th>Posición</th>
					<th>Nombre</th>
					<th>Progreso</th>
				</tr>
				<?php 
					while($td = mysqli_fetch_array($tabla1Bogota)){
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
		</div>
		<div class="celda celdax3">
			<h3 class="titleContent">TOP 5 - USTA DISTANCIA</h3>
			<table class="tablaDatos">
				<tr>
					<th>Posición</th>
					<th>Nombre</th>
					<th>Progreso</th>
				</tr>
				<?php 
					while($td = mysqli_fetch_array($tabla1Distancia)){
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
		</div>
		
		<div class="celda celdax3">
			<h3 class="titleContent">TOP 5 - BUCARAMANGA</h3>
			<table class="tablaDatos">
				<tr>
					<th>Posición</th>
					<th>Nombre</th>
					<th>Progreso</th>
				</tr>
				<?php 
					while($td = mysqli_fetch_array($tabla1Bucaramanga)){
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
		</div>		
	</div>

	<div class="grilla">
		<div class="celda celdax3">
			<h3 class="titleContent">TOP 5 - TUNJA</h3>
			<table class="tablaDatos">
				<tr>
					<th>Posición</th>
					<th>Nombre</th>
					<th>Progreso</th>
				</tr>
				<?php 
					while($td = mysqli_fetch_array($tabla1Tunja)){
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
		</div>
		<div class="celda celdax3">
			<h3 class="titleContent">TOP 5 - MEDELLÍN</h3>
			<table class="tablaDatos">
				<tr>
					<th>Posición</th>
					<th>Nombre</th>
					<th>Progreso</th>
				</tr>
				<?php 
					while($td = mysqli_fetch_array($tabla1Medellin)){
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
		</div>
		<div class="celda celdax3">
			<h3 class="titleContent">TOP 5 - VILLAVICENCIO</h3>
			<table class="tablaDatos">
				<tr>
					<th>Posición</th>
					<th>Nombre</th>
					<th>Progreso</th>
				</tr>
				<?php 
					while($td = mysqli_fetch_array($tabla1Villavicencio)){
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
		</div>
	</div>
</div>

