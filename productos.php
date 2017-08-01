<?php include "php/cabecera2.inc" ?>
<?php include "php/carrito.inc" ?>
<?php include "php/config.inc" ?>
<?php

$conexion = pg_connect("host=$servidor port=$port dbname=$basededatos user=$user password=$password" ) or die('No se ha podido conectar: ' . pg_last_error());
  //conectarse a la base de datos
$query = "SELECT * FROM productos WHERE existencias > 0";

      //Ejecutamos la consulta
$resultado = pg_query($conexion, $query) or die("Error en la Consulta SQL");
//$numReg = pg_num_rows($resultado);

while ($fila=pg_fetch_array($resultado)) {
  echo "<article>";
  echo "<br>";
  $peticion2='SELECT * FROM imagenesproducto WHERE idproducto= '.$fila['id']." LIMIT 1";
  $resultado2=pg_query($conexion,$peticion2);
  while ($fila2 = pg_fetch_array($resultado2)) {
    echo "<img src='photo/".$fila2['imagen']."' width=200px >";
  }

  echo "<h3>".$fila['nombre']."</h3>";
  echo "<p>".$fila['presentacion']."</p>";
  echo "<p>Peso: ".$fila['peso']." gramos</p>";
  echo "<p>Precio: ".$fila['precioxmenor']." soles</p>";
  //echo "Precio por: <select>
  //  <option value".$fila['id'].">mayor ".$fila['precioxmayor']."</option>
  //  <option value".$fila['id'].">menor ".$fila['precioxmenor']."</option>
  //</select> soles";

  //echo "<p>Precio: ".$fila['precioxmayor']." soles</p>";
  echo "<br>";
  echo "<a href='producto.php?id=".$fila['id']."'><button>Mas informacion</button></a>";
  echo "<button value='".$fila['id']."' class='botoncompra'>Comprar ahora</button>";
  echo "</article>";
}

//Liberamos la memoria (no creo que sea necesario con consultas tan simples)
pg_free_result($resultado);

//Cerramos la conexión
pg_close($conexion);

?>

<?php include "php/piedepagina.inc" ?>
