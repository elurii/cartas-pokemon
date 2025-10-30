<?php
include("seguridad.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" />
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
	<link href="../styles.css" rel="stylesheet">
	<link rel="icon" type="image/x-icon" href="../img/superball.png">
    <title>Cartas</title>
</head>
<body>
    <a href="menu.php">Volver al menú</a>
    <h1>Listado de Cartas</h1>
    
    <?php
    include("../conexion.php");
    //Lógica del fichero
    $email=$_SESSION['email'];
    $consulta="SELECT * FROM cartas WHERE usuario = '$email' ";

    $result=mysqli_query($conn,$consulta);

    while ($row=mysqli_fetch_array($result)){
        $ruta=$row['fotoCarta'];
        echo "<strong>Usuario: </strong>".$row['usuario'];
        echo "<strong>Id carta: </strong>".$row['idCarta'];
        echo "<strong>Detalles: </strong>".$row['nombreCarta'];
        echo "<img src=$ruta width='250'><br>";
    }


    //Cerramos la conexión
    mysqli_close($conn);
    ?>
</body>
</html>