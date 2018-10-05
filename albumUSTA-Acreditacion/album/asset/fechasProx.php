<?php
if ($tdSemA['PT'] == Null OR $tdSemB['PT'] == Null) { }else{require_once("pagesGruposFechas/faseFinal.php");}

// if (($tda['PJ'] == 3) AND ($tdb['PJ'] == 3) AND ($tdc['PJ'] == 3) AND ($tdd['PJ'] == 3) AND ($tde['PJ'] == 3) AND ($tdf['PJ'] == 3) AND ($tdg['PJ'] == 3) AND ($tdh['PJ'] == 3)) {
if (($pjGA['PJ'] == 4) AND ($pjGB['PJ'] == 4) AND ($pjGC['PJ'] == 4) AND ($pjGD['PJ'] == 4) AND ($pjGE['PJ'] == 4) AND ($pjGF['PJ'] == 4) AND ($pjGG['PJ'] == 4) AND ($pjGH['PJ'] == 4)) {
	require_once("pagesGruposFechas/faseDos.php");
}
?>
<div class="grilla">
	<div class="celda celdax3"><h5>Fecha 1 - 05/Mayo/2018 H: 9:00 a.m. - Estadio: Bogotá</h5></div>
	<div class="celda celdax3"><h5>Fecha 2 - 12/Mayo/2018 H: 9:00 a.m. - Estadio: Bogotá</h5></div>
	<div class="celda celdax3"><h5>Fecha 3 - 19/Mayo/2018 H: 9:00 a.m. - Estadio: Bogotá</h5></div>
</div>
<?php 
	require_once("pagesGruposFechas/fechasGrupoA.php");
	require_once("pagesGruposFechas/fechasGrupoB.php");
	require_once("pagesGruposFechas/fechasGrupoC.php");
	require_once("pagesGruposFechas/fechasGrupoD.php");
	require_once("pagesGruposFechas/fechasGrupoE.php");
	require_once("pagesGruposFechas/fechasGrupoF.php");
	require_once("pagesGruposFechas/fechasGrupoG.php");
	require_once("pagesGruposFechas/fechasGrupoH.php");
?>