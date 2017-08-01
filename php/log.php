<?php include "config.inc" ?>
<?php

$conexion = pg_connect("host=$servidor port=$port dbname=$basededatos user=$user password=$password" ) or die('No se ha podido conectar: ' . pg_last_error());  //conectarse a la base de datos
$query = "INSERT INTO registros VALUES (
  '".date('U')."',
  '".date('Y')."',
  '".date('m')."',
  '".date('d')."',
  '".date('H')."',
  '".date('i')."',
  '".date('s')."',
  '".$_SERVER['REMOTE_ADDR']."',
  '".$_SERVER['HTTP_USER_AGENT']."',
  '".$_SERVER['REQUEST_URI']."'
  )";

      //Ejecutamos la consulta
$resultado = pg_query($conexion, $query) or die("Error en la Consulta SQL");


//Liberamos la memoria (no creo que sea necesario con consultas tan simples)
pg_free_result($resultado);

//Cerramos la conexión
pg_close($conexion);

?>
