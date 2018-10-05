<?php 

//GRUPO A
$setA = "SET @rankGA=0";
$setA = $conexion->query($setA);
$sqlA = "SELECT *, @rankGA:=@rankGA+1 AS rank FROM t_grupoa ORDER BY PT DESC, GD DESC, GF DESC, GC ASC, PJ ASC";
$sqlGA = $conexion->query($sqlA);

//GRUPO B
$setB = "SET @rankGB=0";
$setB = $conexion->query($setB);
$sqlB = "SELECT *, @rankGB:=@rankGB+1 AS rank FROM t_grupob ORDER BY PT DESC, GD DESC, GF DESC, GC ASC, PJ ASC";
$sqlGB = $conexion->query($sqlB);

//GRUPO C
$setC = "SET @rankGC=0";
$setC = $conexion->query($setC);
$sqlC = "SELECT *, @rankGC:=@rankGC+1 AS rank FROM t_grupoc ORDER BY PT DESC, GD DESC, GF DESC, GC ASC, PJ ASC";
$sqlGC = $conexion->query($sqlC);

//GRUPO D
$setD = "SET @rankGD=0";
$setD = $conexion->query($setD);
$sqlD = "SELECT *, @rankGD:=@rankGD+1 AS rank FROM t_grupod ORDER BY PT DESC, GD DESC, GF DESC, GC ASC, PJ ASC";
$sqlGD = $conexion->query($sqlD);

//GRUPO E
$setE = "SET @rankGE=0";
$setE = $conexion->query($setE);
$sqlE = "SELECT *, @rankGE:=@rankGE+1 AS rank FROM t_grupoe ORDER BY PT DESC, GD DESC, GF DESC, GC ASC, PJ ASC";
$sqlGE = $conexion->query($sqlE);

//GRUPO F
$setF = "SET @rankGF=0";
$setF = $conexion->query($setF);
$sqlF = "SELECT *, @rankGF:=@rankGF+1 AS rank FROM t_grupof ORDER BY PT DESC, GD DESC, GF DESC, GC ASC, PJ ASC";
$sqlGF = $conexion->query($sqlF);

//GRUPO G
$setG = "SET @rankGG=0";
$setG = $conexion->query($setG);
$sqlG = "SELECT *, @rankGG:=@rankGG+1 AS rank FROM t_grupog ORDER BY PT DESC, GD DESC, GF DESC, GC ASC, PJ ASC";
$sqlGG = $conexion->query($sqlG);

//GRUPO H
$setH = "SET @rankGH=0";
$setH = $conexion->query($setH);
$sqlH = "SELECT *, @rankGH:=@rankGH+1 AS rank FROM t_grupoh ORDER BY PT DESC, GD DESC, GF DESC, GC ASC, PJ ASC";
$sqlGH = $conexion->query($sqlH);

 ?>