<div class="grilla">
	<div class="celda celdax2">

		<h4>Cuartos de Final</h4>
		<!-- 
		============
		LLAVE A
		============
		-->
		<h5>LLave A</h5>
		<table class="tablaDatos tablaPosiciones">
			<?php 
				$sql_CuartosNum = mysqli_num_rows($sql_CuartosA);
				if ($sql_CuartosNum > 0) {
			?>
				<!-- ****Partido Cuartos EvsF -->
				<tr>
					<th>Equipo</th>
					<th>GF</th>
					<th>GC</th>
					<th>PF</th>
					<th>PE</th>
					<th>PT</th>
					
				</tr>
			<?php 
					while($cuartos = mysqli_fetch_array($sql_CuartosA)) {
					?>
						<tr>
							<td><?php echo $cuartos['nom_equipo'] ?></td>
							<td><?php echo $cuartos['GF'] ?></td>
							<td><?php echo $cuartos['GC'] ?></td>
							<td><?php echo $cuartos['PF'] ?></td>
							<td><?php echo $cuartos['PE'] ?></td>
							<td><?php echo $cuartos['PT'] ?></td>
							
						</tr>
					<?php }

			}elseif ($row['perfil'] == 2) {	?>
			<tr>
				<th>Equipo</th>
				<th>GF</th>
				<th>PE</th>
			</tr>
			<form class="marcadorFechas" action="components/otros/fechasGrupos/cuartosA.php" method="POST" >
				<tr>
					<td><?php echo $tde['nom_equipo'] ?></td>
					<td><input type="text" name="marcadorA_F"></td>
					<td><input type="text" name="marcadorA_E"></td>
				</tr>
				<tr>
					<td><?php echo $tdf['nom_equipo'] ?></td>
					<td><input type="text" name="marcadorB_F"></td>
					<td><input type="text" name="marcadorB_E"></td>
				</tr>
				<tr>
					<input type="hidden" name="equipoA" value="<?php echo $tde['nom_equipo']; ?>">
					<input type="hidden" name="equipoB" value="<?php echo $tdf['nom_equipo']; ?>">
					<td colspan=3><input type="submit" value="Marcador" name="marcadorCuartosA" class="botonDos"></td>
				</tr>
			</form>
			<?php }else{ ?>
			<tr>
				<th>Equipo</th>
				<th>GF</th>
				<th>GC</th>
				<th>PF</th>
				<th>PE</th>
				<th>PT</th>
				
			</tr>
			<tr>
				<td><?php echo $tde['nom_equipo'] ?></td>
				<td>GF</td>
				<td>GC</td>
				<td>PF</td>
				<td>PE</td>
				<td>PT</td>
				
			</tr>
			<tr>
				<td><?php echo $tdf['nom_equipo'] ?></td>
				<td>GF</td>
				<td>GC</td>
				<td>PF</td>
				<td>PE</td>
				<td>PT</td>
				
			</tr>
			<?php } ?>
		</table>
		<!-- 
		============
		LLAVE B
		============
		-->
		<h5>LLave B</h5>
		<table class="tablaDatos tablaPosiciones">
			<?php 
				$sql_CuartosNum = mysqli_num_rows($sql_CuartosB);
				if ($sql_CuartosNum > 0) {
			?>
				<!-- ****Partido Cuartos CvsG -->
				<tr>
					<th>Equipo</th>
					<th>GF</th>
					<th>GC</th>
					<th>PF</th>
					<th>PE</th>
					<th>PT</th>
					
				</tr>
			<?php 
					while($cuartos = mysqli_fetch_array($sql_CuartosB)) {
					?>
						<tr>
							<td><?php echo $cuartos['nom_equipo'] ?></td>
							<td><?php echo $cuartos['GF'] ?></td>
							<td><?php echo $cuartos['GC'] ?></td>
							<td><?php echo $cuartos['PF'] ?></td>
							<td><?php echo $cuartos['PE'] ?></td>
							<td><?php echo $cuartos['PT'] ?></td>
							
						</tr>
					<?php }

			}elseif ($row['perfil'] == 2) {	?>
			<tr>
				<th>Equipo</th>
				<th>GF</th>
				<th>PE</th>
			</tr>
			<form class="marcadorFechas" action="components/otros/fechasGrupos/cuartosB.php" method="POST" >
				<tr>
					<td><?php echo $tdc['nom_equipo'] ?></td>
					<td><input type="text" name="marcadorA_F"></td>
					<td><input type="text" name="marcadorA_E"></td>
				</tr>
				<tr>
					<td><?php echo $tdg['nom_equipo'] ?></td>
					<td><input type="text" name="marcadorB_F"></td>
					<td><input type="text" name="marcadorB_E"></td>
				</tr>
				<tr>
					<input type="hidden" name="equipoA" value="<?php echo $tdc['nom_equipo']; ?>">
					<input type="hidden" name="equipoB" value="<?php echo $tdg['nom_equipo']; ?>">
					<td colspan=3><input type="submit" value="Marcador" name="marcadorCuartosB" class="botonDos"></td>
				</tr>
			</form>
			<?php }else{ ?>
			<tr>
				<th>Equipo</th>
				<th>GF</th>
				<th>GC</th>
				<th>PF</th>
				<th>PE</th>
				<th>PT</th>
				
			</tr>
			<tr>
				<td><?php echo $tdc['nom_equipo'] ?></td>
				<td>GF</td>
				<td>GC</td>
				<td>PF</td>
				<td>PE</td>
				<td>PT</td>
				
			</tr>
			<tr>
				<td><?php echo $tdg['nom_equipo'] ?></td>
				<td>GF</td>
				<td>GC</td>
				<td>PF</td>
				<td>PE</td>
				<td>PT</td>
				
			</tr>
			<?php } ?>
		</table>
		<!-- 
		============
		LLAVE C
		============
		-->
		<h5>LLave C</h5>
		<table class="tablaDatos tablaPosiciones">
			<?php 
				$sql_CuartosNum = mysqli_num_rows($sql_CuartosC);
				if ($sql_CuartosNum > 0) {
			?>
				<!-- ****Partido Cuartos BvsD -->
				<tr>
					<th>Equipo</th>
					<th>GF</th>
					<th>GC</th>
					<th>PF</th>
					<th>PE</th>
					<th>PT</th>
					
				</tr>
			<?php 
					while($cuartos = mysqli_fetch_array($sql_CuartosC)) {
					?>
						<tr>
							<td><?php echo $cuartos['nom_equipo'] ?></td>
							<td><?php echo $cuartos['GF'] ?></td>
							<td><?php echo $cuartos['GC'] ?></td>
							<td><?php echo $cuartos['PF'] ?></td>
							<td><?php echo $cuartos['PE'] ?></td>
							<td><?php echo $cuartos['PT'] ?></td>
							
						</tr>
					<?php }

			}elseif ($row['perfil'] == 2) {	?>
			<tr>
				<th>Equipo</th>
				<th>GF</th>
				<th>PE</th>
			</tr>
			<form class="marcadorFechas" action="components/otros/fechasGrupos/cuartosC.php" method="POST" >
				<tr>
					<td><?php echo $tdb['nom_equipo'] ?></td>
					<td><input type="text" name="marcadorA_F"></td>
					<td><input type="text" name="marcadorA_E"></td>
				</tr>
				<tr>
					<td><?php echo $tdd['nom_equipo'] ?></td>
					<td><input type="text" name="marcadorB_F"></td>
					<td><input type="text" name="marcadorB_E"></td>
				</tr>
				<tr>
					<input type="hidden" name="equipoA" value="<?php echo $tdb['nom_equipo']; ?>">
					<input type="hidden" name="equipoB" value="<?php echo $tdd['nom_equipo']; ?>">
					<td colspan=3><input type="submit" value="Marcador" name="marcadorCuartosC" class="botonDos"></td>
				</tr>
			</form>
			<?php }else{ ?>
			<tr>
				<th>Equipo</th>
				<th>GF</th>
				<th>GC</th>
				<th>PF</th>
				<th>PE</th>
				<th>PT</th>
				
			</tr>
			<tr>
				<td><?php echo $tdb['nom_equipo'] ?></td>
				<td>GF</td>
				<td>GC</td>
				<td>PF</td>
				<td>PE</td>
				<td>PT</td>
				
			</tr>
			<tr>
				<td><?php echo $tdd['nom_equipo'] ?></td>
				<td>GF</td>
				<td>GC</td>
				<td>PF</td>
				<td>PE</td>
				<td>PT</td>
				
			</tr>
			<?php } ?>
		</table>
		<!-- 
		============
		LLAVE D
		============
		-->
		<h5>LLave D</h5>
		<table class="tablaDatos tablaPosiciones">
			<?php 
				$sql_CuartosNum = mysqli_num_rows($sql_CuartosD);
				if ($sql_CuartosNum > 0) {
			?>
				<!-- ****Partido Cuartos BvsD -->
				<tr>
					<th>Equipo</th>
					<th>GF</th>
					<th>GC</th>
					<th>PF</th>
					<th>PE</th>
					<th>PT</th>
					
				</tr>
			<?php 
					while($cuartos = mysqli_fetch_array($sql_CuartosD)) {
					?>
						<tr>
							<td><?php echo $cuartos['nom_equipo'] ?></td>
							<td><?php echo $cuartos['GF'] ?></td>
							<td><?php echo $cuartos['GC'] ?></td>
							<td><?php echo $cuartos['PF'] ?></td>
							<td><?php echo $cuartos['PE'] ?></td>
							<td><?php echo $cuartos['PT'] ?></td>
							
						</tr>
					<?php }

			}elseif ($row['perfil'] == 2) {	?>
			<tr>
				<th>Equipo</th>
				<th>GF</th>
				<th>PE</th>
			</tr>
			<form class="marcadorFechas" action="components/otros/fechasGrupos/cuartosD.php" method="POST" >
				<tr>
					<td><?php echo $tda['nom_equipo'] ?></td>
					<td><input type="text" name="marcadorA_F"></td>
					<td><input type="text" name="marcadorA_E"></td>
				</tr>
				<tr>
					<td><?php echo $tdh['nom_equipo'] ?></td>
					<td><input type="text" name="marcadorB_F"></td>
					<td><input type="text" name="marcadorB_E"></td>
				</tr>
				<tr>
					<input type="hidden" name="equipoA" value="<?php echo $tda['nom_equipo']; ?>">
					<input type="hidden" name="equipoB" value="<?php echo $tdh['nom_equipo']; ?>">
					<td colspan=3><input type="submit" value="Marcador" name="marcadorCuartosD" class="botonDos"></td>
				</tr>
			</form>
			<?php }else{ ?>
			<tr>
				<th>Equipo</th>
				<th>GF</th>
				<th>GC</th>
				<th>PF</th>
				<th>PE</th>
				<th>PT</th>
				
			</tr>
			<tr>
				<td><?php echo $tda['nom_equipo'] ?></td>
				<td>GF</td>
				<td>GC</td>
				<td>PF</td>
				<td>PE</td>
				<td>PT</td>
				
			</tr>
			<tr>
				<td><?php echo $tdh['nom_equipo'] ?></td>
				<td>GF</td>
				<td>GC</td>
				<td>PF</td>
				<td>PE</td>
				<td>PT</td>
				
			</tr>
			<?php } ?>
		</table>

		
	</div>
	<div class="celda celdax2">
		<h4>Semifinal</h4>
		<h5>Semifinal A</h5>
		<!-- 
		============
		SEMIS A
		============
		-->
		<table class="tablaDatos tablaPosiciones">
			<?php 
			$sql_SemisNum = mysqli_num_rows($sql_SemifinalA);
				if ($sql_SemisNum > 0) {
				?>
				<tr>
					<th>Equipo</th>
					<th>GF</th>
					<th>GC</th>
					<th>PF</th>
					<th>PE</th>
					<th>PT</th>
					
				</tr>
				<?php while ($semis = mysqli_fetch_array($sql_SemifinalA)) { ?>
				<tr>
					<td><?php echo $semis['nom_equipo']; ?></td>
					<td><?php echo $semis['GF']; ?></td>
					<td><?php echo $semis['GC']; ?></td>
					<td><?php echo $semis['PF']; ?></td>
					<td><?php echo $semis['PE']; ?></td>
					<td><?php echo $semis['PT']; ?></td>
					
				</tr>
				<?php }
				}elseif($row['perfil'] == 2){
					if ($tdCa['nom_equipo'] == Null or $tdCb['nom_equipo'] == Null) {
				?>
				<tr>
					<th>Equipo</th>
					<th>GF</th>
					<th>GC</th>
					<th>PF</th>
					<th>PE</th>
					<th>PT</th>
					
				</tr>
				<tr>
					<td><?php echo ($tdCa['PT'] == Null) ? "Ganador de llave A" : $tdCa['nom_equipo']; ?></td>
					<td>GF</td>
					<td>GC</td>
					<td>PF</td>
					<td>PE</td>
					<td>PT</td>
					
				</tr>
				<tr>
					<td><?php echo ($tdCb['PT'] == Null) ? "Ganador de llave B" : $tdCb['nom_equipo']; ?></td>
					<td>GF</td>
					<td>GC</td>
					<td>PF</td>
					<td>PE</td>
					<td>PT</td>
					
				</tr>
				<?php 
					}else{
				?>
				<form class="marcadorFechas" action="components/otros/fechasGrupos/semisA.php" method="POST" >
					<tr>
						<th>Equipo</th>
						<th>GF</th>
						<th>PE</th>
					</tr>
					<tr>
						<td><?php echo $tdCa['nom_equipo'] ?></td>
						<td><input type="text" name="marcadorA_F"></td>
						<td><input type="text" name="marcadorA_E"></td>
					</tr>
					<tr>
						<td><?php echo $tdCb['nom_equipo'] ?></td>
						<td><input type="text" name="marcadorB_F"></td>
						<td><input type="text" name="marcadorB_E"></td>
					</tr>
					<tr>
						<input type="hidden" name="equipoA" value="<?php echo $tdCa['nom_equipo']; ?>">
						<input type="hidden" name="equipoB" value="<?php echo $tdCb['nom_equipo']; ?>">
						<td colspan=3><input type="submit" value="Marcador" name="marcadorSemisA" class="botonDos"></td>
					</tr>
				</form>
				<?php
					}
				}else{
			?>
			<tr>
				<th>Equipo</th>
				<th>GF</th>
				<th>GC</th>
				<th>PF</th>
				<th>PE</th>
				<th>PT</th>
				
			</tr>
			<tr>
				<td><?php echo ($tdCa['PT'] == Null) ? "Ganador de llave A" : $tdCa['nom_equipo']; ?></td>
				<td>GF</td>
				<td>GC</td>
				<td>PF</td>
				<td>PE</td>
				<td>PT</td>
				
			</tr>
			<tr>
				<td><?php echo ($tdCb['PT'] == Null) ? "Ganador de llave B" : $tdCb['nom_equipo']; ?></td>
				<td>GF</td>
				<td>GC</td>
				<td>PF</td>
				<td>PE</td>
				<td>PT</td>
				
			</tr>
			<?php } ?>
		</table>
		<h5>Semifinal B</h5>
		<!-- 
		============
		SEMIS B
		============
		-->
		<table class="tablaDatos tablaPosiciones">
			<?php 
			$sql_SemisNum = mysqli_num_rows($sql_SemifinalB);
				if ($sql_SemisNum > 0) {
				?>
				<tr>
					<th>Equipo</th>
					<th>GF</th>
					<th>GC</th>
					<th>PF</th>
					<th>PE</th>
					<th>PT</th>
					
				</tr>
				<?php while ($semis = mysqli_fetch_array($sql_SemifinalB)) { ?>
				<tr>
					<td><?php echo $semis['nom_equipo']; ?></td>
					<td><?php echo $semis['GF']; ?></td>
					<td><?php echo $semis['GC']; ?></td>
					<td><?php echo $semis['PF']; ?></td>
					<td><?php echo $semis['PE']; ?></td>
					<td><?php echo $semis['PT']; ?></td>
					
				</tr>
				<?php }
				}elseif($row['perfil'] == 2){
					if ($tdCc['nom_equipo'] == Null or $tdCd['nom_equipo'] == Null) {
				?>
				<tr>
					<th>Equipo</th>
					<th>GF</th>
					<th>GC</th>
					<th>PF</th>
					<th>PE</th>
					<th>PT</th>
					
				</tr>
				<tr>
					<td><?php echo ($tdCc['PT'] == Null) ? "Ganador de llave A" : $tdCc['nom_equipo']; ?></td>
					<td>GF</td>
					<td>GC</td>
					<td>PF</td>
					<td>PE</td>
					<td>PT</td>
					
				</tr>
				<tr>
					<td><?php echo ($tdCd['PT'] == Null) ? "Ganador de llave B" : $tdCd['nom_equipo']; ?></td>
					<td>GF</td>
					<td>GC</td>
					<td>PF</td>
					<td>PE</td>
					<td>PT</td>
					
				</tr>
				<?php 
					}else{
				?>
				<form class="marcadorFechas" action="components/otros/fechasGrupos/semisB.php" method="POST" >
					<tr>
						<th>Equipo</th>
						<th>GF</th>
						<th>PE</th>
					</tr>
					<tr>
						<td><?php echo $tdCc['nom_equipo'] ?></td>
						<td><input type="text" name="marcadorA_F"></td>
						<td><input type="text" name="marcadorA_E"></td>
					</tr>
					<tr>
						<td><?php echo $tdCd['nom_equipo'] ?></td>
						<td><input type="text" name="marcadorB_F"></td>
						<td><input type="text" name="marcadorB_E"></td>
					</tr>
					<tr>
						<input type="hidden" name="equipoA" value="<?php echo $tdCc['nom_equipo']; ?>">
						<input type="hidden" name="equipoB" value="<?php echo $tdCd['nom_equipo']; ?>">
						<td colspan=3><input type="submit" value="Marcador" name="marcadorSemisB" class="botonDos"></td>
					</tr>
				</form>
				<?php
					}
				}else{
			?>
			<tr>
				<th>Equipo</th>
				<th>GF</th>
				<th>GC</th>
				<th>PF</th>
				<th>PE</th>
				<th>PT</th>
				
			</tr>
			<tr>
				<td><?php echo ($tdCc['PT'] == Null) ? "Ganador de llave A" : $tdCc['nom_equipo']; ?></td>
				<td>GF</td>
				<td>GC</td>
				<td>PF</td>
				<td>PE</td>
				<td>PT</td>
				
			</tr>
			<tr>
				<td><?php echo ($tdCd['PT'] == Null) ? "Ganador de llave B" : $tdCd['nom_equipo']; ?></td>
				<td>GF</td>
				<td>GC</td>
				<td>PF</td>
				<td>PE</td>
				<td>PT</td>
				
			</tr>
			<?php } ?>
		</table>
	</div>
</div>