<?php include "../php/config.inc" ?>
<table border=1>
<?php

$conexion = pg_connect("host=$servidor port=$port dbname=$basededatos user=$user password=$password" ) or die('No se ha podido conectar: ' . pg_last_error());  //conectarse a la base de datos
$query = "SELECT pedidos.id as idpedido, fecha, estado, nombre_apellido FROM pedidos LEFT JOIN clientes ON pedidos.idcliente = clientes.id ORDER BY estado ASC";

      //Ejecutamos la consulta
$resultado = pg_query($conexion, $query) or die("Error en la Consulta SQL");

while ($fila=pg_fetch_array($resultado)) {
  $estado = $fila['estado'];
  //if($estado == 0){ $diestado = "no servido"; } else { $diestado = "servido"; }
  switch ($estado) {
    case 0: $diestado = "no servido"; break;
    case 1: $diestado = "servido"; break;
    case 2: $diestado = "anulado"; break;
    default: # code...break;
  }
  echo '<tr';
  //if($estado == 0){ echo ' style="background: rgb(255,200,200);"'; } else { echo ' style="background:rgb(200,255,200);"'; }
  switch ($estado) {
    case 0: echo ' style="background: rgb(255,200,200);"'; break;
    case 1: echo ' style="background:rgb(200,255,200);"'; break;
    case 2: echo ' style="background:rgb(255,255,200);"'; break;
    default: # code...break;
  }
  echo'><td>'.$fila['nombre_apellido'].'</td><td>'.$fila['fecha'].'</td><td>'.$diestado.'</td><td><a href="gestionpedido.php?id='.$fila['idpedido'].'"><button>Gestionar</button></a></td><td><a href="../php/pedidoservido.php?id='.$fila['idpedido'].'"><button>Pedido servido</button></a></td><td><a href="../php/cancelarpedido.php?id='.$fila['idpedido'].'"><button>Cancelar pedido</button></a></td></tr>';
}

//Liberamos la memoria (no creo que sea necesario con consultas tan simples)
pg_free_result($resultado);

//Cerramos la conexión
pg_close($conexion);

?>
</table>
