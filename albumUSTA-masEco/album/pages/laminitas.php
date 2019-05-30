<?php 
	$query=mysqli_query($conexion,"SELECT count(*) from t_album_".$usuario."");
	$row = mysqli_fetch_row($query);
	$rows = $row[0];
	
	$page_rows = 10;

	$last = ceil($rows/$page_rows);

	if($last < 1){
		$last = 1;
	}

	$pagenum = 1;

	if(isset($_GET['pn'])){
		$pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
	}

	if ($pagenum < 1) { 
		$pagenum = 1;
	} 
	else if ($pagenum > $last) { 
		$pagenum = $last; 
	}

	$limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
	
	$nquery=mysqli_query($conexion,"SELECT * FROM t_album_".$usuario." $limit");

	$paginationCtrls = '';

	if($last != 1){
		
	if ($pagenum > 1) {
        $previous = $pagenum - 1;
		$paginationCtrls .= '<a class="botonDos" href="'.$_SERVER['PHP_SELF'].'?op=laminitas&pn=1" class="btn btn-default">Inicio</a>&nbsp;<a class="botonDos" href="'.$_SERVER['PHP_SELF'].'?op=laminitas&pn='.$previous.'" class="btn btn-default">Anterior</a>&nbsp;';
		
		for($i = $pagenum-4; $i < $pagenum; $i++){
			if($i > 0){
		        $paginationCtrls .= '<a class="botonDos" href="'.$_SERVER['PHP_SELF'].'?op=laminitas&pn='.$i.'" class="btn btn-default">'.$i.'</a>&nbsp;';
			}
	    }
    }
	
	$paginationCtrls .= '<span class="pagAct">'.$pagenum.'</span>&nbsp;';
	
	for($i = $pagenum+1; $i <= $last; $i++){
		$paginationCtrls .= '<a class="botonDos" href="'.$_SERVER['PHP_SELF'].'?op=laminitas&pn='.$i.'" class="btn btn-default">'.$i.'</a>&nbsp;';
		if($i >= $pagenum+4){
			break;
		}
	}

    if ($pagenum != $last) {
        $next = $pagenum + 1;
        $paginationCtrls .= '<a class="botonDos" href="'.$_SERVER['PHP_SELF'].'?op=laminitas&pn='.$next.'" class="btn btn-default">Siguiente</a> ';
    }
	}
 ?>

 <!-- mostrar registros -->
 <div>
 <div class="contenedorLaminitas">
<?php while($crow = mysqli_fetch_array($nquery)){ ?>
	<!-- Mostrar Laminita -->
		<?php 
			if ($crow['visualizar'] == 1) {
		?>
			<!-- LAMINITAS EFECT -->
			
				<div class="contentLaminita">
					<a href="album/?op=bigLaminita&big=<?php print $crow['laminitaLadoA']; ?>">
					<figure>
						<img src="img/laminitas/<?php print $crow['laminitaLadoA']; ?>.png" class="frontal" alt="Codigo laminita | Álbum Santoto más Planeta" />
						<figcaption class="trasera">
							<h3>COD: <?php print $crow['laminitaLadoA']; ?></h3>
							<p><?php print $crow['laminitaLadoB']; ?></p>
						</figcaption>
					</figure>
					</a>
				</div>
		<?php
			}else{
		?>
				<!-- LAMINITAS EFECT -->
				<div class="contentLaminita">
					<figure>
						<img src="img/laminitas/gris.png" class="frontal" alt="Codigo laminita | Álbum Santoto más Planeta" />
						<figcaption class="trasera">
							<h5><?php print $crow['id_laminita']; ?></h5>
							<p>Aun no puedes visualizar este contenido.</p>
						</figcaption>
					</figure>
				</div>
		<?php
			}
		?>

<?php } ?>
</div>
<!-- Mostrar Paginación -->
<div class="paginacionLaminitas">
	<?php echo $paginationCtrls; ?>
</div>
</div>
<!-- Fin Mostrar Laminita -->