<div class="asiVaElMundial">
	<h3 class="titleContent">ASÍ VA EL MUNDIAL</h3>
	<div class="wrap">
		<ul class="tabs">
			<li><a href="#tab1"><span class="icon-versus"></span><span clasS="tab_text">Calendario y Resultados</span></a></li>
			<li><a href="#tab2"><span class="icon-top10"></span><span clasS="tab_text">Tabla de Posiciones</span></a></li>
			<li><a href="#tab4"><span class="icon-net"></span><span clasS="tab_text">Formato de Juego</span></a></li>
			<li><a href="#tab5"><span class="icon-vivo"></span><span clasS="tab_text">Transimisión en VIVO</span></a></li>
		</ul>

		<div class="tabs_container">
			<article id="tab1">
				<h2><span class="icon-versus"></span> Calendario y Resultados de la Fecha</h2>
				<table class="t_convenciones">
					<tr>
						<th>GF:</th>
						<td>Goles en Favor</td>
						
					</tr>
					<tr>
						<th>GC:</th>
						<td>Goles en Contra</td>
					</tr>
					<tr>
						<th>PF:</th>
						<td>Puntos en Fútbol</td>
					</tr>
					<tr>
						<th>PE:</th>
						<td>Puntos en Excelencia</td>
					</tr>
					<tr>
						<th>PT:</th>
						<td>Puntos en Totales</td>
					</tr>
				</table>
				<br><br><br>
				<?php require_once("asset/fechasProx.php"); ?>
			</article>
			<!-- Fin Tabla de Posiciones -->

			<article id="tab2">
				<h2><span class="icon-top10"></span> Tabla de Posiciones</h2>
				<?php require_once("asset/tablaPos.php"); ?>

			</article>
			<article id="tab4">
				<h2><span class="icon-net"></span> Formato Mundial de la Excelencia</h2>
				<img src="img/asiVaElMundial/tabla-encuentros-mundial.jpg" alt="Formato Mundial de la Excelencia">
			</article>
			<article id="tab5">
				<h2><span class="icon-vivo"></span> Transimisión en VIVO</h2>
				<!-- <iframe src="http://www.usta.edu.co" frameborder="0"></iframe> -->
			</article>
		</div>
	</div>
</div>