<?php
//===========
// Grupo A
//===========

// Fecha 1
$sql_GA_F1_E1 = "SELECT * FROM t_grupoa WHERE nom_equipo='Rusia' AND GolF1 IS NOT NULL AND PE_F1 IS NOT NULL";
$sql_GA_F1_E1 = $conexion->query($sql_GA_F1_E1);
$sql_GA_F1_E1 = $sql_GA_F1_E1->fetch_array(MYSQLI_ASSOC);

$sql_GA_F1_E2 = "SELECT * FROM t_grupoa WHERE nom_equipo='Arabia Saudita' AND GolF1 IS NOT NULL AND PE_F1 IS NOT NULL";
$sql_GA_F1_E2 = $conexion->query($sql_GA_F1_E2);
$sql_GA_F1_E2 = $sql_GA_F1_E2->fetch_array(MYSQLI_ASSOC);

$sql_GA_F1_E3 = "SELECT * FROM t_grupoa WHERE nom_equipo='Egipto' AND GolF1 IS NOT NULL AND PE_F1 IS NOT NULL";
$sql_GA_F1_E3 = $conexion->query($sql_GA_F1_E3);
$sql_GA_F1_E3 = $sql_GA_F1_E3->fetch_array(MYSQLI_ASSOC);

$sql_GA_F1_E4 = "SELECT * FROM t_grupoa WHERE nom_equipo='Uruguay' AND GolF1 IS NOT NULL AND PE_F1 IS NOT NULL";
$sql_GA_F1_E4 = $conexion->query($sql_GA_F1_E4);
$sql_GA_F1_E4 = $sql_GA_F1_E4->fetch_array(MYSQLI_ASSOC);

// Fecha 2
$sql_GA_F2_E1 = "SELECT * FROM t_grupoa WHERE nom_equipo='Rusia' AND GolF2 IS NOT NULL AND PE_F2 IS NOT NULL";
$sql_GA_F2_E1 = $conexion->query($sql_GA_F2_E1);
$sql_GA_F2_E1 = $sql_GA_F2_E1->fetch_array(MYSQLI_ASSOC);

$sql_GA_F2_E3 = "SELECT * FROM t_grupoa WHERE nom_equipo='Egipto' AND GolF2 IS NOT NULL AND PE_F2 IS NOT NULL";
$sql_GA_F2_E3 = $conexion->query($sql_GA_F2_E3);
$sql_GA_F2_E3 = $sql_GA_F2_E3->fetch_array(MYSQLI_ASSOC);


$sql_GA_F2_E2 = "SELECT * FROM t_grupoa WHERE nom_equipo='Arabia Saudita' AND GolF2 IS NOT NULL AND PE_F2 IS NOT NULL";
$sql_GA_F2_E2 = $conexion->query($sql_GA_F2_E2);
$sql_GA_F2_E2 = $sql_GA_F2_E2->fetch_array(MYSQLI_ASSOC);

$sql_GA_F2_E4 = "SELECT * FROM t_grupoa WHERE nom_equipo='Uruguay' AND GolF2 IS NOT NULL AND PE_F2 IS NOT NULL";
$sql_GA_F2_E4 = $conexion->query($sql_GA_F2_E4);
$sql_GA_F2_E4 = $sql_GA_F2_E4->fetch_array(MYSQLI_ASSOC);

// Fecha 3
$sql_GA_F3_E1 = "SELECT * FROM t_grupoa WHERE nom_equipo='Rusia' AND GolF3 IS NOT NULL AND PE_F3 IS NOT NULL";
$sql_GA_F3_E1 = $conexion->query($sql_GA_F3_E1);
$sql_GA_F3_E1 = $sql_GA_F3_E1->fetch_array(MYSQLI_ASSOC);

$sql_GA_F3_E4 = "SELECT * FROM t_grupoa WHERE nom_equipo='Uruguay' AND GolF3 IS NOT NULL AND PE_F3 IS NOT NULL";
$sql_GA_F3_E4 = $conexion->query($sql_GA_F3_E4);
$sql_GA_F3_E4 = $sql_GA_F3_E4->fetch_array(MYSQLI_ASSOC);

$sql_GA_F3_E2 = "SELECT * FROM t_grupoa WHERE nom_equipo='Arabia Saudita' AND GolF3 IS NOT NULL AND PE_F3 IS NOT NULL";
$sql_GA_F3_E2 = $conexion->query($sql_GA_F3_E2);
$sql_GA_F3_E2 = $sql_GA_F3_E2->fetch_array(MYSQLI_ASSOC);

$sql_GA_F3_E3 = "SELECT * FROM t_grupoa WHERE nom_equipo='Egipto' AND GolF3 IS NOT NULL AND PE_F3 IS NOT NULL";
$sql_GA_F3_E3 = $conexion->query($sql_GA_F3_E3);
$sql_GA_F3_E3 = $sql_GA_F3_E3->fetch_array(MYSQLI_ASSOC);

//===========
// Grupo B
//===========

// Fecha 1
$sql_GB_F1_E1 = "SELECT * FROM t_grupob WHERE nom_equipo='Portugal' AND GolF1 IS NOT NULL AND PE_F1 IS NOT NULL";
$sql_GB_F1_E1 = $conexion->query($sql_GB_F1_E1);
$sql_GB_F1_E1 = $sql_GB_F1_E1->fetch_array(MYSQLI_ASSOC);

$sql_GB_F1_E2 = "SELECT * FROM t_grupob WHERE nom_equipo='España' AND GolF1 IS NOT NULL AND PE_F1 IS NOT NULL";
$sql_GB_F1_E2 = $conexion->query($sql_GB_F1_E2);
$sql_GB_F1_E2 = $sql_GB_F1_E2->fetch_array(MYSQLI_ASSOC);

$sql_GB_F1_E3 = "SELECT * FROM t_grupob WHERE nom_equipo='Marruecos' AND GolF1 IS NOT NULL AND PE_F1 IS NOT NULL";
$sql_GB_F1_E3 = $conexion->query($sql_GB_F1_E3);
$sql_GB_F1_E3 = $sql_GB_F1_E3->fetch_array(MYSQLI_ASSOC);

$sql_GB_F1_E4 = "SELECT * FROM t_grupob WHERE nom_equipo='Irán' AND GolF1 IS NOT NULL AND PE_F1 IS NOT NULL";
$sql_GB_F1_E4 = $conexion->query($sql_GB_F1_E4);
$sql_GB_F1_E4 = $sql_GB_F1_E4->fetch_array(MYSQLI_ASSOC);

// Fecha 2
$sql_GB_F2_E1 = "SELECT * FROM t_grupob WHERE nom_equipo='Portugal' AND GolF2 IS NOT NULL AND PE_F2 IS NOT NULL";
$sql_GB_F2_E1 = $conexion->query($sql_GB_F2_E1);
$sql_GB_F2_E1 = $sql_GB_F2_E1->fetch_array(MYSQLI_ASSOC);

$sql_GB_F2_E3 = "SELECT * FROM t_grupob WHERE nom_equipo='Marruecos' AND GolF2 IS NOT NULL AND PE_F2 IS NOT NULL";
$sql_GB_F2_E3 = $conexion->query($sql_GB_F2_E3);
$sql_GB_F2_E3 = $sql_GB_F2_E3->fetch_array(MYSQLI_ASSOC);


$sql_GB_F2_E2 = "SELECT * FROM t_grupob WHERE nom_equipo='España' AND GolF2 IS NOT NULL AND PE_F2 IS NOT NULL";
$sql_GB_F2_E2 = $conexion->query($sql_GB_F2_E2);
$sql_GB_F2_E2 = $sql_GB_F2_E2->fetch_array(MYSQLI_ASSOC);

$sql_GB_F2_E4 = "SELECT * FROM t_grupob WHERE nom_equipo='Irán' AND GolF2 IS NOT NULL AND PE_F2 IS NOT NULL";
$sql_GB_F2_E4 = $conexion->query($sql_GB_F2_E4);
$sql_GB_F2_E4 = $sql_GB_F2_E4->fetch_array(MYSQLI_ASSOC);

// Fecha 3
$sql_GB_F3_E1 = "SELECT * FROM t_grupob WHERE nom_equipo='Portugal' AND GolF3 IS NOT NULL AND PE_F3 IS NOT NULL";
$sql_GB_F3_E1 = $conexion->query($sql_GB_F3_E1);
$sql_GB_F3_E1 = $sql_GB_F3_E1->fetch_array(MYSQLI_ASSOC);

$sql_GB_F3_E4 = "SELECT * FROM t_grupob WHERE nom_equipo='Irán' AND GolF3 IS NOT NULL AND PE_F3 IS NOT NULL";
$sql_GB_F3_E4 = $conexion->query($sql_GB_F3_E4);
$sql_GB_F3_E4 = $sql_GB_F3_E4->fetch_array(MYSQLI_ASSOC);

$sql_GB_F3_E2 = "SELECT * FROM t_grupob WHERE nom_equipo='España' AND GolF3 IS NOT NULL AND PE_F3 IS NOT NULL";
$sql_GB_F3_E2 = $conexion->query($sql_GB_F3_E2);
$sql_GB_F3_E2 = $sql_GB_F3_E2->fetch_array(MYSQLI_ASSOC);

$sql_GB_F3_E3 = "SELECT * FROM t_grupob WHERE nom_equipo='Marruecos' AND GolF3 IS NOT NULL AND PE_F3 IS NOT NULL";
$sql_GB_F3_E3 = $conexion->query($sql_GB_F3_E3);
$sql_GB_F3_E3 = $sql_GB_F3_E3->fetch_array(MYSQLI_ASSOC);

//===========
// Grupo C
//===========

// Fecha 1
$sql_GC_F1_E1 = "SELECT * FROM t_grupoc WHERE nom_equipo='Francia' AND GolF1 IS NOT NULL AND PE_F1 IS NOT NULL";
$sql_GC_F1_E1 = $conexion->query($sql_GC_F1_E1);
$sql_GC_F1_E1 = $sql_GC_F1_E1->fetch_array(MYSQLI_ASSOC);

$sql_GC_F1_E2 = "SELECT * FROM t_grupoc WHERE nom_equipo='Australia' AND GolF1 IS NOT NULL AND PE_F1 IS NOT NULL";
$sql_GC_F1_E2 = $conexion->query($sql_GC_F1_E2);
$sql_GC_F1_E2 = $sql_GC_F1_E2->fetch_array(MYSQLI_ASSOC);

$sql_GC_F1_E3 = "SELECT * FROM t_grupoc WHERE nom_equipo='Perú' AND GolF1 IS NOT NULL AND PE_F1 IS NOT NULL";
$sql_GC_F1_E3 = $conexion->query($sql_GC_F1_E3);
$sql_GC_F1_E3 = $sql_GC_F1_E3->fetch_array(MYSQLI_ASSOC);

$sql_GC_F1_E4 = "SELECT * FROM t_grupoc WHERE nom_equipo='Dinamarca' AND GolF1 IS NOT NULL AND PE_F1 IS NOT NULL";
$sql_GC_F1_E4 = $conexion->query($sql_GC_F1_E4);
$sql_GC_F1_E4 = $sql_GC_F1_E4->fetch_array(MYSQLI_ASSOC);

// Fecha 2
$sql_GC_F2_E1 = "SELECT * FROM t_grupoc WHERE nom_equipo='Francia' AND GolF2 IS NOT NULL AND PE_F2 IS NOT NULL";
$sql_GC_F2_E1 = $conexion->query($sql_GC_F2_E1);
$sql_GC_F2_E1 = $sql_GC_F2_E1->fetch_array(MYSQLI_ASSOC);

$sql_GC_F2_E3 = "SELECT * FROM t_grupoc WHERE nom_equipo='Perú' AND GolF2 IS NOT NULL AND PE_F2 IS NOT NULL";
$sql_GC_F2_E3 = $conexion->query($sql_GC_F2_E3);
$sql_GC_F2_E3 = $sql_GC_F2_E3->fetch_array(MYSQLI_ASSOC);


$sql_GC_F2_E2 = "SELECT * FROM t_grupoc WHERE nom_equipo='Australia' AND GolF2 IS NOT NULL AND PE_F2 IS NOT NULL";
$sql_GC_F2_E2 = $conexion->query($sql_GC_F2_E2);
$sql_GC_F2_E2 = $sql_GC_F2_E2->fetch_array(MYSQLI_ASSOC);

$sql_GC_F2_E4 = "SELECT * FROM t_grupoc WHERE nom_equipo='Dinamarca' AND GolF2 IS NOT NULL AND PE_F2 IS NOT NULL";
$sql_GC_F2_E4 = $conexion->query($sql_GC_F2_E4);
$sql_GC_F2_E4 = $sql_GC_F2_E4->fetch_array(MYSQLI_ASSOC);

// Fecha 3
$sql_GC_F3_E1 = "SELECT * FROM t_grupoc WHERE nom_equipo='Francia' AND GolF3 IS NOT NULL AND PE_F3 IS NOT NULL";
$sql_GC_F3_E1 = $conexion->query($sql_GC_F3_E1);
$sql_GC_F3_E1 = $sql_GC_F3_E1->fetch_array(MYSQLI_ASSOC);

$sql_GC_F3_E4 = "SELECT * FROM t_grupoc WHERE nom_equipo='Dinamarca' AND GolF3 IS NOT NULL AND PE_F3 IS NOT NULL";
$sql_GC_F3_E4 = $conexion->query($sql_GC_F3_E4);
$sql_GC_F3_E4 = $sql_GC_F3_E4->fetch_array(MYSQLI_ASSOC);

$sql_GC_F3_E2 = "SELECT * FROM t_grupoc WHERE nom_equipo='Australia' AND GolF3 IS NOT NULL AND PE_F3 IS NOT NULL";
$sql_GC_F3_E2 = $conexion->query($sql_GC_F3_E2);
$sql_GC_F3_E2 = $sql_GC_F3_E2->fetch_array(MYSQLI_ASSOC);

$sql_GC_F3_E3 = "SELECT * FROM t_grupoc WHERE nom_equipo='Perú' AND GolF3 IS NOT NULL AND PE_F3 IS NOT NULL";
$sql_GC_F3_E3 = $conexion->query($sql_GC_F3_E3);
$sql_GC_F3_E3 = $sql_GC_F3_E3->fetch_array(MYSQLI_ASSOC);

//===========
// Grupo D
//===========

// Fecha 1
$sql_GD_F1_E1 = "SELECT * FROM t_grupod WHERE nom_equipo='Argentina' AND GolF1 IS NOT NULL AND PE_F1 IS NOT NULL";
$sql_GD_F1_E1 = $conexion->query($sql_GD_F1_E1);
$sql_GD_F1_E1 = $sql_GD_F1_E1->fetch_array(MYSQLI_ASSOC);

$sql_GD_F1_E2 = "SELECT * FROM t_grupod WHERE nom_equipo='Islandia' AND GolF1 IS NOT NULL AND PE_F1 IS NOT NULL";
$sql_GD_F1_E2 = $conexion->query($sql_GD_F1_E2);
$sql_GD_F1_E2 = $sql_GD_F1_E2->fetch_array(MYSQLI_ASSOC);

$sql_GD_F1_E3 = "SELECT * FROM t_grupod WHERE nom_equipo='Croacia' AND GolF1 IS NOT NULL AND PE_F1 IS NOT NULL";
$sql_GD_F1_E3 = $conexion->query($sql_GD_F1_E3);
$sql_GD_F1_E3 = $sql_GD_F1_E3->fetch_array(MYSQLI_ASSOC);

$sql_GD_F1_E4 = "SELECT * FROM t_grupod WHERE nom_equipo='Nigeria' AND GolF1 IS NOT NULL AND PE_F1 IS NOT NULL";
$sql_GD_F1_E4 = $conexion->query($sql_GD_F1_E4);
$sql_GD_F1_E4 = $sql_GD_F1_E4->fetch_array(MYSQLI_ASSOC);

// Fecha 2
$sql_GD_F2_E1 = "SELECT * FROM t_grupod WHERE nom_equipo='Argentina' AND GolF2 IS NOT NULL AND PE_F2 IS NOT NULL";
$sql_GD_F2_E1 = $conexion->query($sql_GD_F2_E1);
$sql_GD_F2_E1 = $sql_GD_F2_E1->fetch_array(MYSQLI_ASSOC);

$sql_GD_F2_E3 = "SELECT * FROM t_grupod WHERE nom_equipo='Croacia' AND GolF2 IS NOT NULL AND PE_F2 IS NOT NULL";
$sql_GD_F2_E3 = $conexion->query($sql_GD_F2_E3);
$sql_GD_F2_E3 = $sql_GD_F2_E3->fetch_array(MYSQLI_ASSOC);


$sql_GD_F2_E2 = "SELECT * FROM t_grupod WHERE nom_equipo='Islandia' AND GolF2 IS NOT NULL AND PE_F2 IS NOT NULL";
$sql_GD_F2_E2 = $conexion->query($sql_GD_F2_E2);
$sql_GD_F2_E2 = $sql_GD_F2_E2->fetch_array(MYSQLI_ASSOC);

$sql_GD_F2_E4 = "SELECT * FROM t_grupod WHERE nom_equipo='Nigeria' AND GolF2 IS NOT NULL AND PE_F2 IS NOT NULL";
$sql_GD_F2_E4 = $conexion->query($sql_GD_F2_E4);
$sql_GD_F2_E4 = $sql_GD_F2_E4->fetch_array(MYSQLI_ASSOC);

// Fecha 3
$sql_GD_F3_E1 = "SELECT * FROM t_grupod WHERE nom_equipo='Argentina' AND GolF3 IS NOT NULL AND PE_F3 IS NOT NULL";
$sql_GD_F3_E1 = $conexion->query($sql_GD_F3_E1);
$sql_GD_F3_E1 = $sql_GD_F3_E1->fetch_array(MYSQLI_ASSOC);

$sql_GD_F3_E4 = "SELECT * FROM t_grupod WHERE nom_equipo='Nigeria' AND GolF3 IS NOT NULL AND PE_F3 IS NOT NULL";
$sql_GD_F3_E4 = $conexion->query($sql_GD_F3_E4);
$sql_GD_F3_E4 = $sql_GD_F3_E4->fetch_array(MYSQLI_ASSOC);

$sql_GD_F3_E2 = "SELECT * FROM t_grupod WHERE nom_equipo='Islandia' AND GolF3 IS NOT NULL AND PE_F3 IS NOT NULL";
$sql_GD_F3_E2 = $conexion->query($sql_GD_F3_E2);
$sql_GD_F3_E2 = $sql_GD_F3_E2->fetch_array(MYSQLI_ASSOC);

$sql_GD_F3_E3 = "SELECT * FROM t_grupod WHERE nom_equipo='Croacia' AND GolF3 IS NOT NULL AND PE_F3 IS NOT NULL";
$sql_GD_F3_E3 = $conexion->query($sql_GD_F3_E3);
$sql_GD_F3_E3 = $sql_GD_F3_E3->fetch_array(MYSQLI_ASSOC);

//===========
// Grupo E
//===========

// Fecha 1
$sql_GE_F1_E1 = "SELECT * FROM t_grupoe WHERE nom_equipo='Brasil' AND GolF1 IS NOT NULL AND PE_F1 IS NOT NULL";
$sql_GE_F1_E1 = $conexion->query($sql_GE_F1_E1);
$sql_GE_F1_E1 = $sql_GE_F1_E1->fetch_array(MYSQLI_ASSOC);

$sql_GE_F1_E2 = "SELECT * FROM t_grupoe WHERE nom_equipo='Suiza' AND GolF1 IS NOT NULL AND PE_F1 IS NOT NULL";
$sql_GE_F1_E2 = $conexion->query($sql_GE_F1_E2);
$sql_GE_F1_E2 = $sql_GE_F1_E2->fetch_array(MYSQLI_ASSOC);

$sql_GE_F1_E3 = "SELECT * FROM t_grupoe WHERE nom_equipo='Costa Rica' AND GolF1 IS NOT NULL AND PE_F1 IS NOT NULL";
$sql_GE_F1_E3 = $conexion->query($sql_GE_F1_E3);
$sql_GE_F1_E3 = $sql_GE_F1_E3->fetch_array(MYSQLI_ASSOC);

$sql_GE_F1_E4 = "SELECT * FROM t_grupoe WHERE nom_equipo='Serbia' AND GolF1 IS NOT NULL AND PE_F1 IS NOT NULL";
$sql_GE_F1_E4 = $conexion->query($sql_GE_F1_E4);
$sql_GE_F1_E4 = $sql_GE_F1_E4->fetch_array(MYSQLI_ASSOC);

// Fecha 2
$sql_GE_F2_E1 = "SELECT * FROM t_grupoe WHERE nom_equipo='Brasil' AND GolF2 IS NOT NULL AND PE_F2 IS NOT NULL";
$sql_GE_F2_E1 = $conexion->query($sql_GE_F2_E1);
$sql_GE_F2_E1 = $sql_GE_F2_E1->fetch_array(MYSQLI_ASSOC);

$sql_GE_F2_E3 = "SELECT * FROM t_grupoe WHERE nom_equipo='Costa Rica' AND GolF2 IS NOT NULL AND PE_F2 IS NOT NULL";
$sql_GE_F2_E3 = $conexion->query($sql_GE_F2_E3);
$sql_GE_F2_E3 = $sql_GE_F2_E3->fetch_array(MYSQLI_ASSOC);


$sql_GE_F2_E2 = "SELECT * FROM t_grupoe WHERE nom_equipo='Suiza' AND GolF2 IS NOT NULL AND PE_F2 IS NOT NULL";
$sql_GE_F2_E2 = $conexion->query($sql_GE_F2_E2);
$sql_GE_F2_E2 = $sql_GE_F2_E2->fetch_array(MYSQLI_ASSOC);

$sql_GE_F2_E4 = "SELECT * FROM t_grupoe WHERE nom_equipo='Serbia' AND GolF2 IS NOT NULL AND PE_F2 IS NOT NULL";
$sql_GE_F2_E4 = $conexion->query($sql_GE_F2_E4);
$sql_GE_F2_E4 = $sql_GE_F2_E4->fetch_array(MYSQLI_ASSOC);

// Fecha 3
$sql_GE_F3_E1 = "SELECT * FROM t_grupoe WHERE nom_equipo='Brasil' AND GolF3 IS NOT NULL AND PE_F3 IS NOT NULL";
$sql_GE_F3_E1 = $conexion->query($sql_GE_F3_E1);
$sql_GE_F3_E1 = $sql_GE_F3_E1->fetch_array(MYSQLI_ASSOC);

$sql_GE_F3_E4 = "SELECT * FROM t_grupoe WHERE nom_equipo='Serbia' AND GolF3 IS NOT NULL AND PE_F3 IS NOT NULL";
$sql_GE_F3_E4 = $conexion->query($sql_GE_F3_E4);
$sql_GE_F3_E4 = $sql_GE_F3_E4->fetch_array(MYSQLI_ASSOC);

$sql_GE_F3_E2 = "SELECT * FROM t_grupoe WHERE nom_equipo='Suiza' AND GolF3 IS NOT NULL AND PE_F3 IS NOT NULL";
$sql_GE_F3_E2 = $conexion->query($sql_GE_F3_E2);
$sql_GE_F3_E2 = $sql_GE_F3_E2->fetch_array(MYSQLI_ASSOC);

$sql_GE_F3_E3 = "SELECT * FROM t_grupoe WHERE nom_equipo='Costa Rica' AND GolF3 IS NOT NULL AND PE_F3 IS NOT NULL";
$sql_GE_F3_E3 = $conexion->query($sql_GE_F3_E3);
$sql_GE_F3_E3 = $sql_GE_F3_E3->fetch_array(MYSQLI_ASSOC);

//===========
// Grupo F
//===========

// Fecha 1
$sql_GF_F1_E1 = "SELECT * FROM t_grupof WHERE nom_equipo='Alemania' AND GolF1 IS NOT NULL AND PE_F1 IS NOT NULL";
$sql_GF_F1_E1 = $conexion->query($sql_GF_F1_E1);
$sql_GF_F1_E1 = $sql_GF_F1_E1->fetch_array(MYSQLI_ASSOC);

$sql_GF_F1_E2 = "SELECT * FROM t_grupof WHERE nom_equipo='Mexico' AND GolF1 IS NOT NULL AND PE_F1 IS NOT NULL";
$sql_GF_F1_E2 = $conexion->query($sql_GF_F1_E2);
$sql_GF_F1_E2 = $sql_GF_F1_E2->fetch_array(MYSQLI_ASSOC);

$sql_GF_F1_E3 = "SELECT * FROM t_grupof WHERE nom_equipo='Suecia' AND GolF1 IS NOT NULL AND PE_F1 IS NOT NULL";
$sql_GF_F1_E3 = $conexion->query($sql_GF_F1_E3);
$sql_GF_F1_E3 = $sql_GF_F1_E3->fetch_array(MYSQLI_ASSOC);

$sql_GF_F1_E4 = "SELECT * FROM t_grupof WHERE nom_equipo='Corea del Sur' AND GolF1 IS NOT NULL AND PE_F1 IS NOT NULL";
$sql_GF_F1_E4 = $conexion->query($sql_GF_F1_E4);
$sql_GF_F1_E4 = $sql_GF_F1_E4->fetch_array(MYSQLI_ASSOC);

// Fecha 2
$sql_GF_F2_E1 = "SELECT * FROM t_grupof WHERE nom_equipo='Alemania' AND GolF2 IS NOT NULL AND PE_F2 IS NOT NULL";
$sql_GF_F2_E1 = $conexion->query($sql_GF_F2_E1);
$sql_GF_F2_E1 = $sql_GF_F2_E1->fetch_array(MYSQLI_ASSOC);

$sql_GF_F2_E3 = "SELECT * FROM t_grupof WHERE nom_equipo='Suecia' AND GolF2 IS NOT NULL AND PE_F2 IS NOT NULL";
$sql_GF_F2_E3 = $conexion->query($sql_GF_F2_E3);
$sql_GF_F2_E3 = $sql_GF_F2_E3->fetch_array(MYSQLI_ASSOC);


$sql_GF_F2_E2 = "SELECT * FROM t_grupof WHERE nom_equipo='Mexico' AND GolF2 IS NOT NULL AND PE_F2 IS NOT NULL";
$sql_GF_F2_E2 = $conexion->query($sql_GF_F2_E2);
$sql_GF_F2_E2 = $sql_GF_F2_E2->fetch_array(MYSQLI_ASSOC);

$sql_GF_F2_E4 = "SELECT * FROM t_grupof WHERE nom_equipo='Corea del Sur' AND GolF2 IS NOT NULL AND PE_F2 IS NOT NULL";
$sql_GF_F2_E4 = $conexion->query($sql_GF_F2_E4);
$sql_GF_F2_E4 = $sql_GF_F2_E4->fetch_array(MYSQLI_ASSOC);

// Fecha 3
$sql_GF_F3_E1 = "SELECT * FROM t_grupof WHERE nom_equipo='Alemania' AND GolF3 IS NOT NULL AND PE_F3 IS NOT NULL";
$sql_GF_F3_E1 = $conexion->query($sql_GF_F3_E1);
$sql_GF_F3_E1 = $sql_GF_F3_E1->fetch_array(MYSQLI_ASSOC);

$sql_GF_F3_E4 = "SELECT * FROM t_grupof WHERE nom_equipo='Corea del Sur' AND GolF3 IS NOT NULL AND PE_F3 IS NOT NULL";
$sql_GF_F3_E4 = $conexion->query($sql_GF_F3_E4);
$sql_GF_F3_E4 = $sql_GF_F3_E4->fetch_array(MYSQLI_ASSOC);

$sql_GF_F3_E2 = "SELECT * FROM t_grupof WHERE nom_equipo='Mexico' AND GolF3 IS NOT NULL AND PE_F3 IS NOT NULL";
$sql_GF_F3_E2 = $conexion->query($sql_GF_F3_E2);
$sql_GF_F3_E2 = $sql_GF_F3_E2->fetch_array(MYSQLI_ASSOC);

$sql_GF_F3_E3 = "SELECT * FROM t_grupof WHERE nom_equipo='Suecia' AND GolF3 IS NOT NULL AND PE_F3 IS NOT NULL";
$sql_GF_F3_E3 = $conexion->query($sql_GF_F3_E3);
$sql_GF_F3_E3 = $sql_GF_F3_E3->fetch_array(MYSQLI_ASSOC);

//===========
// Grupo G
//===========

// Fecha 1
$sql_GG_F1_E1 = "SELECT * FROM t_grupog WHERE nom_equipo='Belgica' AND GolF1 IS NOT NULL AND PE_F1 IS NOT NULL";
$sql_GG_F1_E1 = $conexion->query($sql_GG_F1_E1);
$sql_GG_F1_E1 = $sql_GG_F1_E1->fetch_array(MYSQLI_ASSOC);

$sql_GG_F1_E2 = "SELECT * FROM t_grupog WHERE nom_equipo='Panamá' AND GolF1 IS NOT NULL AND PE_F1 IS NOT NULL";
$sql_GG_F1_E2 = $conexion->query($sql_GG_F1_E2);
$sql_GG_F1_E2 = $sql_GG_F1_E2->fetch_array(MYSQLI_ASSOC);

$sql_GG_F1_E3 = "SELECT * FROM t_grupog WHERE nom_equipo='Túnez' AND GolF1 IS NOT NULL AND PE_F1 IS NOT NULL";
$sql_GG_F1_E3 = $conexion->query($sql_GG_F1_E3);
$sql_GG_F1_E3 = $sql_GG_F1_E3->fetch_array(MYSQLI_ASSOC);

$sql_GG_F1_E4 = "SELECT * FROM t_grupog WHERE nom_equipo='Inglaterra' AND GolF1 IS NOT NULL AND PE_F1 IS NOT NULL";
$sql_GG_F1_E4 = $conexion->query($sql_GG_F1_E4);
$sql_GG_F1_E4 = $sql_GG_F1_E4->fetch_array(MYSQLI_ASSOC);

// Fecha 2
$sql_GG_F2_E1 = "SELECT * FROM t_grupog WHERE nom_equipo='Belgica' AND GolF2 IS NOT NULL AND PE_F2 IS NOT NULL";
$sql_GG_F2_E1 = $conexion->query($sql_GG_F2_E1);
$sql_GG_F2_E1 = $sql_GG_F2_E1->fetch_array(MYSQLI_ASSOC);

$sql_GG_F2_E3 = "SELECT * FROM t_grupog WHERE nom_equipo='Túnez' AND GolF2 IS NOT NULL AND PE_F2 IS NOT NULL";
$sql_GG_F2_E3 = $conexion->query($sql_GG_F2_E3);
$sql_GG_F2_E3 = $sql_GG_F2_E3->fetch_array(MYSQLI_ASSOC);


$sql_GG_F2_E2 = "SELECT * FROM t_grupog WHERE nom_equipo='Panamá' AND GolF2 IS NOT NULL AND PE_F2 IS NOT NULL";
$sql_GG_F2_E2 = $conexion->query($sql_GG_F2_E2);
$sql_GG_F2_E2 = $sql_GG_F2_E2->fetch_array(MYSQLI_ASSOC);

$sql_GG_F2_E4 = "SELECT * FROM t_grupog WHERE nom_equipo='Inglaterra' AND GolF2 IS NOT NULL AND PE_F2 IS NOT NULL";
$sql_GG_F2_E4 = $conexion->query($sql_GG_F2_E4);
$sql_GG_F2_E4 = $sql_GG_F2_E4->fetch_array(MYSQLI_ASSOC);

// Fecha 3
$sql_GG_F3_E1 = "SELECT * FROM t_grupog WHERE nom_equipo='Belgica' AND GolF3 IS NOT NULL AND PE_F3 IS NOT NULL";
$sql_GG_F3_E1 = $conexion->query($sql_GG_F3_E1);
$sql_GG_F3_E1 = $sql_GG_F3_E1->fetch_array(MYSQLI_ASSOC);

$sql_GG_F3_E4 = "SELECT * FROM t_grupog WHERE nom_equipo='Inglaterra' AND GolF3 IS NOT NULL AND PE_F3 IS NOT NULL";
$sql_GG_F3_E4 = $conexion->query($sql_GG_F3_E4);
$sql_GG_F3_E4 = $sql_GG_F3_E4->fetch_array(MYSQLI_ASSOC);

$sql_GG_F3_E2 = "SELECT * FROM t_grupog WHERE nom_equipo='Panamá' AND GolF3 IS NOT NULL AND PE_F3 IS NOT NULL";
$sql_GG_F3_E2 = $conexion->query($sql_GG_F3_E2);
$sql_GG_F3_E2 = $sql_GG_F3_E2->fetch_array(MYSQLI_ASSOC);

$sql_GG_F3_E3 = "SELECT * FROM t_grupog WHERE nom_equipo='Túnez' AND GolF3 IS NOT NULL AND PE_F3 IS NOT NULL";
$sql_GG_F3_E3 = $conexion->query($sql_GG_F3_E3);
$sql_GG_F3_E3 = $sql_GG_F3_E3->fetch_array(MYSQLI_ASSOC);

//===========
// Grupo H
//===========

// Fecha 1
$sql_GH_F1_E1 = "SELECT * FROM t_grupoh WHERE nom_equipo='Polonia' AND GolF1 IS NOT NULL AND PE_F1 IS NOT NULL";
$sql_GH_F1_E1 = $conexion->query($sql_GH_F1_E1);
$sql_GH_F1_E1 = $sql_GH_F1_E1->fetch_array(MYSQLI_ASSOC);

$sql_GH_F1_E2 = "SELECT * FROM t_grupoh WHERE nom_equipo='Senegal' AND GolF1 IS NOT NULL AND PE_F1 IS NOT NULL";
$sql_GH_F1_E2 = $conexion->query($sql_GH_F1_E2);
$sql_GH_F1_E2 = $sql_GH_F1_E2->fetch_array(MYSQLI_ASSOC);

$sql_GH_F1_E3 = "SELECT * FROM t_grupoh WHERE nom_equipo='Colombia' AND GolF1 IS NOT NULL AND PE_F1 IS NOT NULL";
$sql_GH_F1_E3 = $conexion->query($sql_GH_F1_E3);
$sql_GH_F1_E3 = $sql_GH_F1_E3->fetch_array(MYSQLI_ASSOC);

$sql_GH_F1_E4 = "SELECT * FROM t_grupoh WHERE nom_equipo='Japón' AND GolF1 IS NOT NULL AND PE_F1 IS NOT NULL";
$sql_GH_F1_E4 = $conexion->query($sql_GH_F1_E4);
$sql_GH_F1_E4 = $sql_GH_F1_E4->fetch_array(MYSQLI_ASSOC);

// Fecha 2
$sql_GH_F2_E1 = "SELECT * FROM t_grupoh WHERE nom_equipo='Polonia' AND GolF2 IS NOT NULL AND PE_F2 IS NOT NULL";
$sql_GH_F2_E1 = $conexion->query($sql_GH_F2_E1);
$sql_GH_F2_E1 = $sql_GH_F2_E1->fetch_array(MYSQLI_ASSOC);

$sql_GH_F2_E3 = "SELECT * FROM t_grupoh WHERE nom_equipo='Colombia' AND GolF2 IS NOT NULL AND PE_F2 IS NOT NULL";
$sql_GH_F2_E3 = $conexion->query($sql_GH_F2_E3);
$sql_GH_F2_E3 = $sql_GH_F2_E3->fetch_array(MYSQLI_ASSOC);


$sql_GH_F2_E2 = "SELECT * FROM t_grupoh WHERE nom_equipo='Senegal' AND GolF2 IS NOT NULL AND PE_F2 IS NOT NULL";
$sql_GH_F2_E2 = $conexion->query($sql_GH_F2_E2);
$sql_GH_F2_E2 = $sql_GH_F2_E2->fetch_array(MYSQLI_ASSOC);

$sql_GH_F2_E4 = "SELECT * FROM t_grupoh WHERE nom_equipo='Japón' AND GolF2 IS NOT NULL AND PE_F2 IS NOT NULL";
$sql_GH_F2_E4 = $conexion->query($sql_GH_F2_E4);
$sql_GH_F2_E4 = $sql_GH_F2_E4->fetch_array(MYSQLI_ASSOC);

// Fecha 3
$sql_GH_F3_E1 = "SELECT * FROM t_grupoh WHERE nom_equipo='Polonia' AND GolF3 IS NOT NULL AND PE_F3 IS NOT NULL";
$sql_GH_F3_E1 = $conexion->query($sql_GH_F3_E1);
$sql_GH_F3_E1 = $sql_GH_F3_E1->fetch_array(MYSQLI_ASSOC);

$sql_GH_F3_E4 = "SELECT * FROM t_grupoh WHERE nom_equipo='Japón' AND GolF3 IS NOT NULL AND PE_F3 IS NOT NULL";
$sql_GH_F3_E4 = $conexion->query($sql_GH_F3_E4);
$sql_GH_F3_E4 = $sql_GH_F3_E4->fetch_array(MYSQLI_ASSOC);

$sql_GH_F3_E2 = "SELECT * FROM t_grupoh WHERE nom_equipo='Senegal' AND GolF3 IS NOT NULL AND PE_F3 IS NOT NULL";
$sql_GH_F3_E2 = $conexion->query($sql_GH_F3_E2);
$sql_GH_F3_E2 = $sql_GH_F3_E2->fetch_array(MYSQLI_ASSOC);

$sql_GH_F3_E3 = "SELECT * FROM t_grupoh WHERE nom_equipo='Colombia' AND GolF3 IS NOT NULL AND PE_F3 IS NOT NULL";
$sql_GH_F3_E3 = $conexion->query($sql_GH_F3_E3);
$sql_GH_F3_E3 = $sql_GH_F3_E3->fetch_array(MYSQLI_ASSOC);

//Seleecionar los 3 partidos jugados de cada grupo
$sqlPJ_GA = "SELECT COUNT(PJ) AS 'PJ' FROM t_grupoa WHERE PJ=3";
$sqlPJ_GA = $conexion->query($sqlPJ_GA);
$pjGA = $sqlPJ_GA->fetch_array(MYSQLI_ASSOC);

$sqlPJ_GB = "SELECT COUNT(PJ) AS 'PJ' FROM t_grupob WHERE PJ=3";
$sqlPJ_GB = $conexion->query($sqlPJ_GB);
$pjGB = $sqlPJ_GB->fetch_array(MYSQLI_ASSOC);

$sqlPJ_GC = "SELECT COUNT(PJ) AS 'PJ' FROM t_grupoc WHERE PJ=3";
$sqlPJ_GC = $conexion->query($sqlPJ_GC);
$pjGC = $sqlPJ_GC->fetch_array(MYSQLI_ASSOC);

$sqlPJ_GD = "SELECT COUNT(PJ) AS 'PJ' FROM t_grupod WHERE PJ=3";
$sqlPJ_GD = $conexion->query($sqlPJ_GD);
$pjGD = $sqlPJ_GD->fetch_array(MYSQLI_ASSOC);

$sqlPJ_GE = "SELECT COUNT(PJ) AS 'PJ' FROM t_grupoe WHERE PJ=3";
$sqlPJ_GE = $conexion->query($sqlPJ_GE);
$pjGE = $sqlPJ_GE->fetch_array(MYSQLI_ASSOC);

$sqlPJ_GF = "SELECT COUNT(PJ) AS 'PJ' FROM t_grupof WHERE PJ=3";
$sqlPJ_GF = $conexion->query($sqlPJ_GF);
$pjGF = $sqlPJ_GF->fetch_array(MYSQLI_ASSOC);

$sqlPJ_GG = "SELECT COUNT(PJ) AS 'PJ' FROM t_grupog WHERE PJ=3";
$sqlPJ_GG = $conexion->query($sqlPJ_GG);
$pjGG = $sqlPJ_GG->fetch_array(MYSQLI_ASSOC);

$sqlPJ_GH = "SELECT COUNT(PJ) AS 'PJ' FROM t_grupoh WHERE PJ=3";
$sqlPJ_GH = $conexion->query($sqlPJ_GH);
$pjGH = $sqlPJ_GH->fetch_array(MYSQLI_ASSOC);

// Seleccionar los partidos Jugados del equipo que quedo en primer lugar (EQUIPOS GRUPOS)
$sqlGrupA = "SELECT * FROM t_grupoa WHERE PT = (SELECT MAX( PT ) FROM t_grupoa)";
$sqlGrupA = $conexion->query($sqlGrupA);
$tda = $sqlGrupA->fetch_array(MYSQLI_ASSOC);

$sqlGrupB = "SELECT * FROM t_grupob WHERE PT = (SELECT MAX( PT ) FROM t_grupob)";
$sqlGrupB = $conexion->query($sqlGrupB);
$tdb = $sqlGrupB->fetch_array(MYSQLI_ASSOC);

$sqlGrupC = "SELECT * FROM t_grupoc WHERE PT = (SELECT MAX( PT ) FROM t_grupoc)";
$sqlGrupC = $conexion->query($sqlGrupC);
$tdc = $sqlGrupC->fetch_array(MYSQLI_ASSOC);

$sqlGrupD = "SELECT * FROM t_grupod WHERE PT = (SELECT MAX( PT ) FROM t_grupod)";
$sqlGrupD = $conexion->query($sqlGrupD);
$tdd = $sqlGrupD->fetch_array(MYSQLI_ASSOC);

$sqlGrupE = "SELECT * FROM t_grupoe WHERE PT = (SELECT MAX( PT ) FROM t_grupoe)";
$sqlGrupE = $conexion->query($sqlGrupE);
$tde = $sqlGrupE->fetch_array(MYSQLI_ASSOC);

$sqlGrupF = "SELECT * FROM t_grupof WHERE PT = (SELECT MAX( PT ) FROM t_grupof)";
$sqlGrupF = $conexion->query($sqlGrupF);
$tdf = $sqlGrupF->fetch_array(MYSQLI_ASSOC);

$sqlGrupG = "SELECT * FROM t_grupog WHERE PT = (SELECT MAX( PT ) FROM t_grupog)";
$sqlGrupG = $conexion->query($sqlGrupG);
$tdg = $sqlGrupG->fetch_array(MYSQLI_ASSOC);

$sqlGrupH = "SELECT * FROM t_grupoh WHERE PT = (SELECT MAX( PT ) FROM t_grupoh)";
$sqlGrupH = $conexion->query($sqlGrupH);
$tdh = $sqlGrupH->fetch_array(MYSQLI_ASSOC);


//CUARTOS A
$sql_CuartosA = "SELECT * FROM t_llavea_fve WHERE PT IS NOT NULL";
$sql_CuartosA = $conexion->query($sql_CuartosA);

//CUARTOS B
$sql_CuartosB = "SELECT * FROM t_llaveb_cvg WHERE PT IS NOT NULL";
$sql_CuartosB = $conexion->query($sql_CuartosB);

//CUARTOS C
$sql_CuartosC = "SELECT * FROM t_llavec_bvd WHERE PT IS NOT NULL";
$sql_CuartosC = $conexion->query($sql_CuartosC);

//CUARTOS D
$sql_CuartosD = "SELECT * FROM t_llaved_avh WHERE PT IS NOT NULL";
$sql_CuartosD = $conexion->query($sql_CuartosD);


// Seleccionar los partidos Jugados del equipo que quedo en primer lugar (CUARTOS)
$sqlCuartA = "SELECT * FROM t_llavea_fve WHERE PT = (SELECT MAX( PT ) FROM t_llavea_fve)";
$sqlCuartA = $conexion->query($sqlCuartA);
$tdCa = $sqlCuartA->fetch_array(MYSQLI_ASSOC);

$sqlCuartB = "SELECT * FROM t_llaveb_cvg WHERE PT = (SELECT MAX( PT ) FROM t_llaveb_cvg)";
$sqlCuartB = $conexion->query($sqlCuartB);
$tdCb = $sqlCuartB->fetch_array(MYSQLI_ASSOC);

$sqlCuartC = "SELECT * FROM t_llavec_bvd WHERE PT = (SELECT MAX( PT ) FROM t_llavec_bvd)";
$sqlCuartC = $conexion->query($sqlCuartC);
$tdCc = $sqlCuartC->fetch_array(MYSQLI_ASSOC);

$sqlCuartD = "SELECT * FROM t_llaved_avh WHERE PT = (SELECT MAX( PT ) FROM t_llaved_avh)";
$sqlCuartD = $conexion->query($sqlCuartD);
$tdCd = $sqlCuartD->fetch_array(MYSQLI_ASSOC);


//SEMIS A
$sql_SemifinalA = "SELECT * FROM t_semi_a_avsb WHERE PT IS NOT NULL";
$sql_SemifinalA = $conexion->query($sql_SemifinalA);

//SEMIS B
$sql_SemifinalB = "SELECT * FROM t_semi_b_cvsd WHERE PT IS NOT NULL";
$sql_SemifinalB = $conexion->query($sql_SemifinalB);

//Sleccionar los equipos finalistas
$sqlSemA = "SELECT * FROM t_semi_a_avsb WHERE PT = (SELECT MAX( PT ) FROM t_semi_a_avsb)";
$sqlSemA = $conexion->query($sqlSemA);
$tdSemA = $sqlSemA->fetch_array(MYSQLI_ASSOC);

$sqlSemB = "SELECT * FROM t_semi_b_cvsd WHERE PT = (SELECT MAX( PT ) FROM t_semi_b_cvsd)";
$sqlSemB = $conexion->query($sqlSemB);
$tdSemB = $sqlSemB->fetch_array(MYSQLI_ASSOC);
?>