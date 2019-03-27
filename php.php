<?php
// Conexion host, usuario y contraseña
$con = mysqli_connect("localhost","root","");
// llamdo a base de datos
$db = mysqli_select_db($con, "cran");
// Sentencia SQL para insertar valores
$sentencia = 'INSERT INTO contacto (identificacion,nombre,password,terminos) VALUES ("'.$_POST['identificacion'].'","'.$_POST['pass'].'","'.$_POST['terminos'].'" )';

// Mesaje de para evidenciar que se ejecuto codigo correctamente
echo "Datos enviado correctamente";
// valiables a tener en cuenta en resultado
$resultado= mysqli_query($con, $sentencia);
?>

<!-- test -->
<!-- dfasdfa -->
