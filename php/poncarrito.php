<?php include "config.inc" ?>
<?php
session_start();
$suma=0;

if(isset($_GET['p'])){
  $_SESSION['producto'][$_SESSION['contador']] = $_GET['p'];
  $_SESSION['contador']++;
}

$conexion = pg_connect("host=$servidor port=$port dbname=$basededatos user=$user password=$password" ) or die('No se ha podido conectar: '. pg_last_error());
echo "<table>";
for($i = 0; $i< $_SESSION['contador']; $i++){
  //echo "Producto: ".$_SESSION['producto'][$i]."<br>";
  //conectarse a la base de datos
  $query = "SELECT * FROM productos WHERE id=".$_SESSION['producto'][$i]."";
  //Ejecutamos la consulta
  $resultado = pg_query($conexion, $query) or die("Error en la Consulta SQL");

  while ($fila=pg_fetch_array($resultado)) {
    echo "<tr><td>".$fila['nombre']."</td><td>".$fila['precioxmenor']."</td></tr>";
    $suma += $fila['precioxmenor'];
  }
}
echo "<tr><td>Subtotal</td><td>".number_format($suma,2)."</td></tr>";
echo "</table>";
//Liberamos la memoria (no creo que sea necesario con consultas tan simples)
//pg_free_result($resultado);
//Cerramos la conexión
pg_close($conexion);

?>
