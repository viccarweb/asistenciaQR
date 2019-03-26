<?php
// Conexion host, usuario y contraseña
$con = mysqli_connect("localhost","root","");
// llamdo a base de datos
$db = mysqli_select_db($con, "cran");

$sentencia = "SELECT * FROM contacto WHERE identificacion = '".$_GET["identificacion"]."'";

$resultado = mysqli_query ($con, $sentencia);
echo "Datos enviados correctamente";

// $fila = mysqli_fetch_row($resultado);

$fila = mysqli_fetch_row($resultado);
  echo "<br>";
  echo $fila[0]." ";
  echo $fila[1]." ";
  echo $fila[2]." ";
  echo $fila[3]." ";

mysqli_free_result($resultado);

mysqli_close($con);

?>
