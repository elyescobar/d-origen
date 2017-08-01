<meta http-equiv="content-type"; content="text/html"; charset="utf-8">
<?php include "../php/config.inc" ?>
<table border=1>
<?php

$conexion = pg_connect("host=$servidor port=$port dbname=$basededatos user=$user password=$password" ) or die('No se ha podido conectar: ' . pg_last_error());  //conectarse a la base de datos
$query = "SELECT * FROM productos";

      //Ejecutamos la consulta
$resultado = pg_query($conexion, $query) or die("Error en la Consulta SQL");

while ($fila=pg_fetch_array($resultado)) {
  echo '<tr>';

  echo '
  <form action="actualizarproducto.php?id='.$fila['id'].'" method="POST">
  <td><input type="text" name="codigo" value="'.$fila['codigo'].'"></td>
  <td><input type="text" name="nombre" value="'.$fila['nombre'].'"></td>
  <td><input type="text" name="presentacion" value="'.$fila['presentacion'].'"></td>
  <td><input type="number" name="peso" value="'.$fila['peso'].'"></td>
  <td><input type="text" name="unidad" value="'.$fila['unidad'].'"></td>
  <td><input type="number" name="precioxmenor" value="'.$fila['precioxmenor'].'"></td>
  <td><input type="number" name="precioxmayor" value="'.$fila['precioxmayor'].'"></td>
  <td><input type="number" name="precioxcaja" value="'.$fila['precioxcaja'].'"></td>
  <td><input type="number" name="existencias" value="'.$fila['existencias'].'"></td>
  <td><input type="text" name="registrosanitario" value="'.$fila['registrosanitario'].'"></td>
  <td><input type="text" name="descripcion" value="'.$fila['descripcion'].'"></td>
  <td><input type="number" name="activado" value="'.$fila['activado'].'"></td>
  <td><input type="submit" value="Actualizar"></a></td>
  </form>
  <td><a href="eliminarproducto.php?id='.$fila['id'].'"><button>Borrar</button></a></td>
  </tr>';
}

//Liberamos la memoria (no creo que sea necesario con consultas tan simples)
pg_free_result($resultado);

//Cerramos la conexión
pg_close($conexion);

?>
  <tr>
    <form action="nuevoproducto.php" method="POST">
      <td><input type="text" name="codigo"></td>
      <td><input type="text" name="nombre"></td>
      <td><input type="text" name="presentacion"></td>
      <td><input type="number" name="peso"></td>
      <td><input type="text" name="unidad"></td>
      <td><input type="number" name="precioxmenor"></td>
      <td><input type="number" name="precioxmayor"></td>
      <td><input type="number" name="precioxcaja"></td>
      <td><input type="number" name="existencias"></td>
      <td><input type="text" name="registrosanitario"></td>
      <td><input type="text" name="descripcion"></td>
      <td><input type="number" name="activado"></td>
      <td><input type="submit" value="Enviar"></td>
      <td></td>
    </form>
  </tr>
</table>
