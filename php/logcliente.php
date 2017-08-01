<?php include "config.inc" ?>
<?php
$contador = 0;
$conexion = pg_connect("host=$servidor port=$port dbname=$basededatos user=$user password=$password" ) or die('No se ha podido conectar: ' . pg_last_error());
  //conectarse a la base de datos
//$query = "SELECT * FROM clientes WHERE usuario='$usuario' and contrasena='$pass'";
$query = "select * from clientes where contraseña = '".$_POST["contrasena"]."' and usuario = '".$_POST["usuario"]."'";
//Ejecutamos la consulta
$resultado = pg_query($conexion,$query);
while ($fila = pg_fetch_array($resultado)) {
  $contador++;
  $_SESSION['usuario']= $fila['id'];
}
if ($contador > 0){
  $query1 = "INSERT INTO pedidos VALUES (default,".$_SESSION['usuario'].",'0',CURRENT_DATE)";
  //Ejecutamos la consulta
  $resultado1 = pg_query($conexion,$query1);

  $query2 = "SELECT * FROM pedidos WHERE idcliente= '".$_SESSION['usuario']."' ORDER BY fecha";
  //Ejecutamos la consulta
  $resultado2 = pg_query($conexion,$query2) or die("Error en la Consulta SQL");
  while ($fila2 = pg_fetch_array($resultado2)) {
    $_SESSION['idpedido']= $fila2['id'];
  }
  echo $_SESSION['idpedido'];

  for ($i =0; $i< $_SESSION['contador']; $i++){
    $peticion5 = "INSERT INTO lineaspedido VALUES (default,'".$_SESSION['idpedido']."','".$_SESSION['producto'][$i]."','1')";
    $resultado5 = pg_query($conexion,$peticion5);

    $peticion3 = "SELECT * FROM productos WHERE id='".$_SESSION['producto'][$i]."'";
    $resultado3 = pg_query($conexion,$peticion3);
    while ($fila3 = pg_fetch_array($resultado3)) {
      $existencias= $fila3['existencias'];
      $peticion4 = "UPDATE productos SET existencias ='".($existencias-1)."' WHERE id = '".$_SESSION['producto'][$i]."'";
      $resultado4 = pg_query($conexion,$peticion4);
    }
  }


  echo "<br>tu pedido se ha realizado satisfactoriamente. Redirigiendo a la pagina principal en 5 segundos...";
  session_destroy();
  echo '
    <meta http-equiv="refresh" content="1; url=../index.php">
  ';
  include "piedepagina.inc";
}else{
    echo "<br>El usuario no existe. Volviendo a la tienda en 5 segundos";
    echo '
    <meta http-equiv="refresh"content="4; url=../confirmar.php">
    ';
}

//Cerramos la conexión
pg_close($conexion);

?>
