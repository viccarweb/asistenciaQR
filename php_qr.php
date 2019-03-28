<?php
/* -----------------------------BASE DE DATOS--------------------------------------------*/
// Conexion host, usuario y contraseña
$con = mysqli_connect("localhost","root","");
// llamdo a base de datos
$db = mysqli_select_db($con, "cran");
// Sentencia SQL para insertar valores
$sentencia = 'INSERT INTO contacto (identificacion,nombre, password, terminos) VALUES ("'.$_POST['identificacion'].'","'.$_POST['nombre'].'","'.$_POST['pass'].'","'.$_POST['terminos'].'" )';
// $contqr= $_POST["nombre"] . $_POST["pass"];

// $identificacion = $_POST["identificacion"];
// Mesaje de para evidenciar que se ejecuto codigo correctamente
echo "Datos enviado correctamente";
// valiables a tener en cuenta en resultado
$resultado= mysqli_query($con, $sentencia);

/* -----------------------------QR--------------------------------------------*/
// Libreria QR
require 'phpqrcode/qrlib.php';
// que se almacene archivo en carpeta llamada temp
$dir = 'temp/';
// si no existe archivo, crear en mkdir
if (!file_exists($dir))
  mkdir($dir);
//ruta y nombre del archivo a crear en mkdir
$filename = $dir.'test.php';
 //Parametros de Condiguración
$tamaño = 10;
$level = 'M';
$frameSize = 3;
$contenido = "http://localhost/asistenciaQR/consult_person.php?identificacion=".$_POST['identificacion']."";
// Se envian parametros a la funcion para general QR
QRcode::png($contenido, $filename, $level, $tamaño, $frameSize);
// Mostrar imagen generada
echo '<img src="'.$filename.'"/>';




// Prueba Victoria09L





?>
