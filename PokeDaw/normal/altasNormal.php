<?php

include("seguridad.php");
include ("../conexion.php");
//recogida de datos
$correo=$_SESSION['email'];
$nombreCarta=$_POST['carta'];
$ima="images/".$cod.".jpg";
$consulta = "INSERT INTO cartas (usuario,idCarta,nombreCarta,fotoCarta) 
VALUES ('$correo','','$nombreCarta','$ima')";
//ejecutamos la sentencia SQL
mysqli_query($conn,$consulta);
//copiamos la imagen que nos ha llegado a su carpeta.
echo mysqli_error($conn );
$ruta=$ima;
COPY($_FILES["imagen"]["tmp_name"],$ruta);
//redireccionamos a la web listados (este fichero lo debeis de crar vosotros)
header ("LOCATION:listado.php");
?>
