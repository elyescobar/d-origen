<meta http-equiv="content-type"; content="text/html"; charset="utf-8">
<?php include "../php/config.inc" ?>
<table border=1>
<?php

$conexion = pg_connect("host=$servidor port=$port dbname=$basededatos user=$user password=$password" ) or die('No se ha podido conectar: ' . pg_last_error());  //conectarse a la base de datos
$query = "SELECT * FROM clientes";

      //Ejecutamos la consulta
$resultado = pg_query($conexion, $query) or die("Error en la Consulta SQL");

while ($fila=pg_fetch_array($resultado)) {
  echo '<tr>';

  echo'
  <form action="actualizarcliente.php?id='.$fila['id'].'" method="POST">
  <td><input type="text" name="nombre_apellido" value="'.$fila['nombre_apellido'].'"></td>
  <td><input type="text" name="usuario" value="'.$fila['usuario'].'"></td>
  <td><input type="text" name="contraseña" value="'.$fila['contraseña'].'"></td>
  <td><input type="text" name="email" value="'.$fila['email'].'"></td>
  <td><input type="text" name="telefono" value="'.$fila['telefono'].'"></td>
  <td><input type="text" name="movil" value="'.$fila['movil'].'"></td>
  <td><input type="text" name="direccion" value="'.$fila['direccion'].'"></td>
  <td><input type="text" name="ciudad" value="'.$fila['ciudad'].'"></td>
  <td><input type="text" name="dninif" value="'.$fila['dninif'].'"></td>
  <td><input type="submit" value="Actualizar"></a></td>
  </form>
  <td><a href="eliminarcliente.php?id='.$fila['id'].'"><button>Borrar</button></a></td>
  </tr>';
}

//Liberamos la memoria (no creo que sea necesario con consultas tan simples)
pg_free_result($resultado);

//Cerramos la conexión
pg_close($conexion);

?>
  <tr>
    <form action="nuevocliente.php" method="POST">
      <td><input type="text" name="nombre_apellido"></td>
      <td><input type="text" name="usuario"></td>
      <td><input type="text" name="contraseña"></td>
      <td><input type="text" name="email"></td>
      <td><input type="text" name="telefono"></td>
      <td><input type="text" name="movil"></td>
      <td><input type="text" name="direccion"></td>
      <td><input type="text" name="ciudad"></td>
      <td><input type="text" name="dninif"></td>
      <td><input type="submit" value="Enviar"></td>
      <td></td>
    </form>
  </tr>
</table>
