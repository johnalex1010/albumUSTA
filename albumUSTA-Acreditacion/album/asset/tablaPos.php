				<div class="grilla">
					<div class="celda celdax2">
						<table class="tablaDatos tablaPosiciones">
							<h4>GRUPO A</h4>
							<tr>
								<th>Pos</th>
								<th>Equipo</th>
								<th>PJ</th>
								<th>PT</th>
								<th>PF</th>
								<th>PE</th>
								<th>GF</th>
								<th>GC</th>
								<th>GD</th>
							</tr>
							<?php 
								while ($tda = mysqli_fetch_array($sqlGA)) {
							?>
							<tr>
								<td><?php echo $tda['rank'] ?></td>
								<td><?php echo $tda['nom_equipo'] ?></td>
								<td><?php echo $tda['PJ'] ?></td>
								<td><?php echo $tda['PT'] ?></td>
								<td><?php echo $tda['PF'] ?></td>
								<td><?php echo $tda['PE'] ?></td>
								<td><?php echo $tda['GF'] ?></td>
								<td><?php echo $tda['GC'] ?></td>
								<td><?php echo $tda['GD'] ?></td>
							</tr>
							<?php } ?>
						</table>
					</div>
					<div class="celda celdax2">
						<table class="tablaDatos tablaPosiciones">
							<h4>GRUPO B</h4>
							<tr>
								<th>Pos</th>
								<th>Equipo</th>
								<th>PJ</th>
								<th>PT</th>
								<th>PF</th>
								<th>PE</th>
								<th>GF</th>
								<th>GC</th>
								<th>GD</th>
							</tr>
							<?php 
								while ($tda = mysqli_fetch_array($sqlGB)) {
							?>
							<tr>
								<td><?php echo $tda['rank'] ?></td>
								<td><?php echo $tda['nom_equipo'] ?></td>
								<td><?php echo $tda['PJ'] ?></td>
								<td><?php echo $tda['PT'] ?></td>
								<td><?php echo $tda['PF'] ?></td>
								<td><?php echo $tda['PE'] ?></td>
								<td><?php echo $tda['GF'] ?></td>
								<td><?php echo $tda['GC'] ?></td>
								<td><?php echo $tda['GD'] ?></td>
							</tr>
							<?php } ?>
						</table>
					</div>
				</div>
				<div class="grilla">
					<div class="celda celdax2">
						<table class="tablaDatos tablaPosiciones">
							<h4>GRUPO C</h4>
							<tr>
								<th>Pos</th>
								<th>Equipo</th>
								<th>PJ</th>
								<th>PT</th>
								<th>PF</th>
								<th>PE</th>
								<th>GF</th>
								<th>GC</th>
								<th>GD</th>
							</tr>
							<?php 
								while ($tda = mysqli_fetch_array($sqlGC)) {
							?>
							<tr>
								<td><?php echo $tda['rank'] ?></td>
								<td><?php echo $tda['nom_equipo'] ?></td>
								<td><?php echo $tda['PJ'] ?></td>
								<td><?php echo $tda['PT'] ?></td>
								<td><?php echo $tda['PF'] ?></td>
								<td><?php echo $tda['PE'] ?></td>
								<td><?php echo $tda['GF'] ?></td>
								<td><?php echo $tda['GC'] ?></td>
								<td><?php echo $tda['GD'] ?></td>
							</tr>
							<?php } ?>
						</table>
					</div>
					<div class="celda celdax2">
						<table class="tablaDatos tablaPosiciones">
							<h4>GRUPO D</h4>
							<tr>
								<th>Pos</th>
								<th>Equipo</th>
								<th>PJ</th>
								<th>PT</th>
								<th>PF</th>
								<th>PE</th>
								<th>GF</th>
								<th>GC</th>
								<th>GD</th>
							</tr>
							<?php 
								while ($tda = mysqli_fetch_array($sqlGD)) {
							?>
							<tr>
								<td><?php echo $tda['rank'] ?></td>
								<td><?php echo $tda['nom_equipo'] ?></td>
								<td><?php echo $tda['PJ'] ?></td>
								<td><?php echo $tda['PT'] ?></td>
								<td><?php echo $tda['PF'] ?></td>
								<td><?php echo $tda['PE'] ?></td>
								<td><?php echo $tda['GF'] ?></td>
								<td><?php echo $tda['GC'] ?></td>
								<td><?php echo $tda['GD'] ?></td>
							</tr>
							<?php } ?>
						</table>
					</div>
				</div>
				<div class="grilla">
					<div class="celda celdax2">
						<table class="tablaDatos tablaPosiciones">
							<h4>GRUPO E</h4>
							<tr>
								<th>Pos</th>
								<th>Equipo</th>
								<th>PJ</th>
								<th>PT</th>
								<th>PF</th>
								<th>PE</th>
								<th>GF</th>
								<th>GC</th>
								<th>GD</th>
							</tr>
							<?php 
								while ($tda = mysqli_fetch_array($sqlGE)) {
							?>
							<tr>
								<td><?php echo $tda['rank'] ?></td>
								<td><?php echo $tda['nom_equipo'] ?></td>
								<td><?php echo $tda['PJ'] ?></td>
								<td><?php echo $tda['PT'] ?></td>
								<td><?php echo $tda['PF'] ?></td>
								<td><?php echo $tda['PE'] ?></td>
								<td><?php echo $tda['GF'] ?></td>
								<td><?php echo $tda['GC'] ?></td>
								<td><?php echo $tda['GD'] ?></td>
							</tr>
							<?php } ?>
						</table>
					</div>
					<div class="celda celdax2">
						<table class="tablaDatos tablaPosiciones">
							<h4>GRUPO F</h4>
							<tr>
								<th>Pos</th>
								<th>Equipo</th>
								<th>PJ</th>
								<th>PT</th>
								<th>PF</th>
								<th>PE</th>
								<th>GF</th>
								<th>GC</th>
								<th>GD</th>
							</tr>
							<?php 
								while ($tda = mysqli_fetch_array($sqlGF)) {
							?>
							<tr>
								<td><?php echo $tda['rank'] ?></td>
								<td><?php echo $tda['nom_equipo'] ?></td>
								<td><?php echo $tda['PJ'] ?></td>
								<td><?php echo $tda['PT'] ?></td>
								<td><?php echo $tda['PF'] ?></td>
								<td><?php echo $tda['PE'] ?></td>
								<td><?php echo $tda['GF'] ?></td>
								<td><?php echo $tda['GC'] ?></td>
								<td><?php echo $tda['GD'] ?></td>
							</tr>
							<?php } ?>
						</table>
					</div>
				</div>
				<div class="grilla">
					<div class="celda celdax2">
						<table class="tablaDatos tablaPosiciones">
							<h4>GRUPO G</h4>
							<tr>
								<th>Pos</th>
								<th>Equipo</th>
								<th>PJ</th>
								<th>PT</th>
								<th>PF</th>
								<th>PE</th>
								<th>GF</th>
								<th>GC</th>
								<th>GD</th>
							</tr>
							<?php 
								while ($tda = mysqli_fetch_array($sqlGG)) {
							?>
							<tr>
								<td><?php echo $tda['rank'] ?></td>
								<td><?php echo $tda['nom_equipo'] ?></td>
								<td><?php echo $tda['PJ'] ?></td>
								<td><?php echo $tda['PT'] ?></td>
								<td><?php echo $tda['PF'] ?></td>
								<td><?php echo $tda['PE'] ?></td>
								<td><?php echo $tda['GF'] ?></td>
								<td><?php echo $tda['GC'] ?></td>
								<td><?php echo $tda['GD'] ?></td>
							</tr>
							<?php } ?>
						</table>
					</div>
					<div class="celda celdax2">
						<table class="tablaDatos tablaPosiciones">
							<h4>GRUPO H</h4>
							<tr>
								<th>Pos</th>
								<th>Equipo</th>
								<th>PJ</th>
								<th>PT</th>
								<th>PF</th>
								<th>PE</th>
								<th>GF</th>
								<th>GC</th>
								<th>GD</th>
							</tr>
							<?php 
								while ($tda = mysqli_fetch_array($sqlGH)) {
							?>
							<tr>
								<td><?php echo $tda['rank'] ?></td>
								<td><?php echo $tda['nom_equipo'] ?></td>
								<td><?php echo $tda['PJ'] ?></td>
								<td><?php echo $tda['PT'] ?></td>
								<td><?php echo $tda['PF'] ?></td>
								<td><?php echo $tda['PE'] ?></td>
								<td><?php echo $tda['GF'] ?></td>
								<td><?php echo $tda['GC'] ?></td>
								<td><?php echo $tda['GD'] ?></td>
							</tr>
							<?php } ?>
						</table>
					</div>
				</div>