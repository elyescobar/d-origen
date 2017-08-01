<?php include "../php/config.inc" ?>
<?php

$conexion = pg_connect("host=$servidor port=$port dbname=$basededatos user=$user password=$password" ) or die('No se ha podido conectar: ' . pg_last_error());  //conectarse a la base de datos
$query = "UPDATE productos SET
codigo='".$_POST['codigo']."',
nombre='".$_POST['nombre']."',
presentacion='".$_POST['presentacion']."',
peso='".$_POST['peso']."',
unidad='".$_POST['unidad']."',
precioxmenor='".$_POST['precioxmenor']."',
precioxmayor='".$_POST['precioxmayor']."',
precioxcaja='".$_POST['precioxcaja']."',
existencias='".$_POST['existencias']."',
registrosanitario='".$_POST['registrosanitario']."',
descripcion='".$_POST['descripcion']."',
activado='".$_POST['activado']."'
WHERE id=".$_GET['id']."";

      //Ejecutamos la consulta
$resultado = pg_query($conexion, $query) or die("Error en la Consulta SQL");


//Liberamos la memoria (no creo que sea necesario con consultas tan simples)
pg_free_result($resultado);

//Cerramos la conexión
pg_close($conexion);

?>
<script type="text/javascript">
window.location="productos.php"
</script>
