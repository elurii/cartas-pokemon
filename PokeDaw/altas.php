<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    include("conexion.php");
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $nombre=$_POST['nombre'];
    $consulta="INSERT INTO usuarios (email,pass,nombre,rol) VALUES ('$email','$pass','$nombre',0)";
    mysqli_query($conn,$consulta);
    header("Location: ../index.php");
}else{
    echo("ERROR el metodo establecido no es el correcto"); 
}
?>