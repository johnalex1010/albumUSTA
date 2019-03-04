<?php 

//Buscar Documento
	$buscarDocumento = "SELECT documento FROM t_user_album WHERE documento='$documento'";
	$resultDoc = $conexion->query($buscarDocumento);

// Buscar Email
$buscarEmail = "SELECT * FROM t_user_album  WHERE email='$email'";
$resultEmail = $conexion->query($buscarEmail);


//Buscar Usuario
$buscarUsuario = "SELECT * FROM t_user_album WHERE usuario='$usuario'";
$resultUsuario = $conexion->query($buscarUsuario);
// $rstUsuario = mysqli_fetch_array($resultUsuario, MYSQLI_ASSOC);

//Insertar datos de usuario
$insertTable = "INSERT INTO t_user_album (nombres, apellidos, documento, email, sede, usuario, password, habeas, fechaRegis, perfil) VALUES ('$nombres', '$apellidos', '$documento', '$email' , '$sede' , '$usuario', '$password', '$habeas', '$fechaRegis', '0')";

//Crear Base de Datos
// $sqlCreateBD = "CREATE DATABASE ".$prefijoBD."$usuario;";


//Query para consultar lamina ingresada con lamina de la BD
$sqlConsultarT1 = "SELECT * FROM t_album_".$usuario." WHERE laminitaLadoA='$laminita'";
$rSqlConsultarT1 = $conexion->query($sqlConsultarT1);

//Query para consultar lamina ingresada con lamina de la BD y que la visualizacion este en activa 
$sqlConsultarT2 = "SELECT * FROM t_album_".$usuario." WHERE laminitaLadoA='$laminita' AND visualizar='1'";
$rSqlConsultarT2 = $conexion->query($sqlConsultarT2);

//Actualizar laminita
$upLaminita="UPDATE t_album_".$usuario." SET visualizar='1', fechaLaminita='$fechaLaminita' WHERE laminitaLadoA='$laminita'";

//Consultas para contar el total de las laminitas y sacar porcentaje
$contarAlbum = "SELECT count(*) AS visualizar FROM t_album_".$usuario."";
$contarLaminita = "SELECT count(*) AS visualizar FROM t_album_".$usuario." WHERE visualizar='1'";

//Ordenar tabla de posiciones de albúm y estadísticas - USTA COLOMBIA
$set = "SET @rank=0";
$set1 = $conexion->query($set);
$tabla = "SELECT *, @rank:=@rank+1 AS rank FROM t_user_album ORDER BY porcentaje DESC, ultimaFechaLaminita ASC LIMIT 10";
$tabla1 = $conexion->query($tabla);

//Ordenar tabla de posiciones de albúm y estadísticas - BOGOTÁ
$setBogota = "SET @rank=0";
$set1Bogota = $conexion->query($setBogota);
$tablaBogota = "SELECT *, @rank:=@rank+1 AS rank FROM t_user_album WHERE sede='Bogotá' ORDER BY porcentaje DESC, ultimaFechaLaminita ASC LIMIT 5";
$tabla1Bogota = $conexion->query($tablaBogota);

//Ordenar tabla de posiciones de albúm y estadísticas - TUNJA
$setTunja = "SET @rank=0";
$set1Tunja = $conexion->query($setTunja);
$tablaTunja = "SELECT *, @rank:=@rank+1 AS rank FROM t_user_album WHERE sede='Tunja' ORDER BY porcentaje DESC, ultimaFechaLaminita ASC LIMIT 5";
$tabla1Tunja = $conexion->query($tablaTunja);

//Ordenar tabla de posiciones de albúm y estadísticas - BUCARAMANGA
$setBucaramanga = "SET @rank=0";
$set1Bucaramanga = $conexion->query($setBucaramanga);
$tablaBucaramanga = "SELECT *, @rank:=@rank+1 AS rank FROM t_user_album WHERE sede='Bucaramanga' ORDER BY porcentaje DESC, ultimaFechaLaminita ASC LIMIT 5";
$tabla1Bucaramanga = $conexion->query($tablaBucaramanga);

//Ordenar tabla de posiciones de albúm y estadísticas - MEDELLÍN
$setMedellin = "SET @rank=0";
$set1Medellin = $conexion->query($setMedellin);
$tablaMedellin = "SELECT *, @rank:=@rank+1 AS rank FROM t_user_album WHERE sede='Medellín' ORDER BY porcentaje DESC, ultimaFechaLaminita ASC LIMIT 5";
$tabla1Medellin = $conexion->query($tablaMedellin);

//Ordenar tabla de posiciones de albúm y estadísticas - VILLAVICENCIO
$setVillavicencio = "SET @rank=0";
$set1Villavicencio = $conexion->query($setVillavicencio);
$tablaVillavicencio = "SELECT *, @rank:=@rank+1 AS rank FROM t_user_album WHERE sede='Villavicencio' ORDER BY porcentaje DESC, ultimaFechaLaminita ASC LIMIT 5";
$tabla1Villavicencio = $conexion->query($tablaVillavicencio);

//Ordenar tabla de posiciones de albúm y estadísticas - DISTANCIA
$setDistancia = "SET @rank=0";
$set1Distancia = $conexion->query($setDistancia);
$tablaDistancia = "SELECT *, @rank:=@rank+1 AS rank FROM t_user_album WHERE sede='Distancia' ORDER BY porcentaje DESC, ultimaFechaLaminita ASC LIMIT 5";
$tabla1Distancia = $conexion->query($tablaDistancia);






//Exportacion de estadísticas
$statics = "SELECT * FROM t_user_album WHERE fechaRegis BETWEEN '".$fecha1."' AND '".$fecha2."'";
$statics1 = $conexion->query($statics);

$statics2 = "SELECT * FROM t_user_album WHERE usuario='".$usuario."'";
$statics22 = $conexion->query($statics2);

$statics3 = "SELECT * FROM t_user_album";
$statics33 = $conexion->query($statics3);

//CambioPassword
$cambioPassword = "UPDATE t_user_album SET password='".$newPass."' WHERE usuario='".$usuario."'";
?>