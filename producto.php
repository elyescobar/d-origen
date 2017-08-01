<?php include "php/cabecera2.inc" ?>
<?php include "php/config.inc" ?>
<?php include "php/detalle.inc" ?>
<?php

$conexion = pg_connect("host=$servidor port=$port dbname=$basededatos user=$user password=$password" ) or die('No se ha podido conectar: ' . pg_last_error());
  //conectarse a la base de datos
$query = 'SELECT * FROM productos WHERE id='.$_GET['id']."";
      //Ejecutamos la consulta
$resultado = pg_query($conexion, $query) or die("Error 1 en la Consulta SQL");
//$numReg = pg_num_rows($resultado);

while ($fila=pg_fetch_array($resultado)) {
  echo "<article>";
  echo "<h3>".$fila['nombre']."</h3>";
  echo "<p>Presentacion".$fila['presentacion']."</p>";
  echo "<p>Peso: ".$fila['peso']." gramos</p>";
  echo "<p>Precio por menor: ".$fila['precioxmenor']." soles</p>";
  echo "<p>Precio por mayor: ".$fila['precioxmayor']." soles</p>";
  echo "<p>Disponible: ".$fila['existencias']." unidades</p>";
  $peticion2= "SELECT * FROM imagenesproducto WHERE idproducto=".$fila['id']."";
  $resultado2=pg_query($conexion,$peticion2) or die("Error 2 en la Consulta SQL");
  while ($fila2 = pg_fetch_array($resultado2)) {
    echo "<img src='photo/".$fila2['imagen']."' width=200px>";
  }
  echo "<br>";
  echo "<a href='producto.php?id=".$fila['id']."'><button>Mas informacion</button></a>";
  echo "<button>Comprar ahora</button>";
  echo "</article>";
}

//Liberamos la memoria (no creo que sea necesario con consultas tan simples)
pg_free_result($resultado);

//Cerramos la conexión
pg_close($conexion);

?>

<?php include "php/piedepagina.inc" ?>
