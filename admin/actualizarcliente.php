<?php include "../php/config.inc" ?>
<?php

$conexion = pg_connect("host=$servidor port=$port dbname=$basededatos user=$user password=$password" ) or die('No se ha podido conectar: ' . pg_last_error());
//conectarse a la base de datos
$query = "UPDATE clientes SET
nombre_apellido='".$_POST['nombre_apellido']."',
usuario='".$_POST['usuario']."',
contraseña='".$_POST['contraseña']."',
email='".$_POST['email']."',
telefono='".$_POST['telefono']."',
movil='".$_POST['movil']."',
direccion='".$_POST['direccion']."',
ciudad='".$_POST['ciudad']."',
dninif='".$_POST['dninif']."'
WHERE id=".$_GET['id']."";

      //Ejecutamos la consulta
$resultado = pg_query($conexion, $query) or die("Error en la Consulta SQL");


//Liberamos la memoria (no creo que sea necesario con consultas tan simples)
pg_free_result($resultado);

//Cerramos la conexión
pg_close($conexion);

?>
<script type="text/javascript">
window.location="clientes.php"
</script>
