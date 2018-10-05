<!-- ================= GRUPO D ================= -->
<h4>Grupo D</h4>
<div class="grilla">
	<div class="celda celdax3">
		<h5>Fecha 1</h5>
		<table class="tablaDatos tablaPosiciones">
			<tr>
				<th></th>
				<th>GF</th>
				<th>PE</th>
				<th></th>
				<th>PE</th>
				<th>GF</th>
				<th></th>
				<th></th>
			</tr>
			<!-- ****Partido 1vs2 -->
			<?php if ($sql_GD_F1_E1 AND $sql_GD_F1_E2) { ?>
			<tr>
				<td>Argentina</td>
				<td><?php echo $sql_GD_F1_E1['GolF1']; ?></td>
				<td><?php echo $sql_GD_F1_E1['PE_F1']; ?></td>
				<td>vs</td>
				<td><?php echo $sql_GD_F1_E2['PE_F1']; ?></td>
				<td><?php echo $sql_GD_F1_E2['GolF1']; ?></td>
				<td>Islandia</td>
				<td></td>
			</tr>
			<?php

			}elseif ($row['perfil'] == 2) {	?>
			<tr>
				<form class="marcadorFechas" action="components/otros/fechasGrupos/grupoD.php" method="POST" >
					<td>Argentina</td>
					<td><input name="marcadorA_F" type="text"></td>
					<td><input type="text" name="marcadorA_E"></td>
					<td>vs</td>
					<td><input type="text" name="marcadorB_E"></td>
					<td><input name="marcadorB_F" type="text"></td>
					<td>Islandia</td>
					<td><input type="submit" value="Marcador" name="marcador1vs2" class="botonDos"></td>
				</form>
			</tr>
			<?php }else{ ?>
			<tr>
				<td>Argentina</td>
				<td></td>
				<td></td>
				<td>vs</td>
				<td></td>
				<td></td>
				<td>Islandia</td>
				<td></td>
			</tr>
			<?php } ?>

			<!-- ****Partido 3vs4 -->
			<?php if ($sql_GD_F1_E3 AND $sql_GD_F1_E4) { ?>
			<tr>
				<td>Croacia</td>
				<td><?php echo $sql_GD_F1_E3['GolF1']; ?></td>
				<td><?php echo $sql_GD_F1_E3['PE_F1']; ?></td>
				<td>vs</td>
				<td><?php echo $sql_GD_F1_E4['PE_F1']; ?></td>
				<td><?php echo $sql_GD_F1_E4['GolF1']; ?></td>
				<td>Nigeria</td>
				<td></td>
			</tr>
			<?php

			}elseif ($row['perfil'] == 2) {	?>
			<tr>
				<form class="marcadorFechas" action="components/otros/fechasGrupos/grupoD.php" method="POST" >
					<td>Croacia</td>
					<td><input name="marcadorA_F" type="text"></td>
					<td><input type="text" name="marcadorA_E"></td>
					<td>vs</td>
					<td><input type="text" name="marcadorB_E"></td>
					<td><input name="marcadorB_F" type="text"></td>
					<td>Nigeria</td>
					<td><input type="submit" value="Marcador" name="marcador3vs4" class="botonDos"></td>
				</form>
			</tr>
			<?php }else{ ?>
			<tr>
				<td>Croacia</td>
				<td></td>
				<td></td>
				<td>vs</td>
				<td></td>
				<td></td>
				<td>Nigeria</td>
				<td></td>
			</tr>
			<?php } ?>
		</table>
	</div>
	<div class="celda celdax3">
		<h5>Fecha 2</h5>
		<table class="tablaDatos tablaPosiciones">
			<tr>
				<th></th>
				<th>GF</th>
				<th>PE</th>
				<th></th>
				<th>PE</th>
				<th>GF</th>
				<th></th>
				<th></th>
			</tr>
			<!-- ****Partido 1vs3 -->
			<?php if ($sql_GD_F2_E1 AND $sql_GD_F2_E3) { ?>
			<tr>
				<td>Argentina</td>
				<td><?php echo $sql_GD_F2_E1['GolF2']; ?></td>
				<td><?php echo $sql_GD_F2_E1['PE_F2']; ?></td>
				<td>vs</td>
				<td><?php echo $sql_GD_F2_E3['PE_F2']; ?></td>
				<td><?php echo $sql_GD_F2_E3['GolF2']; ?></td>
				<td>Croacia</td>
				<td></td>
			</tr>
			<?php

			}elseif ($row['perfil'] == 2) {	?>
			<tr>
				<form class="marcadorFechas" action="components/otros/fechasGrupos/grupoD.php" method="POST" >
					<td>Argentina</td>
					<td><input name="marcadorA_F" type="text"></td>
					<td><input type="text" name="marcadorA_E"></td>
					<td>vs</td>
					<td><input type="text" name="marcadorB_E"></td>
					<td><input name="marcadorB_F" type="text"></td>
					<td>Croacia</td>
					<td><input type="submit" value="Marcador" name="marcador1vs3" class="botonDos"></td>
				</form>
			</tr>
			<?php }else{ ?>
			<tr>
				<td>Argentina</td>
				<td></td>
				<td></td>
				<td>vs</td>
				<td></td>
				<td></td>
				<td>Croacia</td>
				<td></td>
			</tr>
			<?php } ?>

			<!-- ****Partido 2vs4 -->
			<?php if ($sql_GD_F2_E2 AND $sql_GD_F2_E4) { ?>
			<tr>
				<td>Islandia</td>
				<td><?php echo $sql_GD_F2_E2['GolF2']; ?></td>
				<td><?php echo $sql_GD_F2_E2['PE_F2']; ?></td>
				<td>vs</td>
				<td><?php echo $sql_GD_F2_E4['PE_F2']; ?></td>
				<td><?php echo $sql_GD_F2_E4['GolF2']; ?></td>
				<td>Nigeria</td>
				<td></td>
			</tr>
			<?php

			}elseif ($row['perfil'] == 2) {	?>
			<tr>
				<form class="marcadorFechas" action="components/otros/fechasGrupos/grupoD.php" method="POST" >
					<td>Islandia</td>
					<td><input name="marcadorA_F" type="text"></td>
					<td><input type="text" name="marcadorA_E"></td>
					<td>vs</td>
					<td><input type="text" name="marcadorB_E"></td>
					<td><input name="marcadorB_F" type="text"></td>
					<td>Nigeria</td>
					<td><input type="submit" value="Marcador" name="marcador2vs4" class="botonDos"></td>
				</form>
			</tr>
			<?php }else{ ?>
			<tr>
				<td>Islandia</td>
				<td></td>
				<td></td>
				<td>vs</td>
				<td></td>
				<td></td>
				<td>Nigeria</td>
				<td></td>
			</tr>
			<?php } ?>
		</table>
	</div>
	<div class="celda celdax3">
		<h5>Fecha 3</h5>
		<table class="tablaDatos tablaPosiciones">
			<tr>
				<th></th>
				<th>GF</th>
				<th>PE</th>
				<th></th>
				<th>PE</th>
				<th>GF</th>
				<th></th>
				<th></th>
			</tr>
			<!-- ****Partido 1vs4 -->
			<?php if ($sql_GD_F3_E1 AND $sql_GD_F3_E4) { ?>
			<tr>
				<td>Argentina</td>
				<td><?php echo $sql_GD_F3_E1['GolF3']; ?></td>
				<td><?php echo $sql_GD_F3_E1['PE_F3']; ?></td>
				<td>vs</td>
				<td><?php echo $sql_GD_F3_E4['PE_F3']; ?></td>
				<td><?php echo $sql_GD_F3_E4['GolF3']; ?></td>
				<td>Nigeria</td>
				<td></td>
			</tr>
			<?php

			}elseif ($row['perfil'] == 2) {	?>
			<tr>
				<form class="marcadorFechas" action="components/otros/fechasGrupos/grupoD.php" method="POST" >
					<td>Argentina</td>
					<td><input name="marcadorA_F" type="text"></td>
					<td><input type="text" name="marcadorA_E"></td>
					<td>vs</td>
					<td><input type="text" name="marcadorB_E"></td>
					<td><input name="marcadorB_F" type="text"></td>
					<td>Nigeria</td>
					<td><input type="submit" value="Marcador" name="marcador1vs4" class="botonDos"></td>
				</form>
			</tr>
			<?php }else{ ?>
			<tr>
				<td>Argentina</td>
				<td></td>
				<td></td>
				<td>vs</td>
				<td></td>
				<td></td>
				<td>Nigeria</td>
				<td></td>
			</tr>
			<?php } ?>

			<!-- ****Partido 2vs3 -->
			<?php if ($sql_GD_F3_E2 AND $sql_GD_F3_E3) { ?>
			<tr>
				<td>Islandia</td>
				<td><?php echo $sql_GD_F3_E2['GolF3']; ?></td>
				<td><?php echo $sql_GD_F3_E2['PE_F3']; ?></td>
				<td>vs</td>
				<td><?php echo $sql_GD_F3_E3['PE_F3']; ?></td>
				<td><?php echo $sql_GD_F3_E3['GolF3']; ?></td>
				<td>Croacia</td>
				<td></td>
			</tr>
			<?php

			}elseif ($row['perfil'] == 2) {	?>
			<tr>
				<form class="marcadorFechas" action="components/otros/fechasGrupos/grupoD.php" method="POST" >
					<td>Islandia</td>
					<td><input name="marcadorA_F" type="text"></td>
					<td><input type="text" name="marcadorA_E"></td>
					<td>vs</td>
					<td><input type="text" name="marcadorB_E"></td>
					<td><input name="marcadorB_F" type="text"></td>
					<td>Croacia</td>
					<td><input type="submit" value="Marcador" name="marcador2vs3" class="botonDos"></td>
				</form>
			</tr>
			<?php }else{ ?>
			<tr>
				<td>Islandia</td>
				<td></td>
				<td></td>
				<td>vs</td>
				<td></td>
				<td></td>
				<td>Nigeria</td>
				<td></td>
			</tr>
			<?php } ?>
		</table>
	</div>
</div>