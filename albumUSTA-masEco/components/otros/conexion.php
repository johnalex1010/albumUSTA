<?php 
//=====================
//DATOS SERVIDOR LOCAL
//=====================
//CREA LA CONEXIÓN A LA BD
 $host_db = "localhost";
 $user_db = "root";
 $pass_db = "M2jN#TF-gSTB";
 $db_name = "bd_mundialustaeco";
 $prefijo = "bd";
 $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
 mysqli_set_charset($conexion,"utf8");

//VERIFICA LA CONEXION A LA BD
 if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
}

//=====================
//DATOS SERVIDOR FINAL
//=====================
//CREA LA CONEXIÓN A LA BD
//  $host_db = "162.241.217.231";
//  $user_db = "mundialu_user";
//  $pass_db = "Mund1@lu57@";
//  $db_name = "mundialu_bd";
//  $prefijo = "mundialu_";
//  $conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);
//  mysqli_set_charset($conexion,"utf8");

// //VERIFICA LA CONEXION A LA BD
//  if ($conexion->connect_error) {
//  die("La conexion falló: " . $conexion->connect_error);
// }
?>